<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$servername = "localhost";
$username ="root";
$password ="";

$conn = new mysql($servername,$username,$password);

if (!$conn) {
    die("connection faied: " . mysqli_connection_error());
}

$select_base = mysqli_select_db($conn, 'user_bank');

if (!$select_base ) {
    die("could not select databse: " . mysqli_error($conn));
}

$sql = "SELECT Bild, Namn, Bankkonto, Saldo FROM user_info";
$result = mysqli_query($conn, $sql)

if (mysqli_num_rows($result) > 0) {
    while($row = msqli_fetch_assoc($result)) {
        echo"<tr>"
        echo"<td><img src='" , $row["Bild"] , "'alt='Bild' style='width:100px;height:100px;'><'</td>"""
        echo"<td>" , $row["Namn"] , "</td>"
        echo"<td>" , $row["Bankonto"] , "</td>";
        echo"<td>" , $row["Saldo"] , "</td>";
        echo"</tr>"
        
    }
}

?>

    
</body>
</html>