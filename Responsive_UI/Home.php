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
        <?php
            $data = [
                ["ID" =>1, "Name"=> "Akash", "Email"=>"akashatcode@gmail.com", "Age"=>21]
            ];
        ?>
        <div class="container-fluid text-light bg-dark text-center p-3">
            <h1>Web Portal</h1>
        </div>
        <div class="container-fluid">
            <div class="nav float-right">
                <div class="nav-item">
                    <a href="" class="nav-link">Home</a>
                </div>
                <div class="nav-item">
                    <a href="./About.html" class="nav-link">About</a>
                </div>
                <div class="nav-item">
                    <a href="./Contact.html" class="nav-link">Contact</a>
                </div>
                <div class="nav-item">
                    <a href="./Services.html" class="nav-link">Services</a>
                </div>
            </div>
            <div class="container-fluid">
                <table class="table table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                    </tr>
                    <?php
                        foreach($data as $x) {
                            echo "<tr>";
                            echo "<td>" . $x["ID"] . "</td>";
                            echo "<td>" . $x["Name"] . "</td>";
                            echo "<td>" . $x["Email"] . "</td>";
                            echo "<td>" . $x["Age"] . "</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>
