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
    <h1 class="pt-5 pb-5 font-bold text-4xl"><span class='text-red-500'>Aimbeast</span> materials</h1>
    <p class="p-3 px-3">Qualified aim materials selected by the aimtop team and the community.</p>

    <div
      class="py-3 ml-5 mr-5 flex items-center text-sm text-gray-800 before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:before:border-neutral-600 dark:after:border-neutral-600">
      Our materials</div>
    <div class="ml-5 mr-5 text-center text-white">
      <p class="p-3 px-3">Right now, we only support <span class="text-red-500">Aimbeast</span>. Below are our
        playlists. If you want to play our scenarios, just type 'AIMTOP' in the scenarios browser. <br>
        There are
        also some scenarios in <span class="text-green-600">EasyAim</span>, but we don't make them
        reguraly. Just type "AIMTOP" or "mluki" in the browser.</p>
      <ul class="text-gray-200 list-none p-5"></ul>
      <li class="inline text-red-400 hover:underline"><a
          href="https://steamcommunity.com/sharedfiles/filedetails/?id=3079348564&searchtext=aimtop"
          target="_blank">AIMTOP VALORANT ROUTINE</a></li>
      <li class="inline text-gray-100">|</li>
      <li class="inline text-red-400 hover:underline"><a
          href="https://steamcommunity.com/sharedfiles/filedetails/?id=3080048498&searchtext=aimtop"
          target="_blank">AIMTOP VALORANT ROUTINE 2</a></li>
      <li class="inline text-gray-100">|</li>
      <li class="inline text-green-300 hover:underline"><a
          href="https://steamcommunity.com/sharedfiles/filedetails/?id=3155306935&searchtext=aimtop">AIMTOP
          FLICK CORRECTION</a></li>
      <li class="inline text-gray-100">|</li>
      <li class="inline text-blue-300 hover:underline"><a
          href="https://steamcommunity.com/sharedfiles/filedetails/?id=3080041038&searchtext=aimtop">
          AIMTOP RAW TS</a></li>
      <li class="inline text-gray-100">|</li>
      <li class="inline text-red-400 hover:underline"><a
          href="https://steamcommunity.com/sharedfiles/filedetails/?id=3188843986&searchtext=aimtop">
          AIMTOP VALORANT EASY BENCHES [<span class="bold">WORK IN PROGRESS</span>]</a></li>
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
          <span class="text-green-300 uppercase font-bold">If you want to support us by making some aiming
            stuff,
            please contact us on <a class="text-[#7289da] font-extrabold" href="https://discord.gg/QJauGpg7zg"
              target="_blank">Discord</a>.</span></span>
      </div>
    </div>

    <div
      class="py-3 ml-5 mr-5 mt-5 flex items-center text-sm text-gray-800 before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:before:border-neutral-600 dark:after:border-neutral-600">
      Weakness specific</div>

    <ul class="text-gray-200 list-none p-5"">
      <p class=" p-3 px-3 text-green-400 font-bold text-2xl">Tracking collection</p>
      <li id='ab-easy' class="inline hover:underline text-green-400">Green <span class='text-white'>- easy</span></li>
      <li class="inline text-gray-100">|</li>
      <li id="ab-medium" class="inline hover:underline text-orange-300">Orange <span class='text-white'>- medium</span>
      </li>
      </li>
      <li class=" inline text-gray-100">|</li>
      <li id='ab-hard' class="inline hover:underline text-red-400">Red <span class='text-white'>- hard</span></li>
      </li>
    </ul>


    <div id="ab-easy-content" class="hidden">
      <ul class="border border-green-500 border-solid p-3 mb-5 ml-5 mr-5 list-disc list-inside gap-3">
        <li>We strongly recommend the new Aimbeast ranked playlist
          (S2). There are amazing
          scenarios in the beginner
          section, which are good for starting out.</li>
        <li><i class="bi bi-caret-right"></i>Aimbeast beginner - tracking [<a
            href="https://steamcommunity.com/sharedfiles/filedetails/?id=3124718541" target="_blank"><span
              class='text-blue-400 hover:underline'>STEAM</span></a>]</li>

      </ul>
    </div>

    <div id="ab-medium-content" class="hidden">
      <ul class="border border-orange-500 border-solid p-3 mb-5  ml-5 mr-5">
        <li>TODO</li>

      </ul>
    </div>

    <div id="ab-hard-content" class="hidden">
      <ul class="border border-red-500 border-solid p-3 mb-5  ml-5 mr-5">
        <li>TODO</li>

      </ul>
    </div>

    <script src="./public/js/materials.js"></script>