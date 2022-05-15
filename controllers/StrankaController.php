<?php

require_once("model/StrankaDB.php");
require_once("model/StrankaDB.php");

class StrankaController {
    public static function getNaziv($id) {
        return StrankaDB::getInfo($id, "NAZIV_STRANKE");
    }
    public static function getKratekOpis($id) {
        return StrankaDB::getInfo($id, "OPIS1");
    }
    public static function getDolgOpis($id) {
        return StrankaDB::getInfo($id, "OPIS2");
    }
    public static function getPrecednik($id) {
        return StrankaDB::getInfo($id, "PREDSEDNIK");    
    }
    public static function getLink($id) {
        return StrankaDB::getInfo($id, "LINK");    
    }
    public static function getSlikaPredstavinka($id) {
        return StrankaDB::getInfo($id, "PATH_IMAGE1");    
    }
    public static function getLogo($id) {
        return StrankaDB::getInfo($id, "PATH_IMAGE2");    
    }
    public static function getIds() {
        return StrankaDB::getIds();    
    }
    public static function program($vars) {
        return ViewHelper::render("view/predstavitev.php", $vars);    
    }
}

?>