<?php

use App\Http\Controllers\ComprasController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Livewire\TablaCompras;
use App\Http\Controllers\ProductoscomprasController;
use App\Http\Controllers\EnviosController;
use App\Models\Proveedor;

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

Route::get('/', [HomeController::class, 'isHome'])->name('home');
Route::get('/english', [HomeController::class, 'isHome2'])->name('home2');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->resource('Compras', ComprasController::class)->names('compras')->parameters(['Compras'=>'compra']); 
Route::middleware(['auth:sanctum', 'verified'])->resource('Proveedores', ProveedoresController::class)->names('proveedores')->parameters(['Proveedores'=>'proveedor']);
Route::middleware(['auth:sanctum', 'verified'])->resource('Productoscompras', ProductoscomprasController::class)->names('productoscompras')->parameters(['Productoscompras'=>'productoscompra']);
Route::get('Productoscompras/{productoscompra}', [ProductoscomprasController::class, 'agregar'])->name('productoscompras.agregar');
Route::middleware(['auth:sanctum', 'verified'])->resource('Envios', EnviosController::class)->names('envios')->parameters(['Envios'=>'envio']);

Route::get('generate-pdf/{id}', [PDFController::class, 'generatePDF'])->name('generarPDF');

