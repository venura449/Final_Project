//section non-hide mechanism
const radioButtons = document.querySelectorAll('.tabs input[type="radio"]');
const sec1 = document.querySelector('.content');
const sec2 = document.querySelector('.content1');
const sec3 = document.querySelector('.content2');
const sec4 = document.querySelector('.cont1');
window.onload = function() {
    sec1.classList.remove('active');
};
radioButtons.forEach((radioButton, index) => {
    radioButton.addEventListener('change', () => {
        // Remove 'active' class from all sections
        sec1.classList.add('active');
        sec2.classList.add('active');
        sec3.classList.add('active');

        // Add 'active' class to the corresponding section based on the selected radio button
        if (index === 0) {
            sec1.classList.remove('active');
        } else if (index === 1) {
            sec2.classList.remove('active');
            sec4.classList.remove('active');
        } else if (index === 2) {
            sec3.classList.remove('active');
            sec4.classList.add('active');
        }
    });
});
