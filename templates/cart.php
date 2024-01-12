<?php
session_start();

$error="";
$msg="";




$con = mysqli_connect("localhost","root","","cusinecart");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

if(!isset($_SESSION["uemail"]))
{
    header('Location:login.php');  
}

$uemail=$_SESSION["uemail"];
// echo $_SESSION["user_id"];
$title=$_GET["title"];
$pquantity=1;
$query=mysqli_query($con,"SELECT * from ingredients where recipetitle='$title'");
//$row=mysqli_fetch_array($query);
while($row=mysqli_fetch_array($query))
{
    $iid=$row['0'];
    $pname=$row['2'];
    $pprice=$row['3'];
    $pimage=$row['1'];
    echo $iid;
    echo $pname;

    $sql = "INSERT INTO cart (iid, pname, pprice, pimage, pquantity, uemail) VALUES ('$iid', '$pname', '$pprice', '$pimage', '$pquantity', '$uemail')";

    $result=mysqli_query($con,$sql);
	if($result)
	{ 
		$msg="<p class='alert alert-success'>Add to cart Successfully</p>";
        echo '<script type="text/javascript">location.href="menu.php?msg='.$msg.'";</script>';
					
	}
	else
	{
		$error = "<p class='alert alert-warning'>Something went wrong. Please try again. Error: " . mysqli_error($con) . "</p>";
        echo '<script type="text/javascript">location.href="menu.php?msg='.$error.'";</script>'; 
	}
}

?>