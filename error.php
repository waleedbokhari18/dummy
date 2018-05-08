<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
    <title>Diplux</title>
</head>
<body>
  <!-- navbar -->
  <div class="navigationbar">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

     <a class="navbar-brand" id="brand" href="index.html"><img src="img/shopping-cart.png">Duplix</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product1.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="login.php">Log In</a>
      </li>
    </ul>
    <div class="cart">
      <a class="nav-link" href="#"><img src="img/shopping-cart1.png">Cart</a>
    </div>
      <div class="social-icon">
           <a href="#"><img src="img/facebook.png"></a>
           <a href="#"><img src="img/instagram.png"></a>
           <a href="#"><img src="img/twitter.png"></a> 
        </div>

    </nav>
      </div>
<!-- page -->
<div class="mainf col-md-12">
<div class="alert alert-warning" role="alert">
  Invalid Username and Password! Please enter a correct one!
</div>

    <div class="col-md-4 logini left">
        <img src="img/login.png">
    </div>
    <div class="loginp col-md-4 right">
        <form action="validation.php" method="post">
            <fieldset>
                <legend>LOG IN</legend>
            Username<input type="text" placeholder="Enter Username" name="uname" required><br>
            Password <input type="password" placeholder="Enter Password" name="psw" required><br>
            <input type="checkbox"> Remember me<br>
            <input type="submit" class="btn btn-primary btno" value="Login" /><br>
            <a href="#"> Forgot password?</a><br>
        <a class="btn btn-primary btno" href="signup.php">Sign Up</a>
    </fieldset>
</form>
    </div>
</div>
<!-- footer -->
<div class="main-footer col-md-12 clearfix">
  <div class="dbox col-md-3 left">
  <p>LET US HELP YOU</p>
  <ul>
    <li><a href="#">Help Center</a></li>
    <li><a href="#">How to shop on diplux</a></li>
    <li><a href="#">Track your order</a></li>
    <li><a href="#">Co-operate & Bulk purchasing</a></li>
    <li><a href="#">Return & refund</a></li>
    <li><a href="#">Contact us</a></li>
  </ul>
  </div>
  <div class="dbox col-md-3 left">
  <p>GET TO KNOW US</p>
  <ul>
  <li><a href="#">About Us</a></li>
  <li><a href="#">Careers</a></li>
  <li><a href="#">Terms & Conditions</a></li>
  <li><a href="#">Privacy Agreement</a></li>
  <li>NTN Number : 4012118-6</li>
  <li>STRN Number : 1700401211818</li>
  </ul>
  </div>
  <div class="dbox col-md-2 left">
    <p>DIPLUX INTERNATIONAL</p>
    <ul>
      <li><a href="#">Bangladesh</a></li>
      <li><a href="#">Myanmar</a></li>
      <li><a href="#">Sri Lanka</a></li>
      <li><a href="#">Nepal</a></li>
      <li><a href="#">India</a></li>
      <li><a href="#">England</a></li>
    </ul>
  </div> 
  <div class="dbox col-md-2 right">
    <p>JOIN US ON</p>
    <li class="left"><a href="#"><img src="img/facebook.png"></a></li>
    <li class="left"><a href="#"><img src="img/twitter.png"></a></li>
    <li class="left"><a href="#"><img src="img/instagram.png"></a></li>
  </div>
  <div class="dbox col-md-2 right">
    <p>PAYMENT METHODS</p>
    <li class="left"><a href="#"><img src="img/visa.png" style="background-color:#1F2124;"></a></li>
    <li class="left"><a href="#"><img src="img/paypal.png" style="background-color:#1F2124;"></a></li>
    <li class="left"><a href="#"><img src="img/mastercard.png" style="background-color:#1F2124;"></a></li>
  </div>                                              
</div>
<script src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>