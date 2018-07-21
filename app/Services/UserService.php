<?php

namespace App\Services;

use JWTAuth;
use JWTFactory;
use Image;
use App\Models\Users;

class UserService
{
    public function create($data) {
        $users = new Users();
        $users->name = $data->name;
        $users->email = $data->email;
        $users->cellphone = $data->cellphone;
        $users->birthday = $data->birthday;
        $users->password = bcrypt($data->password);
        $users->save();

        return response()->json(['mensagem' => 'User saved!'], 200);
    }

    public function list() {
        $users = new Users()::all();

        return response()->json($users);
    }

    public function getData() {
        return response()->json($this->montaListagemUsuarios($this->usuario::all()));
    }

    public function edit($id, $data) {
        $users = new Users()::find($id);

        if (!$users) {
            return response()->json(['mensagem' => 'Invalid User!'], 401);
        }

        $users->name = $data->name;
        $users->email = $data->email;
        $users->cellphone = $data->cellphone;
        $users->birthday = $data->birthday;
        $users->password = bcrypt($data->password);
        $users->save();

        return response()->json(['mensagem' => 'User edited!'], 200);
    }

    public function delete($id) {
        $users = new Users()::find($id);

        if (!$users) {
            return response()->json(['mensagem' => 'Invalid User!'], 401);
        }

        $users->delete();

        return response()->json(['mensagem' => 'User deleted!'], 200);
    }

}
