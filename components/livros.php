<!-- Livro -->
<?php foreach ($livros as $livros) { ?>
    <div class="p-2 rounded border-stone-800 border-2">
        <div class="flex">
            <div class="w-1/3 bg-stone-800">imagens</div>
            <div>
                <a class="font-semibold" href="livro.php?id=<?= $livros['id'] ?>" hover: underline>
                    <?= $livros['titulo'] ?>
                </a>

                <div class="text-xs italic"><?= $livros['autor'] ?></div>
                <div class="text-xs italic">⭐⭐⭐⭐⭐(3 avaliações)</div>
            </div>

        </div>
        <div class="text-xs italic"><?= $livros['descricao'] ?></div>
    </div>
<?php } ?>