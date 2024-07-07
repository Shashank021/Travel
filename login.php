<?php
$con=mysqli_connect("localhost","root", "","book_db");

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
// $cpassword=$_POST['cpassword'];
// if($password!=$cpassword){
//     echo '<script>
//     alert("Passwords do not match");
//     window.location="index.php";
//     </script>';

// }
// else {
    $sql = "insert into `login_form` (username,mobile,password) values('$username','$mobile','$password')";
  $result = mysqli_query($con,$sql);
  if($result){
    echo '<script>
    alert("Registration successful");
    window.location="index.php";
    </script>';
  }
// }

?>





