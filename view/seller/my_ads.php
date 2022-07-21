<?php require_once 'model/session/session_handle.php'; ?>

<?php
    //on met ça au cas où l utilisateur non connecté essaierai d atteindre la page grace à l url
    //dans ce cas la page ne sera pas chargée
    //note à moi même : essayer de faire header location : home une fois le site en ligne
    if(!isAnnouncer())
    {
        exit();
    }
?>

<?php require_once '../view/elements/header.php'; ?>

<?php require_once '../view/seller/elements/sidebar.php'; ?>
