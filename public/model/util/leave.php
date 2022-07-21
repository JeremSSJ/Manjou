<?php

//fonction qui renverra un message en cas de succès ou d'erreur lors de la création du compte
function leave($feedback)
{
    echo utf8_encode(json_encode($feedback));
    exit();
}
