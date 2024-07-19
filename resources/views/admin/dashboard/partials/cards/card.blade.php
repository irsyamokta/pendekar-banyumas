<div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
    <!-- Card Item Start -->
    <div
        class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
            <img src="{{ asset('assets/icon/icon-user.png') }}" alt="total user">
        </div>

        <div class="mt-4 flex items-end justify-between">
            <div>
                <h4 class="text-title-md font-bold text-black dark:text-white">
                    450
                </h4>
                <span class="text-sm font-medium">Total Pengguna</span>
            </div>
        </div>
    </div>
    <!-- Card Item End -->

    <!-- Card Item Start -->
    <div
        class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
            <img src="{{ asset('assets/icon/icon-pin.png') }}" alt="generate pin">
        </div>

        <div>
            <form action="{{ route('generatePin') }}" method="POST" enctype="multipart/form-data"
                class="mt-4 flex items-end justify-between">
                @csrf
                <div>
                    <input id="pin-value" type="text" name="pin" value="" class="hidden">
                    @foreach ($pin as $item)
                        <h4 id="pin" class="text-title-md font-bold text-black dark:text-white">
                            @if ($item == null)
                                {{ 'xxxxxx' }}
                            @else
                                {{ $item->pin }}
                            @endif
                        </h4>
                    @endforeach
                    <span class="text-sm font-medium">PIN Sesi</span>
                </div>

                <span class="flex items-center gap-1 text-sm font-medium text-primary">
                    <button id="generate"
                        class="w-[100px] h-[35px] rounded-[30px] bg-secondary hover:bg-primary hover:text-secondary duration-300 ease-linear dark:bg-meta-4 hover:dark:bg-primary hover:dark:text-secondary">Generate</button>
                </span>
            </form>
        </div>
    </div>
    <!-- Card Item End -->
</div>