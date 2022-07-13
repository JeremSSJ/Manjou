<?php
$pdo;

function getPdo()
{
    //on set $pdo en global pour que la fonction puisse l'atteindre
    global $pdo;
    
    if(!$pdo) 
    {
        $pdo = new PDO('mysql:dbname=Manjou;host=localhost', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }

    return $pdo;
}

//PDO::FETCH_ASSOC: Retourne la ligne en tant qu'un tableau indexé par le nom des colonnes
function query($sql)
{
    return getPdo()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function preparedStmt($sql, $params)
{
    $stmt = getPdo()->prepare($sql);
    $stmt->execute($params);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}