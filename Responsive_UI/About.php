<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
            crossorigin="anonymous"
        />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <h2>Emp Information:</h2>
            <div class="row">
                <?php
            $imgData = [
                ["src" => "https://plus.unsplash.com/premium_photo-1661889099855-b44dc39e88c9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZnJlZSUyMGltYWdlc3xlbnwwfDB8MHx8fDA%3D", "title"=> "img1", "description"=> "this is good image"],
                ["src" => "https://images.unsplash.com/photo-1505533321630-975218a5f66f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZnJlZSUyMGltYWdlc3xlbnwwfDB8MHx8fDA%3D ", "title"=> "img2", "description"=> "this is good image"],
                ["src" => "https://images.unsplash.com/photo-1591779051696-1c3fa1469a79?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZnJlZSUyMGltYWdlc3xlbnwwfDB8MHx8fDA%3D", "title"=> "img3", "description"=> "this is good image"]
            ];
                ?>
                <?php
                     foreach($imgData as $y) {
                        // echo "<img href=\"" . $y["src"] . "\">";
                        echo '<div class="col-sm-3 col-md-3 col-xs-3 col-lg-3">';
                        echo '<div class="card">';
                        echo '<img src="' . $y["src"] . '" class="card-img-top" alt="' .$y["title"]. '">';
                        echo '<div class="card-body">';
                        echo '<h4 class="card-title">' .$y["title"]. '</h4>';
                        echo '<p class="card-text">' .$y["description"]. '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                     }
                ?>

            </div>
        </div>
    </body>
</html>
