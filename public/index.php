<?php

//fichier pour importer la classe AltoRouter qui a été installée avec composer
require '../vendor/autoload.php';

$router = new AltoRouter();

//mettre en commentaire cette ligne lorsqu'on met en ligne et déplacer htaccess dans le dossier parent
$router->setBasePath('/Manjou/public');

$router->map('GET', '/',  "../view/ads/ads", 'annonces');

$router->map('GET', '/inscription',  "../view/session/sign_up", 'inscription');

$router->map('GET', '/connexion',  "../view/session/sign_in", 'connexion');

$router->map('GET', '/profil',  "../view/profile/profile", 'profil');

/*
$router->map('GET', '/test', '../view/test', 'test');

$router->map('GET', '/page[i:id]', function ($id) {
    require '../view/page.php';
}, 'page');*/

//vérifier si l'url donné correspond à une route
$match = $router->match();

/*si l'url a bien matché alors on aura un tableau et on peut continuer
si aucun url ne matche on lance la page error 404*/
if(is_array($match))
{
    /*on regarde si la target, donc le troisième argument de map est appellable donc on vérifie si c'est une fonction
    et on lui passe les paramètres si elle en a
    si c'est une simple chaîne de caractère on fait un require avec le nom de la target + l'extension .php*/
    if(is_callable($match['target']))
    {
        call_user_func_array($match['target'], $match['params']); 
    }
    else
    {
        require "../view/{$match['target']}.php";
    }
}
else
{
    require '../view/error/error404.php';
}
