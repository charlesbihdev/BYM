<nav class="bg-blue flex justify-between text-base font-bold sm:pb-5">
    <div class=" text-white">
        <a href="./">
            <img src="./assets/images/logo.png" style="background-color: white;" id="logo" class="sm:mt-3 ml-10 rounded-full">
        </a>
    </div>
    <div id="menu-icon" class="hide-for-desktop menu-icon p-4">
        <i class="fas fa-bars text-4xl"></i>
    </div>
    <ul class="flex flex-wrap justify-between hide-for-mobile text-xl mt-12 mb-4">
        <a href="./index.php">
            <li class="px-6 mx-2 text-white <?php if ($cur_page == 'home') echo 'text-yellow-400 border-b border-yellow-400 hover:text-yellow-400 hover:border-b hover:border-yellow-400';
                                            else echo 'hover:text-yellow-400 hover:border-b hover:border-yellow-400'; ?>">Home</li>

        </a>


        <a href="./blog.php">
            <li class="px-5 mx-2 text-white <?php if ($cur_page == 'blog') echo 'text-yellow-400 border-b border-yellow-400 hover:text-yellow-400 hover:border-b hover:border-yellow-400';
                                            else echo 'hover:text-yellow-400 hover:border-b hover:border-yellow-400'; ?>">Blog</li>
        </a>
        <a href="./communities.php">
            <li class="px-6 mx-2 text-white <?php if ($cur_page == 'communities') echo 'text-yellow-400 border-b border-yellow-400 hover:text-yellow-400 hover:border-b hover:border-yellow-400';
                                            else echo 'hover:text-yellow-400 hover:border-b hover:border-yellow-400'; ?>">Communities</li>

        </a>

        <a href="./gallery.php">
            <li class="px-5 mx-2 text-white <?php if ($cur_page == 'gallery') echo 'text-yellow-400 border-b border-yellow-400 hover:text-yellow-400 hover:border-b hover:border-yellow-400';
                                            else echo 'hover:text-yellow-400 hover:border-b hover:border-yellow-400'; ?>">Gallery</li>
        </a>

        <a href="./team.php">
            <li class="px-5 mx-2 text-white <?php if ($cur_page == 'team') echo 'text-yellow-400 border-b border-yellow-400 hover:text-yellow-400 hover:border-b hover:border-yellow-400';
                                            else echo 'hover:text-yellow-400 hover:border-b hover:border-yellow-400'; ?>">Team</li>
        </a>
        <a href="./about.php">
            <li class="px-5 mx-2 text-white <?php if ($cur_page == 'about') echo 'text-yellow-400 border-b border-yellow-400 hover:text-yellow-400 hover:border-b hover:border-yellow-400';
                                            else echo 'hover:text-yellow-400 hover:border-b hover:border-yellow-400'; ?>">About</li>
        </a>
        <a href="./contact.php">
            <li class="px-5 mx-2 text-white <?php if ($cur_page == 'contact') echo 'text-yellow-400 border-b border-yellow-400 hover:text-yellow-400 hover:border-b hover:border-yellow-400';
                                            else echo 'hover:text-yellow-400 hover:border-b hover:border-yellow-400'; ?> mr-10">Contact Us</li>
        </a>

    </ul>
</nav>
<ul id="mobile-menu" class="hide-for-desktop hidemenu bg-gray-200 p-4">
    <a href="./index.php">
        <li class="p-4 hover:text-blue-500">Home</li>
    </a>
    <a href="./blog.php">
        <li class="p-4 hover:text-blue-500 border-yellow-500 border-t-2">Blog</li>
    </a>
    <a href="./communities.php">
        <li class="p-4 hover:text-blue-500 border-yellow-500 border-t-2">Communities</li>
    </a>

    <a href="./gallery.php">
        <li class="p-4 hover:text-blue-500 border-yellow-500 border-t-2">Gallery</li>
    </a>
    <a href="./team.php">
        <li class="p-4 hover:text-blue-500 border-yellow-500 border-t-2">Team</li>
    </a>
    <a href="./about.php">
        <li class="p-4 hover:text-blue-500 border-yellow-500 border-t-2">About</li>
    </a>
    <a href="./contact.php">
        <li class="p-4 hover:text-blue-500 border-yellow-500 border-t-2">Contact Us</li>
    </a>
</ul>