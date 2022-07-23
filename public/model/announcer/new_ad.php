<?php

require_once '../util/leave.php';

//valeurs de la variables $_POST récupérées pour être utilisées avec des index
$post_2 = array_values($_POST);

//taille max en caractère des différents champs et début du message d'erreur qu'on va renvoyer
$sizes = array(100, 50, 500, 50, 50, 10, 50, 20);
$fieldnames = array(
    'Le nom du restaurant',
    'Le type du restaurant',
    'La description',
    'Le nom de rue',
    'Le nom de ville',
    'Le code postal',
    'Le nom du pays',
    'Le numéro de téléphone');

//boucle pour toutes les variables postées sauf website qui n'est pas obligatoire
for($i = 0; $i < (count($post_2) - 1) ; $i++)
{
    $val = $post_2[$i];

    if(empty($val))
    {
        leave(["error", "Tous les champs marqués d'un astérisque sont obligatoires."]);
    }
    elseif(strlen($val) > $sizes[$i])
    {
        leave(["error", $fieldnames[$i] . " ne peut excéder " . $sizes[$i] . " caractères."]);
    }
}

//si le lien du site est vide on met pour le mettre dans la bd et si c est trop long on renvoie l'erreur
$website = $_POST['website'];
$MAXLENGHT_URL = 100;

if(empty($website))
{
    $website = NULL;
}
elseif(strlen($website) > $MAXLENGHT_URL)
{
    leave(["error", "Le lien du site ne peut excéder " . $MAXLENGHT_URL . " caractères."]);
}

//On vérifie qu'il y a au moins une image et qu'on ne dépasse pas 15 images
if(empty($_FILES['images']['name'][0]))
{
    leave(["error", "Veuillez insérer au moins une image."]);
}
elseif(count($_FILES['images']['name']) > 15)
{
    leave(["error", "Vous ne pouvez pas insérer plus de 15 images."]);
}


/*on fait 2 boucles comme ça si il y a une seule erreur on stop le processus et aussi on peut save les images apres avoir insérer l'annonce
et utiliser l id de l annonce pour avoir un nom unique pour les images*/

/*boucle pour toutes les images, si une d entre elle est trop volumineuse on renvoie 
un message d'erreur*/
foreach($_FILES['images']['name'] as $key=>$val)
{
    if($_FILES['images']['error'][$key] == 1)
    {
        leave(["error", "L'image " . $val . " est trop volumineuse."]);
    }
}

//comme pas d'erreur on est prêt à insérer l'annonce dans la bd et les images dans le dossier

require_once '../session/session_handle.php';
require_once '../PDO/pdo.php';

$email = getEmail();
$name = $_POST['name'];
$type = $_POST['type'];
$description = $_POST['description'];
$street = $_POST['street'];
$city = $_POST['city'];
$pCode = $_POST['pCode'];
$country = $_POST['country'];
$phone = $_POST['phone'];

$sql = "insert ignore into annonce values(NULL, :email, :name, :type, :description, :street, :city, :pCode, :country, :phone, :website);";

$params = [
    "email" => $email,
    "name" => $name,
    "type" => $type,
    "description" => $description,
    "street" => $street,
    "city" => $city,
    "pCode" => $pCode,
    "country" => $country,
    "phone" => $phone,
    "website" => $website
];

preparedStmt($sql, $params);

//on récupère l id de l'annonce et on va créer un nouveau nom d image qui commence par cet id + le numéro d index de l image dans $_FILES
$announce_id = getPdo()->lastInsertId();

foreach($_FILES['images']['name'] as $key=>$val) 
{
    $extension = strtolower(pathinfo($val, PATHINFO_EXTENSION));

    move_uploaded_file($_FILES['images']['tmp_name'][$key], '../../img/' . $announce_id . '_' . $key . '.' . $extension);
}

leave(["success", "Votre annonce a bien été créée."]);

?>