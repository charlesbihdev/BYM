<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./assets/images/logo.jpg" />

  <!-- <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" /> -->
  <link rel="stylesheet" href="./boot.css" />
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link rel="stylesheet" href="./styles/style.css" />
  <link rel="stylesheet" href="./styles/header.css" />
  <link rel="stylesheet" href="./styles/footer.css" />
  <title>Bekwai Youth Movement</title>
</head>

<body>
  <!-- import header here  -->
  <?php
  include("./includes/header.php");
  ?>
  <main>
    <section class=" overflow-hidden">
      <!-- Background image -->
      <div class="relative overflow-hidden bg-cover bg-no-repeat bg-[50%] h-[500px] bg-[url('./assets/blog-images/temp3.jpeg')]">
        <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed bg-[hsla(0,0%,0%,0.75)]">
          <div class="flex h-full items-center justify-center">
            <div class="px-6 text-center text-white md:px-12">
              <h1 class="mt-6 mb-16 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl">
                Bekwai Youth Movement <br /><span class="text-white-500 font-bold text-center text-4xl">Empowering the youth, for better future</span>
              </h1>
              <a class="mb-2 inline-block rounded-full border-2 border-neutral-50 px-[46px] pt-[14px] pb-[12px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-5 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 md:mr-2 md:mb-0 hover:bg-red-800" data-te-ripple-init data-te-ripple-color="light" href="./volunteer.php" role="button">Volunteer</a>
              <a class="inline-block rounded-full px-12 pt-4 pb-3.5 text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:bg-neutral-500 hover:bg-opacity-20 hover:text-neutral-200 focus:text-neutral-200 focus:outline-none focus:ring-0 active:text-neutral-300" data-te-ripple-init data-te-ripple-color="light" href="#!" role="button">Donate</a>
            </div>
          </div>
        </div>
      </div>

      <div class="-mt-2.5 text-white dark:text-neutral-800 md:-mt-4 lg:-mt-6 xl:-mt-10 ] scale-[2] origin-[top_center]">
        <svg viewBox="0 0 2880 48" xmlns="http://www.w3.org/2000/svg">
          <path d="M 0 48 L 1437.5 48 L 2880 48 L 2880 0 L 2160 0 C 1453.324 60.118 726.013 4.51 720 0 L 0 0 L 0 48 Z" fill="currentColor"></path>
        </svg>
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
        <h1 class="text-green text-center text-3xl tracking-widest font-extrabold mt-12 mb-5">
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
    <section class="wedo-section flex flex-wrap py-10 px-10 justify-around text-center items-center">
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
        Initiatives To Get The Youth Involved
      </h1>
      <p class="text-justify mx-8 sm:mx-12 text-xl leading-relaxed mb-5">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </section>
    <section class="hide-for-desktop py-12 px-12 bg-gradient-to-bl from-blue-50 to-violet-50 flex justify-between flex-wrap mb-10">
      <!-- component -->
      <div class=" flex items-center justify-center lg:h-screen">
        <div class="container mx-auto mx-auto">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
            <h1 class="tracking-widest text-green font-extrabold mb-4 md:mt-12 text-3xl md:text-5xl">
              Feel Free To Read Our Latest Blogs Below
            </h1>
            <!-- Replace this with your grid items -->
            <div class="bg-white rounded-lg border p-4">
              <img src="https://placehold.co/300x200/d1d4ff/352cb5.png" alt="Placeholder Image" class="w-full h-48 rounded-md object-cover" />
              <div class="px-1 py-4">
                <div class="font-bold text-xl mb-2">Blog Title</div>
                <p class="text-gray-700 text-base">
                  This is a simple blog card example using Tailwind CSS. You can
                  replace this text with your own blog content.
                </p>
              </div>
              <div class="px-1 py-4">
                <a href="#" class="text-blue-500 hover:underline">Read More</a>
              </div>
            </div>
            <!-- end card -->

            <!-- start card -->
            <div class="bg-white rounded-lg border p-4">
              <img src="https://placehold.co/300x200/d1d4ff/352cb5.png" alt="Placeholder Image" class="w-full h-48 rounded-md object-cover" />
              <div class="px-1 py-4">
                <div class="font-bold text-xl mb-2">Blog Title</div>
                <p class="text-gray-700 text-base">
                  This is a simple blog card example using Tailwind CSS. You can
                  replace this text with your own blog content.
                </p>
              </div>
              <div class="px-1 py-4">
                <a href="#" class="text-blue-500 hover:underline">Read More</a>
              </div>
            </div>
            <!-- end card -->

            <!-- start card -->
            <div class="bg-white rounded-lg border p-4">
              <img src="https://placehold.co/300x200/d1d4ff/352cb5.png" alt="Placeholder Image" class="w-full h-48 rounded-md object-cover" />
              <div class="px-1 py-4">
                <div class="font-bold text-xl mb-2">Blog Title</div>
                <p class="text-gray-700 text-base">
                  This is a simple blog card example using Tailwind CSS. You can
                  replace this text with your own blog content.
                </p>
              </div>
              <div class="px-1 py-4">
                <a href="#" class="text-blue-500 hover:underline">Read More</a>
              </div>
            </div>

            <!-- end card -->
          </div>
        </div>
      </div>
    </section>
    <section class="hide-for-mobile hide-for-tablet px-12 bg-white flex justify-between flex-wrap mb-10">
      <!-- start blog card here  -->
      <div class="blog-card-no-bg flex justify-center items-center rounded-lg mb-6">
        <h1 class="tracking-widest text-green font-extrabold text-5xl">
          Feel Free To Read Our Latest Blogs Below
        </h1>
      </div>
      <!-- end blog card here  -->
      <!-- start blog card here  -->
      <div class="blog-card flex justify-between rounded-lg">
        <div class="img-section">
          <img class="post-img" src="./assets/blog-images/temp4.jpeg" height="100%" />
        </div>

        <div class="justify-evenly flex flex-col px-8">
          <h2 class="post-heading text-green text-2xl">
            order-b-2 bottom og hgg hjj of the ent.
          </h2>
          <div class="main-post text-justify">
            border-b-2 adds a 2px border to the bottom of the
            element.border-gray-400 sets the color of the border to a shade of
            gray.
          </div>

          <div class="flex flex-row">
            <p class="text-red font-bold mr-2 cursor-pointer hover:text-blue-800">
              Read More
            </p>
            <img class="cursor-pointer" src="./icons/right-arrow1.png" />
            <!-- <p class="blogger-name">Charles Owusu Bih</p> -->
          </div>
        </div>
      </div>
      <!-- end blog card here  -->
      <!-- start blog card here  -->
      <div class="blog-card flex justify-between rounded-lg">
        <div class="img-section">
          <img class="post-img" src="./assets/blog-images/temp2.avif" height="100%" />
        </div>

        <div class="justify-evenly flex flex-col px-8">
          <h2 class="post-heading text-green text-2xl">
            order-b-2 bottom og hgg hjj of the ent.
          </h2>
          <div class="main-post text-justify">
            border-b-2 adds a 2px border to the bottom of the
            element.border-gray-400 sets the color of the border to a shade of
            gray.
          </div>

          <div class="flex flex-row">
            <p class="text-red font-bold mr-2 cursor-pointer hover:text-blue-800">
              Read More
            </p>
            <img class="cursor-pointer" src="./icons/right-arrow1.png" />
            <!-- <p class="blogger-name">Charles Owusu Bih</p> -->
          </div>
        </div>
      </div>
      <!-- end blog card here  -->
      <!-- start blog card here  -->
      <div class="blog-card flex justify-between rounded-lg">
        <div class="img-section">
          <img class="post-img" src="./assets/blog-images/temp1.jpg" height="100%" />
        </div>

        <div class="justify-evenly flex flex-col px-8">
          <h2 class="post-heading text-green text-2xl">
            order-b-2 bottom og hgg hjj of the ent.
          </h2>
          <div class="main-post text-justify">
            border-b-2 adds a 2px border to the bottom of the
            element.border-gray-400 sets the color of the border to a shade of
            gray.
          </div>

          <div class="flex flex-row">
            <p class="text-red font-bold mr-2 cursor-pointer hover:text-blue-800">
              Read More
            </p>
            <img class="cursor-pointer" src="./icons/right-arrow1.png" />
            <!-- <p class="blogger-name">Charles Owusu Bih</p> -->
          </div>
        </div>
      </div>
      <!-- end blog card here  -->
    </section>
    <section class="section-6 px-10 sm:px-12 py-10">
      <h1 class="tracking-widest text-red font-extrabold text-3xl sm:text-5xl mb-6 sm:mb-10">
        Meet Our <br />
        volunteering Team
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
    </section>
    <section class="flex justify-center items-center newsletter py-10">
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
          <buttonS name="submit" class="btn">Subscribe</button>
        </div>
      </div>
    </section>
    <section style="color: black" class="section-4 text-white">
      <h1 class="mx-4 text-center text-red text-4xl tracking-wider font-extrabolds mb-5 mt-10">
        Initiatives To Get The Youth Involved
      </h1>
      <p class="text-justify mx-12 text-xl leading-relaxed my-12">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia .
      </p>
    </section>
  </main>
  <!-- import footer here  -->
  <?php
  include("./includes/footer.php");
  ?>
</body>

</html>