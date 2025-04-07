<form class="w-full flex space-x-2 mt-6">
    <input
        type="text" name="pesquisar"
        class="border-slate-800 border-2 rounded-md bg-slate-900 text-sn focus:outline-none px-2 py-1"
        placeholder="Pesquisar..." />
    <button type="submit">🔎</button>
</form>
<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

<?php foreach ($livros as $livro){
           require 'partials/_livros.php';
        }?>

</section>