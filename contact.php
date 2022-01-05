<?php

if  ( isset ($_GET['Nom'])){

    $Nom =$_GET['Nom'];

}

if  ( isset ($_GET['Prénom'])){

    $Prénom =$_GET['Prénom'];

   
}
if  ( isset ($_GET['mailNom'])){

    $mailNom =$_GET['mailNom'];

}

if  ( isset ($_GET['phonenumber'])){

    $phonenumber = $_GET['phonenumber'];

    
}
if  ( isset ($_GET['address'])){

    $address =$_GET['address'];

   
}

$formulaire =  [
    "Nom" => $Nom,
    "Prénom" => $Prénom,
    "mailNom"=> $mailNom,
    "phonenumber"=> $phonenumber,
    "address"=> $address,
];



print_r($formulaire);

if(empty($name) || empty($surname) || empty($adresse) || empty($tel) || empty($email)){
    echo "tous les champs sont requis";
}
?>

?>


