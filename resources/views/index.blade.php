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
    <div class="md:container mx-auto bg-rose-300 px-4 lg:px-28 md:px-12 sm:px-0 pt-6 h-auto border-[0.1px] border-zinc-700 pb-16">

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
                                    href="#"
                                    data-te-nav-link-ref
                                >Home</a
                                >
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

            <button class=" px-3 rounded-full bg-neutral-800 w-auto py-2 border-[0.1px] border-zinc-700 text-zinc-200 hover:text-rose-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                </svg>
            </button>
        </div>

        <div class="pt-16 md:w-[70%] sm:w-[100%] lg:flex">
            <img src="{{ url('/') }}/img/logo.jpg" alt="logo" class="rounded-full w-24 lg:w-44 h-auto border-4 border-rose-400 lg:mr-10">
            <h1 class="text-5xl font-bold text-white pt-8" style="font-family: 'Trebuchet MS', sans-serif">
                <span style="font-family:'URW Chancery L', cursive;" class="text-7xl">Cerch’io</span> - tele ricamate e dipinte a mano
            </h1>
        </div>
    </div>

    <!-- <div class="lg:mx-36 md:mx-8 sm:mx-0 bg-[#18181b] px-4 lg:px-28 md:px-12 pt-6 h-auto border-[0.1px] border-zinc-700 pb-10">-->
    <div class="md:container mx-auto bg-[#18181b] px-4 lg:px-28 md:px-12 sm:px-0 pt-24 h-auto ">
        <h1 class="text-5xl font-bold text-zinc-200 pt-8" style="font-family: 'Trebuchet MS', sans-serif">
            Tessendo emozioni: arte e ricamo su tela personalizzata
        </h1>
         <p class="pt-10  text-zinc-400 text-lg leading-9" style="font-family: 'Trebuchet MS', sans-serif">
             Esplora il nostro sito di arte unica: tele ricamate e dipinte a mano. <br>
             Ogni creazione racconta una storia, aggiungendo fascino e originalità ai tuoi spazi. <br>
             Scopri opere d'arte che esprimono emozioni e colore, trasformando le tue pareti in un mondo di creatività. <br>
             Scegli la tela che rappresenta te e il tuo stile.
         </p>

     <!-- div social -->
        <div class="pt-6 text-zinc-400 ">
            <ul class="flex">
                <li class="mr-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                </li>
                <li class="mr-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg>
                </li>
                <li class="mr-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg>
                </li>
            </ul>
        </div>
    </div>

    <div class="md:container mx-auto bg-[#18181b] px-4 lg:px-28 md:px-12 sm:px-0 pb-20">
        <!-- div immagini -->
        <div class="pt-16 px-2 lg:ml-[-150px] lg:mr-[-200px] flex overflow-x-auto overflow-scroll pb-2">
            <img src="{{ url('/') }}/img/home1.jpg" alt="home1" class="w-80 h-80 rounded-lg rotate-2 mr-10">
            <img src="{{ url('/') }}/img/home2.jpg" alt="home2" class="w-80 h-80 rounded-lg -rotate-2 mr-10">
            <img src="{{ url('/') }}/img/home3.jpg" alt="home3" class="w-80 h-80 rounded-lg rotate-2 mr-10">
            <img src="{{ url('/') }}/img/home4.jpg" alt="home4" class="w-80 h-80 rounded-lg -rotate-2 mr-10">
            <img src="{{ url('/') }}/img/home5.jpg" alt="home5" class="w-80 h-80 rounded-lg rotate-2 mr-10">
        </div>
        <!--<p class="pt-10">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu justo interdum, tristique erat ut, tempor turpis. Quisque quis rhoncus ante. In hac habitasse platea dictumst. Aliquam ut lacus elit. Vestibulum urna neque, imperdiet eget faucibus id, vestibulum ac eros. Proin cursus ex erat, id tempor lorem auctor vulputate. Cras.
        </p>-->
    </div>

    <div class="md:container mx-auto bg-rose-50 px-4 lg:px-28 md:px-12 sm:px-0 pb-10 h-auto ">
    <!--shop-->
        <div class="pt-16 md:w-[70%] sm:w-[100%]">
            <h1 id="shop" class="text-5xl font-bold text-black flex" style="font-family: 'Trebuchet MS', sans-serif">
                <span class="mr-2">Shop</span> <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                </svg>
            </h1>
            <p class="pt-8  text-black text-lg leading-7" style="font-family: 'Trebuchet MS', sans-serif">
                Esplora la nostra sezione di vendita, dove l'arte e l'artigianato si fondono in creazioni uniche. <br>
                Dalle tele dipinte e ricamate a mano a prodotti artigianali selezionati, scopri opere che raccontano storie e trasmettono autenticità. <br>
                Entra in un mondo di bellezza unica e originalità, dove ogni dettaglio è realizzato con passione. <br>
                Benvenuti nell'essenza dell'arte fatta a mano.
            </p>
        </div>

        <!--products-->
        <div class="lg:flex md:flex font-sans bg-white rounded-lg overflow-hidden mt-16 mx-auto">
            <div class="flex-none w-56 relative mx-auto">
                <img  src="{{ url('/') }}/img/shop.jpg" alt="shop" class="relative inset-0 w-full h-full object-cover" loading="lazy" />
            </div>
            <form class="flex-auto p-6">
                <div class="flex flex-wrap">
                    <h1 class="flex-auto text-lg font-semibold text-slate-900">
                        Mnemosyne
                    </h1>
                    <div class="text-lg font-semibold text-slate-500">
                        € 50.00
                    </div>
                    <div class="w-full flex-none text-sm font-medium text-slate-700 mt-2">
                        Un'istantanea di emozioni intessuta con cura e immortalata su tela, un'opera unica che cattura la bellezza dell'anima.
                    </div>
                </div>
                <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200">
                    <div class="space-x-2 flex text-sm">
                        <label>
                            <input class="sr-only peer" name="size" type="radio" value="xs" checked />
                            <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                                S
                            </div>
                        </label>
                        <label>
                            <input class="sr-only peer" name="size" type="radio" value="m" />
                            <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                                M
                            </div>
                        </label>
                        <label>
                            <input class="sr-only peer" name="size" type="radio" value="l" />
                            <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                                L
                            </div>
                        </label>
                    </div>
                </div>
                <div class="flex space-x-4 text-sm font-medium">
                    <div class="flex-auto flex space-x-4">
                        <button class="h-10 px-6 font-semibold rounded-md bg-black text-white" type="submit">
                            Acquista
                        </button>
                        <button class="h-10 px-6 font-semibold rounded-md border border-slate-200 text-slate-900" type="button">
                            Dettagli
                        </button>
                    </div>
                    <!--<button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200" type="button" aria-label="Like">
                        <svg width="20" height="20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                        </svg>
                    </button>-->
                </div>
                <!--<p class="text-sm text-slate-700">
                    Free shipping on all continental US orders.
                </p>-->
            </form>
        </div>

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
