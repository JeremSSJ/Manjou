<?php

require_once 'validate_info.php';
require_once '../util/util_func.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConf = $_POST['passwordConf'];

if (!validUsername($username)) 
{
    leave(["error", "Le nom d'utilisateur ne peut contenir que des caractères alphanumériques ou \"_\" et ne doit pas excéder " . $MAXLENGHT_USERNAME . " caractères."]);
}

if (!validMail($email)) 
{
    leave(["error", "Format d'e-mail incorrect."]);
}

if (!validPassword($password)) 
{
    leave(["error", "La taille du mot de passe doit être comprise entre " . $MINLENGHT_PASSWORD . " et " . $MAXLENGHT_PASSWORD . " caractères."]);
}

if ($password != $passwordConf) 
{
    leave(["error", "Les mots de passes ne sont pas identiques."]);
}

require_once '../PDO/pdo.php';

//on va vérifier si l'e-mail qui est sensé être unique n'est pas déjà dans la db
$sql = "SELECT * FROM user where adrss_mail like :email";

$result = preparedStmt($sql, ["email" => $email]);

if (!empty($result))
{
    leave(["error", "Cet e-mail est déjà utilisé."]);
}

//on va vérifier si le nom d'utilisateur qui est sensé être unique n'est pas déjà dans la db
$sql = "SELECT * FROM user where nom_util like :username";

$result = preparedStmt($sql, ["username" => $username]);

if (!empty($result))
{
    leave(["error", "Ce nom d'utilisateur est déjà utilisé."]);
}

//comme tout a été vérifié, on peut mettre les infos du nouvel utilisateur dans la bd
$sql = "insert ignore into user values(:email, :username, :hash, 0, 0, date(now()));";

$params = [
    "email" => $email,
    "username" => $username,
    "hash" => password_hash($password, PASSWORD_DEFAULT)
];

preparedStmt($sql, $params);

require_once 'session_handle.php';

login($email, $username, 0, 0);

leave(["success", "Votre compte a été créé avec succès.<br>Vous allez être redirigé dans 4 secondes."]);