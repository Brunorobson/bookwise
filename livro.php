<?php
require 'dados.php';
$id = $_REQUEST['id'];
$filtrados = array_filter($livros, fn($l) => $l['id'] == $id);
$livro = array_pop($filtrados);

$view = 'livro';
require 'views/template/app.php';
