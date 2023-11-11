<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bekwai Youth Movement</title>
    <link rel="icon" href="./assets/images/logo.jpg" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="./styles/header.css" />
    <link rel="stylesheet" href="./styles/footer.css" />
    <link rel="stylesheet" href="./styles/font.css" />

    <style>
        .bg-blue {
            background-color: #356698 !important;
        }
    </style>

</head>

<body>

    <?php
    include("./includes/header.php");
    ?>
    <!-- component -->
    <div class="grid place-items-center">
        <div class="w-11/12 pt-10 pb-10 bg-white sm:w-10/12 md:w-9/12 lg:w-7/12">
            <h1 class="text-4xl lg:text-5xl text-center font-semibold text-green-700">Volunteer Registration Form</h1>
            <form class="mt-8">
                <div class="flex justify-between gap-3">
                    <span class="w-1/2">
                        <label for="firstname" class="block text-xs font-semibold text-gray-600 uppercase">Firstname</label>
                        <input id="firstname" type="text" name="firstname" placeholder="John" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                    </span>
                    <span class="w-1/2">
                        <label for="lastname" class="block text-xs font-semibold text-gray-600 uppercase">Lastname</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Doe" autocomplete="family-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                    </span>
                </div>

                <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">E-mail*</label>
                <input id="email" type="email" name="email" placeholder="john.doe@company.com" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />

                <label for="phone" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Phone Number*</label>
                <input id="phone" type="number" name="phone" placeholder="ex. 02xxxxxxxx" autocomplete="phone number" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />

                <label for="address" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Home Address*</label>
                <input id="address" type="text" name="address" placeholder="ex. Zongo, Sefwi Bekwai, Ghana" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />

                <label for="organization" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Organization (if applicable)</label>
                <input id="organization" type="text" name="organization" placeholder="ex. ABC Company" autocomplete="organization" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" />

                <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-blue shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                    Register
                </button>
                <p class="flex justify-between inline-block mt-4 text-xs text-gray-500 cursor-pointer hover:text-black">Already registered?</p>
            </form>
        </div>
    </div>
    <!-- import footer here  -->
    <?php
    include("./includes/footer.php");
    ?>
</body>

</html>