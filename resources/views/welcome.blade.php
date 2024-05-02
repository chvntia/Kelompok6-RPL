<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIDesa | Desa Wisata Asri</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')

</head>

<body class="font-sans antialiased">
    @include('layouts.navbar')
    <section class="relative bg-cover bg-center bg-opacity-50" style="background-image: url('{{ asset('images/background2.jpg') }}')">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl relative z-10">
            <div class="grid items-center grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-24">
                <div class="md:order-first">
                    <h1 class="text-white text-6xl font-semibold tracking-tighter text-balance">
                        Selamat Datang
                        <span class="text-white">Desa Wisata Asri</span>
                    </h1>
                    <p class="mt-4 text-white font-medium text-gray-500">
                    Selamat datang di Desa Wisata Asri, tempat di mana keindahan alam dan keramahan masyarakat bergabung untuk menciptakan pengalaman yang tak terlupakan bagi para pengunjung. 
                    Tersembunyi di tengah-tengah alam yang mempesona, Desa Wisata Asri menawarkan kesempatan untuk menyelami kekayaan budaya dan keindahan alam yang autentik.
                    </p>
                    <div class="flex flex-col items-center gap-2 mx-auto mt-8 md:flex-row">
                        <button class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 font-medium text-white duration-200 bg-lime-500 md:w-auto rounded-xl hover:bg-lime-800 focus:ring-2 focus:ring-offset-2 focus:ring-black" aria-label="Primary action">
                            Registrasi
                        </button>
                    </div>
                </div>
                <div class="order-first block w-full mt-12 aspect-square lg:mt-0 h-full px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl">
                    <div class="h-full p-1 overflow-hidden duration-500 origin-bottom border transformrelative rounded-3xl rotate-6 hover:rotate-0 hover:-translate-y-12 hover:scale-10">
                        <img class="relative w-full h-full object-cover rounded-2xl drop-shadow-2xl bg-opacity-100" src="{{ asset('images/logo.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="px-12 py-32 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <div class="p-2 border bg-gray-50 rounded-3xl">
                <div class="relative px-6 pt-16 overflow-hidden bg-white shadow-2xl isolate sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                    <div class="max-w-md mx-auto text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                        <p class="mt-8 text-4xl font-semibold tracking-tighter text-black">
                            Profile Desa
                        </p>
                        <p class="mt-4 text-base font-medium text-gray-500">
                            Desa Wisata Asri adalah destinasi yang membanggakan dengan karakteristik unik yang memikat hati.
                            Terletak di antara pegunungan yang hijau dan sungai yang jernih,
                            desa ini dikelilingi oleh keindahan alam yang menakjubkan.
                            Kami adalah rumah bagi masyarakat yang ramah dan berbudaya,
                            siap menyambut Anda dengan senyum hangat dan keramahan yang tulus.
                        </p>
                    </div>
                    <div class="relative mt-16 h-80 lg:mt-8">
                        <img class="absolute left-0 top-0 w-[57rem] max-w-none rounded-3xl bg-white border" src="{{ asset('images/background2.jpg') }}" alt="#_" width="1824" height="1080">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="px-12 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <div class="p-2 border bg-gray-50 rounded-3xl">
                <div class="relative px-6 pt-16 overflow-hidden bg-white shadow-2xl isolate sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                    <div class="max-w-md mx-auto text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                        <p class="mt-8 text-4xl font-semibold tracking-tighter text-black">
                            Berita dan Kegiatan Terbaru
                        </p>
                        <p class="mt-4 text-base font-medium text-gray-500">
                            Ikuti perkembangan terbaru di Desa Wisata Asri dan jangan lewatkan momen-momen istimewa yang kami bagikan dengan bangga kepada para pengunjung kami.
                            Dari festival budaya yang meriah hingga kegiatan alam yang mendebarkan,
                            setiap pengalaman di Desa Wisata Asri akan membuat Anda merasa terhubung dengan alam dan budaya kami.
                        </p>
                    </div>
                    <div class="relative mt-16 h-80 lg:mt-8">
                        <img class="absolute left-0 top-0 w-[57rem] max-w-none rounded-3xl bg-white border" src="{{ asset('images/background2.jpg') }}" alt="#_" width="1824" height="1080">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <div class="grid grid-cols-1 gap-2 lg:grid-cols-4">
                <div class="h-full p-2 overflow-hidden duration-500 border rounded-3xl hover:-translate-y-4">
                    <img src="{{ asset('images/background2.jpg')}}" class="object-cover h-full border shadow-2xl rounded-2xl aspect-square">
                </div>
                <div class="h-full p-2 overflow-hidden duration-500 border rounded-3xl hover:-translate-y-4">
                    <img src="{{ asset('images/background2.jpg')}}" class="object-cover h-full border shadow-2xl rounded-2xl aspect-square">
                </div>
                <div class="h-full p-2 overflow-hidden duration-500 border rounded-3xl hover:-translate-y-4">
                    <img src="{{ asset('images/background2.jpg')}}" class="object-cover h-full border shadow-2xl rounded-2xl aspect-square">
                </div>
                <div class="h-full p-2 overflow-hidden duration-500 border rounded-3xl hover:-translate-y-4">
                    <img src="{{ asset('images/background2.jpg')}}" class="object-cover h-full border shadow-2xl rounded-2xl aspect-square">
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="px-8 py-6 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <ol class="relative grid grid-cols-1 gap-3 lg:grid-cols-2 sm:grid-cols-2" role="list">
                <li class="p-2 border bg-gray-50 rounded-3xl">
                    <div class="p-10 bg-white border shadow-lg rounded-3xl shadow-2xl">
                        <div>
                            <div>
                                <div class="flex-shrink-0 block">
                                    <div class="flex items-center">
                                        <div>
                                            <img alt="#_" class="inline-block object-cover rounded-full size-9" src="https://images.unsplash.com/photo-1602434228300-a645bce6891b?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1639&amp;q=80">
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm text-black group-hover:text-blue-500">
                                                Mikaela Andreuzza
                                                <span class="text-gray-500"> in </span>
                                                Investiments ·
                                                <span class="text-gray-500"> 4 days ago </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="mt-8 text-lg font-medium leading-6 text-black">
                                The Hidden Danger of QR Codes
                            </h3>
                        </div>
                        <p class="mt-4 text-base font-medium text-gray-500 text-balance line-clamp-3">
                            In this article, I will be referring to various amazing Authors and
                            resources I strongly recommend that you separately study them on
                            your own. The references list is at the end of the article, enjoy
                            reading! I will be referring to various amazing. In this article, I
                            will.
                        </p>
                        <div class="inline-flex items-center justify-between w-full mt-4">
                            <div>
                                <p class="text-sm text-black group-hover:text-blue-500">
                                    Investiments
                                    <span class="text-gray-500"> · </span>
                                    10 min read
                                </p>
                            </div>
                            <div>
                                <span>
                                    <ion-icon name="bookmark-outline" class="w-5 text-blue-500 group-hover:text-black md hydrated" role="img" aria-label="bookmark outline"></ion-icon>
                                </span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="p-2 border bg-gray-50 rounded-3xl">
                    <div class="p-10 bg-white border shadow-lg rounded-3xl shadow-2xl">
                        <div>
                            <div>
                                <div class="flex-shrink-0 block">
                                    <div class="flex items-center">
                                        <div>
                                            <img alt="#_" class="inline-block object-cover rounded-full size-9" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=989&amp;q=80">
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm text-black group-hover:text-blue-500">
                                                Ulaffson
                                                <span class="text-gray-500"> in </span>
                                                Investiments ·
                                                <span class="text-gray-500"> 4 days ago </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="mt-8 text-lg font-medium leading-6 text-black">
                                Metamask - Is It Really A Wallet?
                            </h3>
                        </div>
                        <p class="mt-4 text-base font-medium text-gray-500 text-balance line-clamp-3">
                            Each of us lives our own life. Everyday routines, people we meet,
                            things we experience, the music we listen to, the food we eat, the
                            culture that surrounds us, or even the way our apartment is set up.
                            Every little detail impacts our lives in some way.
                        </p>
                        <div class="inline-flex items-center justify-between w-full mt-4">
                            <div>
                                <p class="text-sm text-black group-hover:text-blue-500">
                                    Investiments
                                    <span class="text-gray-500"> · </span>
                                    10 min read
                                </p>
                            </div>
                            <div>
                                <span>
                                    <ion-icon name="bookmark-outline" class="w-5 text-blue-500 group-hover:text-black md hydrated" role="img" aria-label="bookmark outline"></ion-icon>
                                </span>
                            </div>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <section>
        <div class="mx-auto md:px-12 lg:px-32 max-w-7xl">
            <div class="p-2 border bg-gray-50 rounded-3xl">
                <div class="p-10 bg-white border shadow-lg md:p-20 rounded-3xl">
                    <div class="grid items-end grid-cols-1 lg:grid-cols-2">
                        <div>
                            <p class="mt-8 text-4xl font-semibold tracking-tighter text-black text-balance">
                                Register now for the latest updates
                            </p>
                            <p class="mx-auto mt-4 text-sm font-medium text-gray-500 text-balance">
                                Mari bergabung dengan kami di Desa Wisata Asri dan jelajahi pesona alam serta kekayaan budaya yang kami tawarkan.
                                Segera rencanakan kunjungan Anda dan mari kita bersama-sama menciptakan kenangan indah yang akan bertahan seumur hidup.
                            </p>
                        </div>
                        <form class="w-full max-w-xs mt-8 lg:ml-auto">
                            <div class="flex flex-col w-full gap-2">
                                <label for="email-address" class="sr-only">Email address</label>
                                <input name="email" id="email-address" type="email" autocomplete="email" placeholder="Enter your email" aria-describedby="emailHelp" required="" class="block w-full h-12 px-4 py-2 duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 text-accent-500 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm">
                                <span id="emailHelp" class="sr-only">Please enter your email address to subscribe.</span>
                                <button type="submit" aria-label="Primary action" class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 font-medium text-white duration-200 bg-gray-900 rounded-xl hover:bg-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-black">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <div class="text-center">
                <div>
                    <p class="mt-8 text-4xl font-semibold tracking-tighter text-black text-balance">
                        Foto & Kegiatan Desa
                    </p>
                </div>
            </div>
            <div class="px-8 py-48 mx-auto md:px-12 lg:px-32 max-w-7xl">
                <div class="flex flex-col mx-auto sm:flex-row">
                    <div class="h-full p-2 overflow-hidden duration-500 origin-bottom border transformrelative rounded-3xl rotate-6 hover:rotate-0 hover:-translate-y-12 hover:scale-150">
                        <img src="{{ asset('images/kegiatan2.jpg')}}" class="object-cover w-full h-full border shadow-2xl rounded-2xl aspect-square" alt="#_">
                    </div>
                    <div class="h-full p-2 overflow-hidden duration-500 origin-bottom border transformrelative rounded-3xl -rotate-12 hover:rotate-0 hover:-translate-y-12 hover:scale-150">
                        <img src="{{ asset('images/kegiatan2.jpg')}} " class="object-cover w-full h-full border shadow-2xl rounded-2xl aspect-square" alt="#_">
                    </div>
                    <div class="h-full p-2 overflow-hidden duration-500 origin-bottom border transformrelative rounded-3xl rotate-6 hover:rotate-0 hover:-translate-y-12 hover:scale-150">
                        <img src="{{ asset('images/kegiatan2.jpg')}}" class="object-cover w-full h-full border shadow-2xl rounded-2xl aspect-square" alt="#_">
                    </div>
                    <div class="h-full p-2 overflow-hidden duration-500 origin-bottom transform border rounded-3xl hover:rotate-0 hover:-translate-y-12 -rotate-12 hover:scale-150">
                        <img src="{{ asset('images/kegiatan2.jpg')}}" class="object-cover w-full h-full border shadow-2xl rounded-2xl aspect-square" alt="#_">
                    </div>
                </div>
            </div>

            <div class="px-8 mx-auto md:px-12 lg:px-32 max-w-7xl">
                <div class="grid gap-2 lg:max-w-7xl lg:mx-auto lg:grid-cols-3">
                    <div class="h-full p-2 overflow-hidden border rounded-3xl">
                        <img src="{{ asset('images/kegiatan2.jpg')}}" class="object-cover h-full border shadow-2xl rounded-2xl">
                    </div>
                    <div class="relative h-full p-2 overflow-hidden border rounded-3xl lg:col-span-2">
                        <img src="{{ asset('images/kegiatan2.jpg')}}" class="object-cover h-full border shadow-2xl rounded-2xl">
                    </div>
                    <div class="relative h-full p-2 overflow-hidden border rounded-3xl lg:col-span-2">
                        <img src="{{ asset('images/kegiatan2.jpg')}}" class="object-cover h-full border shadow-2xl rounded-2xl">
                    </div>
                    <div class="h-full p-2 overflow-hidden border rounded-3xl">
                        <img src="{{ asset('images/kegiatan2.jpg')}}" class="object-cover h-full border shadow-2xl rounded-2xl">
                    </div>
                </div>
            </div>

    </section>

</body>
</html>