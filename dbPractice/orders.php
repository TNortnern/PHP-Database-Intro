<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<link rel="stylesheet" href="styles.css">
<title>Orders</title>
</head>
<body>
<h1>Order Summary</h1>
<hr>
<div style="text-align:center">
<?php
    $name = $_POST['name'];
    $product = $_POST['product'];
    $mail = $_POST['mail'];
    $quanity = $_POST['quanity'];
    echo "Thank you for ordering <b>$name</b>!<br>";
    echo "We'll be sending <b>$quanity $product</b> to $mail.";
?>
</div>
<div class="center">
<a href="index.php"><button>Order again</button></a>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>