const spans = document.querySelectorAll('.booking__nav span');
const buttons = document.querySelectorAll('.booking');

spans.forEach((span, index) => {
    span.addEventListener('click', () => {
        buttons.forEach(button => button.classList.remove('active'));
        buttons[index].classList.add('active');
    });
});

// Get all span elements with the class 'booking'
const bookingOptions = document.querySelectorAll('.booking');

// Add event listener to each span
bookingOptions.forEach(option => {
    option.addEventListener('click', function() {
        // Get the value of the selected span
        document.getElementById('trip_class').value = option.textContent;
    });
});
