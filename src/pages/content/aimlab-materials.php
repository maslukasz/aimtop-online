<?php require './src/components/navbar.php' ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-800">
    <div class="text-center text-white mt-5">
        <h1 class="pt-5 pb-5 font-bold text-4xl">Aim groups materials</h1>
        <p class="p-3 px-3">Qualified aim materials that help you progress, made by aim groups.</p>
        <ul class="text-gray-200 list-none p-5"">
            <li class=" inline text-purple-400"><button id='vt-toggle'">Voltaic</button></li>
            <li class=" inline text-gray-100 animate-bounce">|</li>
                <li class="inline text-[#db1d1e] hover:underline"><button id="ra-toggle">Revosect</button>
                </li>
        </ul>


        <div id="vt-content" class="hidden">
            <ul class="border border-purple-500 border-solid p-3 ml-5 mr-5">
                <li><a href="https://discord.gg/voltaic" target="_blank" class="text-[#7289da] hover:underline">
                        Discord server</a>
                    (all resources are available there)</li>
                <li><a href='https://app.voltaic.gg/' target="_blank" class="hover:underline">Main
                        Benchmarks App</a> & Guide</li>
                <li><a href='https://bit.ly/VTxALfundamentals' target='_blank' class="hover:underline">Fundamentals</a>
                </li>
                <li><a href='https://bit.ly/VDIMdoc' target='_blank' class="hover:underline">VDIM
                        routines</a></li>
                <li><a href='https://bit.ly/VTxALgameroutines' target='_blank' class="hover:underline">Game
                        Routines</a></li>
                <li><a href='https://bit.ly/vtissueroutines' target='_blank' class="hover:underline">Weakness
                        Routines</a></li>

            </ul>
        </div>


        <div id="ra-content" class="hidden">
            <ul class="border border-solid border-[#db1d1e] p-3 ml-5 mr-5">
                <li><a href='https://discord.gg/revosect' target='_blank' class='hover:border text-[#7289da]'>Discord
                        server</a> (all resources are available
                    there)</li>
                <li><a href="https://bit.ly/ALbenchmarks" class="hover:underline" target="_blank">Aimlabs
                        Benchmarks</a> or <a href="/" class="text-green-400 hover:underline">on the our home
                        page</a></li>
                <li><a href='https://bit.ly/rARoutines' class="hover:underline" target="_blank">Foundational
                        Aimlab playlist</a></li>
                <li><a href='https://bit.ly/rAValorant' target='_blank' class='hover:underline'>Valorant
                        routine</a></li>
                <li><a href='https://go.aimlab.gg/v1/redirects?link=aimlab://workshop?id=3083294768' target='_blank'
                        class='hover:underline'>CS2
                        routine</a></li>
            </ul>
        </div>


        <div class="flex mt-10 mr-10 ml-10 p-5 text-center border border-red-600 bg-gray-900">
            <div class="flex justify-center">
                <span>At this moment, we don't plan to make materials for Aimlab or KovaaK's. We feel most
                    comfortable
                    with
                    Aimbeast and believe it is the best aim trainer at this moment. We want to support this amazing
                    project
                    by
                    creating content. This doesn't mean that our website doesn't contain any materials from other
                    aim
                    trainers.
                    We select the most valuable playlists and add them. We don't want to create an overly long list;
                    we
                    aim
                    to
                    provide something even we use. <br><br>
                    Right now, we are 100% focused on Aimbeast. The aimtop team is not looking for anything related
                    to Aimlab. For now, all the content that will be featured here will be provided by the community. We
                    are counting on you.<br><br>
                    <span class="text-green-300 uppercase font-bold">If you want to support us by making some aiming
                        stuff,
                        please contact us on <a class="text-[#7289da] font-extrabold"
                            href="https://discord.gg/QJauGpg7zg" target="_blank">Discord</a>.</span></span>
            </div>
        </div>



        <script src="./public/js/materials.js">
        </script>