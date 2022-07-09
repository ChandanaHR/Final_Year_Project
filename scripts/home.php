<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
     <h1>HELLO!!!, <?php echo $_SESSION['name']; ?></h1>
     <h1>ID: <?php echo $_SESSION['id']; ?></h1>
     <h1>LOCATION: <?php echo $_SESSION['Location']; ?></h1>
     <h1>DATE OF BIRTH: <?php echo $_SESSION['Date_of_birth']; ?></h1>
     <h1>PHONE NUMBER: <?php echo $_SESSION['Phone_Number']; ?></h1>
     <h1>Are You Interested in seeing your cartoonified version.......</h1>
     <a href="./dashboard.php">Open Main Part</a>
</body>
</html>

<?php 
}else{
     header("Location: signin.php");
     exit();
}