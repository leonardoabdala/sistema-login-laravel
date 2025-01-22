<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function autenticar(Request $request)
    {
        if ($request->email === 'usuario@exemplo.com' && $request->password === 'senha123') {
            // Autenticação bem-sucedida
            return response()->json(['message' => 'Login realizado com sucesso!'], 200);
        }else{
            // Autenticação falhou
            return response()->json(['error' => 'Credenciais inválidas'], 401);
        }
    }
}
