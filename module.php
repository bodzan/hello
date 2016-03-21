<?php

/**
 * Part of the Users extension package.
 *
 * Licensed under the MIT License
 *
 * This source file is subject to the MIT License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Users
 * @version    1.0.0
 * @author     Shane Daniels
 * @license    MIT License
 * @copyright  (c) 2015, Shane Daniels, LLC
 */

use Illuminate\Contracts\Foundation\Application;
use ShaneDaniels\Modules\ModuleInterface;
use ShaneDaniels\Permissions\Container as Permissions;
use ShaneDaniels\Settings\Repository as Settings;

return [

    /*
    |--------------------------------------------------------------------------
    | Unique Slug
    |--------------------------------------------------------------------------
    |
    | Used as an internal identifier for the module. Changing this once the
    | module has been installed could cause craziness to happen.
    |
    */
    'slug' => 'bradovanovic/hello',

    /*
    |--------------------------------------------------------------------------
    | Module Name
    |--------------------------------------------------------------------------
    |
    | The name of your module. This is used for presentational purposes when
    | using the module manager.
    |
    */
    'name' => 'Hello',

    /*
    |--------------------------------------------------------------------------
    | Module Description
    |--------------------------------------------------------------------------
    |
    | A brief description about what the module is used for.
    |
    */
    'description' => 'Provides functionality that allows you to easily manage the application\'s users.',

    /*
    |--------------------------------------------------------------------------
    | Version
    |--------------------------------------------------------------------------
    |
    | The current version of the module. This will be used to compare against
    | the installed version to see if we need to run upgrades.
    |
    */
    'version' => '1.0.0',

    /*
    |--------------------------------------------------------------------------
    | Author
    |--------------------------------------------------------------------------
    |
    | Give yourself some credit!
    |
    */
    'author' => [
        'name' => 'Bojan Radovanovic',
        'email' => 'bradovanovic@carnegietechnologies.com',
    ],

    /*
    |--------------------------------------------------------------------------
    | Service Providers
    |--------------------------------------------------------------------------
    |
    | We'll automatically load any of the service providers that you list here.
    |
    */
    'providers' => [
        'Bradovanovic\Hello\Providers\HelloServiceProvider'
    ],

    /*
    |--------------------------------------------------------------------------
    | Dependencies
    |--------------------------------------------------------------------------
    |
    | List any other modules that this module depends on.
    |
    */
    'dependencies' => [
        'synergy/access',
        'synergy/attributes',
        'synergy/permissions',
    ],

    /*
    |--------------------------------------------------------------------------
    | Routes
    |--------------------------------------------------------------------------
    |
    | Closure that is called when the extension is started. You can register
    | any custom routing logic here.
    |
    | The closure parameters are:
    |
    |	object \Synergy\Modules\ModuleInterface  $module
    |	object \Illuminate\Contracts\Foundation\Application  $app
    |
    */

    'routes' => function (ModuleInterface $module, Application $app) {
        if (! $app->routesAreCached()) {
            Route::group(['middleware' => 'web', 'namespace' => 'Bradovanovic\Hello\Http\Controllers'], function()
            {
                Route::group(['prefix' => admin_uri().'/hello', 'namespace' => 'Admin'], function () {
                    Route::get('/', ['as' => 'admin.hello.index', 'uses' => 'HelloController@index']);
                });

                Route::group(['namespace' => 'Frontend'], function () {
                    Route::get('/hello', ['as' => 'frontend.hello.index', 'uses' => 'HelloController@index']);
                });

            });
        }
    },

    /*
    |--------------------------------------------------------------------------
    | Permissions
    |--------------------------------------------------------------------------
    |
    | A callback containing the permissions that are available for this module.
    |
    */
            
    'permissions' => null,

    /*
    |--------------------------------------------------------------------------
    | Settings
    |--------------------------------------------------------------------------
    |
    | A callback containing all of the settings that are available for this
    | module.
    |
    */
    'settings' => null,

    /*
    |--------------------------------------------------------------------------
    | Widgets
    |--------------------------------------------------------------------------
    |
    | Closure that is called when the module is started. You can register
    | all your custom widgets here. This is just for custom widgets or if you
    | do not wish to make a new class for a very small widget.
    |
    */

    'widgets' => null,
];
