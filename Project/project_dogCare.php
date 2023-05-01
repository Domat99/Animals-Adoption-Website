<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Care</title>
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
                <li class="aside_list_content aside_active"><a class="nav_side" href="project_dogCare.php">Dog Care</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_catCare.php">Cat Care</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_giveAway.php">Have a Pet to Give
                        Away</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_logIn.php">Create Account</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_logOut.php">Logout</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_contact.php">Contact Us</a></li>
            </ul>
        </aside>

        <!-- Content Area -->
        <main class="Main_Dogcare">
            <h2 id="h2_dogCare">Dog Care</h2>
            <p class="p_dog_care">Dogs are wonderful pets and are a man's greatest buddy. For them to remain healthy and content, frequent attention and care are necessary. The following advice will help you take good care of your pet:</p>

            <h3 class="h3_dogCare">Feeding</h3>
            <p class="p_dog_care">Feed your dog a diet comprised of just premium dog food. Based on the age, size, and activity level of your dog, be sure you divide the food appropriately. Having access to fresh, clean water is also crucial.</p>

            <h3 class="h3_dogCare">Exercise</h3>
            <p class="p_dog_care">Dogs need to be physically and intellectually active on a daily basis. Take your dog for walks every day, and give them time to play and run about. This will also assist in preventing behavioural issues and maintaining the proper weight for your dog.</p>

            <h3 class="h3_dogCare">Grooming</h3>
            <p class="p_dog_care">For dogs to preserve the health of their hair and skin, regular grooming is essential. To avoid matting and remove dead hair, give your dog a frequent brushing. Your dog's skin and coat will stay healthy and odor-free if you bathe them every few months.</p>

            <h3 class="h3_dogCare">Training</h3>
            <p class="p_dog_care">Training your dog will improve the relationship you have with your four-legged pet and is crucial for their general wellbeing. Although socializing and basic obedience training are important, you may also teach your dog tricks and other entertaining habits.</p>

        </main>
    </div>

    <?php
    include 'footer.html'
    ?>
    <script src="project_javaScript.js"></script>
</body>

</html>