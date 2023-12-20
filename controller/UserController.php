<?php 
    class UserController{

          public   function showUser ()
          {
            $user =new UserModel();
            $result= $user->selectAllusers();
            require_once 'view/liste_user.php';           
           }

           public   function  create ()
               {
                
                require_once 'view/create_page.php';         
              }
            public function  insert(){
                 extract($_POST);
                 $user =new UserModel();
                  $res = $user->insertUser(["nom"=>$nom ,"prenom"=>$prenom ,"adresse_email"=>$email ,"mot_de_passe"=>$password , "role_id"=>1]);
                  if($res){
                    header('Location:./index.php');
                  }else echo "somthins is wrong";
            }
        

          public function delete(){
           $id = $_GET['delid'];
           $user = new UserModel();
           $res = $user->deleteUser($id);
           if($res){
            header('Location:./index.php');
            }
          }
          public function edit(){
            $id = $_GET['editid'];
            $user = new UserModel();
            $result = $user->selectOne($id);
            require_once 'view/edit_user.php';       
          }
          public function update(){
            extract($_POST);
            $user =new UserModel();
            $res = $user->updateUser(["nom"=>$nom ,"prenom"=>$prenom ,"adresse_email"=>$email ,"mot_de_passe"=>$password , "role_id"=>1],$id);
            if($res){
              header('Location:./index.php');
            }else echo "somthins is wrong";
               
          }
          public function profile(){
            $id = $_SESSION['id'];
            $user = new UserModel();
            $result = $user->selectOne($id);
             include 'view/profile.php';
               
          }
           
    }

   
           
   