<?php 
session_start();
require("../config.php");
// include ("adminloginfunction.php");
// include ("adminlogin.html");
// 


// if (isset($_POST["login"])) {
//     $name = $_POST["username"];
//     $password = $_POST["pswd"];

//     $query = "SELECT * FROM `admin` ";
//     if(count(fetchAll($query)) > 0){ //this is to catch unknown error.
//     foreach (fetchAll($query)as $row) {
//        if ($row['username']==$name&&$row[pswd]==$password) {
//         $_SESSION['login'] = true;
//         $_SESSION['type'] = $row['type'];
//         header('location.approveandreject.html');
//        }
//        else{
//         echo "<script>alert('Wrong login details.')</script>";
//     }
    
//     }
// }
// else{
//     echo "<script>alert('Error.')</script>";
// }
// }
if (isset($_POST["login"])) {
        $name = $_POST["username"];
        $password = $_POST["pswd"];
    $select = mysqli_query($database_connection,"SELECT * FROM `admin` WHERE name ='$name' and  password = '$password' ");
    $query = mysqli_fetch_assoc($select);

    if (is_array($query)) {
        $_SESSION['username'] = $query['name'];
        $_SESSION['password'] = $query['password'];
        header("location:approveandreject.php");
    }
    else {
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid username or password")';
        echo 'window.location.href = "adminlogin.php" ';
        echo '</script>';
    }
    
}


?>