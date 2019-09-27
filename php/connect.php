<?php
    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "1milion";

    $conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
    mysqli_query($conn,"set NAMES utf8");

?>