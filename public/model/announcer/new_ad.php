<?php

require_once '../util/leave.php';

//boucle pour toutes les variables postées sauf website qui n'est pas obligatoire
foreach(array_slice($_POST, 0, count($_POST) - 1) as $key => $val) 
{
    if(empty($val))
    {
        leave(["error", "Tous les champs marqués d'un astérisque sont obligatoires."]);
    } 
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

/*boucle pour toutes les images, si une d entre elle est trop volumineuse on renvoie 
un message d'erreur à l'utilisateur sinon on les mets dans le dossier img*/
foreach($_FILES['images']['name'] as $key=>$val)
{
    if($_FILES['images']['error'][$key] == 1)
    {
        leave(["error", "L'image " . $val . " est trop volumineuse."]);
    }

    move_uploaded_file($_FILES['images']['tmp_name'][$key], '../../img/' . $val);
}





leave(["success", "Votre annonce a bien été créée."]);


?>