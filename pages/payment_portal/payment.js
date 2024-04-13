const buttons = document.getElementsByClassName('payment__type');

for (let i = 0; i < 2; i++) {
    buttons[i].addEventListener('click', function(event) {
        for (let j = 0; j < buttons.length; j++) {
            buttons[j].classList.remove('active');
        }
        event.target.classList.add('active');
    });
}
