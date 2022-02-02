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

Route::get('/model', function () {
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

    // $user = User::find(30);

    // $user = $user->update([
    //     'name' => 'Mudei de nome'
    // ]);

    // return User::all(); // retorna uma collection com todos os usuários.
    // return User::find(3); // retorna um único usuário.
    // return User::where('name', 'Tate Casper')->value('name'); // retorna usuários de acordo com uma determinada condição, o value pega só o valor passado.
    // return User::where('name', 'Tate Casper')->get(); // retorna usuários de acordo com uma determinada condição.
    // return User::where('name', 'Tate Casper')->first(); // retorna o primeiro resultado da condição.
    // return User::paginate(10);

    // -- Mass Assignment - Atribuição em massa -- //
    // $user = User::create([
    //     'name' => 'Rukado',
    //     'email' => 'rukadoo@gmail.com',
    //     'password' => bcrypt('123456')
    // ]);

    // dd($user);

    // -- Mass Update - Atualização em massa -- //
    // $user = User::find(41);
    
    // $user->update([
    //     'name' => 'Amo meu amor'
    // ]); // o update retorna true ou false.

    // dd($user);

    $user = User::find(4);

    return $user->store()->count();

    // return User::all();
});

Route::get('/admin/stores', 'App\Http\Controllers\Admin\StoreController@index');
Route::get('/admin/stores/create', 'App\Http\Controllers\Admin\StoreController@create');
Route::post('/admin/stores/store', 'App\Http\Controllers\Admin\StoreController@store');

// get
// put
// patch
// delete
// options
