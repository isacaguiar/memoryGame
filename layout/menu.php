<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <span class="fs-4">
            <img src="images/logo-menu.png">
        </span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-0">
        <li class="nav-item">
        <a href="index.php" class="nav-link link-dark" aria-current="page">
            <i class="fas fa-gamepad"></i> O Jogo</a></li>
        <li>
        <a href="game.php" class="nav-link link-dark">
            <i class="fas fa-gamepad"></i> Jogar</a></li>
    </ul>
    <hr>
    
    <?php $url = $_SERVER['REQUEST_URI'];
            if (strpos($url,'game') !== false) { ?>  
    <ul class="nav nav-pills flex-column mb-auto">
        <li><h5 style="margin-left: 10px">Cartas Viradas</h5></li>
        <li><h6 style="margin-left: 10px"><i class="fas fa-angle-double-right"></i> <span id="region_quantity"></span></h6></li>
        <li><h5 style="margin-left: 10px">Histórico de Partidas</h5></li>
        <li style="overflow: auto">
        <h6 style="margin-left: 10px"><span id="region_historic"></span></h6></li>
    </ul>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li><a href="#" onclick="restartGame()" class="nav-link link-dark">Reiniciar jogo</a></li>
    </ul>
    <hr>
    <?php } ?>
    
    
    <div class="dropdown">
        <a href="about.php" class="d-flex align-items-center link-dark text-decoration-none" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="images/icon-if.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Créditos</strong>
        </a>
    </div>
</div>