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
Route::get('upload-prod', function(){
    return view('upload-product');
});
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
Route::get('/submission', function() {
    return view('upload');
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
Route::get('logout', function(){
    return view('logout');
});
Route::get('faq', function(){
    return view('faq');
});
Route::get('shipping', function(){
    return view('shipping');
});
Route::get('/adminLogin', function(){
    return view('login',["Type" => "Admin"]);
});
Route::get('/Login', function(){
    return view('login',["Type" => "User"]);
});
