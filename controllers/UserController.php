<?php

require_once("model/UserDB.php");
require_once("controllers/StrankaController.php");

class UserController {
    public static function register() {
        if (isset($_COOKIE['emso'])){
            ViewHelper::render("view/register.php");
        }
        else if (UserDB::validRegister($_POST["emso"], $_POST["geslo"], $_POST["ponovitev"])) {
            UserDB::register($_POST["emso"], $_POST["geslo"]);
            setcookie("emso", $_POST["emso"], time() + 3600, "/");
            $values = array( StrankaController::getKratekOpis(1) );
            ViewHelper::render("view/glasuj.php", $values);
        } else {
            ViewHelper::render("view/register.php");
        }
    }
    public static function login() {
        if (isset($_COOKIE['emso'])) {
            ViewHelper::render("view/glasuj.php");
        }
        else if (UserDB::ValidCredentials($_POST["emso"], $_POST["password"])) {
            setcookie("emso", $_POST["emso"], time() + 3600, "/");
            ViewHelper::render("view/glasuj.php");
        } else {
            ViewHelper::render("view/login.php");
        }
    }
    public static function logout() {
        unset($_COOKIE['emso']); 
        setcookie('emso', null, -1, '/');
        ViewHelper::render("view/login.php");
    }
    public static function vote() {
        ViewHelper::render("view/rezultati.php");
    }
}

?>