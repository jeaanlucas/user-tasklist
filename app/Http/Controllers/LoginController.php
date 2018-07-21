<?php

namespace App\Http\Controllers;

use App\Http\Services\LoginService;
use App\Http\Request\LoginRequest;

class LoginController extends Controller
{
    private $loginService;

    public function __construct() {
        $this->loginService = new LoginService();
    }

    public function login(LoginRequest $request) {
        return $this->loginService
            ->login($request);
    }
}
