<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendekar Banyumas</title>
    <link href="../public/css/style.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-transparent shadow">
    <div class="container mx-auto px-4 py-6">
            <div class="flex justify-between items-center">
                <img src="{{ asset('assets/logo/logo-color.png') }}" alt="Logo" class="w-[200px]" :class="darkMode ? 'convert' : ''" />
                <nav class="mx-25">
                    <ul class="flex space-x-15 py-5 ">
                        <li><a href="#beranda" class="font-poppins text-2xl font-bold text-secondary">Beranda</a></li>
                        <li><a href="#tentang" class="font-poppins text-2xl text-secondary">Tentang</a></li>
                        <li><a href="#tutorial" class="font-poppins text-2xl text-secondary">Tutorial</a></li>
                        <li><a href="#tes" class="font-poppins text-2xl text-secondary">Tes</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="bg-clip-border bg-gradient-to-b from-white to-soft py-12 -mb-0 -mt-8 w-full h-screen">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center mb-4">
            <div class="text-center md:text-left md:w-1/2 -mb-8 -mt-8">
                <h3 class="text-3xl mt-64 -mb-4 font-bold font-poppins">Selamat Datang di</h3>
                <h2 class="text-7xl mt-8 font-poppins-700 font-bold text-transparent bg-clip-text bg-gradient-to-r from-accent to-secondary mb-4">Pendekar Banyumas</h2>
                <p class="text-3xl mt-4 font-poppins text-gray-500 mb-12">Pendekteksian Kesehatan Mental Banyumas</p>
                <p class="text-3xl mt-8 font-poppins font-bold text-gray-500 mb-8">"Bersama Mewujudkan Jiwa yang Sehat"</p>
                <button class="bg-transparent bg-clip-border bg-gradient-to-r from-accent to-secondary text-white mt-8 py-2 px-4 rounded-xl w-50 h-13 text-lg"><a href="#tentang">Lihat Selengkapnya</a></button>
            </div>
            <div class="md:w-1/2 order-first md:order-last relative">
                <img src="{{ asset('assets/img/img-hero.png') }}" alt="Hero Image" class="w-250 flex absolute right-5 -top-80" :class="darkMode ? 'convert' : ''" />
            </div>
        </div>
    </section>


    <!-- SDQ and SRQ Section -->
    <section id="tentang" class="py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 grid grid-cols-1 md:grid-cols-1 gap-4">
                    <div class="text-left mb-8">
                        <h3 class="text-3xl font-bold font-poppins mb-4 mt-32">Tentang</h3>
                        <h2 class="text-5xl font-bold font-poppins text-transparent bg-clip-text bg-gradient-to-r from-accent to-secondary mb-6">Kesehatan Mental</h2>
                        <p class="text-lg font-poppins text-gray-700">Kesehatan jiwa atau sebutan lainnya kesehatan mental adalah
                            kesehatan yang berkaitan dengan kondisi emosi, kejiwaan, dan psikis seseorang. Perlu Anda
                            ketahui bahwa peristiwa dalam hidup yang berdampak besar pada kepribadian dan perilaku
                            seseorang bisa berpengaruh pada kesehatan mentalnya.
                        </p>
                    </div>
                    
                    <div class="items-left bg-white p-6 float-left">
                        <img src="{{ asset('assets/icon/icon-sdq.png') }}" alt="SDQ Image" class="w-[200px]"
                            :class="darkMode ? 'convert' : ''" />
                        <h3 class="text-2xl font-poppins font-bold text-black mb-2 text-left">Strengths and Difficulties
                            Questionnaire (SDQ)</h3>
                        <p class="text-gray-700 font-poppins text-left">SDQ adalah kuesioner untuk deteksi dini masalah perilaku
                            dan emosi pada anak dan remaja berusia 4 - 18 tahun.</p>
                    </div>
                    <div class="flex flex-col items-center bg-white p-6">
                        <img src="{{ asset('assets/icon/icon-srq.png') }}" alt="SRQ Image" class="w-[200px]"
                            :class="darkMode ? 'convert' : ''" />
                        <h3 class="text-2xl font-poppins font-bold text-blue-500 mb-2 text-center">Self-Reporting Questionnaire (SRQ)
                        </h3>
                        <p class="text-gray-700 font-poppins text-center">SRQ adalah kuesioner yang dikembangkan oleh World Health
                            Organization (WHO) untuk skrining gangguan psikologis umum untuk usia 18 tahun ke atas.</p>
                    </div>
                </div>
                <div class="md:w-1/2 mt-8 md:mt-0 ">
                    <img src="{{ asset('assets/img/img-about.png') }}" alt="About Image"
                        class="w-full h-full float-right" :class="darkMode ? 'convert' : ''" />
                </div>
            </div>
        </div>
    </section>

    <!-- How to Section -->
    <section id="tutorial" class="bg-primary py-12">
        <div class="container mx-auto px-4 text-center w-full h-screen">
            <h3 class="text-4xl font-bold font-poppins mt-6">Cara Terbaik</h3>
            <h2 class="text-5xl font-bold font-poppins text-transparent bg-clip-text bg-gradient-to-r from-accent to-secondary mb-16 mt-7">Tes Pendeteksian Kesehatan Mental</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-transparent bg-clip-border bg-gradient-to-r from-accent to-secondary p-6 shadow-lg rounded-lg">
                    <div class="w-50 h-50 bg-white rounded-full flex m-auto mt-8">
                        <img src="{{ asset('assets/icon/icon-test.png') }}" alt="SRQ Image" class="mt- m-auto" width="150px" height="100"
                            :class="darkMode ? 'convert' : ''" />
                    </div>
                    <h3 class="text-white mt-16 text-3xl font-poppins font-bold mx-auto">Screening Test</h3>
                    <p class="text-white mt-8 mb-8 text-lg font-poppins">Lakukan tes sesuai umur dan objektif agar hasil yang didapatkan
                        mencerminkan kondisi sebenarnya, sehingga dapat dilakukan penanganan yang tepat.</p>
                </div>
                <div class="bg-transparent bg-clip-border bg-gradient-to-r from-accent to-secondary p-6 shadow-lg rounded-lg">
                    <div class="w-50 h-50 bg-white rounded-full flex m-auto mt-8">
                        <img src="{{ asset('assets/icon/icon-result.png') }}" alt="SRQ Image" class="mt- m-auto" width="150px" height="100"
                            :class="darkMode ? 'convert' : ''" />
                    </div>
                    <h3 class="text-white mt-16 text-3xl font-poppins font-bold">Screening Test</h3>
                    <p class="text-white mt-8 mb-8 text-lg font-poppins">Lakukan tes sesuai umur dan objektif agar hasil yang didapatkan
                        mencerminkan kondisi sebenarnya, sehingga dapat dilakukan penanganan yang tepat.</p>
                </div>
                <div class="bg-transparent bg-clip-border bg-gradient-to-r from-accent to-secondary p-6 shadow-lg rounded-lg">
                    <div class="w-50 h-50 bg-white rounded-full flex m-auto mt-8">
                        <img src="{{ asset('assets/icon/icon-doctor.png') }}" alt="SRQ Image" class="mt- m-auto" width="150px" height="100"
                            :class="darkMode ? 'convert' : ''" />
                    </div>
                    <h3 class="text-white mt-16 text-3xl font-poppins font-bold">Screening Test</h3>
                    <p class="text-white mt-8 mb-8 text-lg font-poppins">Lakukan tes sesuai umur dan objektif agar hasil yang didapatkan
                        mencerminkan kondisi sebenarnya, sehingga dapat dilakukan penanganan yang tepat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Test Section -->
    <section id="tes" class="py-12 w-full h-screen ">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-4xl font-poppins font-bold mb-8 mt-16">Mulai Tes</h3>
            <h2 class="text-5xl font-poppins font-bold text-transparent bg-clip-text bg-gradient-to-r from-accent to-secondary mb-16">Pendeteksian Kesehatan Mental Sekarang</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <img src="{{ asset('assets/img/img-assets.png') }}" alt="SDQ Image" class="w-[800px] h-[450px] relative"
            :class="darkMode ? 'convert' : ''" />
            
                <div class="absolute ">
                    <h3 class="text-4xl font-poppins font-bold text-black mb-8 mx-auto mt-16">Screening Test</h3>
                    <p class="text-black text-2xl font-poppins">Ikuti tes skrining di daerah Anda untuk <p class="text-black text-2xl font-poppins"> mendapatkan rujukan secara langsung
                        <p class="text-black text-2xl font-poppins mb-4">oleh Dinas Kesehatan Banyumas.</p></p>
                        <button class="bg-transparent bg-clip-border bg-gradient-to-tr from-accent to-secondary text-white mt-8 mb-8 py-2 px-4 rounded-3xl w-50 h-13 text-xl font-poppins">Ikuti Tes</button>
                </div>
                <div class="bg-white p-6 shadow rounded-2xl">
                    <h3 class="text-xl font-poppins font-bold text-black mb-4">Tes Mandiri</h3>
                    <p class="text-gray-700 font-poppins">Lakukan tes mandiri untuk mengetahui kondisi kesehatan mental Anda yang
                        mungkin membutuhkan perhatian lebih lanjut.</p>
                        <button class="bg-transparent bg-clip-border bg-gradient-to-r from-accent to-secondary text-white mt-8 py-2 px-4 rounded-3xl w-50 h-13 text-xl font-poppins">Ikuti Tes</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary py-6">
        <div class="container mx-auto px-4 text-center">
            <div class="flex justify-center items-center mb-4">
                <img src="{{ asset('assets/logo/logo-ittp.png') }}" alt="Footer Logo 1" class="h-12 mx-4" :class="darkMode ? 'convert' : ''" />
                <img src="{{ asset('assets/logo/logo-bms.png') }}" alt="Footer Logo 1" class="h-12 mx-4" :class="darkMode ? 'convert' : ''" />
                <img src="{{ asset('assets/logo/logo-kemenkes.png') }}" alt="Footer Logo 1" class="h-12 mx-4" :class="darkMode ? 'convert' : ''" />
            </div>
            <p class="text-gray-500 font-poppins">&copy; Pendekar Banyumas 2024. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>