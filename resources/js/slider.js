const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const nextBtn = document.getElementById('next');
const prevBtn = document.getElementById('prev');
const body = document.querySelector('body');
const dots = document.querySelectorAll('.dot');

let index = 0;

function updateCarousel() {
    const slideWidth = slides[0].getBoundingClientRect().width;
    track.style.transform = `translateX(-${index * slideWidth}px)`;

    // Gérer l’état actif des dots
    dots.forEach(dot => dot.classList.remove('bg-black'));
    if (dots[index]) dots[index].classList.add('bg-black');
}

nextBtn.addEventListener('click', () => {
    index = (index + 1) % slides.length;
    updateCarousel();
});

prevBtn.addEventListener('click', () => {
    index = (index - 1 + slides.length) % slides.length;
    updateCarousel();
});

body.addEventListener('keydown', (event) => {
    if (event.key === 'ArrowRight') {
        index = (index + 1) % slides.length;
        updateCarousel();
    } 
    
    else if (event.key === 'ArrowLeft') {
        index = (index - 1 + slides.length) % slides.length;
        updateCarousel();
    }
});

dots.forEach(dot => {
    dot.addEventListener('click', () => {
        index = parseInt(dot.dataset.slide);
        updateCarousel();
    });
});

window.addEventListener('resize', updateCarousel);


setInterval(() => {
    index = (index + 1) % slides.length;
    updateCarousel();
}, 5000);

updateCarousel();
