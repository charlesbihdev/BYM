<?php
$cur_page = 'contact';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact | Bekwai Youth Movement</title>
  <link rel="icon" href="./assets/images/logo.jpg" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link rel="stylesheet" href="./styles/header.css" />
  <link rel="stylesheet" href="./styles/footer.css" />
  <style>
    .bg-blue {
      background-color: #356698 !important;
    }
  </style>
</head>

<body>
  <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
  <!-- import header here  -->
  <?php
  include("./includes/header.php");
  ?>
  <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
      <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="
            clip-path: polygon(
              74.1% 44.1%,
              100% 61.6%,
              97.5% 26.9%,
              85.5% 0.1%,
              80.7% 2%,
              72.5% 32.5%,
              60.2% 62.4%,
              52.4% 68.1%,
              47.5% 58.3%,
              45.2% 34.5%,
              27.5% 76.7%,
              0.1% 64.9%,
              17.9% 100%,
              27.6% 76.8%,
              76.1% 97.7%,
              74.1% 44.1%
            );
          "></div>
    </div>
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-blue-800 font-bold tracking-tight text-5xl mb-2">
        Contact Us
      </h2>
      <p class="text-black font-normal text-xl leading-8 text-gray-600">
        Our Team is ready to reply all your questions.
      </p>
    </div>
    <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20 text-xl">
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div>
          <label for="first-name" class="block text-lg font-semibold leading-6 text-gray-900">First name<span class="text-red-700">*</span></label>
          <div class="mt-2.5">
            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" required />
          </div>
        </div>
        <div>
          <label for="last-name" class="block text-lg font-semibold leading-6 text-gray-900">Last name<span class="text-red-700">*</span></label>
          <div class="mt-2.5">
            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" required />
          </div>
        </div>
        <!-- <div class="sm:col-span-2">
            <label
              for="company"
              class="block text-sm font-semibold leading-6 text-gray-900"
              >Company</label
            >
            <div class="mt-2.5">
              <input
                type="text"
                name="company"
                id="company"
                autocomplete="organization"
                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
              />
            </div>
          </div> -->
        <div class="sm:col-span-2">
          <label for="email" class="block text-lg font-semibold leading-6 text-gray-900">Email<span class="text-red-700">*</span></label>
          <div class="mt-2.5">
            <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" required />
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="phone-number" class="block text-lg font-semibold leading-6 text-gray-900">Phone number<span class="text-red-700">*</span></label>
          <div class="flex mt-2.5">
            <div class="focus:ring-inset shadow-sm ring-1 ring-inset ring-gray-300 rounded-md inset-y-0 left-0 flex items-center">
              <label for="country" class="sr-only">Country</label>
              <select id="country" name="country" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset">
                <option>GH</option>
                <option>US</option>
                <option>CA</option>
                <option>OTHER</option>
              </select>
              <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              </svg>
            </div>
            <input type="tel" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" required />
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="message" class="block text-lg font-semibold leading-6 text-gray-900">Message<span class="text-red-700">*</span></label>
          <div class="mt-2.5">
            <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" required></textarea>
          </div>
        </div>
      </div>
      <div class="mt-10">
        <button type="submit" class="block w-full rounded-md bg-blue px-3.5 py-2.5 text-center text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          Let's talk
        </button>
      </div>
    </form>
  </div>
  <!-- import footer here  -->
  <?php
  include("./includes/footer.php");
  ?>
</body>

</html>