<?php
$con = mysqli_connect("localhost", "root", "", "portfolio");

if (!$con) {
    echo "connection error: " . mysqli_error($con);
}

?>