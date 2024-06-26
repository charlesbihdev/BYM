<?php
$cur_page = 'blog';
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
  <link rel="stylesheet" href="./styles/style.css" />
  <title>Blog | Bekwai Youth Movement</title>
  <style>
    @media (max-width: 767px) {

      /* Your CSS rules for mobile devices go here */
      .featured {
        flex-wrap: wrap !important;
      }
    }



    /*  */
  </style>
</head>

<body>
  <!-- import header here  -->
  <?php
  include("./includes/header.php");
  ?>
  <!-- component -->
  <div class="px-4 sm:px-20 mx-auto">
    <!-- header -->
    <header class="flex flex-wrap justify-between py-8">
      <a href="#" class="px-2 lg:px-0 font-bold font-xl">
        <h2 class="text-2xl text-blue mb-5 ">Blog Page</h2>
      </a>

      <ul class="flex flex-wrap items-center">

        <li class="px-2 flex-auto md:px-4 mb-3">
          <a href="#" class="font-semibold hover:bg-black px-4 py-1 rounded-md bg-blue bg-opacity-80 text-white">
            OUR NEWS
          </a>
        </li>
        <li class="px-2 flex-auto md:px-4 mb-3">
          <a href="#" class="font-semibold hover:bg-black px-4 py-1 rounded-md bg-blue bg-opacity-80 text-white">
            CONFERENCES
          </a>
        </li>
        <li class="px-2 flex-auto md:px-4 mb-3">
          <a href="#" class="font-semibold hover:bg-black px-4 py-1 rounded-md bg-blue bg-opacity-80 text-white">
            SCHOLARSHIP/FELLOWS
          </a>
        </li>
        <li class="px-2 flex-auto md:px-4 mb-3">
          <a href="#" class="font-semibold hover:bg-black px-4 py-1 rounded-md bg-blue bg-opacity-80 text-white">
            YOUTH ARTICLES & SDGs
          </a>
        </li>
      </ul>

    </header>
    <!-- header ends here -->

    <main>

      <nav class="bg-white text-black rounded mx-auto mt-5 mb-12 py-12 px-5">
        <span class="text-lg font-bold">Have any news, articles or youth opportunity that you would like to share via our platform? Get opportunities or new published on our platform for free. Free promotion by BYM!
          <button type="button" class="py-1 px-4 rounded ml-10 bg-violet-500 text-white shadow mb-4">
            <a style="font-weight:900;" href="./get_published.php">Get Published</a>
          </button>
          <hr>

      </nav>
      <!-- featured section -->
      <div class="featured flex md:flex-no-wrap space-x-0 md:space-x-6 flex-no-wrap mb-16">
        <!-- main post -->
        <div class="mb-4 lg:mb-0 p-4 lg:p-0 w-full md:w-4/7 relative rounded block">
          <img src="https://images.unsplash.com/photo-1427751840561-9852520f8ce8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded-md object-cover w-full h-64" />
          <span class="text-green-700 text-sm hidden md:block mt-4">
            Technology
          </span>
          <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight text-green-700">
            Ignorant branched humanity led now marianne too.
          </h1>
          <p class="text-gray-600 mb-4">
            Necessary ye contented newspaper zealously breakfast he prevailed.
            Melancholy middletons yet understood decisively boy law she.
            Answer him easily are its barton little. Oh no though mother be
            things simple itself. Oh be me, sure wise sons, no. Piqued ye of
            am spirit regret. Stimulated discretion impossible admiration in
            particular conviction up.
          </p>
          <a href="#" class="inline-block px-6 py-3 mt-2 rounded-md bg-blue-700 text-gray-100">
            Read more
          </a>
        </div>

        <!-- sub-main posts -->
        <div class="w-full md:w-4/7">
          <!-- post 1 -->
          <div class="rounded w-full flex flex-col md:flex-row mb-10">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />
            <div class="bg-white rounded px-4">
              <span class="text-green-700 text-sm hidden md:block">
                Gadgets
              </span>
              <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">
                At every tiled on ye defer do. No attention suspected oh
                difficult.
              </div>
              <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">
                Wonder matter now can estate esteem assure fat roused. Am
                performed on existence as discourse is. Pleasure friendly at
                marriage blessing or
              </p>
            </div>
          </div>

          <!-- post 2 -->
          <div class="rounded w-full flex flex-col md:flex-row mb-10">
            <img src="https://images.unsplash.com/photo-1531297484001-80022131f5a1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />
            <div class="bg-white rounded px-4">
              <span class="text-green-700 text-sm hidden md:block">
                Bitcoin
              </span>
              <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">
                Fond his say old meet cold find come whom. The sir park sake
                bred.
              </div>
              <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">
                Integer commodo, sapien ut vulputate viverra, Integer commodo
                Integer commodo, sapien ut vulputate viverra, Integer commodo
              </p>
            </div>
          </div>
          <!-- post 3 -->
          <div class="rounded w-full flex flex-col md:flex-row mb-10">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />
            <div class="bg-white rounded px-4">
              <span class="text-green-700 text-sm hidden md:block">
                Insights
              </span>
              <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">
                Advice me cousin an spring of needed. Tell use paid law ever
                yet new.
              </div>
              <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">
                Meant to learn of vexed if style allow he there. Tiled man
                stand tears ten joy there terms any widen.
              </p>
            </div>
          </div>
          <!-- post 4 -->
          <div class="rounded w-full flex flex-col md:flex-row mb-10">
            <img src="https://images.unsplash.com/photo-1489844097929-c8d5b91c456e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />
            <div class="bg-white rounded px-4">
              <span class="text-green-700 text-sm hidden md:block">
                Cryptocurrency
              </span>
              <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">
                Advice me cousin an spring of needed. Tell use paid law ever
                yet new.
              </div>
              <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">
                Meant to learn of vexed if style allow he there. Tiled man
                stand tears ten joy there terms any widen.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- end featured section -->

      <!-- recent posts -->
      <div class="flex mt-16 mb-4 px-4 lg:px-0 items-center justify-between">
        <h2 class="font-bold text-green-700 text-3xl">Latest news</h2>
        <a class="bg-gray-200 hover:bg-green-200 text-gray-800 px-3 py-1 rounded cursor-pointer">
          View all
        </a>
      </div>
      <div class="block space-x-0 lg:flex lg:space-x-6">
        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
          <img src="https://images.unsplash.com/photo-1526666923127-b2970f64b422?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded" alt="technology" />
          <div class="p-4 pl-0">
            <h2 class="font-bold text-2xl text-gray-800">
              Put all speaking her delicate recurred possible.
            </h2>
            <p class="text-gray-700 mt-2">
              Set indulgence inquietude discretion insensible bed why
              announcing. Middleton fat two satisfied additions. So continued
              he or commanded household smallness delivered. Door poor on do
              walk in half. Roof his head the what.
            </p>

            <a href="#" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto">
              Read more
            </a>
          </div>
        </div>

        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
          <img src="https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded" alt="technology" />
          <div class="p-4 pl-0">
            <h2 class="font-bold text-2xl text-gray-800">
              Is at purse tried jokes china ready decay an.
            </h2>
            <p class="text-gray-700 mt-2">
              Small its shy way had woody downs power. To denoting admitted
              speaking learning my exercise so in. Procured shutters mr it
              feelings. To or three offer house begin taken am at.
            </p>

            <a href="#" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto">
              Read more
            </a>
          </div>
        </div>

        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
          <img src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="rounded" alt="technology" />
          <div class="p-4 pl-0">
            <h2 class="font-bold text-2xl text-gray-800">
              As dissuade cheerful overcame so of friendly he indulged
              unpacked.
            </h2>
            <p class="text-gray-700 mt-2">
              Alteration connection to so as collecting me. Difficult in
              delivered extensive at direction allowance. Alteration put use
              diminution can considered sentiments interested discretion.
            </p>

            <a href="#" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto">
              Read more
            </a>
          </div>
        </div>
      </div>
      <!-- end recent posts -->

      <!-- subscribe -->
      <div class="rounded flex md:shadow mt-12">
        <img src="https://images.unsplash.com/photo-1579275542618-a1dfed5f54ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="w-0 md:w-1/4 object-cover rounded-l" />
        <div class="px-4 py-2">
          <h3 class="text-3xl text-gray-800 font-bold">
            Subscribe to newsletter
          </h3>
          <p class="text-xl text-gray-700">
            We sent latest news and posts once in every week, fresh from the
            oven
          </p>
          <form class="mt-4 mb-10">
            <input type="email" class="rounded bg-gray-100 px-4 py-2 border focus:border-green-400" placeholder="john@tech.com" />
            <button class="px-4 py-2 rounded bg-green-800 text-gray-100">
              Subscribe
              <i class="bx bx-right-arrow-alt"></i>
            </button>
            <p class="text-green-900 opacity-50 text-sm mt-1">
              No spam. We promise
            </p>
          </form>
        </div>
      </div>
      <!-- ens subscribe section -->

      <!-- popular posts -->
      <div class="flex mt-16 mb-4 px-4 lg:px-0 items-center justify-between">
        <h2 class="font-bold text-3xl">Popular news</h2>
        <a class="bg-gray-200 hover:bg-green-200 text-gray-800 px-3 py-1 rounded cursor-pointer">
          View all
        </a>
      </div>
      <div class="block space-x-0 lg:flex lg:space-x-6">
        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
          <img src="https://images.unsplash.com/photo-1526666923127-b2970f64b422?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded" alt="technology" />
          <div class="p-4 pl-0">
            <h2 class="font-bold text-2xl text-gray-800">
              Put all speaking her delicate recurred possible.
            </h2>
            <p class="text-gray-700 mt-2">
              Set indulgence inquietude discretion insensible bed why
              announcing. Middleton fat two satisfied additions. So continued
              he or commanded household smallness delivered. Door poor on do
              walk in half. Roof his head the what.
            </p>

            <a href="#" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto">
              Read more
            </a>
          </div>
        </div>

        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
          <img src="https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded" alt="technology" />
          <div class="p-4 pl-0">
            <h2 class="font-bold text-2xl text-gray-800">
              Is at purse tried jokes china ready decay an.
            </h2>
            <p class="text-gray-700 mt-2">
              Small its shy way had woody downs power. To denoting admitted
              speaking learning my exercise so in. Procured shutters mr it
              feelings. To or three offer house begin taken am at.
            </p>

            <a href="#" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto">
              Read more
            </a>
          </div>
        </div>

        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
          <img src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="rounded" alt="technology" />
          <div class="p-4 pl-0">
            <h2 class="font-bold text-2xl text-gray-800">
              As dissuade cheerful overcame so of friendly he indulged
              unpacked.
            </h2>
            <p class="text-gray-700 mt-2">
              Alteration connection to so as collecting me. Difficult in
              delivered extensive at direction allowance. Alteration put use
              diminution can considered sentiments interested discretion.
            </p>

            <a href="#" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto">
              Read more
            </a>
          </div>
        </div>
      </div>
      <!-- end popular posts -->
    </main>
    <!-- main ends here -->

  </div>
  <!-- import footer here  -->
  <?php
  include("./includes/footer.php");
  ?>

</body>

</html>