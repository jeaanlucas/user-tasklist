<?php

namespace App\Http\Services;

use JWTAuth;
use JWTFactory;
use Image;
use App\Http\Models\Usuario;

class UsuarioService
{
    private $usuario;

    public function __construct() {
        $this->usuario = new Usuario();
    }

    public function listar() {
        return response()->json($this->montaListagemUsuarios($this->usuario::all()));
    }

    private function montaListagemUsuarios($usuarios) {
        $response = [];
        foreach ($usuarios as $usuario) {
            $response[] = [
                'id' => $usuario->id,
                'nome' => $usuario->nome,
                'email' => $usuario->email,
                'telefone' => $usuario->telefone,
                'aniversario' => $usuario->aniversario,
                'senha' => $usuario->senha,
                'avatar' => base64_encode($usuario->avatar),
            ];
        }

        return $response;
    }

    public function criar($dados) {
        $this->usuario->nome = $dados->nome;
        $this->usuario->email = $dados->login;
        $this->usuario->telefone = $dados->telefone;
        $this->usuario->aniversario = $dados->aniversario;
        $this->usuario->senha = bcrypt($dados->senha);
        $this->usuario->save();

        return response()->json(['mensagem' => 'Usuário salvo com sucesso!'], 200);
    }

    public function editar($id, $dados) {
        $usuario = $this->usuario::find($id);

        $usuario->nome = $dados->nome;
        $usuario->email = $dados->login;
        $usuario->telefone = $dados->telefone;
        $usuario->aniversario = $dados->aniversario;
        $usuario->senha = bcrypt($dados->senha);
        $usuario->save();

        return response()->json(['mensagem' => 'Usuário alterado com sucesso!'], 200);
    }

    public function deletar($id) {
        $usuario = $this->usuario::find($id);
        $usuario->delete();

        return response()->json(['mensagem' => 'Usuário deletado com sucesso!'], 200);
    }

    public function novoAvatar($id, $avatar) {
        $usuario = $this->usuario::find($id);

        $usuario->avatar = base64_decode($avatar);
        $usuario->save();

        return response()->json(['mensagem' => 'Avatar salvo com sucesso!'], 200);
    }

    public function deletarAvatar($id) {
        $usuario = $this->usuario::find($id);
        $usuario->avatar = null;
        $usuario->save();

        return response()->json(['mensagem' => 'Avatar deletado com sucesso!'], 200);
    }

}
