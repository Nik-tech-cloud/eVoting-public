<?php
require_once "ViewHelper.php";
require_once "controllers/UserController.php";
require_once "controllers/StrankaController.php";

define("BASE_URL", $_SERVER["SCRIPT_NAME"] . "/");
define("STATIC_URL", "http://" . $_SERVER['SERVER_NAME'] . "/hack/evolitve/static/");
$path = isset($_SERVER["PATH_INFO"]) ? trim($_SERVER["PATH_INFO"], "/") : "";
$urls = [
    "" => function () {
        UserController::login();
    },
    "user/login" => function () {
        UserController::login();
    },
    "user/logout" => function () {
        UserController::logout();
    },
    "user/register" => function() {
        UserController::register();
    },
    "user/glas"  => function() {
        UserController::vote();
    },
    "rezultati" => function() {
        ViewHelper::render("view/rezultati.php");
    },
    "static/style.css" => function() {
        ViewHelper::render("static/style.css");
    }
];
try {
    $params = explode("/", $path);
    $param = $params[count($params)-1];

    if (is_numeric($param)) {
        $vars = array(
            "naziv" => StrankaController::getNaziv($param),
            "kratek" => StrankaController::getKratekOpis($param),
            "dolg" => StrankaController::getDolgOpis($param),
            "precednik" => StrankaController::getPrecednik($param),
            "link" => StrankaController::getLink($param),
            "oseba" => StrankaController::getSlikaPredstavinka($param),
            "logo" => StrankaController::getLogo($param)
        );
        $path = "stranka/program";
        StrankaController::program($vars);
    } else if (isset($urls[$path])) {
        $urls[$path]();
    }
} catch (Exception $e){
    echo "error";
}
