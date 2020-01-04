<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('auth/users', UserController::class);
    $router->resource('auth/members', MemberController::class);
    $router->resource('auth/kumirens', KumirenController::class);
    $router->resource('auth/kumiren2members', Kumiren2memberController::class);
});
