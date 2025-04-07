<div class="p-2 rounded border-slate-800 border-2 bg-slate-800">
    <div class="flex gap-2">
        <div class="">
            <img src="<?= $livro->imagem ?>" class="w-20 rounded"/>
        </div>
        <div class="flex flex-col gap-1">
            <a href="livro?id=<?= $livro->id ?>" class="font-semibold" hover: underline><?= $livro->titulo ?></a>
            <div class="text-xs italic"><?= $livro->autor ?></div>
            <div class="text-xs italic">
            <?= str_repeat('⭐', max(0, (int) $livro->nota_avaliacao)) ?>
            (<?= $livro->count_avaliacoes ?> Avaliações)
</div>
<div class="text-sm mt-2"><?= $livro->descricao ?></div>
        </div>
    </div>
    
</div>