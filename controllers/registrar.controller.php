<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validacoes = [];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $email_confirmacao = $_POST['email_confirmacao'];
    $senha = $_POST['senha'];


    if (strlen($nome) == 0) {
        $validacoes[] = 'O campo nome é obrigatório';
    }

    if (strlen($email) == 0) {
        $validacoes[] = 'O campo email é obrigatório';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validacoes[] = 'O email informado não é válido';
    }

    if ($email !== $email_confirmacao) {
        $validacoes[] = 'Os e-mails não conferem';
    }

    if (strlen($senha) == 0) {
        $validacoes[] = 'O campo senha é obrigatório';
    }

    if (strlen($senha) < 8 || strlen($senha) > 32) {
        $validacoes[] = 'A senha deve ter entre 8 e 32 caracteres';
    }

    if (!str_contains($senha, '*')) {
        $validacoes[] = 'A senha deve conter pelo menos um *';
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
