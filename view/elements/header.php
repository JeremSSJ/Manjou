<!DOCTYPE html>
<html lang="fr">

<style>
    .nav-color 
    {
        background-color: #940202;
    }
</style>

<!-- importer bootstrap, les icones et le jquery -->
<?php 
    require_once '../view/import/import.php';
    require_once '../model/session/session_handle.php';
?>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark nav-color">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= $router->generate('home') ?>">Manjou</a>

            <!-- button qui va collapse les éléments de la div collapse quand on arrivera en dessous d'une certaine taille d'écran -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="d-flex me-auto col-lg-4 mt-3 mt-lg-0" role="search">
                    <input class="form-control me-2" type="search" placeholder="Rechercher un restaurant ou un lieu" aria-label="Barre de recherche">
                    <button class="btn btn-warning" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
                
                <!-- on affiche les boutons d'inscription et de connexion uniquement si l'utilisateur n'est pas déjà connecté -->
                <div class="d-flex flex-column flex-lg-row">
                    
                    <?php if (!isConnected()) : ?>
                        <a href="<?= $router->generate('inscription') ?>" class="btn btn-warning me-lg-2 px-4 mt-1 mt-lg-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            Inscription
                        </a>
                        <a href="<?= $router->generate('connexion') ?>" class="btn btn-warning px-4 mt-1 mt-lg-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                            </svg>
                            Connexion
                        </a>
                    <?php else : ?>
                        
                        <button type="button" class="btn btn-warning px-4 mt-1 mt-lg-0 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            Jerem
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end col-12 col-lg-1">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><input type="button" id="deco" class="dropdown-item" value="Déconnexion"></li>
                        </ul>
                        
                    <?php endif; ?>

                </div>
                
            </div>
        </div>
    </nav>

    <script>
        $("#deco").click(() =>
        {
            $.ajax(
            {
                url: "../model/session/logout.php",
                success: () => 
                {
                    window.location.reload();
                }
            });
        });
    </script>