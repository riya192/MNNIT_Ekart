<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href='css/bootstrap.css'>
  <script src="js/jquery.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.js"></script>
</head>
<body>
<p></p>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-4"><p class='mnnit-ekart-logo'><strong>MNNIT</strong><span class='dotcom'><strong> E-KART</strong></span></p></div>
<div class="col-sm-3"></div>
<div class="col-sm-4"><p class="mnnit-ekart-logo" >mnnit shopping site</p></div>
</div>
<hr>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</nav>
<p></p>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-6-1 carousel slide" id="demo" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="cooler.jpg" alt="cooler" width="600" height="300">
	  <div class="carousel-caption">
    <h3>Cooler!</h3>
    <p>Enjoy coolness in hot scorching summer!</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="books.jpg" alt="books" width="600" height="300">
	  <div class="carousel-caption">
    <h3>Books!</h3>
    <p>Avoid buying new books every semester!</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="cycle.jpg" alt="cycle" width="600" height="300">
	  <div class="carousel-caption">
    <h3>Cycle!</h3>
    <p>Reach for classes on time!</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="col-sm-5">
 <form action="formlogin.php">
  <div class="form-group">
    <label for="email">Username:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary" >Submit</button><br><br>
  <a href="signin.php" target="_blank">      Not Registered? SIGN IN<h2></h2></a>
</form> 
</div>
</div>
</body>
</html>