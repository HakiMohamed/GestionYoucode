<?php

class Regester
{
    function regesterPage()
    {
        include 'view/regester.php';
    }
    function loginPage()
    {
        include 'view/login.php';
    }
    function login()
    {
        extract($_POST);
        $user = new UserModel();
        $result = $user->loginUser($password, $email);
        if ($result){
            echo "success";
            $_SESSION['role']=$result['role_id'];
            $_SESSION['id']=$result['id'];
            header("Location:index.php");
        }
        else
            "echo password or email wrong";
    }
}
