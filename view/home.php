<?php
session_start();
var_dump($_SESSION);

require_once 'elements/header.php';

echo '<h2>vous etes sur la page home</h2>';

require_once 'elements/footer.php';
?>

