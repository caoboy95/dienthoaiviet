<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PhoneproductController;
use App\Http\Controllers\TabletproductController;
use App\Http\Controllers\AccessoriesproductController;
use App\Http\Controllers\WatchproductController;
use App\Http\Controllers\SimproductController;
// blog controller
use App\Http\Controllers\HirepurchaseBlogController;
use App\Http\Controllers\ServiceBlogController;
// Quan ly admin
use App\Http\Controllers\AdminDashboardController;
use App\Http\Middleware;

use App\Http\Controllers\UserController;

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
// show trang chu
Route::get('trang-chu', [HomepageController::class, 'showHomePage'])->name('trangchu');	
// show trong dien thoai
Route::get('smartphone/{id}',[PageController::class,'getProduct'])->name('show');
// Route::resource('navbar', ProductController::class);

// ------------ giao diện người dùng
//Xử lý user
Route::post('dangky',[PageController::class,'postSignup'])->name('dangky');
Route::post('dangnhap',[PageController::class,'postLogin'])->name('dangnhap');
Route::get('dangxuat',[PageController::class,'postLogout'])->name('dangxuat');
// goi trang đăng nhập người dùng
Route::get('dang-nhap', [UserController::class,'showLogin'])->name('login');
// goi trang đăng ký người dùng
Route::get('dang-ky', [UserController::class,'showSigup'])->name('sigup');
// trang cá nhân
Route::get('profile',[PageController::class,'getProfile'])->name('profile');

//Xử lý giỏ hàng
Route::get('addtocart/{id}/{qty}',[PageController::class,'getAddtoCart'])->name('addtocart');
Route::get('del-cart/{id}',[PageController::class,'getDelItemCart'])->name('del_cart');

Route::get('checkout',[PageController::class,'getCheckout'])->name('checkout');
Route::post('checkout',[PageController::class,'postCheckout'])->name('savecheckout');



//show danh sách sản phẩm điện thoại
Route::get('smartphone', [PageController::class,'getSmartphone'])->name('smartphone');
// show danh sach hãng
Route::get('smartphone/apple', [PageController::class,'getAppleSmartphone'])->name('apple_smartphone');
Route::get('smartphone/samsung', [PageController::class,'getSamsungSmartphone'])->name('samsung_smartphone');
Route::get('smartphone/oppo', [PageController::class,'getOppoSmartphone'])->name('oppo_smartphone');
Route::get('smartphone/xiaomi', [PageController::class,'getXiaomiSmartphone'])->name('xiaomi_smartphone');
Route::get('smartphone/vivo', [PageController::class,'getVivoSmartphone'])->name('vivo_smartphone');
Route::get('smartphone/realme', [PageController::class,'getRealmeSmartphone'])->name('realme_smartphone');
Route::get('smartphone/oneplus', [PageController::class,'getOneplusSmartphone'])->name('oneplus_smartphone');


// show trang phụ kiện
Route::get('Phu-kien',[AccessoriesproductController::class, 'showAccessories'])->name('accessories');
// show trang đồng hồ
Route::get('dong-ho-deo-tay',[WatchproductController::class, 'showWatch'])->name('watch');
// show trang bán sim
Route::get('sim-so-dep', [SimproductController::class, 'showSim'])->name('sim');
// show trang thông tin trả góp
Route::get('thanh-toan-tra-gop', [HirepurchaseBlogController::class, 'showBlogHps'])->name('hirepurchase');
// show trang sửa chữa
// show trang khuyễn mãi
Route::get('dich-vu', [ServiceBlogController::class, 'showBlogService'])->name('service');
// goi trang đăng nhập người dùng
Route::get('dang-nhap', [UserController::class,'showLogin'])->name('login');
// goi trang đăng ký người dùng
Route::get('dang-ky', [UserController::class,'showSigup'])->name('sigup');
// goi trang profile  người dùng
Route::get('trang-ca-nhan', [UserController::class,'showProfileUser'])->name('profile_user');

//-------------------Quản Lý Admin-------------------
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::resource('product', ProductController::class);
	Route::resource('customer', CustomerController::class);
	Route::resource('bill', BillController::class);
	Route::resource('user', UserController::class);
	// show trang đăng nhập Admin
	
	//show trang dashboard

	Route::get('dashboard',[AdminController::class,'getAdminDashboard'])->name('admin_dashboard');
	Route::get('tinhtongtien',[AdminController::class,'getSumTotalForDay']);
	Route::get('thongkedoanhthu',[AdminController::class,'getDataStatistical']);

});