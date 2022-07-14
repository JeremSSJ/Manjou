<?php

$nameormail = $_POST['nameormail'];
$password = $_POST['password'];

$sql = "select hash_mdp from user where adrss_mail like :nameormail or nom_util like :nameormail;";

$result = preparedStmt($sql, ["nameormail" => $nameormail]);