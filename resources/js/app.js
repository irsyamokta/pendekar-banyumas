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
