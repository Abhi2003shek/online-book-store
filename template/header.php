<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
    <style>
      .jumbotron{
        background-image: url("image 93.png");
        background-size: cover;
        opacity:0.9;

      }
      </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><font color='orange' size='6'>Prog daily </font></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href='admin.php'> <font color='orange' size='4'>Login </font></a></li>
              <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp;<font color='orange' size='4'> Publisher</font></a></li>
              <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp;<font color='orange' size='4'> Books</font></a></li>
              <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;<font color='orange' size='4'> Contact</font></a></li>
              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;<font color='orange' size='4'> My Cart</font></a></li>
            </ul>
        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <div class="jumbotron">
      <div class="container">
        <h1> <font color="white"><b>"Hello World!!"..Welcome to the world of Programming </b></font></h1>
       <font color="black"> <p class="lead"><b>This site was just an experience to get thrills in life!!!</b></p>
        <p><b>The layout use Bootstrap to make it more responsive. It's just a simple web!</b></p></font>
      </div>
    </div>
    <?php } ?>

    <div class="container" id="main">