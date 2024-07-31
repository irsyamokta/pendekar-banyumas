<section id="test" class="flex justify-center items-center h-[100vh]">
    <div class="flex flex-col justify-center items-center px-4 md:mx-12 lg:w-full">
        <div class="flex flex-col items-center gap-2 text-center">
            <p class="xl:text-xl2xl:text-2xl font-semibold delay-[400ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="100">Mulai Tes</p>
            <h1 class="text-2xl md:text-3xl xl:text-[40px] 2xl:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-accent to-secondary delay-[500ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="100">Pendeteksian Kesehatan Mental Sekarang</h1>
        </div>
        <div class="mt-6">
            <div class="flex flex-col lg:flex-row justify-center items-center gap-5 mt-5">
                <div class="relative flex flex-col justify-between gap-5 2xl:w-2/4 md:h-56 2xl:h-70 bg-gradient-to-t from-soft to-white p-5 rounded-[30px] overflow-hidden shadow-md delay-[600ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="100">
                    <div class="absolute w-10 h-70 bg-accent -left-5 -top-2">
                    </div>
<<<<<<< HEAD
                    <div class="flex flex-col justify-center mt-3 md:mt-5 lg:mt-3 2xl:mt-5 items-center gap-5">
                        <h1 class="text-xl 2xl:text-3xl font-semibold">Screening Tes</h1>
                        <p class="text-xs md:text-sm 2xl:text-lg text-center px-5 md:px-10 xl:px-25">Ikuti tes skrining di daerah Anda untuk mendapatkan rujukan secara langsung oleh Dinas Kesehatan Banyumas</p>
                        <a href="{{ route('screening') }}" class="w-30 2xl:w-40 2xl:h-12 2xl:text-lg py-2 bg-gradient-to-r from-accent to-secondary text-sm text-center text-white rounded-[30px]">Ikuti Tes</a>
=======
                    <div class="flex flex-col justify-center mt-3 md:mt-5 items-center gap-5">
                        <h1 class="text-xl lg:text-3xl font-semibold">Screening Tes</h1>
                        <p class="text-xs md:text-sm lg:text-lg text-center px-5 md:px-10 lg:px-25">Ikuti tes skrining di daerah Anda untuk mendapatkan rujukan secara langsung oleh Dinas Kesehatan Banyumas</p>
                        <a href="{{ url('/screening-test') }}" class="w-30 lg:w-40 lg:h-12 lg:text-lg py-2 bg-gradient-to-r from-accent to-secondary text-sm text-center text-white rounded-[30px]">Ikuti Tes</a>
>>>>>>> ce6208d275841c38fecd463fa385f468e3afd330
                    </div>
                    <img src="{{ asset('assets/icon/elips.png') }}" alt="" class="w-30 absolute -right-1 -bottom-2">
                </div>
                <div class="relative flex flex-col justify-between gap-5 2xl:w-2/4 md:h-56 2xl:h-70 bg-gradient-to-t from-soft to-white p-5 rounded-[30px] overflow-hidden shadow-md delay-[600ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="100">
                    <div class="absolute w-10 h-70 bg-hard -left-5 -top-2">
                    </div>
<<<<<<< HEAD
                    <div class="flex flex-col justify-center mt-3 md:mt-5 lg:mt-3 2xl:mt-5 items-center gap-5">
                        <h1 class="text-xl 2xl:text-3xl font-semibold">Tes Mandiri</h1>
                        <p class="text-xs md:text-sm 2xl:text-lg text-center px-5 md:px-10 xl:px-25">Lakukan tes mandiri untuk mengetahui kondisi kesehatan mental Anda yang mungkin butuh perhatian lebih lanjut.</p>
                        <a href="{{ route('mandiri') }}" class="w-30 2xl:w-40 2xl:h-12 2xl:text-lg py-2 bg-gradient-to-r from-accent to-secondary text-sm text-center text-white rounded-[30px]">Ikuti Tes</a>
=======
                    <div class="flex flex-col justify-center mt-3 md:mt-5 items-center gap-5">
                        <h1 class="text-xl lg:text-3xl font-semibold">Tes Mandiri</h1>
                        <p class="text-xs md:text-sm lg:text-lg text-center px-5 md:px-10 lg:px-25">Lakukan tes mandiri untuk mengetahui kondisi kesehatan mental Anda yang mungkin butuh perhatian lebih lanjut.</p>
                        <a href="{{ url('/mandiri-test') }}" class="w-30 lg:w-40 lg:h-12 lg:text-lg py-2 bg-gradient-to-r from-accent to-secondary text-sm text-center text-white rounded-[30px]">Ikuti Tes</a>
>>>>>>> ce6208d275841c38fecd463fa385f468e3afd330
                    </div>
                    <img src="{{ asset('assets/icon/elips.png') }}" alt="" class="w-30 absolute -right-1 -bottom-2">
                </div>
            </div>
        </div>
    </div>
</section>