<?php
$cur_page = 'home';
?>
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
  <main>
    <section class="overflow-hidden">
      <!-- Background image -->
      <div class="slider-area w-full">

        <div class="slide hero-image" style="background-image: url(./assets/images/youth.jpg);">
          <div class="bg-[hsla(0,0%,0%,0.35)] w-full h-full">
            <div class="hero-text ">
              <h1 class="font-medium" style="font-size:60px">Bekwai Youth Movement</h1>

              <p class="my-4 text-3xl">Empowering the youth, for better future</p>
              <!-- <button>Hire me</button> -->
              <a class="my-4 inline-block rounded-full border-2 border-neutral-50 px-[46px] pt-[14px] pb-[12px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none hover:bg-red-800" href="./volunteer.php" role="button">Volunteer</a>
              <a class="mb-3 inline-block bg-blue rounded-full px-12 pt-4 pb-3.5 text-sm font-medium uppercase hover:border-2 hover:border-neutral-50 leading-normal transition duration-150 ease-in-out hover:bg-neutral-500 hover:bg-opacity-20 hover:text-neutral-200 focus:text-neutral-200 focus:outline-none focus:ring-0 active:text-neutral-300" href="#!">Donate</a>
            </div>
          </div>
        </div>

        <div class="slide slide-2 hero-image" style="background-image: url(./assets/images/download.jpeg);">
          <div class="bg-[hsla(0,0%,0%,0.35)] w-full h-full">
            <div class="hero-text ">
              <h1 class="font-medium" style="font-size:60px">Bekwai Youth Movement</h1>

              <p class="my-4 text-3xl">Empowering the youth, for better future</p>
              <!-- <button>Hire me</button> -->
              <a class="my-4 inline-block rounded-full border-2 border-neutral-50 px-[46px] pt-[14px] pb-[12px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none hover:bg-red-800" href="./volunteer.php" role="button">Volunteer</a>
              <a class="mb-3 inline-block bg-blue rounded-full px-12 pt-4 pb-3.5 text-sm font-medium uppercase hover:border-2 hover:border-neutral-50 leading-normal transition duration-150 ease-in-out hover:bg-neutral-500 hover:bg-opacity-20 hover:text-neutral-200 focus:text-neutral-200 focus:outline-none focus:ring-0 active:text-neutral-300" href="#!">Donate</a>
            </div>
          </div>
        </div>

        <div class="slide slide-3 hero-image" style="background-image: url(./assets/images/youth.jpg);">
          <div class="bg-[hsla(0,0%,0%,0.35)] w-full h-full">
            <div class="hero-text ">
              <h1 class="font-medium" style="font-size:60px">Bekwai Youth Movement</h1>

              <p class="my-4 text-3xl">Empowering the youth, for better future</p>
              <!-- <button>Hire me</button> -->
              <a class="my-4 inline-block rounded-full border-2 border-neutral-50 px-[46px] pt-[14px] pb-[12px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none hover:bg-red-800" href="./volunteer.php" role="button">Volunteer</a>
              <a class="mb-3 inline-block bg-blue rounded-full px-12 pt-4 pb-3.5 text-sm font-medium uppercase hover:border-2 hover:border-neutral-50 leading-normal transition duration-150 ease-in-out hover:bg-neutral-500 hover:bg-opacity-20 hover:text-neutral-200 focus:text-neutral-200 focus:outline-none focus:ring-0 active:text-neutral-300" href="#!">Donate</a>
            </div>
          </div>
        </div>



      </div>

      <!-- Background image -->
    </section>
    <section class="flex hero-section h-110vh" style="display: none;">
      <div class=" hero-section-1 w-full my-auto text-center">
        <h1 class="text-4xl text-white font-extrabold text-center">
          Bekwai Youth Movement Temp Text Here
        </h1>
        <h2 class="text-white-500 font-extrabold text-center">
          Empowering the youth, for better future
        </h2>
        <button class="hero-button bg-green hover:bg-red-800 text-white font-bold py-3 px-6 rounded-full border-2 transition duration-1000 ease-in-out">
          Become a volunteer
        </button>
      </div>
      <!-- <div class=" hide-for-desktop bg-white h-10 hero-section-hide w-full">
        </div> -->
      <div class="rounded-lg hero-section-2 text-3xl rounded-l-full bg-white border-black w-full">
        <img src="./assets/images/1logo-transparent.png" />
      </div>
    </section>


    <!-- <div class="h-10 bg-white"></div> -->



    <section class="we-believe flex flex-wrap">
      <div class="w-full lg:w-1/2">
        <h1 class="text-green text-center text-4xl tracking-widest font-extrabold mt-12 mb-5">
          WHAT WE BELIEVE
        </h1>
        <p class="text-center mx-10 text-lg leading-relaxed mb-10">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="w-full lg:w-1/2">
        <img src="./assets/images/1logo-transparent.png" style="height: 330px; display: block; margin: 0 auto" />
      </div>
    </section>
    <!-- https://www.flaticon.com/free-icon/user_1077063?term=people&related_id=1077063 -->
    <section class="bg-[#ecfafa] flex flex-wrap py-10 px-10 justify-around text-center items-center">
      <div class="px-4 wedo-card bg-blue text-white h-50 rounded-lg flex flex-col items-center">
        <img src="./icons/user.png" />
        <h2>People and Leadership</h2>

        <p>
          Excepteur sint occaecat cupidatat non proident, sunt qui officia
          deserunt
        </p>

        <button class="hover:bg-white hover:text-red-800 font-bold py-1 px-4 rounded-lg border-2 transition duration-1000 ease-in-out">
          Learn more
        </button>
      </div>
      <div class="px-4 wedo-card bg-green text-white h-50 rounded-lg flex flex-col items-center">
        <img src="./icons/people.png" />
        <h2>Community and SDG's</h2>

        <p>
          Excepteur sint occaecat cupidatat non proident, sunt qui officia
          deserunt
        </p>

        <button class="hover:bg-white hover:text-red-800 font-bold py-1 px-4 rounded-lg border-2 transition duration-1000 ease-in-out">
          Learn more
        </button>
      </div>
      <div class="px-4 wedo-card bg-blue text-white h-50 rounded-lg flex flex-col items-center">
        <img src="./icons/assembly.png" />
        <h2>General Assembly</h2>

        <p>
          Excepteur sint occaecat cupidatat non proident, sunt qui officia
          deserunt
        </p>

        <button class="hover:bg-white hover:text-red-800 font-bold py-1 px-4 rounded-lg border-2 transition duration-1000 ease-in-out">
          Learn more
        </button>
      </div>
      <div class="px-4 wedo-card bg-green text-white h-50 rounded-lg flex flex-col items-center">
        <img src="./icons/stem.png" />
        <h2>Stem and Career Enhancement</h2>

        <p>
          Excepteur sint occaecat cupidatat non proident, sunt qui officia
          deserunt
        </p>

        <button class="hover:bg-white hover:text-red-800 font-bold py-1 px-4 rounded-lg border-2 transition duration-1000 ease-in-out">
          Learn more
        </button>
      </div>
      <div class="px-4 wedo-card bg-blue text-white h-50 rounded-lg flex flex-col items-center">
        <img src="./icons/enterpreneur.png" />
        <h2>Enterpreneurship & Youth Employment</h2>

        <p>
          Excepteur sint occaecat cupidatat non proident, sunt qui officia
          deserunt
        </p>

        <button class="hover:bg-white hover:text-red-800 font-bold py-1 px-4 rounded-lg border-2 transition duration-1000 ease-in-out">
          Learn more
        </button>
      </div>
    </section>
    <section style="color: black" class="section-4 text-white">
      <h1 class="mx-2 text-center text-red text-4xl tracking-wider font-extrabolds mb-5 mt-10">
        INITIATIVES TO GET THE YOUTH INVOLVED
      </h1>
      <p class="text-justify mx-8 sm:mx-12 text-lg leading-relaxed mb-5">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </section>

    <!-- INSERT HOMEPAGE BLOG HERE  -->
    <?php
    require_once './includes/homepage_blog.php';

    ?>

    <section class="section-6 px-10 sm:px-12 py-10">
      <h1 class="text-center tracking-widest text-red font-extrabold text-3xl sm:text-4xl mb-6 sm:mb-10">
        <!-- Meet Our <br />
        volunteering Team -->
        MEET OUR TEAM

      </h1>
      <p class="my-6 text-lg ">
        We are committed and passionate to create positive change in Bekwai
        and its 31 sorrounnding communities. We believe that throught our
        dedication collaboration and active participation of our community
        members, we can make the change we want to see.
      </p>
      <hr />
      <div class="flex justify-evenly mt-6 flex-wrap">
        <!-- Our volunteering Team start -->
        <div class="team-card my-3">
          <img width="100%" class="rounded-lg" src="./assets/images/team1.webp" alt="team member" />
          <p class="tracking-wide font-bold text-xl text-blue">Charles Bih</p>
          <p class="tracking-wide text-sm mb-2 text-red">Founder & CEO</p>
        </div>
        <!-- Our volunteering Team end -->
        <!-- Our volunteering Team start -->
        <div class="team-card my-3">
          <img width="100%" class="rounded-lg" src="./assets/images/team2.webp" alt="team member" />
          <p class="tracking-wide font-bold text-x text-blue">Isaac Owusu</p>
          <p class="tracking-wide text-sm mb-2 text-red">Founder & CEO</p>
        </div>
        <!-- Our volunteering Team end -->
        <!-- Our volunteering Team start -->
        <div class="team-card my-3">
          <img width="100%" class="rounded-lg" src="./assets/images/team3.webp" alt="team member" />
          <p class="tracking-wide font-bold text-xl text-blue">Asamoah Jur</p>
          <p class="tracking-wide text-sm mb-2 text-red">Founder & CEO</p>
        </div>
        <!-- Our volunteering Team end -->
        <!-- Our volunteering Team start -->
        <div class="team-card my-3">
          <img width="100%" class="rounded-lg" src="./assets/images/team5.avif" alt="team member" />
          <p class="tracking-wide font-bold text-xl text-blue">
            Rita Nkansah
          </p>
          <p class="tracking-wide text-sm mb-2 text-red">Founder & CEO</p>
        </div>
        <!-- Our volunteering Team end -->
        <!-- Our volunteering Team start -->
        <div class="team-card my-3">
          <img width="100%" class="rounded-lg" src="./assets/images/team4.avif" alt="team member" />
          <p class="tracking-wide font-bold text-xl text-blue">
            Prince Kwaku Jur
          </p>
          <p class="tracking-wide text-sm mb-2 text-red">Founder & CEO</p>
        </div>
        <!-- Our volunteering Team end -->
        <!-- Our volunteering Team start -->
        <div class="team-card my-3">
          <img width="100%" class="rounded-lg" src="./assets/images/team7.jpg" alt="team member" />
          <p class="tracking-wide font-bold text-xl text-blue">
            Prince Kwaku Jur
          </p>
          <p class="tracking-wide text-sm mb-2 text-red">Founder & CEO</p>
        </div>
        <!-- Our volunteering Team end -->
        <!-- Our volunteering Team start -->
        <div class="team-card my-3">
          <img width="100%" class="rounded-lg" src="./assets/images/team8.jpg" alt="team member" />
          <p class="tracking-wide font-bold text-xl text-blue">
            Yaw Kwaku Jur
          </p>
          <p class="tracking-wide text-sm mb-2 text-red">Founder & CEO</p>
        </div>
        <!-- Our volunteering Team end -->
        <!-- Our volunteering Team start -->
        <div class="team-card my-3">
          <img width="100%" class="rounded-lg" src="./assets/images/team9.jpg" alt="team member" />
          <p class="tracking-wide font-bold text-xl text-blue">Kwaku Owusu</p>
          <p class="tracking-wide text-sm mb-2 text-red">Founder & CEO</p>
        </div>
        <!-- Our volunteering Team end -->
        <!-- Our volunteering Team start -->
        <div class="team-card my-3">
          <img width="100%" class="rounded-lg" src="./assets/images/team6.jpg" alt="team member" />
          <p class="tracking-wide font-bold text-xl text-blue">
            Prince Kwaku Jur
          </p>
          <p class="tracking-wide text-sm mb-2 text-red">Founder & CEO</p>
        </div>
        <!-- Our volunteering Team end -->
        <!-- Our volunteering Team start -->
        <div class="team-card my-3">
          <img width="100%" class="rounded-lg" src="./assets/images/team10.jpg" alt="team member" />
          <p class="tracking-wide font-bold text-xl text-blue">Kwaku Owusu</p>
          <p class="tracking-wide text-sm mb-2 text-red">Founder & CEO</p>
        </div>
        <!-- Our volunteering Team end -->
      </div>

      <div class="flex justify-evenly mt-6 flex-wrap">
        <!-- maanagment team start -->
        <div class="team-card my-3">
          <img width="100%" class="rounded-lg" src="./assets/images/team10.jpg" alt="team member" />
          <p class="tracking-wide font-bold text-xl text-blue">AGYAPONG MICHEAL</p>
          <p class="tracking-wide text-sm mb-2 text-red">PRESIDENT</p>
        </div>
        <div class="team-card my-3">
          <img width="100%" class="rounded-lg" src="./assets/images/team10.jpg" alt="team member" />
          <p class="tracking-wide font-bold text-xl text-blue">JOE SHORTINGO</p>
          <p class="tracking-wide text-sm mb-2 text-red">WOMEN EMPOWERMENT & STEM LEAD</p>
        </div>
        <div class="team-card my-3">
          <img width="100%" class="rounded-lg" src="./assets/images/team10.jpg" alt="team member" />
          <p class="tracking-wide font-bold text-xl text-blue">JULIANA QUAYE</p>
          <p class="tracking-wide text-sm mb-2 text-red">PATRON</p>
        </div>
        <div class="team-card my-3">
          <img width="100%" class="rounded-lg" src="./assets/images/team10.jpg" alt="team member" />
          <p class="tracking-wide font-bold text-xl text-blue">PRECIOUX NAANA</p>
          <p class="tracking-wide text-sm mb-2 text-red">EXECUTIVE MEMBER</p>
        </div>
        <!-- management team ends -->
      </div>

    </section>
    <section class="bg-[#ecfafa] flex justify-center items-center newsletter py-10">
      <div class="box">
        <h2 class="text-center text-blue text-3xl">
          Subscribe to our Newsletter
        </h2>
        <p>
          Our weekly newsletter provides you with the latest and most
          important happenings in the industry.
        </p>
        <div class="form-control">
          <input type="text" class="mb-4 input" placeholder="Enter First Name" required />

          <input type="text" class="input mb-12" placeholder="Enter e-mail adress" required />
          <button name="submit" class="btn">Subscribe</button>
        </div>
      </div>
    </section>
    <section style="color: black" class="section-4 text-white mt-14 mb-16">
      <h1 class="mx-4 text-center text-red text-4xl tracking-wider font-extrabolds mb-8 mt-1">
        <!-- Initiatives To Get The Youth Involved -->
        INITIATIVES TO GET THE YOUTH INVOLVED
      </h1>
      <div class="mx-10 md:mx-20 mt-4">
        <h2 class="text-center bg-blue text-lg text-white rounded text-bold px-4 md:px-8 py-2 inline-block mb-4 md:mb-2">Verificar es correo electrónico
        </h2>
        <p class="text-justify text-md sm:text-lg md:leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur
        </p>
      </div>
    </section>
    <!-- import events here  -->
    <?php require_once 'includes/featured-events.php'; ?>

    <!-- partners & organizations here  -->

    <section class="bg-white py-12 px-20">
      <h1 class=" text-center text-red text-4xl tracking-wider font-extrabolds mb-5">
        <!-- Partners,Collaboratons & AffiliateOrganizations -->
        PARTNERS, COLLABORATONS & AFFILIATE ORGANIZATIONS
      </h1>
      <div class="flex flex-wrap justify-center mx-18 gap-10">

        <div class="text-center w-28">
          <img class="rounded-full h-28 w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
          <h2>K&K partners</h2>
        </div>
        <div class="text-center w-28">
          <img class="rounded-full h-28 w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
          <h2>K&K partners</h2>
        </div>
        <div class="text-center w-28">
          <img class="rounded-full h-28 w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
          <h2>K&K partners</h2>
        </div>
        <div class="text-center w-28">
          <img class="rounded-full h-28 w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
          <h2>K&K partners</h2>
        </div>
        <div class="text-center w-28">
          <img class="rounded-full h-28 w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
          <h2>K&K partners</h2>
        </div>
        <div class="text-center w-28">
          <img class="rounded-full h-28 w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
          <h2>K&K partners</h2>
        </div>
        <div class="text-center w-28">
          <img class="rounded-full h-28 w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
          <h2>Franko and TradingLimited</h2>
        </div>
        <div class="text-center w-28">
          <img class="rounded-full h-28 w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
          <h2>K&K partners</h2>
        </div>
        <div class="text-center w-28">
          <img class="rounded-full h-28 w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
          <h2>K&K partners</h2>
        </div>
      </div>
    </section>
    <!-- partners & organizations end  -->


    <!-- import communities here  -->
    <?php require_once 'includes/community-marquee.php'; ?>
  </main>
  <!-- import footer here  -->
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