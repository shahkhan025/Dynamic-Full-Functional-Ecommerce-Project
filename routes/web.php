<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FishBangController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\AdminOrderController;
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

Route::get('/', [FishBangController::class, 'index' ])->name('home');
Route::get('/fishbang-home', [FishBangController::class, 'home' ])->name('fishbang-home');
Route::get('/category-product/{id}', [FishBangController::class, 'categoryProduct' ])->name('category-product');
Route::get('/subCategory-product/{id}', [FishBangController::class, 'subCategoryProduct' ])->name('subCategory-product');
Route::get('/product-detail-info/{id}', [FishBangController::class, 'productDetail' ])->name('product-detail');

Route::post('/add-to-cart/{id}', [CartController::class, 'index' ])->name('add-to-cart');
Route::get('/show-cart-product', [CartController::class, 'show' ])->name('show-cart-product');
Route::get('/delete-cart-product/{id}', [CartController::class, 'delete' ])->name('delete-cart-product');
Route::post('/update-cart-product/{id}', [CartController::class, 'update' ])->name('update-cart-product');

Route::get('/checkout', [CheckoutController::class, 'index' ])->name('checkout');
Route::post('/new-order', [CheckoutController::class, 'newOrder' ])->name('new-order');
Route::get('/complete-order', [CheckoutController::class, 'completeOrder' ])->name('complete-order');

Route::get('/customer-login', [CustomerAuthController::class, 'login' ])->name('customer-login')->middleware('customer.logout');
Route::post('/customer-login-check', [CustomerAuthController::class, 'loginCheck' ])->name('customer-login-check');
Route::post('/new-customer', [CustomerAuthController::class, 'newCustomer' ])->name('new-customer');
Route::get('/customer-logout', [CustomerAuthController::class, 'logout' ])->name('customer-logout');
Route::get('/customer-register', [CustomerAuthController::class, 'register' ])->name('customer-register');

Route::get('/customer-dashboard', [CustomerDashboardController::class, 'index' ])->name('customer-dashboard')->middleware('customer');

Route::get('/dashboard', [DashBoardController::class, 'index' ])->name('dashboard');

Route::get('/add-category', [CategoryController::class, 'add' ])->name('category.add');
Route::post('/new-category', [CategoryController::class, 'create' ])->name('category.new');
Route::get('/manage-category', [CategoryController::class, 'manage' ])->name('category.manage');
Route::get('/edit-category/{id}', [CategoryController::class, 'edit' ])->name('category.edit');
Route::post('/update-category/{id}', [CategoryController::class, 'update' ])->name('category.update');
Route::get('/delete-category/{id}', [CategoryController::class, 'delete' ])->name('category.delete');

Route::get('/add-subCategory', [SubCategoryController::class, 'add' ])->name('subCategory.add');
Route::post('/new-subCategory', [SubCategoryController::class, 'create' ])->name('subCategory.new');
Route::get('/manage-subCategory', [SubCategoryController::class, 'manage' ])->name('subCategory.manage');
Route::get('/edit-subCategory/{id}', [SubCategoryController::class, 'edit' ])->name('subCategory.edit');
Route::post('/update-subCategory/{id}', [SubCategoryController::class, 'update' ])->name('subCategory.update');
Route::get('/delete-subCategory/{id}', [SubCategoryController::class, 'delete' ])->name('subCategory.delete');

Route::get('/add-brand', [BrandController::class, 'add' ])->name('brand.add');
Route::post('/new-brand', [BrandController::class, 'create' ])->name('brand.new');
Route::get('/manage-brand', [BrandController::class, 'manage' ])->name('brand.manage');
Route::get('/edit-brand/{id}', [BrandController::class, 'edit' ])->name('brand.edit');
Route::post('/update-brand/{id}', [BrandController::class, 'update' ])->name('brand.update');
Route::get('/delete-brand/{id}', [BrandController::class, 'delete' ])->name('brand.delete');

Route::get('/add-unit', [UnitController::class, 'add' ])->name('unit.add');
Route::post('/new-unit', [UnitController::class, 'create' ])->name('unit.new');
Route::get('/manage-unit', [UnitController::class, 'manage' ])->name('unit.manage');
Route::get('/edit-unit/{id}', [UnitController::class, 'edit' ])->name('unit.edit');
Route::post('/update-unit/{id}', [UnitController::class, 'update' ])->name('unit.update');
Route::get('/delete-unit/{id}', [UnitController::class, 'manage' ])->name('unit.delete');

Route::get('/add-product', [ProductController::class, 'add' ])->name('product.add');
Route::get('/get-sub-category-by-category-id', [ProductController::class, 'subcategoryId' ])->name('product.sub-category');
Route::post('/new-product', [ProductController::class, 'create' ])->name('product.new');
Route::get('/manage-product', [ProductController::class, 'manage' ])->name('product.manage');
Route::get('/detail-product/{id}', [ProductController::class, 'detail' ])->name('product.detail');
Route::get('/edit-product/{id}', [ProductController::class, 'edit' ])->name('product.edit');
Route::post('/update-product/{id}', [ProductController::class, 'update' ])->name('product.update');
Route::get('/delete-product/{id}', [ProductController::class, 'delete' ])->name('product.delete');

Route::get('/admin-order-manage', [AdminOrderController::class, 'index'])->name('admin.order-manage');
Route::get('/admin-order-detail/{id}', [AdminOrderController::class, 'detail'])->name('admin.order-detail');
Route::get('/admin-order-invoice/{id}', [AdminOrderController::class, 'invoice'])->name('admin.order-invoice');
Route::get('/admin-order-invoice-download/{id}', [AdminOrderController::class, 'downloadInvoice'])->name('admin.invoice-download');
Route::get('/admin-order-edit/{id}', [AdminOrderController::class, 'edit'])->name('admin.order-edit');
Route::post('/admin-order-update/{id}', [AdminOrderController::class, 'update'])->name('admin.order-update');
Route::get('/admin-order-delete/{id}', [AdminOrderController::class, 'delete'])->name('admin.order-delete');
