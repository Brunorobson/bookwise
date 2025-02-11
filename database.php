<?php


class DB
{
    public function livros()
    {
        $db = new PDO('sqlite:database.sqlite');
        $query = $db->query("SELECT * FROM livros");
        $itens = $query->fetchAll();
        $retorno = [];

        foreach ($itens as $item) {
            $livro = new Livro();
            $livro->id = $item['id'];
            $livro->titulo = $item['titulo'];
            $livro->autor = $item['autor'];
            $livro->descricao = $item['descricao'];
            $retorno[] = $livro;
        }
        return $retorno;
    }
}
