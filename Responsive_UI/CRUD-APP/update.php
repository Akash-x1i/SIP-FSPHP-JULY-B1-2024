<?php
include 'config/db.php';


$id = $_GET['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];


$sql = "UPDATE dishes SET name='$name', price='$price', description='$description' WHERE id=$id";
if($conn-> query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: ".$sql. "<br>".$conn->error;
}
?>
