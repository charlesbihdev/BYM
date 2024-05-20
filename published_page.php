<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./assets/images/logo.jpg" />


  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

  <!-- <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->


  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link rel="stylesheet" href="./styles/style.css" />
  <link rel="stylesheet" href="./styles/header.css" />
  <link rel="stylesheet" href="./styles/footer.css" />
  <link rel="stylesheet" href="./styles/published.css" />


  <!-- slick css  -->
  <link rel="stylesheet" href="./includes/slick-1.8.1/slick/slick.css" charset="utf-8">
  <link rel="stylesheet" href="./includes/slick-1.8.1/slick/slick-theme.css" charset="utf-8">
  <link rel="stylesheet" href="./styles/slick-hero.css" charset="utf-8">

  <title>Home | Bekwai Youth Movement</title>
</head>
<body>
<?php
  include("./includes/header.php");
  ?>
  <style>
    body{
      background:white;
      background-image: url(./assets/images/logo.png);
      background-repeat: no-repeat;
      background-position: center;
      /* padding:100px; */
      opacity: 10.5;
      width:100%;
    }
  </style>
  <form method="post" class="mx-auto ">
  <section class="flex justify-center items-center newsletter py-10 mb-50">
      <div class="box">
        <h2 class="text-center text-blue text-3xl">
          Publish Your Article
        </h2>
        <p>
          fill the space provided for to let us know whom is trying to publish it's articles
        </p>
        <div class="form-control">
          <input type="text" class="mb-4 input" placeholder="Enter First Name" required />
          <input type="text" class="input my-4" placeholder="Enter e-mail address" required />
          <input type="file" class="input mb-12" placeholder="pdf/documents">
          <button name="submit" class="btn my-20 mb-10">Publish</button>
        </div>
      </div>
    </section>
  </form>

  <?php
  include("./includes/footer.php");
  ?>


  <!-- slick requires jquery  -->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

  <!-- slick js  -->
  <script src="./includes/slick-1.8.1/slick/slick.js" type="text/javascript" charset="utf-8"></script>

  <!-- slcik init  -->
  <script type="text/javascript">
    $(".slider-area").slick({
      infinite: true,
      autoplay: true
    });
  </script>

</body>
</html>