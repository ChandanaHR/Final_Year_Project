<!DOCTYPE html>
<html>
<head>
	<title>CToonify</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/signin.css">
	 <script media="" screen></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

       
</head>
<body style="background-image: url('assets/ng.jfif');">

 <header>
            <a href="index.html" class="logo">
                <img
                src="assets/logo.png"/>
            <!-- <i class="i fas fa-leaf"></i> -->
            </a>


            <div class="controls">
                <!--<h1 id="sign-up">Sign Up</h1>
                <h1 id="sign-in">Sign In</h1>-->

            </div>
        </header>
 <div class="container">

            <div class="container-body">


                <div class="form-container">
                    <div class="sign-in">





     <form action="login.php" method="post">
     	 <i class="fas fa-user"></i>
     	<h2>SignIn</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name :</label>
     	<input type="text" name="uname" placeholder="User Name" class="box"><br>

     	<label>Password :</label>
     	<input type="password" name="password" placeholder="Password" class="box"><br>

     	<button type="submit" >SignIn</button>
     </form>
</div>
</div>
 <div class="image-container">
                    <div class="images">
                        <img src="assets/signupanimate.gif">
                        <img src="assets/loginanimate.gif">

                    </div>

               </div>

               <script type="text/javascript">
            $(document).ready(function () {
            	$('#sign-in').click(function () {
                    $('.sign-in').css('margin-left', '0rem');
                    $('#sign-up').css('margin-top', '1rem');
                    $('.images >img').css('margin-left', '-18rem');
                });
            });
        </script>

</body>
</html>