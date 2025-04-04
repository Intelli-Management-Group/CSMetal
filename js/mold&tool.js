function initScroll() {
    ScrollTrigger.getAll().forEach(trigger => trigger.kill());
    gsap.killTweensOf(".horizontal-scroll");

    const container = document.querySelector('.horizontal-scroll-wrapper');
    const sections = document.querySelectorAll(".section");
    const progressBar = document.querySelector('.progress-bar'); // Select elements earlier
    const progressIcon = document.querySelector('.progress-bar-icon-wrapper'); // Select elements earlier

    if (!container || sections.length === 0 || !progressBar || !progressIcon) {
        console.error("Required elements for horizontal scroll not found.");
        return; // Exit if essential elements are missing
    }

    const containerWidth = container.clientWidth;
    let sectionWidth;
    if (window.innerWidth < 768) {
        sectionWidth = containerWidth / 2;
    } else {
        sectionWidth = containerWidth / 3;
    }

    // Ensure sectionWidth and containerWidth are valid before calculations
    if (containerWidth <= 0 || sectionWidth <= 0) {
        console.error("Invalid container or section width for calculation.");
        return;
    }

    const totalSectionsWidth = sections.length * sectionWidth;
    const horizontalScrollLength = totalSectionsWidth - containerWidth;

    // --- New Calculations for Progress Bar Alignment ---
    const startPosPx = sectionWidth / 2; // Start at the center of the first section
    const endPosPx = containerWidth - (sectionWidth / 2); // End at the center of the last section
    const trackWidthPx = endPosPx - startPosPx;

    // Convert to percentages (handle potential division by zero)
    const startPercent = (startPosPx / containerWidth) * 100;
    const trackPercent = (trackWidthPx / containerWidth) * 100;

    progressBar.style.left = `${startPercent}%`;
    progressBar.style.width = `0%`;
    progressIcon.style.left = `${startPercent}%`;

    const horizontalScrollTween = gsap.to(".horizontal-scroll", {
        x: -horizontalScrollLength,
        ease: "none",
        scrollTrigger: {
            trigger: ".horizontal-scroll-wrapper",
            start: "center center",
            end: () => `+=${horizontalScrollLength}`,
            scrub: true,
            pin: true,
            anticipatePin: 1,
            onUpdate: self => {
                // Calculate current position along the adjusted track
                const currentTrackPosPercent = self.progress * trackPercent;
                // Calculate the icon's left position percentage
                const iconLeftPercent = startPercent + currentTrackPosPercent;
                // The bar's width grows along the track percentage
                let barWidthPercent, barLeftPercent;
                if (window.innerWidth < 768) {
                    barWidthPercent = 5*currentTrackPosPercent;
                    barLeftPercent = startPercent - 4*currentTrackPosPercent;
                } else {
                    barWidthPercent = 3*currentTrackPosPercent;
                    barLeftPercent = startPercent - 2*currentTrackPosPercent;
                }

                // Apply styles only if percentages are valid numbers
                if (!isNaN(barLeftPercent) && !isNaN(barWidthPercent) && !isNaN(iconLeftPercent)) {
                    progressBar.style.left = `${barLeftPercent}%`;
                    progressBar.style.width = `${barWidthPercent}%`;
                    progressIcon.style.left = `${iconLeftPercent}%`;
                }
                const totalSections = sections.length;
                const activeSectionIndex = Math.floor(self.progress * (totalSections -1) + 0.5);


                // Remove active class from all sections
                sections.forEach((section, index) => {
                     section.classList.toggle('active', index === activeSectionIndex);
                });
            }
        }
    });

    sections.forEach(section => {
        gsap.set(section, {
            opacity: 1,
            scale: 1
        });
    });

    sections.forEach(section => {
        gsap.to(section, {
            opacity: 1,
            scale: 1,
            duration: 0.8,
            scrollTrigger: {
                trigger: section,
                containerAnimation: horizontalScrollTween,
                start: "left 80%",
                end: "right center",
                toggleActions: "play none none reverse"
            }
        });
    });

    ScrollTrigger.create({
        trigger: ".mold-process-wrapper",
        start: "top top",
        end: () => `+=${horizontalScrollLength}`, // Match the end of the horizontal scroll
        pin: ".mold-process-wrapper", // Pin the title/text block
        pinSpacing: false // Prevent extra space
    });
}

function setSectionWidth() {
    const container = document.querySelector('.horizontal-scroll-wrapper');
    const sections = document.querySelectorAll(".section");

    if (!container || sections.length === 0) return; // Add checks

    const containerWidth = container.clientWidth;
    let sectionWidth;

     if (containerWidth <= 0) return; // Add check

    if (window.innerWidth < 768) {
        sectionWidth = containerWidth / 2;
    } else {
        sectionWidth = containerWidth / 3;
    }

    sections.forEach(section => {
        section.style.width = `${sectionWidth}px`;
    });
}

document.addEventListener("DOMContentLoaded", function() {
    setSectionWidth();
    initScroll();
});

// Debounce resize function to improve performance
let resizeTimer;
window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        setSectionWidth();
        initScroll(); // Re-initialize scroll on resize
    }, 250); // Delay execution slightly
});