<?php
require 'dados.php';
$id = $_REQUEST['id'];
$filtrados = array_filter($livros, fn($l) => $l['id'] == $id);
$livro = array_pop($filtrados);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bookwise - projeto</title>
</head>

<body class="bg-slate-900 text-slate-400">
    <header class="bg-stone-900">
        <?php include('components/header.php') ?>
    </header>
    <main class="mx-auto max-w-screen-lg space-y-6">
        <div class="p-2 rounded border-stone-800 border-2">
            <div class="flex">
                <div class="w-1/3 bg-stone-800">imagens</div>
                <div>
                    <div class="font-semibold" hover: underline>
                        <?= $livro['titulo'] ?>
                    </div>


                    <div class="text-xs italic"><?= $livro['autor'] ?></div>
                    <div class="text-xs italic">⭐⭐⭐⭐⭐(3 avaliações)</div>
                </div>

            </div>
            <div class="text-xs italic"><?= $livro['descricao'] ?></div>
        </div>
    </main>
</body>

</html>