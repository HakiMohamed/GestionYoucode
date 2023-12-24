<?php

// require '../orm/Orm.php';
// require 'classes/User.php';

class UserModel {
      private $users = [];
      private $orm ;


      public function __construct(){
        
        
        $this->orm= new Orm();
      }
      public function selectAllusers(){
           $result= $this->orm->innerJoinSelect(["users","roles"],['id', 'nom', 'prenom', 'adresse_email', 'mot_de_passe', 'roles.nom_role'],["roles.role_id"=>"users.role_id"],["1"=>"1"]);
           foreach($result as $res){
              $user= new User($res['id'],$res['nom'],$res['prenom'],$res['adresse_email'],$res['mot_de_passe'],$res['nom_role']);
              array_push($this->users,$user);
           }
           return $this->users;

      }
      public function insertUser($data){
        $result= $this->orm->insert("users",$data);
        
        return $result;

   }
   public function deleteUser($id){
    $result= $this->orm->delete("users",$id);
    return $result;
   }
   public function selectOne($id ){
       $id+=0;
       $res =  $this->orm->selectOne("users",$id);
       $user = new User($res['id'],$res['nom'],$res['prenom'],$res['adresse_email'],$res['mot_de_passe'],$res["role_id"]);
       return $user;
   }
   public function updateUser($data,$id){
       $id+=0;
       $res =  $this->orm->update("users",$data,$id);
       return $res;
   }
   function loginUser($password,$email){

    $result= $this->orm->login("users",$password,$email);
    return $result;
   
   }
 }  

// public static function  testInput($data) {
//         $data = trim($data);
//         $data = stripslashes($data);
//         $data = htmlspecialchars($data);
//         return $data;
//       }





