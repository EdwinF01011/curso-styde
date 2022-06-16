<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "<h1> Crear ususario nuevo</h1> ";
    }

    public function _usu(){
        return "<h1>Controller _usu</h1> ";
    }

    public function añadir($id,$name=null){
        if($name){
            return 'usuarios';
            // return "<h1> Mostrando detalle del usuario {$ide} nombre: {$name} </h1> ";
        }else{
            return "<h1> Mostrando detalle del usuario {$ide} </h1> ";
        }
    }
}
