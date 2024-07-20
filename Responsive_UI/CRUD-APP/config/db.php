<?php
$conn = mysqli_connect('localhost', 'root', '', 'crud_db');
if(!$conn){
    echo "connection error: ".mysqli_error($conn);
}
?>