<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->as('admin.')->namespace('Admin')->group(function () {
    // Auth
    $this->group(['namespace' => 'Auth'], function () {
        // Login
        $this->group(['prefix' => 'login'], function () {
            $this->get('/', 'LoginController@showLoginForm')->name('login');
            $this->post('/', 'LoginController@login')->name('login.submit');
        });

        // Logout
        $this->post('logout', 'LoginController@logout')->name('logout');
    });

    // Dashboard
    $this->get('/', 'Dashboards\DashboardController@index')->name('dashboard.index');

    // Admins
    $this->resource('admins', 'Admins\AdminsController');

    // Users
    $this->resource('users','Users\UsersController');

    // Task
    $this->resource('tasks', 'Tasks\TasksController');
});
