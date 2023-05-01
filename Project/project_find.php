<?php

if (isset($_POST['submit'])) {

    $pet_type_form = $_POST["type"];
    $breed_form = $_POST["breed"];
    $age_form = $_POST["age"];
    $gender_form = $_POST["gender"];
    $dog_form = isset($_POST["dog"]) ? "Yes" : "No";
    $cat_form = isset($_POST["cat"]) ? "Yes" : "No";
    $child_form = isset($_POST["child"]) ? "Yes" : "No";

    $pets_file = file("Available_Pets.txt", FILE_IGNORE_NEW_LINES);

    $output = '';

    $message = '';

    $errorMessage = '';

    $pet_found = false;


    foreach ($pets_file as $line) {
        $value = explode(":", $line);
        $owner = $value[1];
        $pet_type = $value[2];
        $breed = $value[3];
        $age = $value[4];
        $gender = $value[5];
        $get_along_dog = $value[6];
        $get_along_cat = $value[7];
        $get_along_kids = $value[8];
        $comments = $value[9];
        $owner_email = $value[10];


        if (($pet_type == $pet_type_form)
            && (($age_form == 'doesnt-matter') || ($age_form == $age))
            && ($gender == $gender_form || $gender_form == 'doesnt-matter')
            && ($breed_form == "doesnt-matter" || $breed_form == $breed)
            && ($dog_form == $get_along_dog)
            && ($cat_form == $get_along_cat)
            && ($get_along_kids == $child_form)
        ) {
            $div = "<div class=\"pet_info\">
            <h3><b>Breed:</b> " . $breed . "</h3>
            <p><b>Pet type:</b> " . $pet_type . "</p>
            <p><b>Age:</b> " . $age . "</p>
            <p><b>Gender:</b> " . $gender . "</p>
            <p><b>Get along with other dogs:</b> " . $get_along_dog . "</p>
            <p><b>Get along with other cats:</b> " . $get_along_cat . "</p>
            <p><b>Suitable for families with small children:</b> " . $get_along_kids . "</p>
            <p><b>Comment:</b> " . $comments . "</p>
            <p><b>Owner name:</b> " . $owner . "</p>
            <p><b>Owner email:</b> " . $owner_email . "</p>
            <button class=\"interested_button\">Interested</button>
            </div><br><br>";

            $output .= $div;


            $pet_found = true;
        }
    }

    if ($pet_found == true) {

        echo "<script> 
              document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('#form_section').style.display = 'none';
                document.querySelector('#browse').style.display = 'block';

              });
            </script>";

        $message = $output;
    } else {
        $errorMessage = "<p>Sorry, no match found for your search! Please try again.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find your perfect Dog/Cat</title>
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

                <li class="aside_list_content aside_active"><a class="nav_side" href="project_find.php">Find a Dog/Cat</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_dogCare.php">Dog Care</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_catCare.php">Cat Care</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_giveAway.php">Have a Pet to Give
                        Away</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_logIn.php">Create Account</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_logOut.php">Logout</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_contact.php">Contact Us</a></li>
            </ul>
        </aside>

        <!-- Content Area -->
        <main id="form_section" style="display:block;">
            <h2 class="h2_form">Find the perfect dog or cat</h2>
            <p>Please complete the form below to search the personalize your choises:</p>

            <form action="#" class="form_find" onsubmit="submitFindPet(event)" method="post">

                <?php

                if (isset($errorMessage)) {
                    echo $errorMessage;
                }
                ?>

                <label class="label_find" for="type">Cat or Dog:</label>
                <select class="select_find" id="type" name="type">
                    <option value="Option">Select An Option</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                </select>
                <br>

                <label class="label_find" for="breed">Breed:</label>
                <select class="select_find" id="breed" name="breed">
                    <option value="Option">Select An Option</option>
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
                    <option value="doesnt-matter">Doesn't Matter</option>
                </select>
                <br>

                <label class="label_find" for="age">Prefered Age:</label>
                <select class="select_find" id="age" name="age">
                    <option value="Option">Select An Option</option>
                    <option value="puppy">Puppy (0-1 year)</option>
                    <option value="young">Young (1-3 years)</option>
                    <option value="adult">Adult (3-7 years)</option>
                    <option value="senior">Senior (7+ years)</option>
                    <option value="doesnt-matter">Doesn't Matter</option>
                </select>
                <br>

                <label class="label_find" for="gender">Gender:</label>
                <select class="select_find" id="gender" name="gender">
                    <option value="Option">Select An Option</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="doesnt-matter">Doesn't Matter</option>
                </select>
                <br>

                <label class="label_find">Gets Along With:</label>
                <input type="checkbox" id="dog" name="dog" value="Dogs">
                <label class="pet_options" for="dog">Dogs</label>
                <input type="checkbox" id="cat" name="cat" value="Cats">
                <label class="pet_options" for="cat">Cats</label>
                <input type="checkbox" id="child" name="child" value="Kids">
                <label class="pet_options" for="child">Kids</label>
                <br>

                <input type="submit" value="Submit" name="submit">
                <input type="reset" value="Clear">

            </form>

        </main>

        <main id="browse" style="display:none;">
            <?php

            if (isset($message)) {
                echo $message;
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