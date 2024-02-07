<?php 
try{
$dbh = new PDO("mysql:host=mariadb;dbname=ShoppingCart", "root", "root");
$sth = $dbh->query("SELECT * From product");
var_dump($sth->fetchAll())
} catch (PDOException $e) {
    echo $e->getMessage();
}