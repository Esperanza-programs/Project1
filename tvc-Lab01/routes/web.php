<?php

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
    return view('welcome');
});

Route::get('/greeting', function(){
    return "<h1>Hello World!</h1>";
});

Route::get('/cancel', function() {
    return "<h1>Canceled!!</h1>";
});

Route::redirect('/here', '/there');
Route::get('/there', function() {
    return "<h1>Redirect:here to there!!</h1>";
});

Route::get('/test', function() {
    return view('tester');
});

Route::get('/dev/{id}', function($id){
    return "<h1>Dev ".$id."</h1>";
});

Route::get('/posts/{postid}/comments/{commentid}', function($postId, $commentId) {
    return "<h1>Post: $postId; Comments: $commentId</h1>";
});

Route::get('/user/{id}', function($id){
    return "<h1>User -> ".$id. "</h1>";
});

Route::get('welcome/{name}', function($name) {
    return "<h1> Welcome $name </h1>";
});

Route::get('user-dev/{name?}', function($name = "Chung Trịnh") {
    return "<h1>Welcome $name</h1>";
});

Route::get('name-constraint/{name}', function($name) {
    return "<h1>Route Constraint [A-Za-z]+</h1>";
}) -> where('name', '[A-Za-z ]+');

Route::get('id-constraint/{id}', function($id) {
    return "<h1>Route Constraint [0-9]</h1>";
}) -> where('id', '[0-9]');