// zoom in image when scrolling
window.addEventListener('scroll', function() {
    const images = document.querySelectorAll('.banner'); 
    const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
    const scrollPercentage = window.scrollY / maxScroll;

    images.forEach(image => {
        const scale = 1 + scrollPercentage * 0.2;
        image.style.transform = `scale(${scale})`;
    });
});

//move up items when scrolling
// if (window.innerWidth >= 768) {
//     window.addEventListener('scroll', function() {
//         const productSections = document.querySelectorAll('.scroll2moveup');
//         const scrollY = window.scrollY;
//         productSections.forEach(product => {
//             const movement = scrollY * 0.05;
//             product.style.transform = `translateY(-${movement}px)`;
//         });
//     });
// }

// if (window.innerWidth >= 992) {
//     window.addEventListener('scroll', function() {
//         const productSections = document.querySelectorAll('.scroll2moveup-lg');
//         const scrollY = window.scrollY;
//         productSections.forEach(product => {
//             const movement = scrollY * 0.05;
//             product.style.transform = `translateY(-${movement}px)`;
//         });
//     });
// }


// //move down items when scrolling
// if (window.innerWidth >= 768) {
//     window.addEventListener('scroll', function() {
//         const productSections = document.querySelectorAll('.scroll2movedown');
//         const scrollY = window.scrollY;
//         productSections.forEach(product => {
//             const movement = scrollY * 0.05;
//             product.style.transform = `translateY(${movement}px)`;
//         });
//     });
// }

// if (window.innerWidth >= 992) {
//     window.addEventListener('scroll', function() {
//         const productSections = document.querySelectorAll('.scroll2movedown-lg');
//         const scrollY = window.scrollY;
//         productSections.forEach(product => {
//             const movement = scrollY * 0.05;
//             product.style.transform = `translateY(${movement}px)`;
//         });
//     });
// }

// Reusable function to handle scroll movement
function handleScrollMovement(selector, direction = 'up') {
    const elements = document.querySelectorAll(selector);
    const scrollY = window.scrollY;
    elements.forEach(element => {
        const movement = scrollY * 0.05;
        if (direction === 'up') {
            element.style.transform = `translateY(-${movement}px)`;
        } else if (direction === 'down') {
            element.style.transform = `translateY(${movement}px)`;
        }
    });
}

// Function to handle scroll events
function handleScroll() {
    if (window.innerWidth >= 768) {
        handleScrollMovement('.scroll2moveup', 'up');
        handleScrollMovement('.scroll2movedown', 'down');
    }
    if (window.innerWidth >= 992) {
        handleScrollMovement('.scroll2moveup-lg', 'up');
        handleScrollMovement('.scroll2movedown-lg', 'down');
    }
}

// Function to add/remove scroll event listener based on window size
function manageScrollListener() {
    if (window.innerWidth >= 768) {
        handleScroll();
        window.addEventListener('scroll', handleScroll);
    } else {
        window.removeEventListener('scroll', handleScroll);
        resetTransformations(['.scroll2moveup', '.scroll2movedown']);
    }
}

function manageScrollListenerLg() {
    if (window.innerWidth >= 992) {
        handleScroll();
        window.addEventListener('scroll', handleScroll);
    } else {
        //window.removeEventListener('scroll', handleScroll);
        resetTransformations(['.scroll2moveup-lg', '.scroll2movedown-lg']);
    }
}

function resetTransformations(selectors) {
    selectors.forEach(selector => {
        const elements = document.querySelectorAll(selector);
        elements.forEach(element => {
            element.style.transform = 'translateY(0)';
        });
    });
}

// Initial setup
manageScrollListener();
manageScrollListenerLg();
window.addEventListener('resize', manageScrollListener);
window.addEventListener('resize', manageScrollListenerLg);

// hover and show the corresponding image
document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('.hover-link');
    const images = document.querySelectorAll('.product-banner-container img');

    links.forEach(link => {
        link.addEventListener('mouseover', function() {
            images.forEach(img => img.classList.remove('active'));
            const target = this.getAttribute('data-target');
            document.getElementById(target).classList.add('active');
        });
    });
});

// scroll to intro section
// document.querySelector(".scroll2intro").addEventListener("click", function(event) {
//     event.preventDefault();
//     document.getElementById("intro").scrollIntoView({ behavior: "smooth" });
// });

//show more button
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".show-more-button").addEventListener("click", function() {
        var hiddenContent = document.querySelector(".hidden-content");
        if (hiddenContent.style.display === "none") {
            hiddenContent.style.display = "flex";
            this.style.display = "none";
        } 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    function toTitleCase(str) {
        // Define small words you want to keep lowercase
        const smallWords = ["the", "to", "in", "on", "a", "an", "and", "but", "or", "for", "nor", "of"];
        const exceptionWords = ["3D", "OEM", "R&D"];

        return str
            .split(" ")
            .map((word, index) => {
                if (exceptionWords.includes(word)) {
                    return word;
                }
                // Always capitalize the first word or words not in the small words list
                if (index === 0 || !smallWords.includes(word.toLowerCase())) {
                    return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
                } else {
                    return word.toLowerCase();
                }
            })
            .join(" ");
    }

    // Example usage:
    // const textElement = document.querySelector(".slogan");
    // textElement.textContent = toTitleCase(textElement.textContent);
    const elements = document.querySelectorAll(".slogan, .title");
    elements.forEach(element => {
        element.textContent = toTitleCase(element.textContent);
    });

});

//Autoplay videos
// document.addEventListener("DOMContentLoaded", () => {
//     const videos = document.querySelectorAll(".video"); // Select all videos
  
//     // Check if Intersection Observer is supported
//     if ("IntersectionObserver" in window) {
//       const observer = new IntersectionObserver((entries) => {
//         entries.forEach(entry => {
//           const video = entry.target;
//           if (entry.isIntersecting) {
//             video.play(); // Play video when it comes into view
//           } else {
//             video.pause(); // Pause video when it leaves the view
//           }
//         });
//       }, {
//         threshold: 0.5 // Trigger when 50% of the video is in view
//       });
  
//       videos.forEach(video => {
//         observer.observe(video); // Observe each video
//       });
//     } else {
//       console.warn("Intersection Observer is not supported in your browser.");
//     }
//   });
  