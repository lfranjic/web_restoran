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
                <li class="active"><a href="reviews.php">Reviews</a></li>
                <li><a href="reservations.php">Reservations</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
          </div>
        </div>
    </nav>
</header>
<main>
    <div class="container">
        <h2>Reviews</h2>
        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-heading">Ye West</div>
            <div class="panel-body">"An absolutely fantastic up-and-coming restaurant. Never have I seen such friendly and capable staff. They've won a usual thanks to their exquisite food."</div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">Emma Mackey</div>
            <div class="panel-body">"If I had to complain about anything, it would be that I could not get enough of their macaroons. The desserts in this newly established restaurant are fenomenal. I'll be sure to bring my friends here for brunch next time."</div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">Andrew Garfield</div>
            <div class="panel-body">"I somehow stumbled upon this place during one of my projects, but am I glad I did. Wow! Never would I have thought that their dessert pizza would be this tasty. They also have one of, if not the best views around here."</div>
          </div>
        </div>
        <span class="heading">User Rating</span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <p>4.1 average based on 254 reviews.</p>
          <hr style="border:3px solid #f1f1f1">

          <div class="row" id="ratings">
            <div class="side">
              <div>5 star</div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-5"></div>
              </div>
            </div>
            <div class="side right">
              <div>150</div>
            </div>
            <div class="side">
              <div>4 star</div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-4"></div>
              </div>
            </div>
            <div class="side right">
              <div>63</div>
            </div>
            <div class="side">
              <div>3 star</div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-3"></div>
              </div>
            </div>
            <div class="side right">
              <div>15</div>
            </div>
            <div class="side">
              <div>2 star</div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-2"></div>
              </div>
            </div>
            <div class="side right">
              <div>6</div>
            </div>
            <div class="side">
              <div>1 star</div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-1"></div>
              </div>
            </div>
            <div class="side right">
              <div>20</div>
            </div>
          </div>
      </div>
</main>
<footer>
    <p>cc L.F.</p>
</footer>
</body>
</html>