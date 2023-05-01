<?php

if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $usersFile = file("login_File.txt", FILE_IGNORE_NEW_LINES);

  $matchUser = false;
  
  $message = "";

  foreach ($usersFile as $user) {

    list($userLine, $p) = explode(':', $user);

    if ($username === $userLine) {

      $matchUser = true;

      $message = "Unable to create the account, the username is already taken, please choose another one!";

      break;
    }
  }

  if ($matchUser == false) {

    if (preg_match("/^[a-zA-Z0-9]+$/", $username) && preg_match("/^(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9]{4,}$/", $password)) {

      $file = fopen("login_File.txt", "a");

      fwrite($file, $username . ":" . $password . "\n");

      fclose($file);

      $message = "Welcome to Adopt a cat/dog family. Your account has been created successfully!";
    } else {
      $message = "Unable to create the account, the username and password requirements are not respected. Please modify them and try again!";
    }
  }
}

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
        <li class="aside_list_content aside_active"><a class="nav_side" href="project_logIn.php">Create Account</a></li>
        <li class="aside_list_content"><a class="nav_side" href="project_logOut.php">Logout</a></li>
        <li class="aside_list_content"><a class="nav_side" href="project_contact.php">Contact Us</a></li>
      </ul>
    </aside>


    <!-- Content Area -->
    <main class="Main">
      <h2 id="h2_main">Create a New Account!</h2>
      <p>Please include upper or lower case letters and numbers in the username,<br>The password must be at least 4 characters with at least one letter and one digit.</p>

      <form action="" method="post">

        <label class="label_login" for="username">Username:</label>
        <input type="text" name="username" id="username" placeholder="Username" required>

        <br><br>



        <label class="label_login" for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Password" required>


        <input type="submit" name="submit" value="Submit">


        <?php

        if (isset($message) != "") {
          echo '<p>' . $message . '</p>';
        } 
        ?>



      </form>

    </main>
  </div>

  <?php
  include 'footer.html'
  ?>
  <script src="project_javaScript.js"></script>
</body>

</html>