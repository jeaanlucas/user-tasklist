<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\UsuarioService;
use App\Http\Request\LoginRequest;
use App\Http\Request\CriarUsuarioRequest;
use App\Http\Request\CriarAvatarRequest;

class UsuarioController extends Controller
{
    private $usuarioService;

    public function __construct() {
        $this->usuarioService = new UsuarioService();
    }

    public function listarUsuarios() {
        return $this->usuarioService
            ->listar();
    }

    public function dadosUsuario($id) {
        return $this->usuarioService
            ->getDados($id);
    }

    public function criarUsuario(CriarUsuarioRequest $request) {
        return $this->usuarioService
            ->criar($request);
    }

    public function editarUsuario($id, Request $request) {
        return $this->usuarioService
            ->editar($id, $request);
    }

    public function deletarUsuario($id) {
        return $this->usuarioService
            ->deletar($id);
    }

    public function adicionarAvatar($id, CriarAvatarRequest $request) {
        return $this->usuarioService
            ->novoAvatar($id, $request->avatar);
    }

    public function deletarAvatar($id) {
        return $this->usuarioService
            ->deletarAvatar($id);
    }
}
