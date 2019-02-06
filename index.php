<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Payroll Management System</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/main.css" />
</head>
<body>
<div class="bg">
  <div class="central">
    <h1>SunTech Organisation</h1>

    <div>
      <a style="margin-right:30px; text-decoration: none;" href="guest_homepage.php">
        <button style="width:auto">Login As Guest</button>
      </a>
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login As Admin</button>
    </div>

    <br><br>

    <?php

      if(isset($_GET['msg']))
      {
        echo "<div class=\"col-md-12\"><h3 style=\"color:red\" class=\"central\">Wrong Username or Password</h3></br></div>";
      }
    ?>

    <div id="id01" class="modal">
      <form class="modal-content animate" action="login_handler.php", method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="assets/login.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit">Login</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>