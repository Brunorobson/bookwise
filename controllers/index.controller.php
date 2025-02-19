<?php
$pesquisar = $_REQUEST['pesquisar'] ?? '';
$livros = (new DB)->livros($_REQUEST['pesquisar']);
view('index', compact('livros'));
