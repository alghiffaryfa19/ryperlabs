<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DaftarController extends Controller
{
    public function register(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
        ];

        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'name' => 'required',
            'password' => 'required',
            
        ],$messages);

        if (Str::substr($request->username, 2, 2) == "24") {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);

        return redirect()->route('login');
            
        }
        else{

            return "Anda bukan anak ilkom";
            //return redirect()->route('frontend')->with('register', 'Daftar berhasil, silahkan masuk ke akun');
        }
    }
}
