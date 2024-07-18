// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "portfolio";

// $conn = new mysqli($servername, $username, $password, $dbname);
// // chech connection
// if ($conn -> connect_error) {
//     die("connection failed: ". $conn-> connect_error);
// }


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'db.php'; ?>
    <div class="carousel slide" data-ride="carousel" id="carousel">
        <ol class="carousel-indicators">
            <?php 
                $sql = "SELECT * FROM caraousel_image";
                $result = $con -> query($sql);
                if ($result -> num_rows > 0 ) {
                    $status = true;
                    $i=0;
                    while($row = $result -> fetch_asssoc()){
                        echo '<li data-target = "#carousel" `data-slide-to="'.$i . '" class="'.($status?"active":"").'></li> ';
                        $status = false;
                        $i++;
                    }
                }
            ?>
        </ol>
        <!-- carousel image show -->
    </div>
</body>
</html>