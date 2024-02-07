<?php 

require 'DBConnect.php';
$conn = DBConnect::getInstance()->getConnection();
$sql = 'SELECT COUNT(id) AS prodCount FROM Product';
$sth = $conn->prepare($sql);
$sth->execute(); 
$result = $sth->fetch(PDO::FETCH_OBJ);
printf('<p>We have %d courses currently available.</p>', $result->prodCount);
echo "<p>View our <a href='short.php'>short</a> or <a href='long.php'>long</a> courses";


// class product {
//     public $id;
//     public $name;
//     public $price;
//     public $description;
//     public $featuredImage;
//     public $requiresDeposit;

// }


// try{
//     $dbh = new PDO("mysql:host=mariadb,dbname=ShoppingCart", "root", "root");
//     // $sth = $dbh->query("SELECT * FROM Product");
//     // var_dump($sth->fetchAll(PDO::FETCH_ASSOC, "Product"));


//     //Prepared statement
// //     $sql = 'SELECT * FROM Product WHERE price < :price AND requiresDeposit = :deposit';
// //     $sth = $dbh->prepare($sql);
// // $sth->execute(['price'=>100, 'deposit'=>false]);
// // $result = $sth->fetchAll (PDO::FETCH_OBJ);

// // printf('<p>%s (€%.2f) </p>', $row->name, $row->price);

// // }

// // Inserting a record into a table

// // $sql = 'INSERT INTO Product (name, price, description, featuredImage, requiresDeposit) VALUES
// //  (:name, :price, :description, : featuredImage, : requiresDeposit)';
// // $sth = $dbh->prepare ($sql);
// // $sth->execute ([
// //      'name'=> 'My New Product',
// //     'price'=>110,
// //      'description'=>'This is some new product',
// //      ' featuredImage'=>'some_image.png',
// //      'requiresDeposit'=>0
// //  ]);
// //  printf('<p>%d rows inserted into database</p>', $sth→>rowCount());

// // Updating a product 
// // $sql = 'UPDATE Product SET price = price WHERE id = :id';
// // $sth=$dbh->prepare ($sql);
// // $sth->execute(['price'=>90, 'id'=>7]);

// // printf('<p>%d rows updated  in the database.</p>', $sth->rowCount());

// // Deliting a record
// $sql = 'DELETE FROM Product WHERE id >= :id';
// $sth = $dbh->prepare($sql);
// $sth->execute( ['id' => 5]);
// printf('<p>%d rows deleted from database.</p>', $sth->rowCount ()) ;

// } catch (PDOException $e) {
//     echo $e->getMessage();
// }
