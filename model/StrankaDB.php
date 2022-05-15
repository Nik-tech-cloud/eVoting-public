<?php
require_once "model/DBinit.php";
class StrankaDB {
    public static function getInfo($id, $info) {
        $dbh = DBInit::getInstance();
        $query = "SELECT $info FROM stranke WHERE ID_STRANKE = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam('id', $id, PDO::PARAM_INT);
        $stmt->execute();
 
        return $stmt->fetchColumn(0);
    }
    public static function getIds() {
        $dbh = DBInit::getInstance();
        $query = "SELECT ID_STRANKE FROM stranke";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>