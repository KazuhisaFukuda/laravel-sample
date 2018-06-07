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

Route::namespace('User')->as('user.')->group(function () {
    Auth::routes();

    // Dashboard
    $this->get('/', 'Dashboards\DashboardController@index')->name('dashboard.index');

    // Task List
    $this->resource('tasks', 'Tasks\TasksController');
    $this->put('tasks/{task}/complete', 'Tasks\TasksController@complete')->name('tasks.complete');
    $this->put('tasks/{task}/un_complete', 'Tasks\TasksController@unComplete')->name('tasks.un_complete');
});
