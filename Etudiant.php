<?php
class Etudiant {
   // Attribut 
   // Encapsulation
   protected $name;
   protected $lastName;
   protected $email; 
   protected $dateNaissance;

   // constructeur et surcharge 
   public function __construct($row=null){
      if($row!=null){
         $this->name = $row["name"];
         $this->lastName = $row["lastname"];
         $this->email = $row["email"];
         $this->dateNaissance = $row["datedenaissance"];
      }
   }
   // Methodes 
   // Getters
   public function getName(){
      return $this->name;
   }
   public function getLastName(){
      return $this->lastName;
   }
   public function getEmail(){
      return $this->email;
   }
   public function getDateDeNaissance(){
      return $this->dateNaissance;
   }
   // Setters
   public function setName($name){
      $this->name = $name;
   }
   public function setLastName($lastName){
      $this->lastName = $lastName;
   }
   public function setEmail($email){
      $this->email = $email;
   }
   public function setDateDeNaissance($dateNaissance){
      $this->dateNaissance = $dateNaissance;
   }

}

