<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Dogs and Cats</title>
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
                <li class="aside_list_content"><a class="nav_side" href="project_contact.php">Contact Us</a></li>
            </ul>
        </aside>

        <!-- Content Area -->
        <main class="Main">
            <h2 id="h2_refrences">References</h2>
            <ul class="sources">
                <li class="source"><a class="source_site" href="https://unsplash.com/photos/7QjU_u2vGDs"
                        target="_blank">Home Page Photo
                        by Tran Mau Tri Tam &#11127;</a></li>
                <li class="source"><a class="source_site"
                        href="https://www.petmd.com/dog/care/responsible-pet-owners-checklist-taking-care-pet"
                        target="_blank">PetMD -
                        The Responsible Pet Owner's Checklist for Taking Care of a Pet &#11127;</a></li>
                <li class="source"><a class="source_site"
                        href="https://www.petmd.com/dog/puppycenter/grooming/evr_dg_the_importance_of_grooming_your_puppy"
                        target="_blank">PetMD
                        -
                        Grooming Your Dog &#11127;</a></li>
                <li class="source"><a class="source_site"
                        href="https://www.petsafe.net/learn/cats-101-basic-health-care-tips-to-keep-your-cat-healthy"
                        target="_blank">PetSafe
                        -
                        How to Keep Your Cat Healthy &#11127;</a></li>
                <li class="source"><a class="source_site" href="https://unsplash.com/photos/G8cB8hY3yvU"
                        target="_blank">Dog Background Taken By Ralu Gal &#11127;</a></li>
            </ul>
        </main>
    </div>

    <!-- Footer -->
    <?php 
      include 'footer.html'
    ?>
    <script src="project_javaScript.js"></script>
</body>

</html>