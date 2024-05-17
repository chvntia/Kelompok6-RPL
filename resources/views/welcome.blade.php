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
                        <a href="{{ route('login') }}">
                            <button class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 font-bold text-white duration-200 bg-lime-500 md:w-auto rounded-xl hover:bg-lime-800 focus:ring-2 focus:ring-offset-2 focus:ring-black" aria-label="Primary action">
                                Masuk
                            </button>
                        </a>
                        <a href="{{ route('register') }}">
                            <button class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 font-bold text-lime-900 duration-200 bg-lime-200 md:w-auto rounded-xl hover:bg-lime-500 focus:ring-2 focus:ring-offset-2 focus:ring-black" aria-label="Primary action">
                                Registrasi
                            </button>
                        </a>
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


    <section id="profile_desa">
        <div class="px-12 py-32 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <div class="p-2 border bg-gray-50 rounded-3xl">
                <div class="relative px-6 pt-16 overflow-hidden bg-white shadow-2xl isolate sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                    <div class="max-w-md mx-auto text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                        <p class="mt-8 text-3xl font-semibold tracking-tighter text-lime-900">
                            Profile Desa
                        </p>
                        <p class="mt-4 text-base font-medium text-gray-500">
                            Desa Wisata Asri adalah destinasi yang membanggakan dengan karakteristik unik yang memikat hati.
                            Terletak di antara pegunungan yang hijau dan sungai yang jernih,
                            desa ini dikelilingi oleh keindahan alam yang menakjubkan.
                            Kami adalah rumah bagi masyarakat yang ramah dan berbudaya,
                            siap menyambut Anda dengan senyum hangat dan keramahan yang tulus.
                        </p>
                        <p class="mt-8 text-3xl font-semibold tracking-tighter text-lime-900">
                            Sejarah Desa
                        </p>
                        <p class="mt-4 text-base font-medium text-gray-500">
                            Desa Wisata Asri bermula dari sebuah pemukiman kecil yang didirikan oleh nenek moyang kami
                            lebih dari satu abad yang lalu. Pada awalnya, desa ini merupakan tempat tinggal bagi sekelompok kecil petani dan
                            pengrajin lokal. Mereka hidup secara sederhana, menggantungkan kehidupan mereka pada hasil bumi dan keahlian kerajinan tangan mereka.
                        </p>
                        <p class="mt-4 text-base font-medium text-gray-500">
                            Seiring berjalannya waktu, Desa Wisata Asri mulai menarik perhatian para pelancong yang mencari kedamaian dan
                            keindahan alam. Kehijauan pegunungan yang memeluk desa dan sungai yang mengalir jernih menjadi daya tarik utama
                            bagi para pengunjung. Pemandangan alam yang menakjubkan ini menjadi fondasi bagi perkembangan desa menjadi
                            destinasi wisata yang terkenal.
                        </p>
                        <p class="mt-4 text-base font-medium text-gray-500">
                            Pada tahun-tahun berikutnya, Desa Wisata Asri berkembang pesat.
                            Infrastruktur wisata seperti penginapan, restoran, dan sarana rekreasi lainnya mulai dibangun untuk
                            memenuhi kebutuhan para wisatawan. Namun, penduduk desa tetap mempertahankan keaslian budaya dan kehidupan
                            tradisional mereka, menjadikan Desa Wisata Asri sebagai tempat yang unik di antara destinasi wisata lainnya
                        </p>
                    </div>
                    <div class="relative mt-16 h-80 lg:mt-8">
                        <img class="absolute left-0 top-0 w-[57rem] max-w-none rounded-3xl bg-white border" src="{{ asset('images/background2.jpg') }}" alt="#_" width="1824" height="1080">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lokasi" class="mx-auto md:px-12 lg:px-32 max-w-7xl mb-10">
        <h2 class="text-2xl text-lime-900 font-semibold mb-6">Peta Lokasi Desa</h2>
            <div class="aspect-w-16 aspect-h-9">
                <iframe width="1020" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=107.62894010543825%2C-6.974034959260891%2C107.63851428031922%2C-6.966457908750764&amp;layer=mapnik&amp;marker=-6.97024643387382%2C107.63372719287874"></iframe>
            </div>
    </section>

    <section>
        <div class="mt-10 mx-auto md:px-12 lg:px-32 p-12 rounded-3xl">
            <div class="text-center text-white p-6 rounded-2xl bg-gradient-to-r from-lime-200 to-lime-600">
                <h1 class="text-xl font-semibold tracking-tighter lg:text-4xl text-balance">
                    Visi Desa
                </h1>

                <p class="italic w-1/2 mx-auto mt-4 text-base font-medium text-balance">
                    Menjadi destinasi wisata yang terkemuka dengan keindahan alam yang memukau dan keramahan budaya yang memikat, memberikan pengalaman yang tak terlupakan bagi setiap pengunjung.
                </p>

                <h1 class="mt-8 text-2xl font-semibold tracking-tighter lg:text-4xl text-balance">
                    Misi Desa
                </h1>

                <p class="italic w-1/2 mx-auto mt-4 text-base font-medium text-balance">
                    <li>
                        Melestarikan keindahan alam dan ekosistem Desa Wisata Asri.
                    </li>
                    <li>
                        Mengembangkan infrastruktur wisata yang ramah lingkungan.
                    </li>
                    <li>
                        Menjaga dan mempromosikan kebudayaan lokal.
                    </li>
                </p>
            </div>
        </div>
    </section>


    <section>
        <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <div class="h-full p-2 overflow-hidden border shadow-2xl rounded-2xl rounded-3xl">
                <h1 class="text-2xl font-semibold tracking-tighter lg:text-3xl text-balance text-center mb-10 mt-5 text-lime-900">
                    Struktur Organisasi Desa
                </h1>
                <img src="{{ asset('images/struktur.jpg')}}" class="object-cover h-full rounded-2xl">
            </div>
        </div>
    </section>


    <section id="fasilitas">
        <div class="px-6 py-6 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <h1 class="text-2xl font-semibold tracking-tighter lg:text-3xl text-balance text-center mb-10 mt-5 text-lime-900">
                Fasilitas Desa
            </h1>
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
        <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <div class="text-center">
                <div>
                    <p class="mt-8 text-3xl font-semibold tracking-tighter text-lime-900 text-balance">
                        Foto & Kegiatan Desa
                    </p>
                </div>
            </div>
            <div class="px-8 py-12 mx-auto md:px-12 lg:px-32 max-w-7xl">
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

    
    <section>
        <div class="mx-auto md:px-12 lg:px-32 max-w-7xl mb-10">
            <div class="p-2 border bg-gray-50 rounded-3xl">
                <div class="p-10 bg-white border shadow-lg md:p-20 rounded-3xl">
                    <div class="grid items-end grid-cols-1 lg:grid-cols-2">
                        <div>
                            <p class="mt-8 text-4xl font-semibold tracking-tighter text-black text-balance">
                                Segera daftar untuk melihat lebih lanjut!
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
                                <button type="submit" aria-label="Primary action" class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 font-medium text-white duration-200 bg-lime-900 rounded-xl hover:bg-lime-500 focus:ring-2 focus:ring-offset-2 focus:ring-black">
                                    Registrasi
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="kontak">
        <div class="px-8 py-12 mx-auto md:px-12 lg:px-32 w-full bg-lime-100">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div>
                    <p class="text-2xl font-bold text-lime-800">Desa Wisata Asri</p>
                    <p class="mt-2 text-sm font-medium text-gray-500 lg:w-4/5">
                        <span class="lg:block">Jl. Sukapura No.54, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40267</span>
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-8 mt-12 text-sm font-medium text-gray-500 lg:grid-cols-3 lg:mt-0 xl:col-span-2">
                    <div>
                        <h3 class="text-base text-black">Kontak & Informasi</h3>
                        <ul role="list" class="mt-4 space-y-2">
                            <li>
                                <span class="lg:block">+62 812 3456 789</span>
                                <span class="lg:block">+62 812 3456 789</span>
                                <span class="lg:block">+62 812 3456 789</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-base text-black">Media Sosial</h3>
                        <ul role="list" class="mt-4 space-y-2">
                            <li>
                                <a href="" class="hover:text-black">
                                    @DesaWisataAsri
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-base text-black">Kelompok 6</h3>
                        <ul role="list" class="mt-4 space-y-2">
                            <li>
                                <span class="lg:block">Chyntia Oktavia Zulkifli</span>
                                <span class="lg:block">Sarnia Humaira Thamrin</span>
                                <span class="lg:block">Cynthia Ayu Prayuning</span>
                                <span class="lg:block">Dimas Jaya Kusuma</span>
                                <span class="lg:block">Christian Abilene</span>
                                <span class="lg:block">M Irfan Naufal</span>
                                <span class="lg:block">Fairuz Ichsan</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-col pt-12 md:flex-row md:items-center md:justify-between">
                <span class="text-sm font-medium text-gray-500">
                    Copyright © <span x-text="year">2024</span>
                    <a href="#_" class="mx-2 text-blue-500 hover:text-gray-500">Desa Wisata Asri</a>
                </span>
            </div>
        </div>
    </footer>
    <script>
    // Mengambil semua tautan navbar
    const navbarLinks = document.querySelectorAll('nav a');

    // Menambahkan event listener pada setiap tautan navbar
    navbarLinks.forEach(link => {
        link.addEventListener('click', smoothScroll);
    });

    // Fungsi untuk melakukan scroll smooth
    function smoothScroll(event) {
        // Mencegah perilaku default dari tautan
        event.preventDefault();

        // Mendapatkan id tujuan scroll dari atribut href
        const targetId = this.getAttribute('href');

        // Mengambil elemen dengan id tujuan
        const targetElement = document.querySelector(targetId);

        // Melakukan scroll smooth menggunakan method scrollIntoView
        targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
</script>

</body>
</html>