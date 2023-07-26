// Slideshow for the important judgments table
let slideIndex = 0;

function showSlide(n) {
    const slides = document.querySelectorAll('#judgementsTable tr:not(:first-child)');

    // Ensure n is within bounds
    slideIndex = (n + slides.length) % slides.length;

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }

    slides[slideIndex].style.display = 'table-row';
}

function nextSlide() {
    showSlide(slideIndex + 1);
}

function previousSlide() {
    showSlide(slideIndex - 1);
}

// Automatically advance the slideshow every 5 seconds
setInterval(nextSlide, 5000);

// Show the first slide initially
showSlide(slideIndex);
