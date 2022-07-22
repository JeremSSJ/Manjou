<?php

//fonction pour démarrer une session seulement si une session n'est pas déjà active
function startSession()
{
    if(session_status() === PHP_SESSION_NONE)
    {
        session_start();
    }
}

function login($email, $username, $isAnnouncer, $isAdmin)
{
    startSession();
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $username;
    $_SESSION['isAnnouncer'] = $isAnnouncer;
    $_SESSION['isAdmin'] = $isAdmin;
}

function logout()
{
    startSession();
    session_unset();
    session_destroy();
}

function isConnected()
{
    //on démarre une session s'il n'y en a pas déjà une active, on a besoin de démarrer cette session pour avoir accès à la variable $_SESSION
    startSession();

    //on renvoie true s'il y a bien quelquechose dans ($_SESSION['username']
    return !empty($_SESSION['email']);
}

function getUsername()
{
    if(isConnected())
    {
        return $_SESSION['username'];
    }
}

function getEmail()
{
    if(isConnected())
    {
        return $_SESSION['email'];
    }
}

function isAnnouncer()
{
    if(isConnected())
    {
        return $_SESSION['isAnnouncer'];
    }
}

function isAdmin()
{
    if(isConnected())
    {
        return $_SESSION['isAdmin'];
    }
}