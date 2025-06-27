<?php
// Enter your Host, username, password, database below.
$conn = mysqli_connect("localhost","root","","dashboard");
// $con = mysqli_connect("localhost", "beclhsmd_beclix_retail", "+AaWJ1,%Gce4", "beclhsmd_bucky_drop");
if(!$conn){
	die("Connection Error !!".mysqli_connect_error());
}
 ?>