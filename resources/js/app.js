import './bootstrap';
import 'flowbite'

document.addEventListener('DOMContentLoaded', () => {
    const scrollButton = document.getElementById('scroll')
    const heroSection = document.getElementById('homepage');

    function toggleButtonVisibility() {
        const heroBottom = heroSection.offsetTop + heroSection.offsetHeight;
        if (window.scrollY >= heroBottom) {
            scrollButton.style.display = 'block';
        } else {
            scrollButton.style.display = 'none';
        }
    }

    toggleButtonVisibility();

    window.addEventListener('scroll', toggleButtonVisibility);
})

document.addEventListener('DOMContentLoaded', () => {
    const preloader = document.getElementById('preloader');
    setTimeout(() => {
        preloader.style.display = 'none';
    }, 400);
});

document.getElementById('input_pin').addEventListener('input', function() {
    this.value = this.value.replace(/[^0-9]/g, '');
    if (this.value.length > 6) {
        this.value = this.value.slice(0, 6);
    }
});
