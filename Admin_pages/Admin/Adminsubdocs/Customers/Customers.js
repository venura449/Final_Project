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
    var filter, table, tr, td, i, txtValue;
    var Des = document.getElementById('Des').value;
    var Des2 = document.getElementById('Des2').value;
    var Des3 = document.getElementById('Des3').value;
    var Des4 = document.getElementById('Des4').value;
    var Des5 = document.getElementById('Des5').value;

    var index = 0;
    var string = '';

    if (Des !== '') {
        index = 0;
        string = Des;
    } else if (Des2 !== '') {
        index = 1;
        string = Des2;
    } else if (Des3 !== '') {
        index = 2;
        string = Des3;
    } else if (Des4 !== '') {
        index = 3;
        string = Des4;
    } else if (Des5 !== '') {
        index = 4;
        string = Des5;
    }

    filter = string.toUpperCase();
    table = document.getElementById("Flighttable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[index];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
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
        xhr.open("POST", "../deleteflights/deleteflights.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log(xhr.responseText);
            }
        };
        xhr.send("flight_id=" + flightId);
    }
}
Sni