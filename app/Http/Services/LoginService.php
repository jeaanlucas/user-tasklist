<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use JWTFactory;
use App\Http\Models\Usuario;

class LoginService
{
    public function login($request) {
        $usuario = Usuario::where(function ($query) use ($request) {
            $query->where('email', $request->email);
        })->first();

        if (!Hash::check($request->senha, $usuario->senha)) {
            return response()->json(['mensagem' => 'E-mail ou senha incorretos!'], 401);
        }

        return response()->json($this->geraTokenAcesso($usuario));
    }

    private function geraTokenAcesso($usuario) {
        $payload = JWTFactory::sub($usuario->id)->make();
        $token = JWTAuth::encode($payload)->get();

        return [
            'token' => $token,
        ];
    }
}
