// zoom in image when scrolling
window.addEventListener('scroll', function() {
    const images = document.querySelectorAll('.banner-container'); 
    const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
    const scrollPercentage = window.scrollY / maxScroll;

    images.forEach(image => {
        const scale = 1 + scrollPercentage * 0.2;
        image.style.transform = `scale(${scale})`;
    });
});

//move up items when srolling
if (window.innerWidth >= 768) {
    window.addEventListener('scroll', function() {
        const productSections = document.querySelectorAll('.scroll2moveup');
        const scrollY = window.scrollY;
        productSections.forEach(product => {
            const movement = scrollY * 0.05;
            product.style.transform = `translateY(-${movement}px)`;
        });
    });
}


//move down items when srolling
if (window.innerWidth >= 768) {
    window.addEventListener('scroll', function() {
        const productSections = document.querySelectorAll('.scroll2movedown');
        const scrollY = window.scrollY;
        productSections.forEach(product => {
            const movement = scrollY * 0.05;
            product.style.transform = `translateY(${movement}px)`;
        });
    });
}

// JavaScript to handle hovering and showing the corresponding image
document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('.hover-link');
    const images = document.querySelectorAll('.product-image-container img');

    links.forEach(link => {
        link.addEventListener('mouseover', function() {
            // Remove active class from all images
            images.forEach(img => img.classList.remove('active'));
            // Add active class to the target image
            const target = this.getAttribute('data-target');
            document.getElementById(target).classList.add('active');
        });
    });
});