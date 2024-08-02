@extends('client.index')
@section('content')
    @include('client.partials.preloader')
    <section class="flex md:justify-center items-center md:h-[100vh] bg-gradient-to-t from-soft to-white">
        <div class="w-full p-5">
            <form action="{{ route('inputData') }}" method="POST" enctype="multipart/form-data"
                class="flex flex-col md:items-center gap-2">
                @csrf
                <h1 class="font-bold mb-10 md:text-xl text-center">Lengkapi Data Diri Anda</h1>
                <div class="flex flex-col justify-center md:flex-row md:px-12 gap-5 w-full">
                    {{-- Firts Column --}}
                    <div class="flex flex-col gap-5 lg:w-2/4">
                        <div class="flex flex-col gap-3">
                            <label for="nama_lengkap" class="text-sm">Nama Lengkap <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="rounded-2xl w-full lg:h-12"
                                required>
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="datepicker-autohide" class="text-sm">Tanggal Lahir <span
                                    class="text-red-500">*</span></label>
                            <div class="relative max-w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input id="datepicker-autohide" datepicker datepicker-autohide type="text"
                                    name="tanggal_lahir"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full lg:h-12 ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Pilih tanggal" required>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="countries" class="text-sm">Jenis Kelamin <span class="text-red-500">*</span></label>
                            <select id="countries" name="jenis_kelamin"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full lg:h-12 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih jenis kelamin</option>
                                <option value="Laki - laki">Laki - laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    {{-- Second Column --}}
                    <div class="flex flex-col gap-5 lg:w-2/4">
                        <div class="flex flex-col gap-3">
                            <label for="nomor_hp" class="text-sm">Nomor HP <span class="text-red-500">*</span></label>
                            <input type="text" name="nomor_hp" inputmode="numeric" pattern="[0-9]*" maxlength="13"
                                id="nomor_hp" class="rounded-2xl w-full lg:h-12" required>
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="email" class="text-sm">Email <span class="text-red-500">*</span></label>
                            <input type="email" name="email" id="email" class="rounded-2xl w-full lg:h-12" required>
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="alamat" class="text-sm">Alamat <span class="text-red-500">*</span></label>
                            <input type="text" name="alamat" id="alamat" class="rounded-2xl w-full lg:h-12" required>
                        </div>
                    </div>
                    {{-- Third Column --}}
                    <div class="flex flex-col gap-5 lg:w-2/4">
                        <div class="flex flex-col gap-3">
                            <label for="kelurahan" class="text-sm">Kelurahan <span class="text-red-500">*</span></label>
                            <input type="text" name="kelurahan" id="kelurahan" class="rounded-2xl w-full lg:h-12"
                                required>
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="kecamatan" class="text-sm">Kecamatan <span class="text-red-500">*</span></label>
                            <input type="text" name="kecamatan" id="kecamatan" class="rounded-2xl w-full lg:h-12"
                                required>
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="kabupaten" class="text-sm">Kabupaten <span class="text-red-500">*</span></label>
                            <input type="text" name="kabupaten" id="kabupaten" class="rounded-2xl w-full lg:h-12"
                                required>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button
                        class="mt-5 md:mt-8 w-30 2xl:w-40 2xl:h-12 2xl:text-lg py-2 bg-gradient-to-r from-accent to-secondary text-sm text-center text-white rounded-[30px]">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection

