// Function to automatically scroll the slider every 2 seconds
function autoScroll() {
    const slider = document.querySelector('.slider');
    const scrollWidth = slider.scrollWidth;
    const clientWidth = slider.clientWidth;

    // If scrolled to the end, smoothly scroll back to the beginning
    if (slider.scrollLeft + clientWidth >= scrollWidth) {
        slider.scrollTo({
            left: 0,
            behavior: 'smooth'
        });
    } else {
        // Otherwise, scroll to the next position with smooth animation
        slider.scrollLeft += clientWidth;
    }
}

// Set interval to call autoScroll function every 2 seconds
setInterval(autoScroll, 5000);
