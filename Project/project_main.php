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
        <li class="aside_list_content aside_active"><a class="nav_side" href="project_main.php">Home Page</a></li>
        
        <li class="aside_list_content"><a class="nav_side" href="project_find.php">Find a Dog/Cat</a></li>
        <li class="aside_list_content"><a class="nav_side" href="project_dogCare.php">Dog Care</a></li>
        <li class="aside_list_content"><a class="nav_side" href="project_catCare.php">Cat Care</a></li>
        <li class="aside_list_content"><a class="nav_side" href="project_giveAway.php">Have a Pet to Give Away</a></li>
        <li class="aside_list_content"><a class="nav_side" href="project_logIn.php">Create Account</a></li>
        <li class="aside_list_content"><a class="nav_side" href="project_logOut.php">Logout</a></li>
        <li class="aside_list_content"><a class="nav_side" href="project_contact.php">Contact Us</a></li>
      </ul>
    </aside>


    <!-- Content Area -->
    <main class="Main">
      <h2 id="h2_main">Welcome to Adopt A-Cat/Dog</h2>
      <p class="p_main">Bring love and pleasure into your household by adopting a pet today! Pick from our incredible assortment of canines and felines, each with their own distinct personality. A second shot at joy and the affection they deserve can be given to a shelter animal. Our goal is to pair ideal pets with devoted families. Find the one who has your heart by starting your search right now.</p>

      <p class="p_main">All of our animals receive the utmost care and consideration at our adoption facility until they are adopted into their everlasting homes. Any questions you may have about the adoption process may be answered by our team at any time. Your new fuzzy companion is ready for cuddles and games. Change a life now by adopting!</p>
      <img id="image_main" src="project_Main_Photo_2.jpg" alt="Dog and Cat Photo By Tran Mau Tri Tam">
    </main>
  </div>

  <?php
  include 'footer.html'
  ?>
  <script src="project_javaScript.js"></script>
</body>

</html>