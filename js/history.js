const scrollContainer = document.querySelector(".scroll-container");
const scrollLeftBtn = document.getElementById("scrollLeftBtn");
const scrollRightBtn = document.getElementById("scrollRightBtn");

// Handle mouse wheel scroll
// scrollContainer.addEventListener('wheel', (event) => {
//     event.preventDefault();
//     scrollContainer.scrollLeft += event.deltaY * 2;
// });

// Variables to store touch start position
let startX;
let scrollLeftStart;

// Handle touch start event
scrollContainer.addEventListener("touchstart", (event) => {
  // Get the initial touch position and scroll position
  startX = event.touches[0].pageX;
  scrollLeftStart = scrollContainer.scrollLeft;
});

// Handle touch move event
scrollContainer.addEventListener("touchmove", (event) => {
  // Prevent default behavior for smoother scrolling
  event.preventDefault();
  const x = event.touches[0].pageX;
  const walk = startX - x; // Calculate distance moved in touch
  scrollContainer.scrollLeft = scrollLeftStart + walk * 2;
});

// Helper to get items and find the closest index to current scroll
const scrollItems = Array.from(scrollContainer.querySelectorAll(".scroll-item"));

function getClosestIndex() {
  const scrollLeft = scrollContainer.scrollLeft;
  let closestIndex = 0;
  let minDiff = Infinity;
  scrollItems.forEach((item, index) => {
    const diff = Math.abs(item.offsetLeft - scrollLeft);
    if (diff < minDiff) {
      minDiff = diff;
      closestIndex = index;
    }
  });
  return closestIndex;
}

function scrollToIndex(index) {
  const clamped = Math.max(0, Math.min(scrollItems.length - 1, index));
  const targetLeft = scrollItems[clamped].offsetLeft;
  scrollContainer.scrollTo({
    left: targetLeft,
    behavior: "smooth",
  });
}

// Add event listeners for navigation buttons (scroll exactly one item)
scrollLeftBtn.addEventListener("click", () => {
  const current = getClosestIndex();
  scrollToIndex(current - 1);
});

scrollRightBtn.addEventListener("click", () => {
  const current = getClosestIndex();
  scrollToIndex(current + 1);
});
