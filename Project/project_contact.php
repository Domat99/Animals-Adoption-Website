<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
                <li class="aside_list_content"><a class="nav_side" href="project_giveAway.php">Have a Pet to Give
                        Away</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_logIn.php">Create Account</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_logOut.php">Logout</a></li>
                <li class="aside_list_content aside_active"><a class="nav_side" href="project_contact.php">Contact Us</a></li>
            </ul>
        </aside>

        <!-- Content Area -->
        <main class="Main">
            <h2 id="h2_contact">Contact Us</h2>
            <p class="p_contact">Please contact us if you have any queries or issues:</p>
            <hr id="hr_contact">
            <h3 class="info_contact">Contact Info:</h3>
            <p class="p_contact">Name: Domat Al Khoury</p>
            <p class="p_contact">Student ID: 40246644</p>
            <p class="p_contact">Email: do_alkho@live.concordia.ca</p>
            <p class="p_contact">Phone: (514) 123 4567</p>
        </main>
    </div>
    <?php
    include 'footer.html'
    ?>
    <script src="project_javaScript.js"></script>
</body>

</html>