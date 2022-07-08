<?php

use App\Http\Controllers\Kouka1_1Controller;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Node\CrapIndex;

//問題1
Route::get('kouka1', 'Kouka1_1Controller@index');
//問題2
Route::get('kouka1', 'Kouka1_1Controller@index');
Route::post('Kouka1_1.blade', '___(4)___');

