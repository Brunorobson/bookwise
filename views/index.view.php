<form class="w-full flex space-x-2 mt-6">
    <input
        type="text" name="pesquisar"
        class="border-slate-800 border-2 rounded-md bg-slate-900 text-sn focus:outline-none px-2 py-1"
        placeholder="Pesquisar..." />
    <button type="submit">🔎</button>
</form>
<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

    <?php foreach ($livros as $livros): ?>
        <div class="p-2 rounded border-slate-800 border-2">
            <div class="flex">
                <div class="w-1/3 "></div>
                <div>
                    <a class="font-semibold" href="livro?id=<?= $livros->id ?>" hover: underline>
                        <?= $livros->titulo ?>
                    </a>

                    <div class="text-xs italic"><?= $livros->autor ?></div>
                    <div class="text-xs italic">⭐⭐⭐⭐⭐(3 avaliações)</div>
                </div>

            </div>
            <div class="text-xs italic"><?= $livros->descricao ?></div>
        </div>
    <?php endforeach ?>

</section>