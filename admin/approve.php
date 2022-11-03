<?php
require("../config.php");
$id = $_GET['id'];
$fetch = mysqli_query($database_connection,"SELECT * FROM `bussiness` where id=$id");
$fetchdata = mysqli_fetch_array($fetch);
$bussinessname = $fetchdata[1];
$address = $fetchdata[2];
$phone = $fetchdata[3];
$officialnum = $fetchdata[4];
$fax = $fetchdata[5];
$email = $fetchdata[6];
$website = $fetchdata[7];
$image = $fetchdata[9];

$updatequery = "UPDATE `bussiness` set 
`buisness_name`='$bussinessname',
`address`='$address',
`phone`='$phone',
`officialnum`='$officialnum',
`faxnumber`=$fax,`email`='$email',
`website`='$website',
`status`='approve',
`logo`='$image' 
WHERE id=$id";

$queryrun = mysqli_query($database_connection,$updatequery);
if ($queryrun) {
    ?>
    <script>
        alert("Status Has Been Approved");
        window.location.href= "approveandreject.php";
    </script>
    <?php
}
else {
    echo mysqli_error($database_connection);
  
}

?>