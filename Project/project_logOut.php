<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adopt A-Cat/Dog</title>
  <link rel="stylesheet" href="project_CSS.css">
</head>

<body>

  <!-- Header -->
  <?php
  include 'header.html'
  ?>

  <div class="Container">

    <!-- Side Menu -->
    <aside>
      <ul class="aside_list">
        <li class="aside_list_content"><a class="nav_side" href="project_main.php">Home Page</a></li>
        
        <li class="aside_list_content"><a class="nav_side" href="project_find.php">Find a Dog/Cat</a></li>
        <li class="aside_list_content"><a class="nav_side" href="project_dogCare.php">Dog Care</a></li>
        <li class="aside_list_content"><a class="nav_side" href="project_catCare.php">Cat Care</a></li>
        <li class="aside_list_content"><a class="nav_side" href="project_giveAway.php">Have a Pet to Give Away</a></li>
        <li class="aside_list_content"><a class="nav_side" href="project_logIn.php">Create Account</a></li>
        <li class="aside_list_content aside_active"><a class="nav_side" href="project_logOut.php">Logout</a></li>
        <li class="aside_list_content"><a class="nav_side" href="project_contact.php">Contact Us</a></li>
      </ul>
    </aside>


    <!-- Content Area -->
    <main class="Main">
      <h2 id="h2_main">Logout from Personal Account</h2>
      <br><br><br><br>

      <?php
      if (isset($_SESSION["username"])) {
        echo "<p>Thank you <span style='font-weight:bold;'>" . $_SESSION["username"] . "</span> you are officially logged out!</p>";
      } else {
        echo "<p>You are not logged in!</p>";
        echo "<p style='margin-top:8px;'>Create an account if you haven't already!</p>";
      }
      ?>



    </main>
  </div>

  <?php
  include 'footer.html'
  ?>
  <script src="project_javaScript.js"></script>
</body>

</html>