<?php

ob_start(); //output buffering
session_start();

date_default_timezone_set("America/New_York");

try {
        $con = new PDO ("mysql:dbname=fflix;host=localhost", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}

catch (PDOException $e) {
        exit("CONNECTION FAILED: " . $e->getMessage());

}

?>