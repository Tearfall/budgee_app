<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
	return inertia('Home',['title' => 'Home',]);})->name( 'home' );

    
 Route::resource('transactions', TransactionController::class);
Route::get('/transactions', function () {
	return inertia('Transactions',['title' => 'Transactions',]);})->name( 'transactions' );