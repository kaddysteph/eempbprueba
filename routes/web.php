<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\TarifaResolucionController;
use App\Http\Controllers\TarifaCargoController;
use App\Http\Controllers\TarifaBloqueController;
use App\Http\Controllers\UsrUsuarioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Models\User;

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

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
 

    $userExists = User::where('external_id', $user->id)->where('external_auth', 'google')->first();

    if($userExists){
        Auth::login($userExists);
    }else{
        $userNew = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google',
        ]);

        Auth::login($userNew);
    }
    
    return redirect('/home');
});

Route::resource('tarifaresolucion', TarifaResolucionController::class);
Route::resource('tarifabloque', TarifaBloqueController::class);
Route::resource('tarifacargos', TarifaCargoController::class);
Route::resource('actualizacion', UsrUsuarioController::class);
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
