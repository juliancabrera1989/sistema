<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;



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

// Estas 5 rutas se puede reemplazar por un Route::resource, 
// Por lo tanto, se comentarán

/*
Route::get('/empleado', function () {
    return view('empleado.index');
});

Route::get('/empleado/create', function () {
    return view('empleado.create',[EmpleadoController::class,'create']);
});

Route::get('/empleado/edit', function () {
    return view('empleado.edit',[EmpleadoController::class,'edit']);
});

Route::get('/empleado/form', function () {
    return view('empleado.form',[EmpleadoController::class,'form']);
});
*/

Route::resource('empleado', EmpleadoController::class);