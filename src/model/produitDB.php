<?php
require_once 'db.php';

function addService($nom)
{
    $sql = "INSERT INTO service values(NULL, '$nom')";
    $con = getConnection();

    return $con->exec($sql);
}
#liste de produit
function listProduit(){
    global $base;
    $req = "SELECT * FROM produit";
    return $con->query($req)->fetchAll();
}

#Supprimer produit
function deleteProduit($id){
    global $base;
    $req = "DELETE FROM produit WHERE id = $id";
    return $base->exec($req);
}

#modifier produit
function updateProduit($nom,$qteStock){
   global $base;
    return $base->exec("UPDATE user SET nom = '$nom', qteStock = '$qteStock'");
    }
?>