<?php session_start();

if (isset($_SESSION['username'])) {
    echo "<script> 
              document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('#login_page').style.display = 'none';
                document.querySelector('#form_page').style.display = 'block';

              });
            </script>";
}

if (isset($_POST['submit'])) {

    if (isset($_POST['username']) && isset($_POST['password'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $usersFile = file("login_File.txt", FILE_IGNORE_NEW_LINES);

        $matchUser = false;

        $message = "";

        $messageForm = "";

        $currentUser = null;

        foreach ($usersFile as $user) {

            list($userLine, $passLine) = explode(':', $user);

            if ($username === $userLine && $password === $passLine) {

                $matchUser = true;
                $currentUser = $username;

                break;
            }
        }

        $message = null;

        if ($matchUser) {
            $_SESSION['username'] = $currentUser;

            echo "<script> 
              document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('#login_page').style.display = 'none';
                document.querySelector('#form_page').style.display = 'block';

              });
            </script>";
        } else {
            $message = "Username and password are not valid, please try again! If you don't have an account you can create one in the \"Create Account\" page!";
        }
    } else if ($_POST['pet_type'] != "Select_Option" && $_POST['pet_type'] != "Select_Option" && $_POST['age']  != "Select_Option" && $_POST['gender']  != "Select_Option" && $_POST['comments'] != "" && $_POST['owner_email'] != "" && 
                (isset($_POST['getAlongDog']) || isset($_POST['getAlongCat']) || isset($_POST['getAlongChild'])) && $_POST["owner_name"] != "") {

        $animal = $_POST['pet_type'];
        $breed = $_POST['pet_breed'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        $comment = $_POST['comments'];
        $email = $_POST['owner_email'];

        $getAlongDog = isset($_POST['getAlongDog']) ? "Yes" : "No";
        $getAlongCat = isset($_POST['getAlongCat']) ? "Yes" : "No";
        $getAlongChild = isset($_POST['getAlongChild']) ? "Yes" : "No";
        

        $petFile = fopen("Available_Pets.txt", 'a');
        $lines = file("Available_Pets.txt");
        $counter = count($lines) + 1;

        fwrite($petFile, $counter . ':' . $_SESSION['username'] . ':' . $animal . ':' . $breed . ':' . $age . ':' . $gender . ':' . $getAlongDog . ':' . $getAlongCat . ':' . $getAlongChild . ':' . $comment .  ':' . $email . "\n");
        fclose($petFile);
        $messageForm = "We hope your pet finds a loving home and brings joy to their new family. Thank you for making the difficult decision to give them up for adoption and for prioritizing their well-being!";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give Away a Pet</title>
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
                <li class="aside_list_content aside_active"><a class="nav_side" href="project_giveAway.php">Have a Pet to Give
                        Away</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_logIn.php">Create Account</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_logOut.php">Logout</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_contact.php">Contact Us</a></li>
            </ul>
        </aside>

        <main class="form_giveAway" id="login_page" style="display:block;">

            <form action="" method="POST">

                <h2>Login to your personal account:</h2>
                <p id="p_giveAway">Please enter your username and password to be able to access the form.</p>

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

        <!-- Content Area -->
        <main class="form_giveAway" id="form_page" style="display:none;">

            <h2 class="h2_form">Give Away a Pet</h2>
            <p id="p_giveAway">Hello <b><?php echo $_SESSION['username'] ?></b>, Please Specify the Details about the Cat or Dog That You Want to give:</p>

            <form action="" class="form_give" onsubmit="submitGiveAway(event)" method="POST">

                <?php

                if (isset($messageForm) != "") {
                    echo '<p>' . $messageForm . '</p>';
                }
                ?>

                <label class="label_giveAway" for="pet_type">Pet Type:</label>
                <select class="select_give" id="pet_type" name="pet_type">
                    <option value="Select_Option">Select An Option</option>
                    <option value="cat">Cat</option>
                    <option value="dog">Dog</option>
                </select>

                <label class="label_giveAway" for="pet_breed">Breed:</label>
                <select class="select_give" id="pet_breed" name="pet_breed">
                    <option value="Select_Option">Select An Option</option>
                    <option value="German">Dog-German Shepherd</option>
                    <option value="Bulldog">Dog-Bulldog</option>
                    <option value="Husky">Dog-Husky</option>
                    <option value="Chihuahua">Dog-Chihuahua</option>
                    <option value="Poodle">Dog-Poodle</option>
                    <option value="Persian">Cat-Persian cat</option>
                    <option value="Maine">Cat-Maine Com</option>
                    <option value="British">Cat-British Shorthair</option>
                    <option value="Siamese">Cat-Siamese cat</option>
                    <option value="Scottish">Cat-Scottish Fold</option>
                    <option value="Mix">Mixed Breed</option>
                </select>

                <label class="label_giveAway" for="age">Age:</label>
                <select class="select_give" id="age" name="age">
                    <option value="Select_Option">Select An Option</option>
                    <option value="puppy">Puppy (0-1 year)</option>
                    <option value="young">Young (1-3 years)</option>
                    <option value="adult">Adult (3-7 years)</option>
                    <option value="senior">Senior (7+ years)</option>
                </select>

                <label class="label_giveAway" for="gender">Gender:</label>
                <select class="select_give" id="gender" name="gender">
                    <option value="Select_Option">Select An Option</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                <br>
                <label class="label_giveAway_getAlong">Gets Along With:</label>
                <br>
                <input type="checkbox" id="dog" name="getAlongDog" value="Dogs">
                <label class="pet_options" for="dog">Dogs</label>
                <input type="checkbox" id="cat" name="getAlongCat" value="Cats">
                <label class="pet_options" for="cat">Cats</label>
                <input type="checkbox" id="child" name="getAlongChild" value="Kids">
                <label class="pet_options" for="child">Kids</label>
                <br>
                <br>

                <label class="label_giveAway" for="comments">Comment:</label>
                <textarea id="comments" name="comments" placeholder="Comments about your pet"></textarea>

                <label class="label_giveAway" for="owner_name">Owner Name:</label>
                <input type="text" id="owner_name" name="owner_name" placeholder="Full name">

                <label class="label_giveAway" for="owner_email">Owner Email:</label>
                <input type="email" id="owner_email" name="owner_email" placeholder="Email to contact">
                <br>

                <input type="submit" name="submit" value="Submit">
                <input type="reset" value="Clear">

            </form>

        </main>

    </div>

    <?php
    include 'footer.html'
    ?>
    <script src="project_javaScript.js"></script>
</body>

</html>