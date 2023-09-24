<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\SPController;
use App\Http\Controllers\BlogController;

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

// Route::get('/', function () {
//     return view('welcome');
// });




// Route::get('/admins','AdminController@home');

// Route::get('/danhsach','CatagoryController@danhSachSanPham')->name('danh-sach-sp');
// Route::get('/blog','BlogController@danhSachBlog')->name('danh-sach-danh-muc-blog');
// Route::get('/danhmuc','SPController@danhMucSanPham')->name('danh-muc-sp');
// Route::get('/danhsachuser','UserController@danhSachUser')->name('danh-sach-user');

Route::prefix('admins')->group(function () {
    Route::get('/','AdminController@home');
    Route::resource('category','CategoryController');
});