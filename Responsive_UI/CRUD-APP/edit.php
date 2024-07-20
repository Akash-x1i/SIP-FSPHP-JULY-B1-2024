<?php
include 'config/db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM dishes WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit <?php echo $row['name'] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<body>
    <?php include "includes/header.php";
    ?>
    <div class="text-center font-weight-bolder bg-dark text-white py-2">Menu</div>
    <form method="POST" action="update.php?id=<?php echo $row['id'];?>" class="my-5 fluid-container py-5 m-0 ">
        <div class="row mx-0">

            <div class="col-sm-6 px-5">
                <div class="form-group">
                    <label class="font-weight-bolder">Name: </label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name'];?>" required>
                </div>
                <br>
                <div class="form-group">
                    <label class="font-weight-bolder">Price: </label>
                    <input type="number" name="price" class="form-control" value="<?php echo $row['price'];?>" required>
                </div>
                <br>
            </div>
            <div class="col-sm-6 px-5">
                <div class="form-group">
                    <label class="font-weight-bolder">Description: </label>
                    <textarea name="description" class="form-control mt-2" rows="5" required><?php echo $row['description'];?></textarea>
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
        </div>
   <?php include 'includes/footer.php'; ?>
