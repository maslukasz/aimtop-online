<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aimtop [alpha]</title>

</head>

<?php require_once './src/components/navbar.php'; ?>

<body class='bg-gray-800'>
    <section class='text-gray-300 flex justify-center mt-8 mb-20'>
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

    <span class="relative flex justify-center mb-5">
        <div
            class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75">
        </div>

        <span class="relative z-10 bg-gray-800 px-6 text-yellow-300">Our content</span>
    </span>

    <div class="grid md:grid-cols-3 grid-cols-1 gap-4 text-white lg:gap-8 mr-10 ml-10 lg:mr-40 lg:ml-40">
        <div
            class="h-32 rounded-lg bg-gray-900 flex flex-col gap-2 items-center justify-center shadow-sm shadow-red-800">
            <p><span class="text-red-600">Aimbeast</span> materials</p>
            <a href='/ab-materials'><button class="bg-red-400/50 h-8 w-32 rounded-full shadow-red-600/60 shadow-md">
                    📄 Read</button></a>
        </div>

        <div
            class="h-32 rounded-lg bg-gray-900 flex flex-col gap-2 items-center justify-center shadow-sm shadow-red-800">
            <p><span class="text-orange-500">KovaaK's</span> materials</p>
            <a href='/kvk-materials'><button class="bg-orange-400/50 h-8 w-32 rounded-full shadow-red-600/60 shadow-md">
                    <!-- <i class="bi bi-file-earmark-text"></i> -->
                    📄 Read</button></a>
        </div>

        <div
            class="h-32 rounded-lg bg-gray-900 flex flex-col gap-2 items-center justify-center shadow-sm shadow-teal-800">
            <p><span class="text-teal-500">Aimlab</span> materials</p>
            <a href="/al-materials"><button class="bg-teal-300/50 h-8 w-32 rounded-full shadow-teal-500/60 shadow-md">
                    📄 Read</button></a>
        </div>
    </div>

    <section class='section mt-8 mb-5 mr-10 ml-10 text-white md:text-lg'>
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

    <span class="relative flex justify-center mb-5">
        <div
            class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75">
        </div>

        <span class="relative z-10 bg-gray-800 px-6 text-green-400">Benchmark tools</span>
    </span>

    <section class='section'>
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
                <span class="whitespace-nowrap rounded-full bg-teal-500 px-2.5 py-0.5 text-sm text-white">Aimlab</span>

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

    <section class="flex flex-col justify-center items-center text-white mt-10 p-2">
        <div class="border border-green-200 p-4 items-center">If
            you want to
            support us
            by making some
            aiming
            stuff,
            please contact us on <a class="text-[#7289da] font-extrabold" href="https://discord.gg/QJauGpg7zg"
                target="_blank"> Discord</a>.
            Also,
            if you
            have
            some valuable playlists, we'd appreciate it if you could share them with us.
        </div>
    </section>
</body>