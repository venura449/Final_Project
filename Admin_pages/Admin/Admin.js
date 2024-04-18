
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


