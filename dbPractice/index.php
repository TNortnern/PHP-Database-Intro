<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php 
    $prod = "";
    if (!isset($_POST['name']) || (!isset($_POST['mail']) || (!isset($_POST['product']) || (!isset($_POST['quanity']))))) { ?>
   <h1>Products</h1>
   <hr>
   <div id="form">
        <form method="post">
            <label for="name">Name</label><br>
            <input name="name" type="text"><br>
            <label for="mail">Mailing Address</label><br>
            <input name="mail" type="text"><br>
            <label for="product">Products</label><br>




            <select name="product" class="select">
                <?php
                include "database.php";
                $sql = "select * from products";
                $qry = mysqli_query($db, $sql);

                while ($row = mysqli_fetch_assoc($qry)) {
                    extract($row);
                    

                    

                    echo "<option value='$productName'>$productName</option>";
                }
                
                ?>

            </select>
            <select name="quanity" id="quanity">
                <?php 

                for ($i = 1; $i < 11; $i++) {

                    echo "<option value= '$i'> $i </option>";
                }
                ?>
            </select>
            <br>
            <input type="submit" value="Submit" class="submit">
            <?php 
        } else {
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $product = $_POST['product'];
            $quanity = $_POST['quanity'];
            include "summary.php";
            
        }

        ?>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>

</html> 