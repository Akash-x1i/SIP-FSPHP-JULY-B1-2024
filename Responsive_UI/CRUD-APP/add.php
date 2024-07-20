<?php
include 'config/db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "INSERT INTO dishes(name,price,description) VALUES ('$name','$price','$description')";

    if($conn->query($sql) === TRUE){
        header("Location:index.php");
        exit();
    }
    else {
        echo "error: ".$sql."<br>".$conn->error;
    }
}
$conn->close();
?>