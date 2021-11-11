<?php

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
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
    $helloWorld = "Hello World";
    /**
     * return view('welcome', ['helloWorld' => $helloWorld]);
     * 
     * O compact cria o array associativo sozinho com o nome da variável
     * e o que foi digitado dentro da função.
     * É a mesma coisa que o de cima mas simplificado.
     */
    return view('welcome', compact('helloWorld'));
});

Route::get('/model', function() {
    // $products = Product::all();

    // return response()->json(array('products' => $products));
    // $user = User::find(1); atualiza as infos do usuário.
    // $user->name = 'Usuário teste';
    // $user->email = 'emaillll@teste.com';
    // $user->password = bcrypt('12345');

    // $user = new User();

    // return $user->save(); // Cria ou atualiza um usuário.
    // return $user->all();
    // return User::paginate(10); // Paginar dados => http://localhost:8000/model?page=2

    // $user = User::create([
    //     'name' => 'Carol teste',
    //     'email' => 'testeee@teste.com',
    //     'password' => bcrypt('12345')
    // ]);

    $user = User::find(30);
    
    $user = $user->update([
        'name' => 'Mudei de nome'
    ]);

    dd($user);
});
