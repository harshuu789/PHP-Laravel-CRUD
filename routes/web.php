<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

// Route::get('/', function () {
//     return view('team');
// });
Route::get('/showLoan',[Controller::class,'showLoan'])->name('showLoan');
Route::get('/loanForm',[Controller::class,'showForm']);
// Route::post('/contact', 'loanForm')->name('loanForm');
Route::post('/loanForm',[Controller::class,'createLoan'])->name('loanForm');
// In routes/web.php
Route::post('delete/{id}', [Controller::class, 'deleteLoan'])->name('deleteLoan');
Route::get('/editForm/{id}',[Controller::class,'editForm'])->name('editForm');
Route::post('/editForm/{id}', [Controller::class, 'updateUserLoan'])->name('updateUserLoan');
