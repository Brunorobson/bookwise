<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bookwise - projeto</title>
</head>

<body class="bg-stone-950 text-stone-400">
    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
            <div class="font-bold text-xl tracking-wide">
                Book Wise
            </div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-line-500">Explorar</a></li>
                <li></li><a href="/meus-livros">Meus Livros</a>
            </ul>
            <ul>
                <li></li><a href="#">Login
                </a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">
        <?php require "views/{$view}.view.php" ?>
    </main>
</body>

</html>