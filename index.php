<?php
require_once("./database/connexion.php");
require_once("./Etudiant.php");
global $connect;

// instanciation et surcharge 

$etudiant = new Etudiant(
   [
      "name"=>"Ibrahima",
      "lastname"=>"Mbaye",
      "email"=>"danelegrand@gmail.com",
      "datedenaissance"=>"01/22/1977"
   ]
);

// Connexion à la base de données
// Ajouter un etudiant dans ma base de données
// INSERT INTO `etudiant` (`Nom`, `Prenom`, `Email`, `Birthday`) VALUES (?,?,?,?)

$query = $connect->prepare('INSERT INTO `etudiant` (`Nom`, `Prenom`, `Email`, `Birthday`) VALUES (?,?,?,?)');
$result = $query->execute([
   $etudiant->getName(),
   $etudiant->getLastName(),
   $etudiant->getEmail(),
   $etudiant->getDateDeNaissance()
]);

if($result){
   $message = "ajouté avec succés";
} else{
   $message = "une erreur";
}

// Home WOrk
// SELECT count(*) as nbr FROM `etudiant` WHERE email = '".$etudiant->getEmail()."'















// 

// une requête préparée 



// Recupérer la liste de tous les étudiants 
// SELECT * FROM `etudiant` ORDER BY `Nom`
// $listQuery = $connect->query("SELECT * FROM `etudiant` WHERE 1");
// while($data = $listQuery->fetch(PDO::FETCH_ASSOC)){






