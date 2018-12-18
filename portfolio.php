<?php
session_start();

$mysqli = new mysqli("localhost", "root", "alpha", "registration");
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    body {
      background-color: #282828;
      height: 100%;
        font-family: 'Lato', sans-serif;
        color: white;
  }

  #googleMap {
      position: absolute;
        width: 50%;
      margin: auto;

  }

  .button {
      display: inline-block;
      padding: 15px 25px;
      font-size: 24px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      outline: none;
      color: white;
      background-color: #282828;
      border: 2px white solid;
      border-radius: 15px;
      margin-left: 10%;
      width: 80%;
  }

  .button:hover {
      background-color: #212121
  }

  .button:active {
      background-color: #212121;
      transform: translateY(4px);
  }

  .sidebar {
      margin-right: 87%;

  }

  h1 {
      color: white;
      text-align: center;
      bottom: 0;
      position: absolute;
      left: 8px;
      margin: 0;
      font-size: 12px;
      font-family: "Times New Roman", Times, serif;
  }

  h2 {
      color: white;
      left: 30px;
      text-align: left;
      font-size: 30px;
      top: 10;
      margin-left: 17px;

  }

  h3 {
      color: white;
      text-align: center;
      bottom: 0;
      position: absolute;
      left: 158px;
      margin: 0;
      font-size: 12px;
      font-family: "Times New Roman", Times, serif;
  }

  .signout {
      color: white;
      text-align: center;
      bottom: 20;
      position: absolute;
      left: 65px;
      margin: 0;
      font-size: 20px;
      font-family: "Times New Roman", Times, serif;
  }

  a {
      text-decoration: none;
      color: white;
  }


  /* The Modal (background) */
  .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
  }

  /* The Close Button */
  .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
  }

  .close:hover,
  .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
  }


  .modal-header {
      padding: 2px 16px;
      background-color: #282828;
      color: white;
      text-align: center;
  }

  .modal-body {
      padding: 2px 16px;
  }

  .modal-footer {
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
  }

  #myBtn {
      display: inline-block;
      color: white;
      text-align: center;
      bottom: 0;
      position: absolute;
      left: 158px;
      margin: 0;
      font-size: 12px;
      font-family: "Times New Roman", Times, serif;
      cursor: pointer;
  }


 .overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
.menu{
            z-index: 1;
          position: fixed;
        top: 8%;
    right: 2.5%;
    transform: scale(2);
        }
.display{
text-align: center;
        }

 .logout{
        background-color: #282828;
        border: none;
        font-size: 20px;
        position: fixed;
        right: 3%;
        top: 1.5%;
        color: white;
    }
    .profile {
    border: 5px solid white;
    margin: 5px;
    color: white;
    width: 800px;
    height: 850px;
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    font-size: 25px;
    padding: 5px;
}


    </style>
  </head>
  <body>
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p class="display" style="color:white;">Hello! <strong><?php echo $_SESSION['username']; ?> this is the data we collected from you</strong></p>

    <?php endif ?>
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
          <a href="sear.html">Look For Meal</a>
          <a href="portfolio.php">Portfolio</a>
          <a href="index1.html">Service</a>
          <a href="index.php?logout='1'" >Logout</a>
        </div>
        </div>
    <span class="menu" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
    </script>

    <div class="profile">
      <?php
      $sql = "SELECT `username`,`email`,`goal`,`gender`,`healthy`,`weight`,`height`,`age`,`bmi`,`allergy` FROM trail WHERE username = '" . $_SESSION['username'] . "'";
      $result = mysqli_query($mysqli, $sql);
      $row = mysqli_fetch_array($result);

              echo "<div align=\"center\">";
              echo "<br />Your <b><i>Profile</i></b> is: <br />";
              echo "<b>Username:</b> ". $row['username'];
              echo "<br /><b>email:</b> ".$row['email'];
              echo "<br /><b>Name:</b> ".$row['goal'];
              echo "<br /><b>Gender:</b> ".$row['gender'];
              echo "<br /><b>How do you commute? </b> ".$row['healthy'];
              echo "<br /><b>What is your purpose for living healthy?</b> ".$row['weight'];
              echo "<br /><b>Roughly how many calories do you consume?</b> ".$row['height'];
              echo "<br /><b>Do you eat a lot of Junk food?</b> ".$row['age'];
              echo "<br /><b>Are you following any Diets?</b> ".$row['bmi'];
              echo "<br /><b>How many times do you cook at home?</b> ".$row['allergy'];
              echo "</div>"
              ?>
    </div>

  </body>
</html>
