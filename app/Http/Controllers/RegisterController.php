<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('admin.register.index');
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        // $request->session()->flash('success', 'Pendaftaran berhasil!! Silahkan login');

        return redirect('/login')->with('success', 'Pendaftaran berhasil!! Silahkan login');
    }
}
