<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * REGISTER CLIENT
     */
    public function register(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'password' => 'required|string|min:8',
        ]);

        $client = new Client();
        $client->name = $data['name'];
        $client->email = $data['email'];
        $client->password = Hash::make($data['password']);
        $client->save();

        Auth::guard('clients')->login($client);

        $token = $client->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Cliente registrado correctamente',
            'client' => $client,
            'token' => $token,
        ], 201);
    }

    /**
     * LOGIN CLIENT
     */
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $client = Client::where('email', $data['email'])->first();

        if (! $client || ! Hash::check($data['password'], $client->password)) {
            return response()->json([
                'message' => 'Credenciales incorrectas',
            ], 401);
        }

        $token = $client->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login exitoso',
            'client' => $client,
            'token' => $token,
        ]);
    }
}
