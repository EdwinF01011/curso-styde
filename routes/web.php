<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return '<h1>ruta</h1>';
});



// Route::get('/usuarios',function(){
//     $text= "<h1>Mostrando detalle del usuario ".$_GET['id']." </h1>";// con php plano
//     return $text;
// });

Route::get('/usuarios/{ide}/{name?}',[UserController::class, 'añadir']
// function($ide,$name=null){
// if($name){
//     return 'usuarios';
//     // return "<h1> Mostrando detalle del usuario {$ide} nombre: {$name} </h1> ";
// }else{
//     return "<h1> Mostrando detalle del usuario {$ide} </h1> ";
// }

// return "<h1> Mostrando detalle del usuario {$ide} nombre: {$name} </h1> ";
// }
)->where(['name' => '[\d]+' ,'ide'=>'[-\w]+'] );//'ide', '[0-9]+' , 


Route::get('/usu',[UserController::class, '_usu']);

// Route::get('/usuarios/{ide}/{name?}',function($ide,$name=null){
//     if($name){
//         return "<h1> Mostrando detalle del usuario {$ide} nombre: {$name} </h1> ";
//     }else{
//         return "<h1> Mostrando detalle del usuario {$ide} </h1> ";
//     }
//         // return "<h1> Mostrando detalle del usuario {$ide} nombre: {$name} </h1> ";
//     })->where('ide', '[-\w]+');

Route::get('/usuarios/{slug}',function($slug){
    return "<h1> Esto es un slug {$slug} </h1> ";
})->where(['slug' => 'cre   ate|delete|update']);


Route::get('/usuarios',[UserController::class, 'index']);

//[PagesController::UserController, 'index']
?>
