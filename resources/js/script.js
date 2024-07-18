const pin = document.getElementById("pin")
const inputPin = document.getElementById("pin-value")
const generate = document.getElementById("generate")

window.addEventListener('DOMContentLoaded', () => {
    generate.addEventListener('click', () => {
        pin.value = Math.floor(100000 + Math.random() * 900000).toString().padStart(6, '0')
        pin.innerHTML = pin.value
        inputPin.value = pin.value
    })
})

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
                                    <img src="assets/icon/icon-delete.png" alt="edit" class="w-4 h-4">
                                    <span>Hapus</span>
                                </a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <textarea name="pertanyaan" rows="3" class="w-full overflow-auto dark:bg-transparent"></textarea>
                        </div>
                    `
            container.appendChild(newCard)

            newCard.querySelector('.delete-sdq').addEventListener('click', function (e) {
                e.preventDefault();
                container.removeChild(newCard);
            })

            // newCard.querySelector('.edit-sdq').addEventListener('click', function (e) {
            //     e.preventDefault();
            //     const textarea = newCard.querySelector('textarea');
            //     if (textarea.disabled) {
            //         textarea.disabled = false;
            //         this.querySelector('span').textContent = 'Selesai';
            //     } else {
            //         textarea.disabled = true;
            //         this.querySelector('span').textContent = 'Edit';
            //     }
            // })
        })

        document.querySelectorAll('.delete-sdq').forEach(function (deleteButton) {
            deleteButton.addEventListener('click', function (e) {
                e.preventDefault();
                const questionDiv = this.closest('.sdq-question');
                questionDiv.parentNode.removeChild(questionDiv);
            })
        });

        // document.querySelectorAll('.edit-sdq').forEach(function (editButton) {
        //     editButton.addEventListener('click', function (e) {
        //         e.preventDefault();
        //         const questionDiv = this.closest('.sdq-question');
        //         const textarea = questionDiv.querySelector('textarea');
        //         if (textarea.disabled) {
        //             textarea.disabled = false;
        //             this.querySelector('span').textContent = 'Selesai';
        //         } else {
        //             textarea.disabled = true;
        //             this.querySelector('span').textContent = 'Edit';
        //         }
        //     })
        // })
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
                                    <img src="assets/icon/icon-delete.png" alt="edit" class="w-4 h-4">
                                    <span>Hapus</span>
                                </a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <textarea name="pertanyaan" rows="3" class="w-full overflow-auto dark:bg-transparent"></textarea>
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


