<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/style.css', 'resources/js/app.js', 'resources/js/index.js', 'resources/js/script.js'])
</head>

<body class="bg-gradient-to-t from-soft to-white to-16%">
    <section class="lg:h-[100vh] flex flex-col md:flex lg:flex-row">
        <div class="w-full lg:w-1/2 flex flex-col justify-center items-center px-16 py-16 bg-secondary">
            <img class="w-[80%]" src="{{ asset('assets/img/img-login.png') }}" alt="img-login">
            <p class="text-primary text-center text-sm md:text-lg">Silakan masuk dengan akun Anda. Jika Anda lupa
                password silakan hubungi staff bagian IT</p>
        </div>
        <div class="w-full lg:w-1/2 flex flex-col justify-center items-center ">
            <form action="" method="POST">
                @csrf
                <div class="flex flex-col justify-center items-center px-16 py-16">
                    <div class="mb-5">
                        <label for="email" class="text-sm">Email</label>
                        <br>
                        <input type="email" name="email" class="rounded-[30px]">
                    </div>
                    <div class="mb-5">
                        <label for="password" class="text-sm">Password</label>
                        <br>
                        <input type="password" name="password" class="rounded-[30px]">
                    </div>
                    <button class="w-40 h-10 mt-5 rounded-[30px] bg-secondary text-primary hover:bg-active hover:text-primary duration-300 ease-linear dark:bg-meta-4 hover:dark:bg-primary">Masuk</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
