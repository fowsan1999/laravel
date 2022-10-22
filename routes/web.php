<?php

use App\Http\Controllers\AssignUserRoleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth'])->group(function ()
{
    Route::group(['middleware' => ['role:Super Admin']], function ()
    {
    //-------RoleController Routes---------
        Route::controller(RoleController::class)->middleware('auth')->group(function()
        {
            Route::get('role','index');
            Route::get('role-create','create');
            Route::post('role-store','store');
            Route::get('role/{id}','show');
            Route::put('role/{id}','update');
            Route::post('role-delete','destroy');
        });

    //-------UserController Routes-------------

        Route::controller(UserController::class)->middleware('auth')->group(function()
        {
            Route::get('user','index');
            Route::get('user-create','create');
            Route::post('user-store','store');
            Route::get('user/{id}','show');
            Route::put('user/{id}','update');
            Route::post('user-delete','destroy');
        });

    //---------AssignUserRole------------
            Route::controller(AssignUserRoleController::class)->middleware('auth')->group(function()
            {
                Route::get('assign-role','create');
                Route::post('assign-role/store','store');
            });

    });

    //----------Products-----------------
    Route::controller(ProductController::class)->middleware('auth')->group(function()
    {
        Route::get('product','index');
        Route::get('product-create','create');
        Route::post('product-store','store');
        Route::get('product/{id}','show');
        Route::get('product/{id}/edit','edit');
        Route::put('product/{id}','update');
        Route::post('product-delete','destroy');
    });


});

