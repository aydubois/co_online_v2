<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    User::updateOrCreate([
        'email' => 'jdoe@gmail.com'
    ],[
        'name' => 'John Doe',
        'email' => 'jdoe@gmail.com',
        'password' => bcrypt('password')
    ]);


    $users = User::all();
    
    print_r($users);
});

// Route::get('users', function()
// {
//     return 'Users!';
// });