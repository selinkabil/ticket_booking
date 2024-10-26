let canScrollDown = true;

window.addEventListener('scroll', function () {
    // Check if the user scrolls down past 50px and is allowed to auto-scroll to the middle section
    if (canScrollDown && window.scrollY > 50) {
        canScrollDown = false; // Prevent re-triggering immediately
        document.querySelector('.middle').scrollIntoView({ behavior: 'smooth' });
    }

    // Reset the scroll behavior when near the top of the page
    if (window.scrollY < 50) {
        canScrollDown = true; // Re-enable auto-scroll when near the top
    }
});