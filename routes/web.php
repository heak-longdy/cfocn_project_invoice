<?php

use PDF;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('invoice/01');
});


/* invoice */
Route::prefix('invoice')
    ->group(function () {
        Route::get('01', function () {
            return view('invoice.01');
        });
    });

/* print and download pdf */
Route::get('print', function () {
    $pdf = \PDF::loadView('invoice.01');
    return $pdf->stream('invoice.pdf');
});
