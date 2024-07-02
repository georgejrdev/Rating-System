<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating System</title>
    <link rel="stylesheet" href="Mvc/view/css/global.css">
    <link rel="stylesheet" href="Mvc/view/css/colors.css">
    <link rel="stylesheet" href="Mvc/view/css/index.css">

</head>
<body>
    <header>
        <div class="elements-div" id="change-mode" onclick="toggleTheme()"></div>
        <div id="logo"></div>
        <p id="description">SISTEMA DE CONTROLE DE AVALIAÇÕES</p>
    </header>

    <main>
        <form action="../Mvc/controller/router.php" method="post">
            <input type="hidden" name="route" id="route" value="/loginAccount">

            <input autocomplete="off" type="text" name="login" id="login">
            <div id="inputs-group">
                <input type="password" name="password" id="password">
                <button id="submit-login" type="submit">-></button>
            </div>
        </form>

        <p style="text-align:center; margin-top:5vh;">The default login is username 40028922 and password admin</p>
        <p style="text-align:center; margin-top:1vh;">The database is reset every day</p>
    </main>

    <script src="Mvc/view/js/toggleTheme.js"></script>
</body>
</html>