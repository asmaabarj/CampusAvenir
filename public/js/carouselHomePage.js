document.addEventListener("DOMContentLoaded", function() {
    const container = document.querySelector(".categories-container");
    const width = container.querySelector(".category").offsetWidth;
    let index = 0;

    document.querySelector(".next-button").addEventListener("click", () => {
        index = (index + 1) % container.children.length;
        update();
    });

    document.querySelector(".prev-button").addEventListener("click", () => {
        index = (index - 1 + container.children.length) % container.children.length;
        update();
    });

    function update() {
        container.style.transform = `translateX(${-index * width}px)`;
    }
});
