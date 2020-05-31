
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <div class="container-fluid">
        <?php include('header.php');?>
    </div>
        <?php include('navigation.php');?>
</head>
<body>
<div class="Contact-Form">
<form action="Contactme.php" method="post">
    First Name: <input type="text" name="fname"><br>
    Last Name: <input type="text" name="lname"><br>
    Company Name: <input type="text" name="company"><br>
    Email:<input type="text" name="email"><br>
    Message:<br> <textarea rows="4" cols="50" type="text" name="message"></textarea><br>
<input type="submit">
</form>
</div>
<?php include('Footer.php');?>
</body>
</html>

