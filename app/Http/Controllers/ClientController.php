<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{

    public function index()
    {
        return view('Add-user');
    }

    public function RegistarClient(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:clients',
            'password' => 'required|min:6',
        ]);
        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('Add-user')->with('success', 'Cliente Registar successfully');
    }
    public function show()
    {
        $clients = Client::all();
        return view('User-list', ['users' => $clients]);
    }
    public function edit($id)
    {
        $client = Client::find($id);
        return view('Edit-profile', ['client' => $client]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'password' => 'required',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $user = Client::where('name', $request->name)->where('password', $request->password)->first();
        return response()->json(['status' => true, 'user' => $user], 200);
    }
}
