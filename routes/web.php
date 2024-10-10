<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MenucorrienteController;
use App\Http\Controllers\MenuejecutivoController;
use App\Http\Controllers\MenuespecialController;
use App\Http\Controllers\PlatosController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TablauserController;
use App\Http\Controllers\TablaplatosController;
use App\Http\Controllers\TablapedidosController;

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
    return view('principal');
});

// Mostrar el formulario de registro y enviar los datos a la (BD)
Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

// Mostrar el formulario de login y loguearse.
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);

// Cerrar sesión
Route::post('/logout',[LogoutController::class, 'store'])->name('logout');

// Mostrar el menú y categorias
Route::get('/menu',[MenuController::class, 'index'])->name('menu');
Route::get('/menu-corriente', [MenucorrienteController::class, 'index'])->name('menu-corriente');
Route::get('/menu-especial', [MenuespecialController::class, 'index'])->name('menu-especial');
Route::get('/menu-ejecutivo', [MenuejecutivoController::class, 'index'])->name('menu-ejecutivo');


// autenticación ruta panel admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

//Mostrar tabla de platos
Route::get('/tabla-platos',[TablaplatosController::class, 'index'])->name('tabla-platos');
// Editar un plato y actualizar
Route::get('editar-platos/{id}/edit', [TablaplatosController::class, 'edit'])->name('editar-platos');
Route::put('editar-platos/{id}', [TablaplatosController::class, 'update'])->name('platos.update');
// Eliminar plato
Route::delete('editar-platos/{id}', [TablaplatosController::class, 'destroy'])->name('platos.destroy');


//Crear nuevo plato
Route::get('/nuevoplato',[PlatosController::class, 'index'])->name('nuevoplato');
Route::post('/nuevoplato',[PlatosController::class, 'store']);
//Route::get('/detalles_plato',[PlatosController::class, 'detalles'])->name('detalles_plato');

//! detalles o Modal
//Route::get('/platos/{id}', [PlatosController::class, 'show'])->name('detalles_plato');
Route::get('/platos/{id}', [PlatosController::class, 'show'])->name('platos.show');


// Mostrar tabla de pedidos
Route::get('/tabla-pedidos',[TablapedidosController::class, 'index'])->name('tabla-pedidos');
// Mostrar tabla de usuario
Route::get('/tabla-user',[TablauserController::class, 'index'])->name('tabla-user');

Route::delete('/admin/usuarios/{id}', [TablauserController::class, 'destroy'])->name('usuarios.destroy');


//! Rutas para carrito de compras
Route::get('/agregarplato',[CarritoController::class, 'index'])->name('agregarplato');

