<?php

namespace App\Services;

use JWTAuth;
use JWTFactory;
use Image;
use App\Models\Users;

class UserService
{
    protected $users;

    public function __construct() {
        $this->users = new Users();
    }

    public function create($data) {
        $this->users->name = $data->name;
        $this->users->email = $data->email;
        $this->users->cellphone = $data->cellphone;
        $this->users->birthday = $data->birthday;
        $this->users->password = bcrypt($data->password);
        $this->users->save();

        return response()->json(['mensagem' => 'User saved!'], 200);
    }

    public function list() {
        return response()->json($this->users::all());
    }

    public function getData($id) {
        return response()->json($this->users::find($id));
    }

    public function edit($id, $data) {
        $user = $this->users::find($id);

        if (!$user) {
            return response()->json(['mensagem' => 'Invalid User!'], 401);
        }

        $user->name = $data->name;
        $user->email = $data->email;
        $user->cellphone = $data->cellphone;
        $user->birthday = $data->birthday;
        $user->password = bcrypt($data->password);
        $user->save();

        return response()->json(['mensagem' => 'User edited!'], 200);
    }

    public function delete($id) {
        $user = $this->users::find($id);

        if (!$user) {
            return response()->json(['mensagem' => 'Invalid User!'], 401);
        }

        $user->delete();

        return response()->json(['mensagem' => 'User deleted!'], 200);
    }

}
