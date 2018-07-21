<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use JWTFactory;
use App\Models\Users;

class LoginService
{
    public function login($request) {
        $user = Users::where(function ($query) use ($request) {
            $query->where('email', $request->email);
        })->first();

        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['mensagem' => 'Invalid e-mail!'], 401);
        }

        return response()->json($this->createAcessToken($user));
    }

    private function createAcessToken($user) {
        $payload = JWTFactory::sub($user->id)->make();
        $token = JWTAuth::encode($payload)->get();

        return [
            'token' => $token,
        ];
    }
}
