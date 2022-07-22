<?php

require_once '../util/leave.php';

//$test = "";

foreach($_FILES['images']['name'] as $key=>$val)
{
    //global $test;

    //$test = $test . $_FILES['images']['tmp_name'][$key];
    move_uploaded_file($_FILES['images']['tmp_name'][$key], 'img/' . $val);
}





//leave($test);








?>