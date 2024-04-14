document.addEventListener("DOMContentLoaded", function() {
    const categoryContainer = document.querySelector(".categories-container");
    const categoryWidth = categoryContainer.querySelector(".category").offsetWidth;
    let currentIndex = 0;

    const nextButton = document.querySelector(".next-button");
    const prevButton = document.querySelector(".prev-button");

    nextButton.addEventListener("click", function() {
        if (currentIndex < categoryContainer.children.length - 1) {
            currentIndex++;
            updateCarousel();
        } else {
            currentIndex = 0;
            updateCarousel();
        }
    });
    prevButton.addEventListener("click", function() {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        } else {
            currentIndex = categoryContainer.children.length - 1;
            updateCarousel();
        }
    });

    function updateCarousel() {
        const translateX = -currentIndex * categoryWidth;
        categoryContainer.style.transform = `translateX(${translateX}px)`;
    }
});