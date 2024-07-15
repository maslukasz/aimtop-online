<?php require './src/classes/User.php'; ?>

<?php require_once './src/components/navbar.php'; ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>aimtop [alpha]</title>

</head>

<body class='bg-gray-800'>

    <section class='text-gray-300 mt-5 flex justify-center mt-8 mb-20'>
        <div class='container flex flex-col text-2xl mt-20 ml-10 mr-10 '>

            <h1 class='text-green-500 text-center font-monospace mb-4 font-bold text-3xl'>aimtop</h1>
            <p class="mb-5 text-center md:ml-28 md:mr-28"><strong class="text-blue-400 hover:underline"><a
                        href='https://x.com/aimtop_online' target='_blank'>aimtop</a></strong> is a <i>non-profit
                    project</i> where
                <mark>passion plays a major role</mark>. We aim to help players
                improve in FPS games. We do not intend to duplicate the efforts of existing aim groups. Instead, we
                focus on <span class='text-teal-500'>gathering materials</span> prepared by experienced players
                and consolidating them in <span class='text-red-500 underline'>one place</span>. There are so many
                groups
                and guides out there that it can be overwhelming, so we want to assist you in navigating this
                abundance of information.
            </p>
        </div>
    </section>


    <section class='section '>

        <span class="relative flex justify-center">
            <div
                class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75">
            </div>

            <span class="relative z-10 bg-gray-800 px-6 text-yellow-300">Our content</span>
        </span>
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8 p-6">
            <div
                class="h-32 rounded-lg flex flex-col justify-center items-center bg-gray-900 text-gray-200 shadow-md hover:shadow-lg shadow-purple-500/50 hover:shadow-green-500/50">
                <h1><a href="http://twitter.com/voltaichq" target='_blank'
                        class="text-purple-400 hover:underline">@Voltaic</a> Season 4</h1>
                <span
                    class="whitespace-nowrap rounded-full bg-orange-500 px-2.5 py-0.5 text-sm text-black">KovaaK</span>
                <span class="inline-flex -space-x-px overflow-hidden rounded-md border shadow-sm mt-2 mb-2">
                    <a href="/vt/s4-novice">
                        <button
                            class="inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-green-300 focus:relative bg-green-400">
                            Novice
                        </button></a>

                    <a href="/vt/s4-intermediate"><button
                            class="inline-block px-4 py-2 text-sm font-medium text-gray-700 bg-yellow-400 hover:bg-yellow-300 focus:relative">
                            Intermediate
                        </button></a>

                    <a href="/vt/s4-advanced"> <button
                            class="inline-block px-4 py-2 text-sm font-medium text-gray-700 bg-red-400 hover:bg-red-300 focus:relative">
                            Advanced
                        </button></a>
                </span>
            </div>


            <div
                class="h-32 rounded-lg flex flex-col justify-center items-center bg-gray-900 text-gray-200 shadow-md hover:shadow-lg shadow-red-500/50 hover:shadow-green-500/50">
                <h1 class="card-text"><a href="https://x.com/Revosect" target='_blank'
                        class="text-red-400 hover:underline">@Revosect</a> Benchmarks</h1>
                <span
                    class="whitespace-nowrap rounded-full bg-teal-500 px-2.5 py-0.5 text-sm text-black text-white">Aimlab</span>

                <span class="inline-flex -space-x-px overflow-hidden rounded-md border shadow-sm mt-2 mb-2">
                    <a href="/ra/easy">
                        <button
                            class="inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-green-300 focus:relative bg-green-400">
                            Easy
                        </button></a>

                    <a href="/ra/medium"><button
                            class="inline-block px-4 py-2 text-sm font-medium text-gray-700 bg-yellow-400 hover:bg-yellow-300 focus:relative">
                            Medium
                        </button></a>

                    <a href="/ra/hard"> <button
                            class="inline-block px-4 py-2 text-sm font-medium text-gray-700 bg-red-400 hover:bg-red-300 focus:relative">
                            Hard
                        </button></a>
                </span>
            </div>
        </div>
    </section>




    <section class='section mt-5 mb-5 mr-10 ml-10 text-white'>
        <div class='text-center font-monospace'>
            <span class='text-green-300'>Our website</span> is designed to be a <strong>tool</strong> that supports
            <span class='text-red-500'>you</span>
            in your daily
            training. We have created a
            <em class="text-blue-400">Benchmark Tool</em>, run a <span class='text-green-400'>blog</span>, and <span
                class='text-yellow-300'>collect
                valuable materials</span> related to FPS
            game training. Of course, that’s <u>not</u>
            all,
            but we prefer that you <span class='text-green-300'>discover</span> what we offer by exploring our project
            <span class='text-red-500'>yourself</span>.
        </div>
    </section>


    <div class="grid grid-cols-2 gap-4 text-white lg:gap-8 mr-10 ml-10 lg:mr-40 lg:ml-40">
        <div
            class="h-32 rounded-lg bg-gray-900 flex flex-col items-center justify-center shadow shadow-sm shadow-red-800">
            <p><span class="text-red-600">Aimbeast</span> materials</p>
            <a href='/ab-materials'><button class="bg-red-400/50 h-8 w-32 rounded-full shadow-red-600/60 shadow-md"><i
                        class="bi bi-file-earmark-text"></i>
                    Read</button></a>
        </div>
        <div
            class="h-32 rounded-lg bg-gray-900 flex flex-col items-center justify-center shadow shadow-sm shadow-teal-800">
            <p><span class="text-teal-500">Aimlab</span> materials</p>
            <a href="/al-materials"><button class="bg-teal-300/50 h-8 w-32 rounded-full shadow-teal-500/60 shadow-md"><i
                        class="bi bi-file-earmark-text"></i>
                    Read</button></a>
        </div>
    </div>

    <br>
    <br>
    <section class="section mr-10 ml-10 text-white bg-gray-900">
        From the author - the site is open-source. The code is not written by a professional. I run this
        project as a hobby, on the side. If there is ever any form of monetization, it will only be to cover hosting
        costs.
    </section>


</body>