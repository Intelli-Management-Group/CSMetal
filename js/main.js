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
