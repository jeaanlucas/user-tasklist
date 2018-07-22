<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Request\CreateUserRequest;

class UserController extends Controller
{
    protected $usersService;

    public function __construct() {
        $this->usersService = new UserService();
    }

    public function createUser(CreateUserRequest $request) {
        return $this->usersService
            ->create($request);
    }

    public function listUsers() {
        return $this->usersService
            ->list();
    }

    public function userData($id) {
        return $this->usersService
            ->getData($id);
    }

    public function editUser($id, Request $request) {
        return $this->usersService
            ->edit($id, $request);
    }

    public function deleteUser($id) {
        return $this->usersService
            ->delete($id);
    }
}
