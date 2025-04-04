function initScroll() {
    ScrollTrigger.getAll().forEach(trigger => trigger.kill());
    gsap.killTweensOf(".horizontal-scroll");

    const container = document.querySelector('.horizontal-scroll-wrapper');
    const sections = document.querySelectorAll(".section");
    const containerWidth = container.clientWidth;
    let sectionWidth;
    if (window.innerWidth < 768) {
        sectionWidth = containerWidth / 2;
    } else {
        sectionWidth = containerWidth / 3;
    }
    const horizontalScrollLength = (sections.length * sectionWidth) - containerWidth;

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
                let progress = Math.min(self.progress * 100, 71.43);
                // progress = Math.max(progress, 2.5);                
                // console.log(progress);
                // const progress = self.progress * 100;
                const progressBar = document.querySelector('.progress-bar');
                const progressIcon = document.querySelector('.progress-bar-icon-wrapper');

                progressBar.style.width = `${progress}%`;

                // Move the icon with the tip of the progress bar
                progressIcon.style.left = `${progress}%`;
            }
        }
    });

    sections.forEach(section => {
        gsap.set(section, {
            opacity: 0,
            scale: 0.8
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
        end: () => `+=${horizontalScrollLength}`,
        pin: true,
        pinSpacing: false
    });
}

function setSectionWidth() {
    const container = document.querySelector('.horizontal-scroll-wrapper');
    const sections = document.querySelectorAll(".section");
    const containerWidth = container.clientWidth;
    let sectionWidth;
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

window.addEventListener('resize', function() {
    setSectionWidth();
    initScroll();
});