<?php
$cur_page = 'about';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./assets/images/logo.jpg" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

  <link rel="stylesheet" href="./styles/header.css" />
  <link rel="stylesheet" href="./styles/footer.css" />
  <!-- <link rel="stylesheet" href="./styles/style.css" /> -->
  <title>About Us | Bekwai Youth Movement</title>
  <style>
    section div {
      /* border: 1px solid black; */
      /* background-color: gray; */
      height: 400px;
      width: 550px;
    }
  </style>
</head>

<body>
  <!-- import header here  -->
  <?php
  include("./includes/header.php");
  ?>
  <h1 class="text-4xl my-10 font-bold text-center text-blue-800">ABOUT US</h1>
  <section class="flex flex-wrap items-center justify-center pb-10">
    <div class="h-50 w-50 xl:mr-10 bg-gray-100 p-8 text-justify">
      <h3 class="text-blue-800 mb-5 text-2xl">Our Vision</h3>
      <p class="rounded-lg text-gray-600">
        Our vision is to create a future where young people are empowered to thrive, and communities are sustainable and prosperous.
        Our vision extends to empowering 5,000 innovative young leaders from Bekwai and its suburbs to effect change at both national and international levels, contributing to sustainable development and global progress.

      </p>
    </div>

    <div class="h-50 w-50 mt-12 " style="margin-top: 80px">
      <img class="rounded-lg" src="./assets/images/youth.jpg" style="height: 100%" width="100%" />
    </div>
  </section>
  <section class="flex flex-wrap items-center justify-center">
    <div class="h-50 w-50 mt-12 mb-10 rounded" style="margin-top: 80px">
      <img class="rounded-lg" src="./assets/images/download.jpeg" style="height: 100%" width="100%" />
    </div>

    <div class="h-50 w-50 xl:ml-10 bg-gray-100 p-8 text-justify">
      <h3 class="text-blue-800 mb-5 text-2xl">Our Mission</h3>
      <p class="rounded-lg text-gray-600">
        Our mission is to empower and mobilize the youth of Bekwai and its 31 surrounding communities to actively engage in community development initiatives. Through collaborative efforts, advocacy, and innovative solutions, we strive to create a supportive environment where young people can unlock their full potential and contribute meaningfully to the sustainable growth and prosperity of our society.
        Our mission extends to challenge systemic barriers to youth development while promoting volunteerism and community engagement. By restructuring systems and inspiring change, we strive to build a sustainable and inclusive society for all.

      </p>
    </div>

  </section>
  <!-- import footer here  -->
  <?php
  include("./includes/footer.php");
  ?>
</body>

</html>