<?= $livro->titulo ?>
<div class="p-2 rounded border-stone-800 border-2 bg-stone-800">
    <div class="flex">
        <div class="w-1/3 bg-stone-800">imageM</div>
        <div class="space-y-1">
            <a href="livro.php?id=<?= $livro->id ?>" class="font-semibold" hover: underline><?= $livro->titulo ?></a>
            <div class="text-xs italic"><?= $livro->autor ?></div>
            <div class="text-xs italic">⭐⭐⭐⭐⭐(3 avaliações)</div>
        </div>

    </div>
    <div class="text-xs italic"><?= $livro->descricao ?></div>
</div>