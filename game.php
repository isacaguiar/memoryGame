<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">

    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/responsivity.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/animation.css">

    <link rel="stylesheet" href="./styles/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/b3d71d9641.js" crossorigin="anonymous"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
    </style>

    <link rel="stylesheet" href="./styles/sidebars.css">

    <title>Memory Game</title>
</head>
<body>

    <main>
      <?php include("layout/menu.php") ?>
    
      <div style="margin: auto;">

        <!-- Jogo -->
        <main class="memory-game">
            <!--pt1-->
            <div class="card" data-card="01">
                <img class="card-front" src="./images/01.png" alt="Face da carta">
                <img class="card-back" src="./images/box.png" alt="Verso da carta">
            </div>
            <div class="card" data-card="02">
                <img class="card-front" src="./images/02.png" alt="Face da carta">
                <img class="card-back" src="./images/box.png" alt="Verso da carta">
            </div>
            <div class="card" data-card="03">
                <img class="card-front" src="./images/03.png" alt="Face da carta">
                <img class="card-back" src="./images/box.png" alt="Verso da carta">
            </div>
            <div class="card" data-card="04">
                <img class="card-front" src="./images/04.png" alt="Face da carta">
                <img class="card-back" src="./images/box.png" alt="Verso da carta">
            </div>
            <div class="card" data-card="05">
                <img class="card-front" src="./images/05.png" alt="Face da carta">
                <img class="card-back" src="./images/box.png" alt="Verso da carta">
            </div>
            <div class="card" data-card="06">
                <img class="card-front" src="./images/06.png" alt="Face da carta">
                <img class="card-back" src="./images/box.png" alt="Verso da carta">
            </div>
            <!--pt2-->
            <div class="card" data-card="01">
                <img class="card-front" src="./images/01.png" alt="Face da carta">
                <img class="card-back" src="./images/box.png" alt="Verso da carta">
            </div>
            <div class="card" data-card="02">
                <img class="card-front" src="./images/02.png" alt="Face da carta">
                <img class="card-back" src="./images/box.png" alt="Verso da carta">
            </div>
            <div class="card" data-card="03">
                <img class="card-front" src="./images/03.png" alt="Face da carta">
                <img class="card-back" src="./images/box.png" alt="Verso da carta">
            </div>
            <div class="card" data-card="04">
                <img class="card-front" src="./images/04.png" alt="Face da carta">
                <img class="card-back" src="./images/box.png" alt="Verso da carta">
            </div>
            <div class="card" data-card="05">
                <img class="card-front" src="./images/05.png" alt="Face da carta">
                <img class="card-back" src="./images/box.png" alt="Verso da carta">
            </div>
            <div class="card" data-card="06">
                <img class="card-front" src="./images/06.png" alt="Face da carta">
                <img class="card-back" src="./images/box.png" alt="Verso da carta">
            </div>
        </main>

        <div class="not-supported">
            <h3>Para jogar vire a tela do seu aparelho.</h3>
        </div>
    </div>
    </main>

    <script src="./scripts/game.js"></script>
</body>
</html>