<?php

namespace App\Providers;

use App\Http\Repositories\Interfaces\iPhotoBankInterface;
use App\Http\Repositories\Interfaces\iTransactionsInterface;
use App\Http\Repositories\Interfaces\iUserInterface;
use App\Http\Repositories\PhotoBankRepository;
use App\Http\Repositories\TransactionsRepository;
use App\Http\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;
use Modules\Filemanager\Http\Repository\FileRepository;
use Modules\Filemanager\Http\Repository\Interfaces\FileInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FileInterface::class, FileRepository::class);
        $this->app->bind(iTransactionsInterface::class, TransactionsRepository::class);
        $this->app->bind(iUserInterface::class, UserRepository::class);
        $this->app->bind(iPhotoBankInterface::class, PhotoBankRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
