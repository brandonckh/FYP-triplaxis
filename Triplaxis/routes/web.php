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
Route::get('test-userpage', function(){
    return view('management');
});
Route::get('sell-your-own-design', function(){
    return view('upload-product');
});
Route::get('product', 'TriplaxisProduct@getproduct');
Route::get('profile', function(){
    return view('profile');
});
Route::get('tos', function(){
    return view('terms');
});
Route::get('successful', function(){
    return view('successful_pay');
});
Route::get('revenue', function(){
    return view('revenue');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/sign-up', function() {
    return view('sign-up');
});
Route::get('/print-your-own-design', function(){
    return view('print-design');
});
Route::get('/submission-sell', function() {
    return view('upload', ['printurl' => url('sell-your-own-design')]);
});
Route::get('/submission-print', function() {
    return view('upload', ['printurl' => url('print-your-own-design')]);
});
Route::get('cart', function(){
    return view('cart');
});
Route::get('contact', function(){
    return view('contact');
});
Route::get('profile', function(){
    return view('user');
});
Route::get('order', function(){
    return view('order');
});
Route::get('how-it-works', function(){
    return view('text');
});
Route::get('payment', function(){
    return view('payment');
});
Route::get('faq', function(){
    return view('faq');
});
Route::get('shipping', function(){
    return view('shipping');
});
Route::get('/forget-password', function(){
    return view('login',["Type" => "Forgotten"]);
});
Route::get('/adminLogin', function(){
    return view('login',["Type" => "Admin"]);
});
Route::get('/successful', function(){
    return view('succ');
});
Route::get('/browse', 'TriplaxisProduct@output');

Route::get('/Login', function(){
    return view('login',["Type" => "User"]);
});
Route::post('post-log', 'TriplaxisAuth@login');
Route::post('post-reg', 'TriplaxisAuth@signup');
Route::post('post-google', 'TriplaxisAuth@iamlogin');
Route::post('new-product', 'TriplaxisProduct@newproduct');
Route::get('logout', 'TriplaxisAuth@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
