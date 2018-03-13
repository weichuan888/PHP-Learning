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
Auth::routes();

// Route::get('{n}', function($n) {
//   return "Salut, je suis la page " . $n . '!';
// })->where('n','[1-3]');

// Route::post('foo/bar', function(){
//   return "hello World";
// });

// Route::get('ID/{id}', function($id) {
//   echo 'ID:' . $id;
// });
//
// Route::get('/user/{name?}', function($name="Virat") {
//   echo "Name: " . $name;
// });
//
// Route::get('base URI', 'controller@method');

Route::get('/home', 'HomeController$index')->name("home");

Route::get('/me', function(){
  return redirect("/home");
});
