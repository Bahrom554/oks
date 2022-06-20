<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CrudGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:generator
    {name : Class (singular) for example User} {path : Class (singular) for example User Api} {table : Class (singular) for example users}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create CRUD operations';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->argument('name');
        $path = $this->argument('path');
        $dbname = $this->argument('table');

        $this->model($name, $dbname);
        $this->controller($name, $path, $dbname);

        if ($path == '/') {
            $namespace = '';
        } else {
            $namespace = str_replace('/', '\\', $path);
        }

        $routeName = str_replace('_','-',$dbname);

        $routes = "/*--------------------------------------------------------------------------------
            {$name} ROUTES  => START
        --------------------------------------------------------------------------------*/
        Route::prefix('v1')->group(function () {
            Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
                Route::prefix('/admin/{$routeName}')->group(function () {
                    Route::get('/', '{$namespace}\\{$name}Controller@index');
                    Route::post('/', '{$namespace}\\{$name}Controller@create');
                    Route::put('/{id}', '{$namespace}\\{$name}Controller@update')->where('id', '[0-9]+');
                    Route::get('/{id}', '{$namespace}\\{$name}Controller@show')->where('id', '[0-9]+');
                    Route::delete('/{id}', '{$namespace}\\{$name}Controller@destroy')->where('id', '[0-9]+');
                });
            });
            Route::prefix('/{$routeName}')->group(function () {
                Route::get('/', '{$namespace}\\{$name}Controller@index');
                Route::get('/{id}', '{$namespace}\\{$name}Controller@show')->where('id', '[0-9]+');
            });
        });
        /*--------------------------------------------------------------------------------
            {$name} ROUTES  => END
        --------------------------------------------------------------------------------*/";
        \Illuminate\Support\Facades\File::append(base_path('routes/api.php'), $routes);
        return 'success';
    }

    protected function model($name, $tableName)
    {
        $attributes = Schema::getColumnListing($tableName);
        $fields = '';
        $rules = '';
        $i = 0;
        $count = count($attributes);
        foreach ($attributes as $attribute) {
            if ($attribute != 'id') {
                $i++;
                if ($i == $count) {
                    $fields .= "'{$attribute}'";
                } else {
                    $fields .= "'{$attribute}', ";
                }
                $type = Schema::getColumnType($tableName, $attribute);
                $rules .= "'{$attribute}' => '{$type}|nullable',\n";
            }
        }

        $modelTemplate = str_replace(
            [
                '{{modelName}}',
                '{{fillable}}',
                '{{table}}',
                '{{rules}}'
            ],
            [
                $name,
                $fields,
                $tableName,
                $rules
            ],
            $this->getStub('Model')
        );

        file_put_contents(app_path("/Models/{$name}.php"), $modelTemplate);
    }

    protected function getStub($type)
    {
        return file_get_contents(resource_path("stubs/$type.stub"));
    }

    protected function controller($name, $path, $tableName)
    {
        $attributes = Schema::getColumnListing($tableName);
        $fields = '';
        $response = '';
        foreach ($attributes as $attribute) {
            $type = Schema::getColumnType($tableName, $attribute);
            $fields .= "* @bodyParam {$attribute} {$type} no-required {$attribute}\n";
            $response .= "*  \"{$attribute}\": \"{$type}\",\n";
        }

        if ($path == '/') {
            $path = "/Http/Controllers/{$name}Controller.php";
            $namespace = '';
        } else {
            $namespace = '\\' . str_replace('/', '\\', $path);
            $path = "/Http/Controllers/{$path}/{$name}Controller.php";
        }

        $controllerTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}',
                '{{fields}}',
                '{{namespace}}',
                '{{response}}'
            ],
            [
                $name,
                strtolower(Str::plural($name)),
                strtolower($name),
                $fields,
                $namespace,
                $response
            ],
            $this->getStub('Controller')
        );


        file_put_contents(app_path($path), $controllerTemplate);
    }
}
