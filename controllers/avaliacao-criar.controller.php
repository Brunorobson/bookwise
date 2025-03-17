<?php

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('location: /login');
    exit();
}

$validacao = Validacao::validar([
    'avaliacao' => [
        'required'
    ],
    'nota' => [
        'required'
    ]
], $_POST);

if ($validacao->naoPassou()) {
    header('location: /livro?id=' . $livro_id);
    exit();
}

$usuario_id = auth()->id;
$livro_id = $_POST['livro_id'];
$avaliacao = $_POST['avaliacao'];
$nota = $_POST['nota'];

$database->query(
    "insert into avaliacoes (usuario_id, livro_id, avaliacao, nota)
    values (:usuario_id, :livro_id, :avaliacao, :nota);",
    params: compact('usuario_id', 'livro_id', 'avaliacao', 'nota')
);

flash()->push('mensagem', 'Avaliacao criada com sucesso!');
header('location: /livro?id=' . $livro_id);
exit();