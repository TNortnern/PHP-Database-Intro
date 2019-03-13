<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="styles.css">
    <title>Summary</title>
</head>

<body>
    <h1>Summary of your order</h1>
    <hr>
    <div id="form">
        <form method="POST" action="orders.php">
            <label for="name">Name</label><br>
            <?php echo "<input name='name' type='text' value= '$name'>" ?><br>
            <label for="mail">Mailing Address</label><br>
            <?php echo "<input name='mail' type='text' value= '$mail'>" ?><br>
            <label for="product">Product</label><br>
            <select name="product" class="select">
                <?php 
                include "database.php";
                $sql = "select * from products";
                $qry = mysqli_query($db, $sql);
                while ($row = mysqli_fetch_assoc($qry)) {
                    extract($row);
                    

                    
                    if($productName == $product){
                    
                    echo "<option value='$product' selected>$product</option>";
                    }
                    else{
                        echo "<option value='$productName'>$productName</option>";
                    }
                }
                
                
               
                
                
                ?><br>
            </select><br>
            <label for="quanity">Quanity</label><br>
            <?php echo "<input name='quanity' type='text' value= $quanity>" ?><br>
            <input class="submit" type="submit" value="Order">
    </div>
    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>

</html> 