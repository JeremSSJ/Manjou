<?php

require_once "../PDO/pdo.php";
require_once '../util/util_func.php';

$nameormail = $_POST['nameormail'];
$password = $_POST['password'];

$sql = "select * from user where adrss_mail like :nameormail or nom_util like :nameormail;";

$user = preparedStmt($sql, ["nameormail" => $nameormail]);

if(empty($user))
{
    leave(["error", "Nom d'utilisateur ou e-mail incorrect."]);
}

/*$user[0]['hash_mdp'] matrice car en soit fetchall dans le pdo nous renvoie un tableau avec les résultats,
on prend donc l'index 0 et ensuite le nom de la colonne*/
if (password_verify($password, $user[0]['hash_mdp']))
{
    require_once 'session_handle.php';
    login($user[0]['adrss_mail'], $user[0]['nom_util'], $user[0]['annonceur'], $user[0]['gestion']);
    leave(1);
}
else
{
    leave(["error", "Mot de passe incorrect."]);
}