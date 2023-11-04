
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color: black;
    }

    /* Change the color of the active link */
    .navbar-nav > .active > a,
    .navbar-nav > .active > a:hover,
    .navbar-nav > .active > a:focus {
        background-color: #ddd;
        color: black;
    }

    /* Change the color of the link when hover */
    .navbar-nav > li > a:hover, 
    .navbar-nav > li > a:focus {
        background-color: #555;
        color: white;
    }

    /* Change the color of the brand link */
    .navbar-header > .navbar-brand {
      color: white;
    }

    /* Change the color of the toggle icon */
    .navbar-inverse .navbar-toggle .icon-bar {
      background-color: white;
    }

    /* Add hover and focus effect to the toggle icon */
    .navbar-inverse .navbar-toggle:hover,
    .navbar-inverse .navbar-toggle:focus {
      background-color: #4CAF50;
    }

    /* Add margin to form group */
    .form-group {
      margin: 10px 0;
    }
    
    /* Add width to labels */
    .col-sm-3 {
      width: 100px;
    }
    
    /* Add margin to submit button */
    .btn-primary {
      margin-top: 20px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">BULFA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Manage</a></li>
        <li><a href="#">Menu</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container">
    <h1>Create Menu</h1>      
  </div>
</div>

<div class="container">
  <form>
    <div class="form-group row">
      <label for="Mname" class="col-sm-3 col-form-label">Menu Name:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="Mname">
      </div>
    </div>
    <div class="form-group row">
      <label for="Mdesc" class="col-sm-3 col-form-label">Menu Description:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="Mdesc">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
