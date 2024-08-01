<!-- ====== Form Layout Section Start -->
<form action="{{ route('storeSRQ') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-1 gap-9 sm:grid-cols-1">
        <div
            class="rounded-sm border border-stroke bg-white px-7.5 py-4 shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="flex items-center justify-between">
                <div>
                    <h4 class="text-title-sm 2xl:text-title-lg font-bold text-black dark:text-white">
                        Self-Reporting Questionnaire (SRQ)
                    </h4>
                    <span class="text-sm 2xl:text-base font-medium">Usia di atas 18 Tahun</span>
                </div>
                <span>
                    <button type="submit"
                        class="w-[80px] h-[30px] md:w-[100px] md:h-[35px] text-sm rounded-[30px] bg-secondary text-primary hover:bg-active duration-300 ease-linear dark:bg-meta-4 hover:dark:bg-primary hover:dark:text-secondary">Simpan</button>
                </span>
            </div>
        </div>
    </div>
    <div id="srq-container" class="mt-4 grid grid-cols-1 gap-5 sm:grid-cols-1">
        @if ($data->count() > 0)
            @include('admin.dashboard.partials.form.container.store-srq')
        @endif
    </div>
    <div class="mt-4">
        <div class="flex justify-center">
            <a id="add-srq"
                class="flex justify-center items-center gap-1 text-sm  w-[180px] h-[35px] md:w-[200px] md:h-[40px] cursor-pointer rounded-[30px] bg-secondary text-primary hover:bg-active hover:text-primary duration-300 ease-linear dark:bg-meta-4 hover:dark:bg-primary hover:dark:text-secondary"><span>Tambah
                    Pertanyaan</span></a>
        </div>
    </div>
</form>
<!-- ====== Form Layout Section End -->