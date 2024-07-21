// const pin = document.getElementById("pin")
// const inputPin = document.getElementById("pin-value")
// const generate = document.getElementById("generate")

document.addEventListener('DOMContentLoaded', () => {
    const generate = document.getElementById('generate');
            const pin = document.getElementById('pin');
            const inputPin = document.getElementById('input-pin');

            generate.addEventListener('click', () => {
                const newPin = Math.floor(100000 + Math.random() * 900000).toString().padStart(6, '0');
                localStorage.setItem('generatedPin', newPin);
                location.reload();
            });

            if (localStorage.getItem('generatedPin')) {
                const savedPin = localStorage.getItem('generatedPin');
                inputPin.value = savedPin;
            }
})

document.querySelectorAll('.delete-confirm').forEach((button) => {
    button.addEventListener('click', function (e) {
        e.preventDefault(); 
        const url = this.href;
        Swal.fire({
            title: 'Apakah kamu yakin?',
            text: "Kamu tidak akan bisa mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#176B87',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const addSdq = document.getElementById("add-sdq")
    const addSrq = document.getElementById("add-srq")
    if (addSdq) {
        addSdq.addEventListener('click', () => {
            const container = document.getElementById("sdq-container")
            const newCard = document.createElement('div')
            const newQuestionCount = container.getElementsByClassName('sdq-question').length + 1
            newCard.className = 'sdq-question rounded-sm border border-stroke bg-white px-7.5 py-4 shadow-default dark:border-strokedark dark:bg-boxdark'
            newCard.innerHTML = `
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-lg font-regular text-dark dark:text-primary">Pertanyaan ${newQuestionCount}</span>
                            </div>
                            <div class="flex gap-2">
                                <a href="" class="delete-sdq flex justify-center items-center gap-1 text-sm font-medium w-[80px] h-[30px] cursor-pointer rounded-[30px] bg-[#D9D9D9] text-dark duration-300 ease-linear">
                                    <img src="../assets/icon/icon-delete.png" alt="edit" class="w-4 h-4">
                                    <span>Hapus</span>
                                </a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <textarea name="pertanyaan" rows="3" class="w-full overflow-auto dark:bg-transparent" required></textarea>
                        </div>
                    `
            container.appendChild(newCard)

            newCard.querySelector('.delete-sdq').addEventListener('click', function (e) {
                e.preventDefault();
                container.removeChild(newCard);
            })
        })

        document.querySelectorAll('.delete-sdq').forEach(function (deleteButton) {
            deleteButton.addEventListener('click', function (e) {
                e.preventDefault();
                const questionDiv = this.closest('.sdq-question');
                questionDiv.parentNode.removeChild(questionDiv);
            })
        })
    }

    if (addSrq) {
        addSrq.addEventListener('click', () => {
            const container = document.getElementById("srq-container")
            const newCard = document.createElement('div')
            const newQuestionCount = container.getElementsByClassName('srq-question').length + 1
            newCard.className = 'srq-question rounded-sm border border-stroke bg-white px-7.5 py-4 shadow-default dark:border-strokedark dark:bg-boxdark'
            newCard.innerHTML = `
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-lg font-regular text-dark dark:text-primary">Pertanyaan ${newQuestionCount}</span>
                            </div>
                            <div class="flex gap-2">
                                <a href="" class="delete-srq flex justify-center items-center gap-1 text-sm font-medium w-[80px] h-[30px] cursor-pointer rounded-[30px] bg-[#D9D9D9] text-dark duration-300 ease-linear">
                                    <img src="../assets/icon/icon-delete.png" alt="edit" class="w-4 h-4">
                                    <span>Hapus</span>
                                </a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <textarea name="pertanyaan" rows="3" class="w-full overflow-auto dark:bg-transparent" required></textarea>
                        </div>
                    `
            container.appendChild(newCard)

            newCard.querySelector('.delete-srq').addEventListener('click', function (e) {
                e.preventDefault();
                container.removeChild(newCard);
            });
        })

        document.querySelectorAll('.delete-srq').forEach(function (deleteButton) {
            deleteButton.addEventListener('click', function (e) {
                e.preventDefault();
                const questionDiv = this.closest('.srq-question');
                questionDiv.parentNode.removeChild(questionDiv);
            });
        });
    }
})