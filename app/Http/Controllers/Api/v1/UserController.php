<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Interfaces\iUserInterface;
use App\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use League\OAuth2\Server\ResourceServer;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Symfony\Component\Finder\Exception\AccessDeniedException;

/**
 * @group User
 *
 */
class UserController extends Controller
{
    public $successStatus = 200;
    public $interface;
    public $server;

    public function __construct(ResourceServer $server, iUserInterface $interface)
    {
        $this->interface = $interface;
        $this->server = $server;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $filters = $request->get('filter');
        $filter = [];
        if (!empty($filters)) {
            foreach ($filters as $k => $item) {
                $filter[] = AllowedFilter::exact($k);
            }
        }

        $query = QueryBuilder::for(User::class);
        if ($request->name !== null) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
            $query->orWhere('phone', 'LIKE', '%' . $request->name . '%');
        }

        $query->allowedFilters($filter);
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedSorts($request->sort);
        return $query->paginate($request->per_page);
    }

    /**
     * User create
     *
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'nullable|unique:users',
            'role' => 'required|in:operator,admin',
            'password' => 'required',
            'status' => 'required|in:0,1,2,3'
        ]);

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'role' => $request->phone,
            'status' => $request->status,
            'password' => bcrypt($request->password),
        ]);

        $user->role()->create([
            'user_id' => $user->id,
            'role' => $request->role
        ]);

        return $user;
    }

    /**
     * User update
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|in:client,operator,admin',
            'status' => 'required|in:0,1,2,3'
        ]);

        $user = User::findOrFail($id);

        $data = $request->only('name', 'bio', 'photo', 'bg', 'status');
        if ($request->has('password')) {
            $data['password'] = bcrypt($request->get('password'));
        }

        $user->update($data);

        if ($request->has('role')) {
            DB::table('roles')->where(['user_id' => $id])->update([
                'role' => $request->role
            ]);
        }

        if (!empty($request->append)) {
            $user->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $user->load(explode(',', $request->include));
        }

        return response()->json($user, $this->successStatus);
    }

    /**
     * User sign-in
     *
     * @bodyParam name string required name
     * @bodyParam password string required password
     * @var Request $request
     */
    public function signIn(Request $request)
    {

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            /**
             * @var $user User
             */
            $user = Auth::user();
            $userRole = $user->role()->first();
            if (!in_array($userRole->role, User::ROLE_ADMINS)) {
                throw new AccessDeniedException('You have not permission', 403);
            }
            $success['token'] = $user->createToken('Admin', [
                $userRole->role
            ])->accessToken;
            return response()->json(['success' => $success,'user'=>$user], $this->successStatus);
        } else {
            return response()->json(['errorMessage' => 'Name or password incorrect'], 401);
        }
    }

    /**
     * User get-me
     *
     * @queryParam token string required token
     * @var Request $request
     */
    public function details(Request $request)
    {
        $user = Auth::user();
        if (!empty($request->include)) {
            $user->append(explode(',', $request->include));
        }
        return response()->json(['success' => $user], $this->successStatus);
    }

    /**
     * User logout
     *
     * @return JsonResponse
     */
    public function logout()
    {
        DB::table('oauth_access_tokens')
            ->where('user_id', Auth::id())
            ->update([
                'revoked' => true
            ]);
        return response()->json('Successfully logged out', 204);
    }

    /**
     * Update current user
     *
     * @param Request $request
     * @return Authenticatable|null
     */
    public function updateAdmin(Request $request)
    {
        $user = Auth::user();
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return $user;
    }
}
