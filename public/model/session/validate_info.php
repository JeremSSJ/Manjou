<?php

$MINLENGHT_USERNAME = 1;
$MAXLENGHT_USERNAME = 50;

$MINLENGHT_PASSWORD = 6;
$MAXLENGHT_PASSWORD = 100;

$MAXLENGHT_EMAIL = 100;

function validUsername($username)
{
    global $MINLENGHT_USERNAME;
    global $MAXLENGHT_USERNAME;

    /*on vérifie que le nom d'utilisateur ne contient que des lettres, des chiffres ou un underscore grâce à \w
    et que sa taille est bien entre 1 et 50*/
    if (!preg_match('/^\w{' . $MINLENGHT_USERNAME . ',' . $MAXLENGHT_USERNAME . '}$/', $username)) 
    {
        return false;
    }
    
    return true;
}

function validPassword($password)
{
    global $MINLENGHT_PASSWORD;
    global $MAXLENGHT_PASSWORD;

    if (strlen($password) < $MINLENGHT_PASSWORD || strlen($password) > $MAXLENGHT_PASSWORD) 
    {
        return false;
    }

    return true;
}

function validMail($mail)
{
    global $MAXLENGHT_EMAIL;
    if (filter_var($mail, FILTER_VALIDATE_EMAIL) == false || strlen($mail) > $MAXLENGHT_EMAIL) 
    {
        return false;
    }

    return true;
}