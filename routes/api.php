<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\AuthenController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [AuthenController::class, 'postLogin']);
Route::group(['middleware' => 'auth:sanctum'], function() {
    // http://127.0.0.1:8000/api/list-product
    Route::get('list-product', [ProductController::class, 'getListProducts']); // Danh sách
    Route::get('product/{idProduct}', [ProductController::class, 'getProduct']); // Lấy 1 product
    Route::post('product', [ProductController::class, 'addProduct']); // Thêm mới 1 product
    Route::patch('product', [ProductController::class, 'updateProduct']); // Sửa 1 product
    Route::delete('product', [ProductController::class, 'deleteProduct']); // Xóa 1 product
});