<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("index");
    }

   
    public function registro()
    {
        return view(('registro'));
    }

    public function storeUser(Request $request)
    {
        //Validar los datos
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->contrasena);

        $user->save();

        Auth::login($user);

        return redirect()->route('crud.read');
    }

  
    public function Login(Request $request)
    {
        //validacion de los datos
        $credentials =[
            "email" => $request->email,
            "password" => $request->contrasena,
        ];


        if(Auth::attempt($credentials)){
            return redirect()->intended(route('crud.read'));
        }else{
            return redirect()->route('crud.index');
        }
    }

   
    public function Logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('crud.index');
    }
   
}
