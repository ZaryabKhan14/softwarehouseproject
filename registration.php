<?php
include ("registrationform.html");
require("config.php");

$bussiness =  mysqli_select_db($database_connection,"softwarehouse");

if(isset($_POST["submit_reg"]))
 {
    $bussiness_name = $_POST["Bussiness"];
    $address = $_POST["Address"];
    $phone_num = $_POST["phonenumber"];
    $official_number = $_POST["officialnumber"];
    $fax_number = $_POST["faxnumber"];
    $email = $_POST["email"];
    $website = $_POST["website"];
     $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

    $query = "INSERT INTO `bussiness`(`buisness_name`, `address`, `phone`, `officialnum`, `faxnumber`, `email`, `website`,`logo`) VALUES ('$bussiness_name','$address','$phone_num','$official_number','$fax_number','$email','$website','$file')";
    $query_run = mysqli_query($database_connection,$query);
    
}
?>