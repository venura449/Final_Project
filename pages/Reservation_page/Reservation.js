const seatsContainer = document.getElementById("seatsContainer");
let selectedSeat = null;

// Function to toggle seat selection
function toggleSeat(seat) {
    // Remove "selected" class from all seats
    const allSeats = document.querySelectorAll(".seat");
    allSeats.forEach(seat => {
        seat.classList.remove("selected");
    });

    // Add "selected" class to the clicked seat
    seat.classList.add("selected");
    selectedSeat = seat;
}

// Function to send seat data
function senddata(seat) {
    const seatInput = document.getElementById('seatnum');
    seatInput.value = seat.textContent;
}

// Retrieve the booked seats array from the hidden input field
var bookedSeats = document.getElementById("bookedSeats").value.split(',');

// Generate seats According to the flight's total seats
for (let i = 1; i <= 88; i++) {
    const seat = document.createElement("div");
    seat.className = "seat";
    if (i <= 44) {
        seat.textContent = "R" + i;
    } else {
        seat.textContent = "L" + (i - 44);
    }

    // Check if the current seat is booked
    if (bookedSeats.includes(seat.textContent)) {
        seat.classList.add("booked");
        seat.disabled = true;
    } else {
        // Add click event listener to each available seat
        seat.addEventListener("click", function() {
            toggleSeat(this);
            senddata(this);
        });
    }

    seatsContainer.appendChild(seat);
}

//checkboxes toggle

document.addEventListener("DOMContentLoaded", function() {
    const group1Checkboxes = document.querySelectorAll(".group1");
    const group2Checkboxes = document.querySelectorAll(".group2");

    // Function to uncheck all checkboxes in a group except the clicked one
    function uncheckOthers(checkboxes) {
        checkboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
    }

    // Add event listeners to group 1 checkboxes
    group1Checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", function() {
            uncheckOthers(group1Checkboxes);
            this.checked = true;
        });
    });

    // Add event listeners to group 2 checkboxes
    group2Checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", function() {
            uncheckOthers(group2Checkboxes);
            this.checked = true;
        });
    });
});

//data entering
document.addEventListener("DOMContentLoaded", function() {
    const group1Checkboxes = document.querySelectorAll(".group1");
    const group2Checkboxes = document.querySelectorAll(".group2");
    const input1 = document.getElementById("lugnum");
    const input2 = document.getElementById("lugnumadd");

    // Function to uncheck all checkboxes in a group except the clicked one
    function uncheckOthers(checkboxes) {
        checkboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
    }

    // Add event listeners to group 1 checkboxes
    group1Checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", function() {
            uncheckOthers(group1Checkboxes);
            this.checked = true;
            input1.value = this.value; // Update input1 value
        });
    });

    // Add event listeners to group 2 checkboxes
    group2Checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", function() {
            uncheckOthers(group2Checkboxes);
            this.checked = true;
            input2.value = this.value; // Update input2 value
        });
    });
});


