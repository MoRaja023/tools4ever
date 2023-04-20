<?php  
require 'database.php';
var_dump($_POST);

die;

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    // echo "verkeerde request method gebruikt";
    include '405.php';
    exit;
}

$naam = $_POST['naamProduct'];
$categorie = $_POST['categorieProduct'];
$prijs = $_POST['prijsProduct'];
$merk = $_POST['merkProduct'];

$sql = "INSERT INTO tools (tool_name, tool_category, tool_price,tool_brand) VALUE ('$naam','
VALUES ('$naam', '$categorie', '$prijs', '$merk' )";

if (mysqli_query($conn, $sql)) {
    header("location: tools-overzicht.php");
    exit;
}
?>