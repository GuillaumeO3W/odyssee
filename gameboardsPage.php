<?php
$title = 'Odyssée :: Plateaux';
$currentPage = 'gameboardsPage';
require 'inc/head.php';
require 'inc/navbar.php';
require 'inc/usersDb.php';
?>

<!-- DEBUT SECTION CARDS---------------------------------------------------------------------------------------- -->
    <section class="container mb-5">
        <h2 class="fs-5 fw-medium mb-4"><i class="bi bi-map-fill"></i> Plateaux</h2>
        <nav class="navbar mb-4">
            <div class="container-fluid">
                <a href="#" class="btn btn-primary disabled">Ajouter un plateau de jeu</a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary disabled" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </section>
<!-- FIN SECTION CARDS------------------------------------------------------------------------------------------------ -->
</body>
</html>
