<?php
require("../config.php");

$approveandreject = mysqli_query($database_connection,"SELECT * FROM `bussiness`");

?>
<table class="table table-border ">
    <tr>
        <th>ID</th>
        <th>Bussiness Name</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Official Number</th>
        <th>Fax Number</th>
        <th>Email</th>
        <th>Website</th>
        <th>Status</th>
     
    </tr>

<?php
$row = mysqli_num_rows($approveandreject);
if ($row==0) {
    echo "<tr>
    <td colspan='8'>
    no record found
    </td>
    </tr>";
}
else {
    while ($data=mysqli_fetch_array($approveandreject)) {?>
        <tr>
            <td><?php echo $data[0];?></td>
            <td><?php echo $data[1];?></td>
            <td><?php echo $data[2];?></td>
            <td><?php echo $data[3];?></td>
            <td><?php echo $data[4];?></td>
            <td><?php echo $data[5];?></td>
            <td><?php echo $data[6];?></td>
            <td><?php echo $data[7];?></td>
            <td><?php echo $data[8];?></td>
            <td><a href="approve.php?id=<?php echo $data[0]?>" class="btn btn-primary">Approve</a></td>
            <td><a href="reject.php?id=<?php echo $data[0]?>" class="btn btn-primary">Reject</a></td>
        </tr>
 <?php   }
}?>

</table>