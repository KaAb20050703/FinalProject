<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="#" method="post" enctype="multipart/form-data">
  <label for="fname">First name</label> <br>
  <input type="text" name="fname" placeholder="John"> <br> <br>

  <label for="banknummer"> Bank Konto Nummer </label>  <br> 
  <input type="text" name="banknummer" placeholder="50 characters max"> <br> <br>

  <label for="saldo"> Saldo </label> <br>
  <input type="text" name="saldo" placeholder="xxxx">

  <label for="bild"> Bild på dig </label> <br>
  <input type="file" name="bild"> <br>

  <input type="submit" name="submit" value="Spara">

</form>

<?php 
//connection till mysql servern
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_bank";

// Skapa anslutning till databasen
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


// Skapa databas
// $sql = "CREATE DATABASE user_bank";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }

// Skapa tabell
// $sql = "CREATE TABLE user_info (
//   namn VARCHAR(30) NOT NULL,
//   Bankkonto VARCHAR(34) NOT NULL,
//   saldo VARCHAR(50) NOT NULL,
//   picture VARCHAR(50) NOT NULL,
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )"; 

// if (mysqli_query($conn, $sql)) {
//   echo "Table user_info created successfully";
// } else {
//   echo "Error creating table: " . mysqli_error($conn);
// }


// $sql = "INSERT INTO user_info (namn, Bankkonto, saldo, picture)
// VALUES ('John Doe', '1234567890', '1000', 'path/to/image.jpg')";

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

$target_dir ="../bilder/";
$target_file = $target_dir . basename($_FILES{"bild"}{"name"});
$uploaddoc = 1;

$target_dir2 ="../bilder/";
$target_file2 = $target_dir . basename($_FILES{"bild"}{"name"});

$name = $_POST["fname"];
$banknummer = $_POST["banknummer"];
$saldo = $_POST["saldo"]

if (isset{$POST["submit"]}){

  if(empty($name)){
    echo"Name can't be empty";

  }

  if(empty($banknummer)){
    echo"Banknumber can't be empty";
  
  }

  elseif(strlen($banknummer) < 4 || strlen($banknummer) > 34){

  }

  if(empty($Saldo)){
    echo"Balance can't be empty";

  }

  if(mysqli)

?>

</body>
</html>
