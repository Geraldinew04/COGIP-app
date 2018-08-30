<?php
require_once('connect.php');
$titre = "Nouveau contact";

$query = "SELECT nom,id
FROM societe
ORDER BY societe.nom
ASC ";
$stmt = $db->query($query);
$societes = $stmt->fetchAll();

// Si utilisation du bouton "Ajouter dans le contact"
    if(isset($_POST['btn'])){
      var_dump($_POST);
        $lname = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
        $fname = filter_var($_POST['prenom'], FILTER_SANITIZE_STRING);
        $phone = filter_var($_POST['telephone'], FILTER_SANITIZE_NUMBER_INT);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $val_email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $societe = $_POST['societe'];
        $btn_delete = isset($_POST['btn_delete']);

    if(!empty($lname) && !empty($fname) && !empty($phone) && !empty($val_email)) {
            //insérer nouvelles données 
            $add_value = $db->query
            ('INSERT INTO personne(nom, prenom, telephone, email, societe_id) VALUES("'.$lname.'", "'.$fname.'", "'.$phone.'", "'.$email.'", "'.$societe.'")');
    
        }else{
            echo "ERROR";
        }
    
        echo "<a href='../index.php?page=lesgens_ajouter'> Retour </a>" ;
} ?>