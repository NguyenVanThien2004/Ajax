<?php
$op = $_GET["chon"]; // Fix: Use square brackets to access $_GET parameter
if ($op != "") {
    include("database.class.php");
    $dao = new Dao("root", "", "udn"); // Assuming "root", "", "udn" are valid credentials
    $sql = "select * from {$op}";
    $header = "DANH SÁCH {$op}";
    $dao->table($sql, $header);
}
?>
