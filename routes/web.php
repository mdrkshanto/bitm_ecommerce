<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UnitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/product-category', [CategoryController::class,'index'])->name('category');
Route::get('/product-detail', [ProductController::class,'index'])->name('product.detail');
Route::get('/cart', [CartController::class,'index'])->name('show.cart');
Route::get('/checkout', [CheckoutController::class,'index'])->name('checkout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category/add', [CategoryController::class, 'admin'])->name('add.category');
    Route::post('/category/add', [CategoryController::class, 'store'])->name('add.category');
    Route::get('/category/manage', [CategoryController::class, 'manage'])->name('manage.category');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/brand/add', [BrandController::class, 'create'])->name('brand.add');
    Route::post('/brand/add', [BrandController::class, 'store'])->name('brand.add');
    Route::get('/brand/manage', [BrandController::class, 'manage'])->name('brand.manage');
    Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::post('/brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');

    Route::get('/sub-category/add', [SubCategoryController::class, 'create'])->name('sub-category.add');
    Route::post('/sub-category/add', [SubCategoryController::class, 'store'])->name('sub-category.add');
    Route::get('/sub-category/manage', [SubCategoryController::class, 'manage'])->name('sub-category.manage');
    Route::get('/sub-category/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit');
    Route::post('/sub-category/update/{id}', [SubCategoryController::class, 'update'])->name('sub-category.update');
    Route::post('/sub-category/delete/{id}', [SubCategoryController::class, 'delete'])->name('sub-category.delete');

    Route::get('/unit/add', [UnitController::class, 'create'])->name('unit.add');
    Route::post('/unit/add', [UnitController::class, 'store'])->name('unit.add');
    Route::get('/unit/manage', [UnitController::class, 'manage'])->name('unit.manage');
    Route::get('/unit/edit/{id}', [UnitController::class, 'edit'])->name('unit.edit');
    Route::post('/unit/update/{id}', [UnitController::class, 'update'])->name('unit.update');
    Route::post('/unit/delete/{id}', [UnitController::class, 'delete'])->name('unit.delete');

    Route::get('/product/add', [ProductController::class, 'create'])->name('product.add');
});
