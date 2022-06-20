<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = config('system.ADMIN_NAME');
        $password = bcrypt(config('system.ADMIN_PASSWORD'));
        if (empty($name) || empty($password)) {
            dd('Name or password is empty in .env');
        }

        $user = User::create([
            'name' => $name,
            'email' => 'admin@examle.com',
            'password' => $password
        ]);

        $user->role()->create([
            'user_id' => $user->id,
            'role' => 'admin'
        ]);

    }
}
