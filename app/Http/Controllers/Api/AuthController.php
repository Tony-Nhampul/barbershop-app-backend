<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        //return response()->json(['user'=>$request->email, 'pass' => $request->password]);

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Email ou Senha incorrectos.',
            ], 401);
        }

        $user->tokens()->delete();

        $user->token = $user->createToken($user->email)->plainTextToken;

        return response()->json($user);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = $request->all();
        $user['password'] = bcrypt($request->password);

        $user = User::create($user);
     
        $user['message'] = "Conta criada com sucesso! Agora já pode iniciar a Sessão.";
 
        return response()->json($user);

        
    }
}