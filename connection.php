<?php
session_start();
$con=mysqli_connect("localhost","root","","jobportal")or die();
if (isset($con)) {
//echo "success";
}
else
echo "error".mysqli_error();

?>