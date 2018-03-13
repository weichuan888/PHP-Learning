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

Route::get('/lol', function(){
  return view('lol');
});
// en php, en url bonjour?prenom=Marc
// Route::get('/bonjour', function() {
//   return 'Bonjour ' . $_GET['prenom'];
// });

// en laravel
// Route::get('/bonjour', function(){
//   return 'Bonjour ' . request('prenom');
// });

// En laravel, avec un url plus court
Route::get('/bonjour/{nom}', function(){
  // return 'Bonjour ' . request('prenom');
  $nom= request('nom');
  return view ('bonjour', [
    'prenom' => $nom
  ]);
});

Route::get('/inscription', function(){
  return view('inscription');
});

Route::post('/inscription', function(){
  $utilisateur = new App\Utilisateur;
  $utilisateur->mail = request('email');
  $utilisateur->mdp = bcrypt(request('password'));

  $utilisateur->save();
  // return 'Nous avons bien reçu vos information, votre adresse est le ' . $_POST['mail']; version php, et ci dessous c'est laravel
  return 'votre adresse email est le ' . request('mail');
});
