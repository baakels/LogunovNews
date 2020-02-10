<?php

class modelAdmin
{
    public static function userAuth() {

        if(isset($_SESSION['userID'])){
            $logIn=true;
        }else{

            $logIn = false;
            if(isset($_POST['btnLogin'])) {

                if(isset($_POST['Email']) && isset($_POST['Password']) && $_POST['Email'] != "" && !empty($_POST['Password'])){
                   // print_r("Hello! aa");
                    $email =filter_input(INPUT_POST,'Email',FILTER_VALIDATE_EMAIL);
                    $password = $_POST['Password'];
                    $sql = "SELECT * FROM users WHERE Email = '$email'";
                    $db = new Database();
                    $item = $db->getOne($sql);
                  //  print_r($item);
                    if ($item) {
                        if (password_verify($password,$item['Password'])) {
                            $_SESSION['userID'] = $item['id'];
                            $_SESSION['username'] = $item['username'];
                            $_SESSION['status'] = $item['status'];

                            $_SESSION['session_id'] = session_id();
                            $logIn=true;
                        }
                    }
                }
            }
        }
        return $logIn;
    }

    public static function userLogout() {
        unset($_SESSION['userID']);
        unset($_SESSION['username']);
        unset($_SESSION['status']);
        unset($_SESSION['session_id']);
        session_destroy();
        return ;
    }
}