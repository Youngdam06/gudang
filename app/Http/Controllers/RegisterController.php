<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterModel;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('registers/register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        RegisterModel::create($request->all());
        return redirect()->route('barangs.index')
            ->with('success', 'Barang created successfully.');
        // return redirect('/login')->with('success', 'Registration Succesfull! Please Login');

        $request['password'] = Hash::make($request['password']);
    }
}
