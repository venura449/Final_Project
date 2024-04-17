const seatsContainer = document.getElementById("seatsContainer");

// Function to toggle seat selection
function toggleSeat(seat) {
    seat.classList.toggle("selected");
}

//Generate seats According to the flights total seats
for (let i = 1; i <= 88; i++) {
    const seat = document.createElement("div");
    seat.className = "seat";
    seat.textContent = i;

    seat.addEventListener("click", function() {
        toggleSeat(this);
    });

    seatsContainer.appendChild(seat);
}
