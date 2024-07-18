<!-- ====== Form Layout Section Start -->
<form action="{{ route('editSDQ', $data->id_sdq) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-1 gap-9 sm:grid-cols-1">
        <div
            class="rounded-sm border border-stroke bg-white px-7.5 py-4 shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="mt-4 flex items-center justify-between">
                <div>
                    <span class="text-lg font-regular text-dark dark:text-primary">Edit Pertanyaan</span>
                </div>
            </div>
        </div>
    </div>
    <div id="sdq-container" class="mt-4 grid grid-cols-1 gap-5 sm:grid-cols-1">
        @include('admin.dashboard.partials.form.container.edit-sdq')
    </div>
</form>

<!-- ====== Form Layout Section End -->
