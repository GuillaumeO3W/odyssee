<?php

$title = 'Odyssée :: Dashboard';
$currentPage = 'dashboard';          
require 'inc/head.php';
require 'inc/navbar.php';
require 'inc/usersDb.php';
?>

<!-- DEBUT SECTION CARDS---------------------------------------------------------------------------------------- -->
    <section class="container mb-5">
        <h2 class="fs-5 fw-medium mb-4"><i class="bi bi-table"></i></i> Dashboard</h2>
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 bg-body-tertiary shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Utilisateurs : <?= $totalUsers ;?></h5>           <!--  Le total des Utilisataurs, admin, modo et joueurs                                 -->
                        <p class="card-text mb-1">Admins : <?= $totalAdmin ;?></p>               <!--  est calculé en dessous du tableau d'utilisateurs dans le fichier listUsers.php    -->
                        <p class="card-text mb-1">Modérateurs : <?= $totalMod ;?></p>
                        <p class="card-text">Joueurs : <?= $totalGamer ;?></p>
                        <a href="userAdd.php" class="btn btn-outline-primary mt-auto me-auto">Ajouter un utilisateur</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 bg-body-tertiary shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Cartes</h5>
                        <p class="card-text mb-1">Nb de cartes "Vikings"</p>
                        <p class="card-text">Nb de cartes "Explorateurs"</p>
                        <a href="#" class="btn btn-outline-primary mt-auto me-auto">Ajouter une carte</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 bg-body-tertiary shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Plateaux</h5>
                        <p class="card-text">Nb de plateaux</p>
                        <a href="#" class="btn btn-outline-primary mt-auto me-auto">Ajouter un plateau</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- FIN SECTION CARDS------------------------------------------------------------------------------------------------ -->
<!-- DEBUT SECTION TABLEAU ------------------------------------------------------------------------------------------------------ -->
    <section>
        <div class="container">
            <h3 class="fs-6 fw-medium mb-4">Derniers utilisateurs ajoutés</h3>
            <table class="table table-striped table-light rounded overflow-hidden shadow-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Pseudo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Statut</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $usersReverse = array_reverse($users); // On inverse le sens du tableau users
                for ($i=0 ; $i<5 ; $i++){  ?>
                    <tr>
                        <th scope="row"><?=$totalUsers?></th>  <!-- $totalUsers est le nombres total d'utilisateurs -->
                        <td><?=$usersReverse[$i]['lastname']?></td>
                        <td><?=$usersReverse[$i]['name']?></td>
                        <td><?=$usersReverse[$i]['pseudo']?></td>
                        <td><?=$usersReverse[$i]['email']?></td>
                        <td><?=$usersReverse[$i]['status']?></td>
                        <td class="d-flex gap-3 justify-content-end">
                        <a href="userProfil.php?id=<?=$usersReverse[$i]['id']?>"><i class="bi bi-search"></i></a>
                            <i class="bi bi-pencil-fill"></i>
                            <i class="bi bi-trash3-fill"></i>
                        </td>
                    </tr>
                    <?php $totalUsers = $totalUsers-1; 
                } ?>
                </tbody>
            </table>
        </div>
    </section>

<!-- FIN SECTION TABLEAU ------------------------------------------------------------------------------------------------------ -->

</body>
</html>