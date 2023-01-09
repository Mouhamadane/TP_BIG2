<?php
require_once("./database/connexion.php");
require_once("./Etudiant.php");
global $connect;

// instanciation et surcharge 

$etudiant = new Etudiant(
   [
      "name"=>"Mouhamadane",
      "lastname"=>"Mboup",
      "email"=>"danelegrand@gmail.com",
      "datedenaissance"=>"01/02/1987"
   ]
);

// Connexion à la base de données
// Ajouter un etudiant dans ma base de données



