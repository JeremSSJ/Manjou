<?php

//fichier pour importer la classe AltoRouter qui a été installée avec composer
require '../vendor/autoload.php';
require_once 'model/session/session_handle.php';

$router = new AltoRouter();

//mettre en commentaire cette ligne lorsqu'on met en ligne et déplacer htaccess dans le dossier parent
$router->setBasePath('/Manjou/public');

$router->map('GET', '/',  "../view/home/home", 'home');

$router->map('GET', '/inscription',  "../view/session/sign_up", 'inscription');

$router->map('GET', '/connexion',  "../view/session/sign_in", 'connexion');

/*ici on a besoin de faire des vérifications pour éviter que l'utilisateur accède aux pages en utilisant
l'url sans être connecté*/
$router->map('GET', '/profil', 
function() 
{
    //ici besoin de mettre router en global comme la fonction peut l'utiliser
    global $router;
    if(isConnected())
    {
        require_once "../view/profile/profile.php";
    }
    else
    {
        header("Location: " . $router->generate('home'));
    }
}, 'profil');

$router->map('GET', '/mes-annonces', 
function() 
{
    global $router;
    if(isAnnouncer())
    {
        require_once "../view/announcer/my_ads.php";
    }
    else
    {
        header("Location: " . $router->generate('home'));
    }
}, 'mesannonces');

$router->map('GET', '/nouvelle-annonce',
function() 
{
    global $router;
    if(isAnnouncer())
    {
        require_once "../view/announcer/new_ad.php";
    }
    else
    {
        header("Location: " . $router->generate('home'));
    }
}, 'nouvannonce');

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
        require_once "../view/{$match['target']}.php";
    }
}
else
{
    require_once '../view/error/error404.php';
}
