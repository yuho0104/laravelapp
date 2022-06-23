<?php

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

Route::get('hello','HelloController@index');
Route::get('hello/other','HelloController@other');
//  Route::get('hello/{msg}',function ($msg) {

//     $html = <<<EOF９
//     <html>
//     <head>
//     <title>Hello</title>
//     <style>
//     body {font-size:16pt; color:#999; }
//     h1 { font-size:100pt; text-align:right; color:#eee;
//        margin:-40px 0px -50px 0px; }
//     </style>
//     </head>
//     <body>
//        <h1>Hello</h1>
//        <p>{$msg}</p>
//        <p>これは、サンプルで作ったページです。</p>
//     </body>
//     </html>
//     EOF;
    
//        return $html;
//     });
Route::get('hello', function() {
    return view('hello.index');
 });
 
 Route::get('hello', 'HelloController@index');
 Route::post('hello', 'HelloController@post');
 // use App\Http\Middleware\HelloMiddleware;　を追記

Route::get('hello', 'HelloController@index')
->middleware(HelloMiddleware::class);