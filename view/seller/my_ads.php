

<?php //require session handle à la place 
require_once '../view/elements/header.php'; ?>

<?php
    //rediriger à home si pas annonceur
    if(!isAnnouncer())
    {   
        exit();
    }
?>




<?php require_once '../view/seller/elements/sidebar.php'; ?>











<?php require_once '../view/elements/footer.php'; ?>