<?php
session_start();
$error="";
$msg="";
$con = mysqli_connect("localhost","root","","cusinecart");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$image= $_REQUEST['image'];
$sql = "DELETE FROM cart WHERE pimage= '$image'";

$result=mysqli_query($con,$sql);
if($result)
{ 
	$msg="<p class='alert alert-success'>Add to cart Successfully</p>";
        echo '<script type="text/javascript">location.href="addtocart.php?msg='.$msg.'";</script>';
					
}
else
{
	$error = "<p class='alert alert-warning'>Something went wrong. Please try again. Error: " . mysqli_error($con) . "</p>";
    echo '<script type="text/javascript">location.href="addtocart.php?msg='.$error.'";</script>'; 
}
?>