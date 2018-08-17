<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
class PagesController extends Controller
{
    public function home(){
        return view('qr');
    }
    // public function usuarios(){
    //     return view('usuarios');
    // }
    // public function registro(){
    //     return view('registro');
    // }
    // public function formulario(CreateUserRequest $request){
    //     $request->all();
    //     return back()
    //         ->with("info","Registro exitoso");
    // }
}
