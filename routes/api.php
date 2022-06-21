<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Api routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "Api" middleware group. Enjoy building your Api!
|
*/

Route::get('/', function () {
    return response()->json('You are welcome to api OKSGROUP');
});


Route::prefix('v1')->group(function () {

    Route::get('/', function () {
        return \Illuminate\Support\Facades\Http::withBasicAuth('common', 'test123')
            ->post('http://192.168.88.26:7777/api/v1/oauth/token', [
                'username' => 'admin',
                'password' => '123456789',
                'grant_type' => 'password'
            ])->body();
        return \Illuminate\Support\Facades\Http::post('http://192.168.88.26:7777/api/v1/oauth/token')->headers([
            ''
        ])->with->body();
        return response()->json('You are welcome to api OKSGROUP');
    });

    Route::middleware('auth:Api')->group(function () {
        Route::prefix('admin/translations')->group(function () {
            Route::get('/list', '\Modules\Translations\Http\Controllers\TranslationsController@list');
            Route::put('/list', '\Modules\Translations\Http\Controllers\TranslationsController@change');
            Route::delete('/{id}', '\Modules\Translations\Http\Controllers\TranslationsController@destroy');
        });
    });

    Route::prefix('translations')->group(function () {
        Route::get('/translation/{language}', '\Modules\Translations\Http\Controllers\TranslationsController@index');
        Route::post('/translation/{language}', '\Modules\Translations\Http\Controllers\TranslationsController@store');
        Route::delete('/{id:d+}', '\Modules\Translations\Http\Controllers\TranslationsController@destroy');
        Route::post('/translation', '\Modules\Translations\Http\Controllers\TranslationsController@createTranslation');
    });

});
/*--------------------------------------------------------------------------------
    ADMIN ROUTES  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::prefix('admin/user')->group(function () {
        Route::post('sign-in', 'Api\v1\UserController@signIn');
        Route::middleware('auth:Api')->group(function () {
            Route::get('/', 'Api\v1\UserController@index')->middleware('scope:admin');
            Route::get('get-me', 'Api\v1\UserController@details');
            Route::post('logout', 'Api\v1\UserController@logout');
            Route::post('/', 'Api\v1\UserController@create');
            Route::put('{id}', 'Api\v1\UserController@update')->where('id', '[0-9]+');
            Route::put('update-admin', 'Api\v1\UserController@updateAdmin')->middleware('scope:admin');
        });
    });
});
/*--------------------------------------------------------------------------------
    ADMIN ROUTES  => END
--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------
    File manager Controller  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::middleware(['auth:Api', 'scope:admin,operator,client,market'])->group(function () {
        Route::prefix('admin/filemanager/folder')->group(function () {
            Route::get('/', '\Modules\Filemanager\Http\Controllers\FilemanagerFolderController@index');
            Route::get('/{id}', '\Modules\Filemanager\Http\Controllers\FilemanagerFolderController@show');
            Route::post('/', '\Modules\Filemanager\Http\Controllers\FilemanagerFolderController@create');
            Route::put('/{id}', '\Modules\Filemanager\Http\Controllers\FilemanagerFolderController@update');
            Route::delete('/{id}', '\Modules\Filemanager\Http\Controllers\FilemanagerFolderController@delete');
        });
        Route::prefix('admin/filemanager')->group(function () {
            Route::get('/', '\Modules\Filemanager\Http\Controllers\FilemanagerController@index');
            Route::get('/{id}', '\Modules\Filemanager\Http\Controllers\FilemanagerController@show');
            Route::put('/{id}', '\Modules\Filemanager\Http\Controllers\FilemanagerController@update');
            Route::delete('/{id}', '\Modules\Filemanager\Http\Controllers\FilemanagerController@delete');
            Route::post('/uploads', '\Modules\Filemanager\Http\Controllers\FilemanagerController@uploads');
        });
    });

    Route::prefix('filemanager')->group(function () {
        Route::delete('/{id}', '\Modules\Filemanager\Http\Controllers\FilemanagerController@delete');
        Route::post('/uploads', '\Modules\Filemanager\Http\Controllers\FilemanagerController@uploads');
    });
});
/*--------------------------------------------------------------------------------
    File manager Controller => END
--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------
    MENUS ROUTES  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::middleware('auth:Api')->group(function () {
        Route::prefix('/admin/menus')->group(function () {
            Route::get('/', 'Api\v1\MenuController@index');
            Route::post('/', 'Api\v1\MenuController@create');
            Route::put('/{id}', 'Api\v1\MenuController@update')->where('id', '[0-9]+');
            Route::get('/{id}', 'Api\v1\MenuController@show')->where('id', '[0-9]+');
            Route::delete('/{id}', 'Api\v1\MenuController@destroy')->where('id', '[0-9]+');
        });
    });
    Route::prefix('/menus')->group(function () {
        Route::get('/', 'Api\v1\MenuController@index');
        Route::get('/{id}', 'Api\v1\MenuController@show')->where('id', '[0-9]+');
        Route::get('/{slug}', 'Api\v1\MenuController@slug')->where('slug', '[A-aZ-z0-9-]+');
    });
});
/*--------------------------------------------------------------------------------
    MENUS ROUTES  => END
--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------
    MENU_ITEMS ROUTES  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::middleware('auth:Api')->group(function () {
        Route::prefix('/admin/menu-items')->group(function () {
            Route::get('/', 'Api\v1\MenuItemsController@index');
            Route::post('/', 'Api\v1\MenuItemsController@create');
            Route::put('/sort', 'Api\v1\MenuItemsController@sort');
            Route::put('/{id}', 'Api\v1\MenuItemsController@update')->where('id', '[0-9]+');
            Route::get('/{id}', 'Api\v1\MenuItemsController@show')->where('id', '[0-9]+');
            Route::delete('/{id}', 'Api\v1\MenuItemsController@destroy')->where('id', '[0-9]+');
        });
    });
    Route::prefix('/menu-items')->group(function () {
        Route::get('/', 'Api\v1\MenuItemsController@index');
        Route::get('/{id}', 'Api\v1\MenuItemsController@show')->where('id', '[0-9]+');
    });
});
/*--------------------------------------------------------------------------------
    MENU_ITEMS ROUTES  => END
--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------
    SETTINGS ROUTES  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::middleware('auth:Api')->group(function () {
        Route::prefix('/admin/settings')->group(function () {
            Route::get('/', 'Api\v1\SettingsController@index');
            Route::post('/', 'Api\v1\SettingsController@create');
            Route::put('/{id}', 'Api\v1\SettingsController@update')->where('id', '[0-9]+');
            Route::get('/{id}', 'Api\v1\SettingsController@show')->where('id', '[0-9]+');
            Route::delete('/{id}', 'Api\v1\SettingsController@destroy')->where('id', '[0-9]+');
        });
    });
    Route::prefix('/settings')->group(function () {
        Route::get('/', 'Api\v1\SettingsController@index');
        Route::get('/{id}', 'Api\v1\SettingsController@show')->where('id', '[0-9]+');
        Route::get('/{slug}', 'Api\v1\SettingsController@slug')->where('slug', '[A-aZ-z0-9-]+');
    });
});
/*--------------------------------------------------------------------------------
    SETTINGS ROUTES  => END
--------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------
    ROLES ROUTES  => START
--------------------------------------------------------------------------------*/
//Route::prefix('v1')->group(function () {
//    Route::middleware('auth:Api')->group(function () {
//        Route::prefix('/admin/roles')->group(function () {
//            Route::get('/', 'Api\v1\RolesController@index');
//            Route::post('/', 'Api\v1\RolesController@create');
//            Route::put('/{id}', 'Api\v1\RolesController@update')->where('id', '[0-9]+');
//            Route::get('/{id}', 'Api\v1\RolesController@show')->where('id', '[0-9]+');
//            Route::delete('/{id}', 'Api\v1\RolesController@destroy')->where('id', '[0-9]+');
//        });
//    });
//    Route::prefix('/roles')->group(function () {
//        Route::get('/', 'Api\v1\RolesController@index');
//        Route::get('/{id}', 'Api\v1\RolesController@show')->where('id', '[0-9]+');
//    });
//});
/*--------------------------------------------------------------------------------
    ROLES ROUTES  => END
--------------------------------------------------------------------------------*/



/*--------------------------------------------------------------------------------
    Banner ROUTES  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
        Route::prefix('/admin/banners')->group(function () {
            Route::get('/', 'Api\v1\BannerController@index');
            Route::post('/', 'Api\v1\BannerController@create');
            Route::put('/{id}', 'Api\v1\BannerController@update')->where('id', '[0-9]+');
            Route::get('/{id}', 'Api\v1\BannerController@show')->where('id', '[0-9]+');
            Route::delete('/{id}', 'Api\v1\BannerController@destroy')->where('id', '[0-9]+');
        });
    });
    Route::prefix('/banners')->group(function () {
        Route::get('/', 'Api\v1\BannerController@index');
        Route::get('/{id}', 'Api\v1\BannerController@show')->where('id', '[0-9]+');
    });
});
/*--------------------------------------------------------------------------------
    Banner ROUTES  => END
--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------
    Feedback ROUTES  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
        Route::prefix('/admin/feedback')->group(function () {
            Route::get('/', 'Api\v1\FeedbackController@index');
            Route::post('/', 'Api\v1\FeedbackController@create');
            Route::put('/{id}', 'Api\v1\FeedbackController@update')->where('id', '[0-9]+');
            Route::get('/{id}', 'Api\v1\FeedbackController@show')->where('id', '[0-9]+');
            Route::delete('/{id}', 'Api\v1\FeedbackController@destroy')->where('id', '[0-9]+');
        });
    });
    //for operator
    Route::middleware(['auth:Api', 'scope:admin,operator'])->group(function () {
        Route::prefix('/feedback')->group(function () {
            Route::get('/', 'Api\v1\FeedbackController@index');
            Route::put('/{id}', 'Api\v1\FeedbackController@update')->where('id', '[0-9]+');
            Route::get('/{id}', 'Api\v1\FeedbackController@show')->where('id', '[0-9]+');
        });
    });
    //from frontent
    Route::prefix('/feedback')->group(function () {
        Route::post('/', 'Api\v1\FeedbackController@create');
    });
});
/*--------------------------------------------------------------------------------
    Feedback ROUTES  => END
--------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------
    Post ROUTES  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
        Route::prefix('/admin/post')->group(function () {
            Route::get('/', 'Api\v1\PostController@index');
            Route::post('/', 'Api\v1\PostController@create');
            Route::put('/{id}', 'Api\v1\PostController@update')->where('id', '[0-9]+');
            Route::get('/{id}', 'Api\v1\PostController@show')->where('id', '[0-9]+');
            Route::delete('/{id}', 'Api\v1\PostController@destroy')->where('id', '[0-9]+');
        });
    });
    Route::prefix('/post')->group(function () {
        Route::get('/', 'Api\v1\PostController@index');
        Route::get('/{id}', 'Api\v1\PostController@show')->where('id', '[0-9]+');
        Route::get('/{slug}', 'Api\v1\PostController@slug')->where('slug', '[A-aZ-z0-9-]+');
    });
});
/*--------------------------------------------------------------------------------
    Post ROUTES  => END
--------------------------------------------------------------------------------*/





/*--------------------------------------------------------------------------------
    Page ROUTES  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
        Route::prefix('/admin/page')->group(function () {
            Route::get('/', 'Api\v1\PageController@index');
            Route::post('/', 'Api\v1\PageController@create');
            Route::put('/{id}', 'Api\v1\PageController@update')->where('id', '[0-9]+');
            Route::get('/{id}', 'Api\v1\PageController@show')->where('id', '[0-9]+');
            Route::delete('/{id}', 'Api\v1\PageController@destroy')->where('id', '[0-9]+');
        });
    });
    Route::prefix('/page')->group(function () {
        Route::get('/', 'Api\v1\PageController@index');
        Route::get('/{id}', 'Api\v1\PageController@show')->where('id', '[0-9]+');
        Route::get('/{slug}', 'Api\v1\PageController@slug')->where('slug', '[A-aZ-z0-9-]+');
    });
});
/*--------------------------------------------------------------------------------
    Page ROUTES  => END
--------------------------------------------------------------------------------*//*--------------------------------------------------------------------------------
/*--------------------------------------------------------------------------------
            Partner ROUTES  => START
        --------------------------------------------------------------------------------*/
        Route::prefix('v1')->group(function () {
            Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
                Route::prefix('/admin/partner')->group(function () {
                    Route::get('/', 'Api\v1\PartnerController@index');
                    Route::post('/', 'Api\v1\PartnerController@create');
                    Route::put('/{id}', 'Api\v1\PartnerController@update')->where('id', '[0-9]+');
                    Route::get('/{id}', 'Api\v1\PartnerController@show')->where('id', '[0-9]+');
                    Route::delete('/{id}', 'Api\v1\PartnerController@destroy')->where('id', '[0-9]+');
                });
            });
            Route::prefix('/partner')->group(function () {
                Route::get('/', 'Api\v1\PartnerController@index');
                Route::get('/{id}', 'Api\v1\PartnerController@show')->where('id', '[0-9]+');
            });
        });
        /*--------------------------------------------------------------------------------
            Partner ROUTES  => END
        --------------------------------------------------------------------------------*//*--------------------------------------------------------------------------------
            History ROUTES  => START
        --------------------------------------------------------------------------------*/
        Route::prefix('v1')->group(function () {
            Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
                Route::prefix('/admin/history')->group(function () {
                    Route::get('/', 'Api\v1\HistoryController@index');
                    Route::post('/', 'Api\v1\HistoryController@create');
                    Route::put('/{id}', 'Api\v1\HistoryController@update')->where('id', '[0-9]+');
                    Route::get('/{id}', 'Api\v1\HistoryController@show')->where('id', '[0-9]+');
                    Route::delete('/{id}', 'Api\v1\HistoryController@destroy')->where('id', '[0-9]+');
                });
            });
            Route::prefix('/history')->group(function () {
                Route::get('/', 'Api\v1\HistoryController@index');
                Route::get('/{id}', 'Api\v1\HistoryController@show')->where('id', '[0-9]+');
            });
        });
        /*--------------------------------------------------------------------------------
            History ROUTES  => END
        --------------------------------------------------------------------------------*//*--------------------------------------------------------------------------------
            Statistic ROUTES  => START
        --------------------------------------------------------------------------------*/
        Route::prefix('v1')->group(function () {
            Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
                Route::prefix('/admin/statistics')->group(function () {
                    Route::get('/', 'Api\v1\StatisticController@index');
                    Route::post('/', 'Api\v1\StatisticController@create');
                    Route::put('/{id}', 'Api\v1\StatisticController@update')->where('id', '[0-9]+');
                    Route::get('/{id}', 'Api\v1\StatisticController@show')->where('id', '[0-9]+');
                    Route::delete('/{id}', 'Api\v1\StatisticController@destroy')->where('id', '[0-9]+');
                });
            });
            Route::prefix('/statistics')->group(function () {
                Route::get('/', 'Api\v1\StatisticController@index');
                Route::get('/{id}', 'Api\v1\StatisticController@show')->where('id', '[0-9]+');
            });
        });

        /*--------------------------------------------------------------------------------
            StatisticItem ROUTES  => START
        --------------------------------------------------------------------------------*/
        Route::prefix('v1')->group(function () {
            Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
                Route::prefix('/admin/statisticitem')->group(function () {
                    Route::get('/', 'Api\v1\StatisticItemController@index');
                    Route::post('/', 'Api\v1\StatisticItemController@create');
                    Route::put('/{id}', 'Api\v1\StatisticItemController@update')->where('id', '[0-9]+');
                    Route::get('/{id}', 'Api\v1\StatisticItemController@show')->where('id', '[0-9]+');
                    Route::delete('/{id}', 'Api\v1\StatisticItemController@destroy')->where('id', '[0-9]+');
                });
            });
            Route::prefix('/statisticitem')->group(function () {
                Route::get('/', 'Api\v1\StatisticItemController@index');
                Route::get('/{id}', 'Api\v1\StatisticItemController@show')->where('id', '[0-9]+');
            });
        });
        /*--------------------------------------------------------------------------------
            StatisticItem ROUTES  => END
        --------------------------------------------------------------------------------*//*--------------------------------------------------------------------------------
            Activity ROUTES  => START
        --------------------------------------------------------------------------------*/
        Route::prefix('v1')->group(function () {
            Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
                Route::prefix('/admin/activty')->group(function () {
                    Route::get('/', 'Api\v1\ActivityController@index');
                    Route::post('/', 'Api\v1\ActivityController@create');
                    Route::put('/{id}', 'Api\v1\ActivityController@update')->where('id', '[0-9]+');
                    Route::get('/{id}', 'Api\v1\ActivityController@show')->where('id', '[0-9]+');
                    Route::delete('/{id}', 'Api\v1\ActivityController@destroy')->where('id', '[0-9]+');
                });
            });
            Route::prefix('/activty')->group(function () {
                Route::get('/', 'Api\v1\ActivityController@index');
                Route::get('/{id}', 'Api\v1\ActivityController@show')->where('id', '[0-9]+');
            });
        });
        /*--------------------------------------------------------------------------------
            Activity ROUTES  => END
        --------------------------------------------------------------------------------*//*--------------------------------------------------------------------------------
            Activity ROUTES  => START
        --------------------------------------------------------------------------------*/
        Route::prefix('v1')->group(function () {
            Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
                Route::prefix('/admin/activity')->group(function () {
                    Route::get('/', 'Api\v1\ActivityController@index');
                    Route::post('/', 'Api\v1\ActivityController@create');
                    Route::put('/{id}', 'Api\v1\ActivityController@update')->where('id', '[0-9]+');
                    Route::get('/{id}', 'Api\v1\ActivityController@show')->where('id', '[0-9]+');
                    Route::delete('/{id}', 'Api\v1\ActivityController@destroy')->where('id', '[0-9]+');
                });
            });
            Route::prefix('/activity')->group(function () {
                Route::get('/', 'Api\v1\ActivityController@index');
                Route::get('/{id}', 'Api\v1\ActivityController@show')->where('id', '[0-9]+');
            });
        });
        /*--------------------------------------------------------------------------------
            Activity ROUTES  => END
        --------------------------------------------------------------------------------*//*--------------------------------------------------------------------------------
            Activity ROUTES  => START
        --------------------------------------------------------------------------------*/
        Route::prefix('v1')->group(function () {
            Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
                Route::prefix('/admin/activity')->group(function () {
                    Route::get('/', 'Api\v1\ActivityController@index');
                    Route::post('/', 'Api\v1\ActivityController@create');
                    Route::put('/{id}', 'Api\v1\ActivityController@update')->where('id', '[0-9]+');
                    Route::get('/{id}', 'Api\v1\ActivityController@show')->where('id', '[0-9]+');
                    Route::delete('/{id}', 'Api\v1\ActivityController@destroy')->where('id', '[0-9]+');
                });
            });
            Route::prefix('/activity')->group(function () {
                Route::get('/', 'Api\v1\ActivityController@index');
                Route::get('/{id}', 'Api\v1\ActivityController@show')->where('id', '[0-9]+');
            });
        });
        /*--------------------------------------------------------------------------------
            Activity ROUTES  => END
        --------------------------------------------------------------------------------*//*--------------------------------------------------------------------------------
            StatisticItem ROUTES  => START
        --------------------------------------------------------------------------------*/
        Route::prefix('v1')->group(function () {
            Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
                Route::prefix('/admin/statistic-item')->group(function () {
                    Route::get('/', 'Api\v1\StatisticItemController@index');
                    Route::post('/', 'Api\v1\StatisticItemController@create');
                    Route::put('/{id}', 'Api\v1\StatisticItemController@update')->where('id', '[0-9]+');
                    Route::get('/{id}', 'Api\v1\StatisticItemController@show')->where('id', '[0-9]+');
                    Route::delete('/{id}', 'Api\v1\StatisticItemController@destroy')->where('id', '[0-9]+');
                });
            });
            Route::prefix('/statistic-item')->group(function () {
                Route::get('/', 'Api\v1\StatisticItemController@index');
                Route::get('/{id}', 'Api\v1\StatisticItemController@show')->where('id', '[0-9]+');
            });
        });
        /*--------------------------------------------------------------------------------
            StatisticItem ROUTES  => END
        --------------------------------------------------------------------------------*/