<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="https://cdn.tailwindcss.com"></script>
</head>


<nav class="bg-gray-900 mt-1 rounded-xl mr-2 ml-2 shadow shadow-black-300 w-100 px-8 md:px-auto">
    <div class="md:h-16 h-28 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
        <!-- Logo -->
        <div class="text-green-500 md:order-1">
            <span>aimtop</span>
        </div>
        <div class="text-gray-500 order-3 w-full md:w-auto md:order-2">
            <ul class="flex font-semibold justify-between">
                <!-- Active Link = text-indigo-500
                Inactive Link = hover:text-indigo-500 -->
                <li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#">Discord</a></li>
                <li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#">Twitter</a></li>
                <li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#">Explore</a></li>
                <li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#">About</a></li>
                <li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="order-2 md:order-3">
            <button class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-gray-50 rounded-xl flex items-center gap-2">
                <!-- Heroicons - Login Solid -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
                <span>Login</span>
            </button>
        </div>
    </div>
</nav>