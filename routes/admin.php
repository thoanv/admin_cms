<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DasboadController;
use App\Http\Controllers\Admin\TypePermissionController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\AboutUController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Ajax\AjaxController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\DestinationController;
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
Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');

Route::middleware('auth:admin')->group(function (){
    Route::get('/', [DasboadController::class, 'index'])->name('dashboard');
    Route::get('/thay-doi-mat-khau',[DasboadController::class, 'showChangePasswordGet'])->name('changePasswordGet');
    Route::post('/changePassword',[DasboadController::class, 'changePasswordPost'])->name('changePasswordPost');
    Route::resources([
        'type-permissions'  => TypePermissionController::class,
        'permissions'       => PermissionController::class,
        'categories'        => CategoryController::class,
        'menus'             => MenuController::class,
        'aboutUs'           => AboutUController::class,
        'news'              => NewsController::class,
        'contacts'          => ContactController::class,
        'employees'         => EmployeeController::class,
        'destinations'      => DestinationController::class,
    ]);
    //Phân quyền cho nhân viên
    Route::get('/role/authorization/{employee_id}', [RoleController::class, 'authorization'])->name('authorization-employee');
    Route::post('/role/authorization-post', [RoleController::class, 'authorizationPost'])->name('authorization-employee-post');
    Route::get('/role/authorization-update/{employee_id}/{role_id}', [RoleController::class, 'authorizationUpdate'])->name('authorization-employee-role');
    Route::post('/role/authorization-update-post', [RoleController::class, 'authorizationUpdatePost'])->name('authorization-employee-role-update-post');
    //Ajax
    Route::post('enable-column', [AjaxController::class, 'enableColumn'])->name('enable-column');
//    Route::any('/ckfinder/connector', 'CKSource\CKFinderBridge\Controller\CKFinderController@requestAction') ->name('ckfinder_connector');
//    Route::any('/ckfinder/browser', 'CKSource\CKFinderBridge\Controller\CKFinderController@browserAction') ->name('ckfinder_browser');
});

