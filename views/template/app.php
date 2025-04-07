<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bookwise - projeto</title>
</head>

<body class="bg-slate-950 text-slate-400">
    <header class="bg-slate-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
            <div class="font-bold text-xl tracking-wide">
                Book Wise
            </div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-slate-500">Explorar</a></li>
                <?php if(auth()):?>
                <li></li><a href="/meus-livros">Meus Livros</a>
                <?php endif;?>
            </ul>
            <ul>
                <?php if (auth()): ?>
                    <li><a href="/logout" class="hover:underline">Oi <?= auth()->nome ?></a></li>
                <?php else: ?>
                    <li><a href="/login" class="hover:underline">Fazer Login</a></li>
                <?php endif ?>

            </ul>
        </nav>
    </header>



    <main class="mx-auto max-w-screen-lg space-y-6">
        <?php if ($mensagem = flash()->get('mensagem')): ?>
            <div class="bg-green-900 text-green-500 px-4 py-1 rounded-mb text-sm font-bold">
                <?= $mensagem ?>
            </div>
        <?php endif ?>
        <?php require "../views/{$view}.view.php" ?>
    </main>
</body>

</html>