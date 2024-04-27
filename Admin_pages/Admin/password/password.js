function validInput() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmpassword = document.getElementById("confirmpassword").value;
    var pattern = /^[a-zA-Z0-9._%+-]+@wixair\.com$/;
    var alertmsg = document.getElementById("alertmsg");

    if (email.trim() === '' || password.trim() === '' || confirmpassword.trim() === '') {
        alertmsg.style.display = 'block';
        alertmsg.innerHTML = 'All fields are required';
        return false;
    } else if (password !== confirmpassword) {
        alertmsg.style.display = 'block';
        alertmsg.innerHTML = 'Password and Confirm Password must be the same';
        return false;
    } else if (!pattern.test(email)) {
        alertmsg.style.display = 'block';
        alertmsg.innerHTML = 'Please use a valid administrative email address';
        return false;
    } else {
        alertmsg.style.display = 'none';
        return true;
    }
}
