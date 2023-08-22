<!doctype html>
<html style="color-scheme: dark; --header-position: sticky; --content-offset: 116px; --header-height: 180px; --header-mb: -116px; --header-top: 0px; --avatar-top: 0px; --avatar-image-transform: translate3d(0rem, 0, 0) scale(1); --avatar-border-transform: translate3d(-0.2222222222222222rem, 0, 0) scale(1.7777777777777777); --avatar-border-opacity: 0;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')

        <!--<script src="{{ url('/') }}/js/navbar.js"></script>-->

        <!-- icons bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ url('/') }}/css/style.css">

        <!-- navbar -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
              rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
        <script src="https://cdn.tailwindcss.com/3.3.0"></script>
        <script>
            tailwind.config = {
                darkMode: "class",
                theme: {
                    fontFamily: {
                        sans: ["Roboto", "sans-serif"],
                        body: ["Roboto", "sans-serif"],
                        mono: ["ui-monospace", "monospace"],
                    },
                },
                corePlugins: {
                    preflight: false,
                },
            };
        </script>
        <!-- navbar -->

        <style>
            html, body {
                overflow-x: hidden;
            }
        </style>

    </head>
    <body class="bg-black">
        <!--lg:px-28 md:px-12 sm:px-20-->
        <!--<div class="lg:mx-36 md:mx-8 sm:mx-0 bg-[#18181b] px-4 lg:px-28 md:px-12 pt-6 h-auto border-[0.1px] border-zinc-700 pb-10">--> <!-- CONTAINER -->
        <div class="md:container mx-auto bg-[#18181b] px-4 lg:px-28 md:px-12 sm:px-0 pt-6 pb-10 h-fit border-[0.1px] border-zinc-700 relative">

            <!--navbar-->
            <div class="flex items-center justify-center fixed left-0 w-full z-50">
                <nav
                    class="relative flex w-fit flex-nowrap items-center justify-between bg-neutral-800 py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 lg:flex-wrap lg:justify-start  lg:rounded-full mr-4 border-[0.1px] border-zinc-700 "
                    data-te-navbar-ref style="font-family: 'Trebuchet MS', sans-serif">
                    <div class="flex w-full flex-wrap items-center justify-between px-3">
                        <!-- Hamburger button for mobile view -->
                        <button
                            class="block border-0 bg-transparent px-2 text-neutral-300 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
                            type="button"
                            data-te-collapse-init
                            data-te-target="#navbarSupportedContent10"
                            aria-controls="navbarSupportedContent10"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <!-- Hamburger icon -->
                            <span class="[&>svg]:w-7">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="h-7 w-7">
                                            <path
                                                fill-rule="evenodd"
                                                d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                                clip-rule="evenodd" />
                                    </svg>
                                </span>
                        </button>

                        <!-- Collapsible navbar container -->
                        <div
                            class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
                            id="navbarSupportedContent10"
                            data-te-collapse-item>
                            <!-- Left links -->
                            <ul
                                class="list-style-none mr-auto flex flex-col pl-0 lg:mt-1 lg:flex-row"
                                data-te-navbar-nav-ref>
                                <!-- Home link -->
                                <li
                                    class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1"
                                    data-te-nav-item-ref>
                                    <!--                                class="text-neutral-300 transition duration-200 hover:text-neutral-200 hover:ease-in-out focus:text-neutral-200 disabled:text-black/30 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90 [&.active]:text-neutral-200 hover:text-teal-400"
        -->
                                    <a
                                        class="text-zinc-200 text-sm lg:px-2 [&.active]:text-black/90 [&.active]:text-neutral-200 hover:text-rose-400"
                                        aria-current="page"
                                        href="{{ route('home') }}"
                                        data-te-nav-link-ref
                                    >Home</a>
                                </li>
                                <!-- Features link -->
                                <li
                                    class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1"
                                    data-te-nav-item-ref>
                                    <a
                                        class="text-zinc-200 text-sm lg:px-2 [&.active]:text-black/90 [&.active]:text-neutral-200 hover:text-rose-400"
                                        href="#shop"
                                        data-te-nav-link-ref
                                    >Shop</a
                                    >
                                </li>
                                <!-- Pricing link -->
                                <li
                                    class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1"
                                    data-te-nav-item-ref>
                                    <a
                                        class="text-zinc-200 text-sm lg:px-2 [&.active]:text-black/90 [&.active]:text-neutral-200 hover:text-rose-400"
                                        href="#"
                                        data-te-nav-link-ref
                                    >Gallery</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="flex px-3 rounded-full bg-neutral-800 w-auto py-2 border-[0.1px] border-zinc-700 text-zinc-200 hover:text-rose-400">
                    <button class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                        </svg>
                    </button>
                    <span class="my-auto mx-4">Ciao, Davide</span>
                </div>
            </div>

            <div class="pt-36">
                <h1 class="text-5xl font-bold text-white pt-8 my-auto" style="font-family: 'Trebuchet MS', sans-serif">
                    Mnemosyne
                </h1>
            </div>
            <img src="{{ url('/') }}/img/shop.jpg" alt="home1" class="w-80 h-auto">
        </div>



        <!--footer-->
        <!--<div class="lg:mx-36 md:mx-8 sm:mx-0 bg-[#18181b] px-4 lg:px-28 md:px-12 pt-6 h-auto border-[0.1px] border-zinc-700 pb-14">-->
        <div class="md:container mx-auto bg-[#18181b] px-4 lg:px-28 md:px-12 sm:px-0 pt-6 h-auto border-[0.1px] border-zinc-700 pb-10">

            <p class="float-right text-zinc-400">
                © 2023 Zambelli Davide. All rights reserved.
            </p>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    </body>
</html>
