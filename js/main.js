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

//move products widget when srolling
if (window.innerWidth >= 768) {
    window.addEventListener('scroll', function() {
        const productSections = document.querySelectorAll('.scroll2move');
        const scrollY = window.scrollY;
        productSections.forEach(product => {
            const movement = scrollY * 0.05;
            product.style.transform = `translateY(-${movement}px)`;
        });
    });
}