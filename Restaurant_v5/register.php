<!DOCTYPE html>
<html lang="en">
<head>
  <title>Il Nuovo Ristorante</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="home.php">Il Nuovo Ristorante</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="reviews.php">Reviews</a></li>
                <li><a href="reservations.php">Reservations</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
          </div>
        </div>
    </nav>
</header>
<main>
    <div class="form-container">
        <h2>Registration</h2>
        <form class="form-horizontal" onsubmit="registerFun()" action="post.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="name" class="form-control" id="name" placeholder="Enter name" name="username">
                </div>
              </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
          </div>
          <div class="form-group" id="form-pass">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-10">          
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="phone">Phone number:</label>
            <div class="col-sm-10">          
              <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
            </div>
          </div>
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
        </form>
      </div>
</main>
<footer>
    <p>cc L.F.</p>
</footer>
</body>
</html>
