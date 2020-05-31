<html>
<body>
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
</body>

<body>
<div class="Confirm">


Thank You! <?php echo $_POST["fname"];?><br>
From <?php echo $_POST["company"];?><br>
I will email you back at: <?php echo $_POST["email"]; ?><br>
Your Message:<?php echo $_POST["message"];?>
</div>
</body>
</html>