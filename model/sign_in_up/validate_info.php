<?php

$MINLENGHT_USERNAME = 1;
$MAXLENGHT_USERNAME = 50;
$MINLENGHT_PASSWORD = 6;


function validUsername($username)
{
    global $MINLENGHT_USERNAME;
    global $MAXLENGHT_USERNAME;

    if (strlen($username) < $MINLENGHT_USERNAME || strlen($username) > $MAXLENGHT_USERNAME || !preg_match('/^[a-zA-Z\d_]+$/', $username)) {
        return false;
    }
    return true;
}

function validPassword($password)
{
    global $MINLENGHT_PASSWORD;                                     //devant crochet * veut dire 0 ou plusieurs et dans le deuxieme cas au moins un
                                                                    //devant crochet + = au moins 1
                                                                    //dans deuxieme cas + et * seraient équivalents

    if (strlen($password) < $MINLENGHT_PASSWORD || !preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{" . $MINLENGHT_PASSWORD . ",}$/", $password)) {
        return false;
    }
    return true;
}

function validMail($mail)
{
    if (filter_var($mail, FILTER_VALIDATE_EMAIL) == false) {
        return false;
    }

    return true;
}
^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{3,}$



^(?=.*[A-Za-z\d])[A-Za-z\d]{3,}$