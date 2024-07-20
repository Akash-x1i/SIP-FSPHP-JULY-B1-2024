
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurant</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    </head>
    <body>
        <?php
            include "config/db.php";
            include 'includes/header.php';
        ?>
        <div class="container-fluid my-5">
            <div class="text-center font-weight-bolder bg-dark text-white py-2">Menu</div>
            <?php
            $sql = "SELECT * FROM dishes";
            $result = $conn->query($sql);
        
        
            if($result -> num_rows> 0){
                echo "<table class='table mt-3'>";
                echo "<tr><th>ID</th> <th>Name</th> <th>Price</th><th>Description</th><th>Edit</th></tr>";
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>" .$row["id"]. "</td>";
                    echo "<td>" .$row["name"]. "</td>";
                    echo "<td>" .$row["price"]. "</td>";
                    echo "<td>" .$row["description"]. "</td>";
                    echo "<td><a href='edit.php?id=" . $row['id'] . "'><i class='fas fa-edit'></i> </a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo '<div class="p-4 my-4 text-center border"><h4>No Data Found</h4></div>';
            }
            ?>
        </div>
        <div class="text-center font-weight-bolder bg-dark text-white p-2 mx-3">Add Dishes</div>
        <form action="add.php" method="post" class="fluid-container py-5 m-0 ">
            <div class="row mx-0">

                <div class="col-sm-6 px-5">
                    <div class="form-group">
                        <label class="font-weight-bolder">Name: </label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="font-weight-bolder">Price: </label>
                        <input type="number" name="price" class="form-control" required>
                    </div>
                    <br>
                </div>
                <div class="col-sm-6 px-5">
                    <div class="form-group">
                        <label class="font-weight-bolder">Description: </label>
                        <textarea name="description" class="form-control mt-2" rows="5" required></textarea>
                    </div>
                    <br>
                </div>
            </div>
            <div class="fluid-container row mx-0 px-5">
                <div class="col-sm-4"></div>
                <button type="submit" class="col-sm-4 btn btn-info px-4">Submit</button>
                <div class="col-sm-4"></div>
            </div>
        </form>
<?php
include 'includes/footer.php';
?>
</body>
</html>


