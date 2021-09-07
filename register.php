<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/style2.css"
</head>
<body>
  <div class="main-div">
    <form method="post" action="reg.php">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter password" name="password">
      </div>
      <div class="form-group">
        <label for="pass-conf">Password Confirm</label>
        <input type="password" class="form-control" id="pass-conf" placeholder="Enter password again" name="pass_conf">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Register" name="Submit">
      </div>
      <div class="form-group">
        <a href="login.php">Have an account!?</a>
      </div>
    </form>
  </div>
</body>
</html>
