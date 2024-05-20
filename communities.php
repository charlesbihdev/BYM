<?php
$cur_page = 'communities';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->


    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./styles/featured-events.css" />
    <link rel="stylesheet" href="./styles/header.css" />
    <link rel="stylesheet" href="./styles/footer.css" />

    <!-- slick css  -->
    <link rel="stylesheet" href="./includes/slick-1.8.1/slick/slick.css" charset="utf-8">
    <link rel="stylesheet" href="./includes/slick-1.8.1/slick/slick-theme.css" charset="utf-8">
    <link rel="stylesheet" href="./styles/slick-hero.css" charset="utf-8">

    <title>Home | Bekwai Youth Movement</title>
    <style>
        @media (max-width: 767px) {
            .nav {
                display: none;
            }

        }

        .img-box {
            /* border:1px solid black; */
            width: 150px;
            height: 80px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <!-- import header here  -->
    <?php
    include("./includes/header.php");
    ?>
    <main class="h-screen w-full bg-[#ecfafa]">

    </main>


    <!-- import footer here  -->
    <!-- import header here  -->
    <?php
    include("./includes/footer.php");
    ?>
</body>

</html>