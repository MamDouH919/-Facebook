<?php 
session_start();
if(isset($_SESSION['id']) && $_SESSION['id'] != "") {
} else { 
  header('location:http://localhost/facebook');
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Facebook</title>
        <!-- css files -->
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="done">
<h1 class="done-tit">Login success</h1>
    </div>
    <div class="fullname">
    <h1 class="firstname" ><?php echo $_SESSION['firstname']?></h1>
    <h1 class="lastname"><?php echo $_SESSION['lastname']?></h1>
    </div>
    <div class="-logout">
    <button class="logout" id="logout">LogOut</button>
    </div>
    <script src="js/javas.js"></script>

</body>
</html>