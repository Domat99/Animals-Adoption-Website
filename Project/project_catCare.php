<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Care</title>
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
                <li class="aside_list_content aside_active"><a class="nav_side" href="projecphpt_catCare.php">Cat Care</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_giveAway.php">Have a Pet to Give
                        Away</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_logIn.php">Create Account</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_logOut.php">Logout</a></li>
                <li class="aside_list_content"><a class="nav_side" href="project_contact.php">Contact Us</a></li>
            </ul>
        </aside>

        <!-- Content Area -->
        <main class="Main_CatCare">
            <h2 id="h2_catCare">Cat Care</h2>
            <p class="p_cat_care">Cats make fantastic pets and enhance the lives of their owners. Maintaining your kitty friend's happiness and health requires proper attention. Here are some pointers on cat maintenance:</p>

            <h3 class="h3_catCare">Feeding</h3>
            <p class="p_cat_care">Provide your cat with a diet comprised of just premium cat food. Based on the age, size, and activity level of your cat, be sure you divide the food appropriately. Having access to fresh, clean water is also crucial.</p>

            <h3 class="h3_catCare">Exercise</h3>
            <p class="p_cat_care">Cats need to be physically and cognitively active on a daily basis. Give your cat toys and scratching posts to keep them entertained and active. To encourage your cat to exercise, you may also play with them.</p>

            <h3 class="h3_catCare">Grooming</h3>
            <p class="p_cat_care">For cats to preserve the health of their skin and coat, regular grooming is essential. To avoid matting and eliminate dead hair, give your cat a frequent brushing. Your cat's skin and coat will stay healthy and odor-free if you bathe them every few months.</p>

            <h3 class="h3_catCare">Veterinary Care</h3>
            <p class="p_cat_care">At least once a year, visit the vet for a checkup and any required shots for your cat. Additionally, if your cat exhibits any symptoms of an illness or injury, you should take them to the clinic.</p>

            <h3 class="h3_catCare">Training</h3>
            <p class="p_cat_care">Behavior issues can be resolved and the link between you and your cat can be strengthened via training. You may give your cat opportunities for play and exploration in addition to teaching them fundamental commands like "come" and "stay."</p>

        </main>
    </div>

    <?php
    include 'footer.html'
    ?>
    <script src="project_javaScript.js"></script>
</body>

</html>