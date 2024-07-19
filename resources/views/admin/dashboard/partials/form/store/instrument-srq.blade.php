<!-- ====== Form Layout Section Start -->
<form action="{{ route('storeSRQ') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-1 gap-9 sm:grid-cols-1">
        <div
            class="rounded-sm border border-stroke bg-white px-7.5 py-4 shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="mt-4 flex items-center justify-between">
                <div>
                    <span class="text-lg font-regular text-dark dark:text-primary">Self-Reporting Questionnaire
                        (SRQ)</span>
                </div>
                <span>
                    <button type="submit"
                        class="w-[100px] h-[35px] rounded-[30px] bg-secondary text-primary hover:bg-active duration-300 ease-linear dark:bg-meta-4 hover:dark:bg-primary hover:dark:text-secondary">Simpan</button>
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
                class="flex justify-center items-center gap-1 text-sm font-medium w-[200px] h-[40px] cursor-pointer rounded-[30px] bg-secondary text-primary hover:bg-active hover:text-primary duration-300 ease-linear dark:bg-meta-4 hover:dark:bg-primary hover:dark:text-secondary"><span>Tambah
                    Pertanyaan</span></a>
        </div>
    </div>
</form>
<!-- ====== Form Layout Section End -->