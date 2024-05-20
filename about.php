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
      <h3 class="text-blue-800 mb-5 text-2xl">Our Story</h3>
      <p class="text-gray-600">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in
      </p>
    </div>

    <div class="h-50 w-50 mt-12" style="margin-top: 80px">
      <img src="./assets/images/youth.jpg" style="height: 100%" width="100%" />
    </div>
  </section>
  <section class="flex flex-wrap items-center justify-center">
    <div class="h-50 w-50 mt-12 mb-10" style="margin-top: 80px">
      <img src="./assets/images/download.jpeg" style="height: 100%" width="100%" />
    </div>

    <div class="h-50 w-50 xl:ml-10 bg-gray-100 p-8 text-justify">
      <h3 class="text-blue-800 mb-5 text-2xl">Our Mission</h3>
      <p class="text-gray-600">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in
      </p>
    </div>

    <!-- <button
        class="bg-green-800 mx-auto hover:bg-red-800 text-white font-bold mt-10 py-3 px-6 rounded-xl border-2 transition duration-1000 ease-in-out"
      >
        Donate
      </button> -->
  </section>
  <!-- import footer here  -->
  <?php
  include("./includes/footer.php");
  ?>
</body>

</html>