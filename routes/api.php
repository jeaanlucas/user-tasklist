<?php

Route::post('login', 'LoginController@efetuarLogin');

Route::group([
  'middleware' => 'jwt.auth',
], function() {
    Route::get('usuarios', 'UsuarioController@listarUsuarios'); // Realiza a listagem de todos os usuários cadastrados
    Route::get('usuario/{usuario}', 'UsuarioController@dadosUsuario'); // Retorna os dados de um usuário específico
    Route::post('usuario', 'UsuarioController@criarUsuario'); // Cria um usuário
    Route::put('usuario/{usuario}', 'UsuarioController@editarUsuario'); // Edita um usuário específico
    Route::delete('usuario/{usuario}', 'UsuarioController@deletarUsuario'); // Deleta um usuário específico
    Route::post('usuario/{usuario}/avatar', 'UsuarioController@adicionarAvatar'); // Salva um avatar para o usuário
    Route::delete('usuario/{usuario}/avatar', 'UsuarioController@deletarAvatar'); // Deleta o avatar do usuário
});
