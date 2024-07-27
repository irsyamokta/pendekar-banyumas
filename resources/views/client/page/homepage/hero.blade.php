<section id="beranda" class="h-[100vh] bg-gradient-to-t from-soft to-white">
    @include('client.partials.navbar')
    <div class="flex justify-center items-center px-4 mx-12 max-w-screen-xl">
        <div class="flex flex-col gap-2">
            <h2 class="text-xl font-medium">Selamat datang di</h2>
            <h1 class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-accent to-secondary">Pendekar Banyumas</h1>
            <h3 class="text-lg">Pendeteksian Kesehatan Mental Banyumas</h3>
            <p class="text-lg font-semibold mt-5">"Bersama Mewujudkan Jiwa yang Sehat"</p>
            <a href="#tentang" class="bg-transparent bg-clip-border bg-gradient-to-r from-accent to-secondary text-white mt-8 py-2 px-2 rounded-[30px] w-45 h-10 text-sm text-center">Lihat Selengkapnya</a>
            
        </div>
        <div>
            <img src="{{ asset('assets/img/img-hero.png') }}" alt="image hero" class="w-115">
        </div>
    </div>
</section>
