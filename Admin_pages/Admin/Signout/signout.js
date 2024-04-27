document.getElementById('yes_btn').addEventListener('click', function (){
   const check = confirm("Do You Really Want to log out");
   if(check){
       window.location.href="signouthandler.php";
   }
   else{
       window.location.href="../Admin.php";
   }
});
document.getElementById('no_btn').addEventListener('click', function (){
    window.location.href="../Admin.php";
});