<?php
require_once "model/DBinit.php";
class UserDB {
    public static function ValidCredentials($emso, $pass='') {
        $dbh = DBInit::getInstance();
        $emso = filter_var($emso, FILTER_SANITIZE_STRING);
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);
        $query = "SELECT COUNT(EMSO) FROM drzavljani WHERE EMSO = :emso AND GESLO = :pass";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam('emso', $emso, PDO::PARAM_INT);
        $stmt->bindParam('pass', $pass, PDO::PARAM_STR);

        $stmt->execute();
        $rez = $stmt->fetchColumn(0);

        return $rez == 1;
    }
    public static function validRegister($emso, $pass='', $ponovitev='') {
        if ($emso == "100") {
            return true;
        }
        return false;
    }
    public static function register($emso, $pass='') {
        if ($emso == "100") {
            return true;
        }
        return false;
    }
}

?>