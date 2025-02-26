<?php
require 'Validacao.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $validacao = Validacao::validar([
        'nome' => ['required'],
        'email' => [
            'required',
            'email',
            'confirmed'
        ],
        'senha' => [
            'required',
            'min:8',
            'max:32',
            'strong'
        ]
    ], $_POST);

    if ($validacao->naoPassou()) {
        header('location: /login');
        exit();
    }
    if (sizeof($validacoes) > 0) {
        $_SESSION['validacoes'] = $validacoes;
        header('location: /login');
        exit();
    }


    $database->query(
        query: "insert into usuarios (nome, email, senha) values (:nome, :email, :senha)",
        params: [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ]
    );

    header('location: /login?mensagem=Usuário cadastrado com sucesso!');
    exit();
}
