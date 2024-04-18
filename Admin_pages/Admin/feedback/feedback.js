// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
    list.forEach((item) => {
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
    navigation.classList.toggle("active");
    main.classList.toggle("active");
};
//filter column selection
function filterTable() {
    var inputDate = document.getElementById("Des").value.toUpperCase();
    var inputName = document.getElementById("Des2").value.toUpperCase();
    var inputEmail = document.getElementById("Des3").value.toUpperCase();
    var inputQuestion = document.getElementById("Des4").value.toUpperCase();
    var inputReply = document.getElementById("Des5").value.toUpperCase();

    var table = document.getElementById("FeedbackTable");
    var rows = table.getElementsByTagName("tr");

    for (var i = 0; i < rows.length; i++) {
        var dateCell = rows[i].getElementsByTagName("td")[0];
        var nameCell = rows[i].getElementsByTagName("td")[1];
        var emailCell = rows[i].getElementsByTagName("td")[2];
        var questionCell = rows[i].getElementsByTagName("td")[3];
        var replyCell = rows[i].getElementsByTagName("td")[4];

        if (dateCell && nameCell && emailCell && questionCell && replyCell) {
            var dateText = dateCell.textContent.toUpperCase();
            var nameText = nameCell.textContent.toUpperCase();
            var emailText = emailCell.textContent.toUpperCase();
            var questionText = questionCell.textContent.toUpperCase();
            var replyText = replyCell.textContent.toUpperCase();

            if (dateText.indexOf(inputDate) > -1 &&
                nameText.indexOf(inputName) > -1 &&
                emailText.indexOf(inputEmail) > -1 &&
                questionText.indexOf(inputQuestion) > -1 &&
                replyText.indexOf(inputReply) > -1) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }
    }
}

// delete part
function deleteflight(flightId) {
    // Confirm deletion with the user
    var confirmDelete = confirm("Are you sure you want to delete this flight?");
    if (confirmDelete) {
        // Send AJAX request to delete flight record
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "deleteflights/deleteflights.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log(xhr.responseText);
                // Optionally, you can update the UI or handle the response here
            }
        };
        xhr.send("flight_id=" + flightId);
    }
}
