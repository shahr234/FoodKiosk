<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel ="stylesheet" href="login.css">
<style>

</style>
</head>
<body>

  <div class="background-containter"> </div>



<h2>Login Form</h2>


  <div class="container">
    <form name="form" action="check-db.php" method="POST">
    <label for="uname"><b>Email address </b></label>
    <input type="text" placeholder="Email address" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>

  </form>

    <a href="index.html">
      <button type="button">Home</button>
  </a>
  </div>
  
</form>

</body>
</html>

