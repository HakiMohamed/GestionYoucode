<?php

require_once 'autoloader/Autoloader.php';
require_once 'controller/UserController.php';
require_once 'controller/Regester.php';
Autoloader::autoload();
session_start();
if (isset($_SESSION["role"])) {

  if ($_SESSION["role"] == "2") {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
      $a = new UserController();
      $a->update();
    } else
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $a = new UserController();
        $a->insert();
      } else if (isset($_GET['delid'])) {
        $a = new UserController(); 



        

        $a->delete();
      } else if (isset($_GET['editid'])) {
        $a = new UserController();
        $a->edit();
      } else {
        if (isset($_GET['action'])) {
          switch ($_GET['action']) {
            case 'create':
              $a = new UserController();
              $a->create();
              break;
          }
        } else {

          $a = new UserController();
          $a->showUser();
        }
      }
  } else if ($_SESSION["role"] == "1") {

   
        $a = new UserController();
        $a->profile();
      
  }
}  








// no regtred
      else {
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nom'])){
          $a = new UserController();
          $a->insert();

       }
       else if($_SERVER['REQUEST_METHOD'] == 'POST' ){
          $a = new Regester();
          $a->login();

       } 
         else if (isset($_GET['action'])){
        $a = new Regester();
        $a->loginPage();
       } else{
          $a = new Regester();

        $a->regesterPage();}

      }
