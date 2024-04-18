let loaded = false;
document.addEventListener("DOMContentLoaded", function () {
    loaded = true;
});

function validate() {
    if (document.getElementById("email").value === "") {
        let msg = document.getElementById("alertmsg");
        msg.style.display = "block";
        msg.innerHTML = "Please Enter Your Email";
    } else {
        document.getElementById("resetForm").submit();
    }
}

function otpdiv() {
    console.log("hello");
}
function backToLogin() {
    window.location.href = "../loginpage/login.php";
}
window.onload = function (e) {};
