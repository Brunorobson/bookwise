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
        <form class="w-full flex space-x-2 mt-6">
            <input
                type="text"
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sn focus:outline-none px-2 py-1"
                placeholder="Pesquisar..." />
            <button type="submit">🔎</button>
        </form>
        <section class="space-y-4">
            <?php include('components/livros.php') ?>
        </section>

    </main>
</body>

</html>