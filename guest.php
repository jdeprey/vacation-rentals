<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guest Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li class="active">
                    <a href="guest.php">Guests</a>
                </li>
                <li>
                    <a href="host.php">Hosts</a>
                </li>
                    </ul>
                </li>
            </ul>
            <div class="jumbotron well">
                <h2>
                    Welcome Guest
                </h2>
                <p>
                    Book your dream vacation.
                </p>
            </div><span class="label label-default"></span>
        </div>
    </div>
</div>
<div class="container">
  <h2>Sign Up</h2>
  <form action="book_it.php" method="post" role="form" class="form-horizontal">
    <div class="form-group">
      <div class="col-sm-3"><label>First name</label><input id="first_name" name="first_name" type="text" class="form-control" placeholder="First"></div>
      <div class="col-sm-3"><label>Last name</label><input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last"></div>
      <div class="col-sm-3"><label>Email</label><input id="email" name="email" type="text" class="form-control" placeholder="Email"></div>
    </div>
      <div class="col-sm-3">
        <button type="submit" class="btn btn-info pull-left">Sign Up</button>
      </div>
    </div>
  </form>
  <hr>
</div>
</html>