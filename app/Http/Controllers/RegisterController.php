<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;



class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //MODIFICANDO EL REQUEST PARA QUE SOLO NO VEA NOMBRES DE USUARIOS REPETIDOS
        $request->request->add([
            'username' => Str::slug($request->username)
        ]);

        $this->validate($request, [
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:30',
            'email' => 'required|email|unique:users|max:60',
            'password' => 'required|confirmed|min:6',

        ]);

        User::create([
            'name' => $request->name,
            'username' => request('username'),
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //!otra manera autenticar al usuario
        auth()->attempt($request->only('email', 'password'));

        // return dd('post...');
        return redirect()->route('post.index', auth()->user()->username);
    }
}
