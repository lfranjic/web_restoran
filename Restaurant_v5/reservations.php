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
                <li class="active"><a href="reservations.php">Reservations</a></li>
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
    <div class="form-container">
        <h2>Reservation</h2>
        <form>
          <div class="form-horizontal" id="res-form">
            <label for="sel1">Select number of people:</label>
            <select class="form-control" id="sel1" name="table">
              <option value="choose">Choose a number</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="6+">6+</option>
            </select>
            <label for="sel2">Select a date for your reservation:</label>
              <input type="date" name="date" id="sel2" min="2022-12-01" max="2200-12-31">
              <br>
            <label for="sel3">Select a time for your reservation:</label>
              <input type="time" required step="1800" id="sel3" min="09:00" max="22:00">
              <br>
              <button style="margin-left: 12.5rem;" type="submit" class="btn btn-default">Submit</button>
          </div>
        </form>
    </div>
</main>
<footer>
    <p>cc L.F.</p>
</footer>
</body>
</html>
