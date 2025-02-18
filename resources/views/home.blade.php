@include("layouts.header")
<main class="min-h-screen">
    <!-- Joglo Burammm -->
    <section class="relative h-[400px] mb-16">

        <img class="w-full h-full object-cover" src="{{asset('assets/img/img-breadcrumbs.png')}}" alt="joglo Wringinanom">
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex flex-col items-center w-full space-y-4">
            <!-- Search Bar -->
            <div class="relative w-11/12 max-w-md">
                <input class="w-full px-4 py-2 pr-10 rounded-full border border-white bg-white/30 text-white placeholder-white focus:outline-none" />
                <button class="absolute right-6 top-1/2 -translate-y-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                </button>
            </div>
            <!-- Social Links -->
            <div class="flex gap-4">
                <a href="#" class="p-3 flex items-center justify-center w-12 h-12 transition hover:opacity-80">
                    <img src="{{asset('assets/img/em.svg')}}" alt="email" class="w-8 h-8" />
                </a>
                <a href="#" class="p-3 flex items-center justify-center w-12 h-12 transition hover:opacity-80">
                    <img src="{{asset('assets/img/ig.svg')}}" alt="instagram" class="w-8 h-8" />
                </a>
                <a href="#" class="p-3 flex items-center justify-center w-12 h-12 transition hover:opacity-80">
                    <img src="{{asset('assets/img/tt.svg')}}" alt="tiktok" class="w-8 h-8" />
                </a>
                <a href="#" class="p-3 flex items-center justify-center w-12 h-12 transition hover:opacity-80">
                    <img src="{{asset('assets/img/fb.svg')}}" alt="facebook" class="w-8 h-8" />
                </a>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div class="container mx-auto px-4 space-y-16">
        <!-- Kisah kisah -->
        <section class="flex flex-row gap-8">
            <div class="w-1/2 space-y-4">
                <div class="space-y-2">
                    <h1 class="font-dusha text-3xl md:text-4xl text-primary">Wringinanom</h1>
                    <h2 class="font-dusha text-2xl md:text-3xl text-cyan">Kisahku</h2>
                </div>
                <p class="font-poppins text-sm md:text-base text-gray-700">
                    Desa Wringinanom adalah sebuah desa yang kaya akan kearifan lokal dan warisan budaya yang telah dilestarikan secara turun-temurun.
                </p>
                <button class="bg-yellow-300 hover:bg-yellow-400 text-black px-6 py-2 rounded-lg text-sm font-poppins transition">
                    Selengkapnya..
                </button>
            </div>
            <div class="w-1/2">
                <img src="{{asset('assets/img/kisah.png')}}" alt="Wringinanom" class="w-full rounded-lg object-cover" />
            </div>
        </section>

        <!-- News -->
        <section class="text-center space-y-8">
            <h2 class="font-dusha text-3xl text-primary">Berita Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">
                <article class="rounded-lg overflow-hidden shadow-lg bg-white">
                    <div class="relative">
                        <img src="{{asset('storage/' . $news->photo_path)}}" alt="Karnafal" class="w-full h-48 object-cover" />
                        <div class="absolute bottom-0 left-0 p-4 flex gap-2">
                            @foreach ($news->categories as $category)
                            <span class="bg-[#FDFCDC] text-black px-2 py-1 rounded text-sm">{{ $category->name }}</span>
                            @endforeach

                            <!-- Loop through locations -->
                            @foreach ($news->locations as $location)
                            <span class="bg-[#FDFCDC] text-black px-2 py-1 rounded text-sm">{{ $location->name }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="p-4 text-left space-y-4">
                        <h3 class="font-poppins font-bold text-lg">{{$news->title}}</h3>
                        <p class="font-ibm text-gray-600">Description</p>
                        <button class="font-ibm border border-gray-500 text-gray-500 hover:bg-gray-100 px-4 py-2 rounded transition">
                            Selengkapnya
                        </button>
                    </div>
                </article>
            </div>
            <button class="bg-red-400 hover:bg-red-500 text-white px-8 py-2 rounded-lg font-poppins transition">
                Lihat semua berita
            </button>
        </section>

        <!-- Komen/Timbal Balik -->
        <section class="w-11/12 max-w-screen-xl mx-auto mt-16 px-4 md:hidden">
            <div class="flex items-center justify-between gap-4 ">
                <h2 class="text-2xl font-dusha font-bold text-black">Ada Yang Ingin Di Sampaikan</h2>
                <a href="#" class="bg-yellow-300 text-white py-4 px-4 rounded-lg w-1/2 h-full font-dusha font-bold tracking-wider text-2xl text-center">Kirim di sini</a>
            </div>
        </section>


        <!-- Agenda Kreasi-->
        <section class="w-11/12 mx-auto mt-16 text-center">
            <h2 class="text-3xl font-dusha text-primary mb-8">Agenda Kreasi</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-center">
                <!-- Loop through creations -->
                @foreach ($creations as $creation)
                <div class="text-center">
                    <!-- Use the photo_path field for the image -->
                    <img src="{{ asset('storage/' . $creation->photo_path) }}" alt="{{ $creation->title }}" class="w-32 h-32 mx-auto rounded-full mb-4 object-cover" />
                    <!-- Use the name field for the button text -->
                    <button class="bg-red-400 text-white px-6 py-2 rounded-lg">
                        {{ $creation->title }}
                    </button>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Lembaga -->
        <section class="w-11/12 mx-auto mt-16 text-center">
            <h2 class="text-3xl font-dusha text-primary mb-8">Lembaga Yang Ada Di Desa Wringinanom</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 justify-center">
                @foreach ($organizations as $organization)
                <div class="text-center">
                    <img src="{{asset('storage/' . $organization->photo_path)}}" alt="{{$organization->title}}" class="w-32 h-32 mx-auto rounded-full mb-4" />
                    <h3 class="font-bold mb-2">{{$organization->title}}</h3>
                    <button class="bg-red-400 text-white px-4 py-1 rounded-lg text-sm">
                        More
                    </button>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Unduh Dokumen -->
        <section class="w-11/12 max-w-screen-xl mx-auto mt-16 px-4 md:hidden">
            <div class="flex items-center justify-between gap-4 ">
                <h2 class="text-2xl font-dusha font-bold text-black">Unduh Dokumen Atau Surat</h2>
                <a href="#" class="text-center bg-yellow-300 text-black py-4 px-4 rounded-lg w-1/2 h-full font-dusha font-bold tracking-wider text-2xl">Klik di sini</a>
            </div>
        </section>

        <!-- Demographics -->
        <section class="text-center space-y-6">
            <h2 class="font-dusha text-2xl text-primary">Demografis</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="space-y-2">
                    <h3 class="font-dusha text-5xl text-black">{{$demographic->dusun}}</h3>
                    <p class="font-dusha  text-primary uppercase">DUSUN</p>
                </div>
                <div class="space-y-2">
                    <h3 class="text-5xl font-dusha text-black">{{$demographic->rukun_warga}}</h3>
                    <p class="font-dusha text-primary uppercase">RUKUN WARGA</p>
                </div>
                <div class="space-y-2">
                    <h3 class="text-5xl font-dusha text-black">{{$demographic->rukun_tetangga}}</h3>
                    <p class="font-dusha text-primary uppercase">RUKUN TETANGGA</p>
                </div>
                <div class="space-y-2">
                    <h3 class="text-5xl font-dusha text-black">{{$demographic->jiwa}}</h3>
                    <p class="font-dusha text-primary uppercase">JIWA</p>
                </div>
            </div>
        </section>

        <!-- Geographic -->
        <section class="text-center space-y-6">
            <h2 class="font-dusha text-2xl text-cyan-700">Geografis</h2>
            <div class="w-full h-[400px] rounded-lg overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2285.628181002434!2d112.5296592561572!3d-7.399809071003929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skantor%20kepala%20desa%20Kec.%20Wringinanom%20!5e0!3m2!1sid!2sid!4v1739505876770!5m2!1sid!2sid"
                    class="w-full h-full"
                    style="border:0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
    </div>
</main>
@include("layouts.footer")