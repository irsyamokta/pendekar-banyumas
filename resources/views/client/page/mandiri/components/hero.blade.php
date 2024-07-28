<section id="" class="md:h-[100vh] bg-gradient-to-t from-soft to-white">
    @include('client.partials.navbar')
    <div class="flex flex-col lg:flex-row justify-center items-center mx-5 mt-5 md:px-4 md:mt-10 md:mx-12 max-w-screen-xl gap-2">
        <div class="flex flex-col gap-2 lg:w-4/6">
            <h1 class="text-4xl md:text-5xl py-4 font-bold text-transparent bg-clip-text bg-gradient-to-r from-accent to-secondary">Tes Mandiri</h1>
            <p class="text-sm mt-2">Anda dapat melakukan tes mandiri untuk mengetahui kesehatan mental Anda yang dapat membantu mengidentifikasi potensi masalah emosional atau perilaku sejak dini dan melakukan penanganan yang tepat.</p>
            <p class="mt-3 text-md font-bold">Panduan Pengisian Tes</p>
            <ul class="list-outside list-disc px-4">
                <li class="text-sm ">Isi data usia Anda.</li>
                <li class="text-sm">Jenis tes ditentukan dari usia yang telah diisi sebelumnya.</li>
                <li class="text-sm">Jawab secara jujur sesuai dengan kepribadian Anda.</li>
                <li class="text-sm">Tidak ada jawaban benar atau salah dan tidak ada batasan waktu pengerjaan.</li>
                <li class="text-sm">Hasil tes dapat dilihat setelah mengisi semua pertanyaan dengan lengkap.</li>
            </ul>
            <a href="" class="bg-transparent bg-clip-border bg-gradient-to-r from-accent to-secondary text-white mt-8 py-2 px-2 rounded-[30px] w-45 h-10 text-sm text-center">Mulai Tes</a>
        </div>
        <div>
            <img src="{{ asset('assets/img/img-mandiri.png') }}" alt="image hero" class="w-115 mt-5">
        </div>
    </div>
</section>
