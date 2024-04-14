const spans = document.querySelectorAll('.booking__nav span');
const buttons = document.querySelectorAll('.booking'); // Corrected selector

spans.forEach((span, index) => {
    span.addEventListener('click', () => {
        // Remove 'active' class from all buttons
        buttons.forEach(button => button.classList.remove('active'));
        // Add 'active' class to the clicked button
        buttons[index].classList.add('active'); // Use 'index' to access the corresponding button
    });
});
