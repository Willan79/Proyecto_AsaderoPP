<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PlatosController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TablauserController;
use App\Http\Controllers\TablaplatosController;
use App\Http\Controllers\MenuespecialController;
use App\Http\Controllers\TablapedidosController;
use App\Http\Controllers\MenucorrienteController;
use App\Http\Controllers\MenuejecutivoController;

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
    return view('index');
});

// Mostrar el formulario de registro y enviar los datos a la (BD)
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Mostrar el formulario de login y loguearse.
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

// Cerrar sesión
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

// Mostrar el menú y categorias
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/menu-corriente', [MenuController::class, 'indexcorriente'])->name('menu-corriente');
Route::get('/menu-especial', [MenuController::class, 'indexespecial'])->name('menu-especial');
Route::get('/menu-ejecutivo', [MenuController::class, 'indexejecutivo'])->name('menu-ejecutivo');


//! autenticación rutas panel admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    //Crear nuevo plato
    Route::get('/nuevoplato', [PlatosController::class, 'index'])->name('nuevoplato');
    Route::post('/nuevoplato', [PlatosController::class, 'store']);
    // Mostrar la tabla platos
    Route::get('/tabla-platos', [TablaplatosController::class, 'index'])->name('tabla-platos');
    // Editar un plato
    Route::get('editar-platos/{id}/edit', [TablaplatosController::class, 'edit'])->name('editar-platos');
    //actualizar el plato editado
    Route::put('editar-platos/{id}', [TablaplatosController::class, 'update'])->name('platos.update');
    // Eliminar plato
    Route::delete('editar-platos/{id}', [TablaplatosController::class, 'destroy'])->name('platos.destroy');
    // Tabla usuarios
    Route::get('/tabla-user', [TablauserController::class, 'index'])->name('tabla-user');
    Route::delete('/admin/usuarios/{id}', [TablauserController::class, 'destroy'])->name('usuarios.destroy');
    // Mostrar tabla de pedidos
    Route::get('/tabla-pedidos', [TablapedidosController::class, 'index'])->name('tabla-pedidos');

    Route::get('/tabla-pedidos/{id}/detalles', [TablaPedidosController::class, 'show'])->name('detalles-pedidos');
    Route::get('/tabla-pedidos/{id}/editar', [TablaPedidosController::class, 'edit'])->name('editar-estado');
    Route::put('/tabla-pedidos/{id}', [TablaPedidosController::class, 'update'])->name('update-estado');
});

//! detalles o Modal
Route::get('/platos/{id}', [PlatosController::class, 'show'])->name('platos.show');

//! Rutas para carrito de compras
Route::middleware(['auth'])->group(function () {
    Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
    Route::post('/carrito/add', [CarritoController::class, 'addCarrito'])->name('carrito.add');
    Route::post('/carrito/remove/{item}', [CarritoController::class, 'removeFromCarrito'])->name('carrito.remove');
    Route::post('/carrito/update/{item}', [CarritoController::class, 'updateCantidad'])->name('carrito.updateCantidad');
    Route::post('/carrito/close', [CarritoController::class, 'closeCarrito'])->name('carrito.close');
});


// Rutas para el procesamiento de pedidos y pagos ->name('pedido.procesar');
Route::get('/pedido/confirmar', [PedidoController::class, 'confirmarPago'])->name('confirmar-pago');
Route::post('/pedido/procesar', [PedidoController::class, 'procesarPago'])->name('procesar.pedido');
Route::get('/pedido/exito', [PedidoController::class, 'exito'])->name('pedido-exitoso');
Route::get('/pedido/estado', [PedidoController::class, 'verEstadoPedido'])->name('ver-pedido');

/* ruta para vista de pedido exitoso
Route::get('/pedido/exito', [PedidoController::class, 'exito'])->name('pedido.exito');
Route::get('/pedido-exito', function () {
    return view('pedido-exito');
})->name('pedido-exitoso');
*/
