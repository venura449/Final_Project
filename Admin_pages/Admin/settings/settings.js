function validInput() {
    var username = document.getElementById("name").value;
    var age = document.getElementById("age").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var alertmsg = document.getElementById("alertmsg");

    if (username.trim() === '' || password.trim() === ''||age.trim() === '' || email.trim() === '') {
        alertmsg.style.display = 'block';
        alertmsg.innerHTML = 'All the fields are required';
        return false;
    } else {
        alertmsg.style.display = 'none';
        return true;
    }
}

document.getElementById('email').addEventListener('input', function validpass() {
    var email = document.getElementById("email").value;
    var pattern = /^[a-zA-Z0-9._%+-]+@wixair\.com$/;
    if (pattern.test(email)) {
        // Email is valid
        const btn =document.getElementById('submit_btn');
        document.getElementById("alertmsg").innerHTML = "";
        document.getElementById("alertmsg").style.display = 'none'; // Hide the error message
        btn.disabled = false;
        btn.style.cursor = 'pointer';
        btn.style.pointerEvents = 'auto';
        return true;
    } else {
        const btn= document.getElementById('submit_btn');
        const err_msg = document.getElementById("alertmsg");

        err_msg.style.display = 'block';
        err_msg.innerHTML = "Please enter a valid email address (someone@wixair.com)";
        btn.disabled = true;
        btn.style.cursor = 'not-allowed';
        btn.style.pointerEvents = 'none';
        return false;
    }
});


function deleteAdmin(adminId) {
    if (confirm('Are you sure you want to delete this admin?')) {
        window.location.href = 'deleteadmin.php?adminid=' + adminId;
    }
}
