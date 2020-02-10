<?php
class controllerAdmin {
    // error page
    public static function error404() {
        include_once ("viewAdmin/error404.php");
    }
    public static function formLoginSite() {
        include_once "viewAdmin/formLogin.php";
    }
    public static function loginAction() {
        $logIn = false;
        $logIn = modelAdmin::userAuth();
        if($logIn == true) {
            include_once 'viewAdmin/startAdmin.php';
        }else {
            $_SESSION['errorString'] = 'Invalid E-mail or password';
            include_once 'viewAdmin/formLogin.php';
        }

    }
    public static function logoutAction() {
        modelAdmin::userLogout();
        include_once "viewAdmin/formLogin.php";
    }
}