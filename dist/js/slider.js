let currentSlide = 1;

function changeSlide(n) {
    showSlide(currentSlide += n);
}

function showSlide(n) {
    const slides = document.querySelector('.slider');
  
    if (n > slides.children.length) {
        currentSlide = 1;
    } else if (n < 1) {
        currentSlide = slides.children.length;
    }

    slides.style.transform = `translateX(${-100 * (currentSlide - 1)}%)`;
}
