<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


                   
<!DOCTYPE html>
<html>
<head>
<title>Payment Form Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>


<?php
session_start();  
include "../dbconnection.php";
//echo $_SESSION["uname"];
if(!isset($_SESSION["uname"]))
{
    header('Location:login.php');
}
$uname=$_SESSION["uname"];
$product_id=$_SESSION["product_id"];

$order_id=$_SESSION["order_id"];
//$order_id=$_GET["order_id"];
//echo $_GET["order_id"];
// $order_id=$_SESSION["order_id"];
//$user_name=$_SESSION["user_name"];
$select="select name from registration where email='$uname'";
$res=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($res);
$qry2="SELECT email from login where email='$uname'";
$res2=mysqli_query($conn,$qry2);
$data2=mysqli_fetch_assoc($res2);
$order_id=$_SESSION["order_id"];
$qry3="SELECT product_prize from  tableorder where order_id='$order_id'";
$res3=mysqli_query($conn,$qry3);
$data3=mysqli_fetch_assoc($res3);
//echo $qry3;
$qry4="SELECT product_id from product where product_id='$product_id'";
$res4=mysqli_query($conn,$qry4);
$data4=mysqli_fetch_assoc($res4);

?>
<form method="post" >

    <div class="main">
        <h1>Payment Form Widget</h1>
        <div class="content">
            
            <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#horizontalTab').easyResponsiveTabs({
                                type: 'default', //Types: default, vertical, accordion           
                                width: 'auto', //auto or any width like 600px
                                fit: true   // 100% fit in a container
                            });
                        });
                        
                    </script>
                        <div class="sap_tabs">
                            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                <div class="pay-tabs">
                                    <h2>Select Payment Method</h2>
                                      <ul class="resp-tabs-list">
                                          <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
                                           <!-- <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>Net Banking</span></li>
                                          <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label>PayPal</span></li> 
                                          <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li> -->
                                          <div class="clear"></div>
                                      </ul> 
                                </div>
                                <div class="resp-tabs-container">
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <div class="payment-info">
                    </form>
                                            <h3>Personal Information</h3>
                         <form method="post" enctype="multipart/form-data">
                                                <div class="tab-for">               
                                                    <h5>EMAIL ADDRESS</h5>
                                                        <input type="text" name="email" value="<?php echo $data2["email"]; ?>"readonly>
                                                    <h5>NAME</h5>                                                  
                                                        <input type="text" name="name" value="<?php echo $data["name"]; ?>"readonly>
                                                    
                                                           
                                                </div>          
                                           
                                            <h3 class="pay-title">Credit Card Info</h3>
                                            
                                                <div class="tab-for">               
                                                    <h5>NAME ON CARD</h5>
                                                        <input type="text" value="" required>
                                                    <h5>CARD NUMBER</h5>                                                    
                                                        <input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" maxlength=16 required="">
                                                </div>  
                                                <div class="transaction">
                                                    <div class="tab-form-left user-form">
                                                        <h5>EXPIRATION</h5>
                                                            <ul>
                                                                <li>
                                                                    <input type="number" class="text_box" type="text" value="6" min="1" max="12" required/>  
                                                                </li>
                                                                <li>
                                                                    <input type="number" class="text_box" type="text" value="2021" min="2023" required/>   
                                                                </li>
                                                                
                                                            </ul>
                                                    </div>
                                                    <div class="tab-form-right user-form-rt">
                                                        <h5>CVV NUMBER</h5>                                                 
                                                        <input type="text" value="xxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxx';}" maxlength=3 required="">
                                                    </div>
                                                    
                                                    <div class="clear"></div>
                                                </div>
                                                <input type="submit" name="b1" value="PAY NOW" >
                                              
                                                    </form>
                                                    <?php
include "../dbconnection.php";
if(isset($_POST["b1"])) 
{
    //include "../dairyfarm_dbconnection.php";
      //$_REQUEST is used to collect data after submitting an HTML form
    
       
        $user_name=$_POST["name"];
        //$phone=$_POST["phone"];    //$_POST is collect data after submitting an HTML form anf also widely used to pass variable
        //$date=$_POST["date"];
        $uname=$_POST["email"];
        $product_id=$data4["product_id"];
        $product_prize=$data3["product_prize"];
        echo $product_prize;
       // $product_prize=$data3["product_prize"];
        //$feedback=$_POST["feedback"];
        // $qry2="select amount from table_obcs_login where email='$uname' and application_no='$application_no'";
        // $res2=mysqli_query($conn,$qry2);     
        // $data=mysqli_fetch_assoc($res2); 
        
           
             $qry="insert into payment(product_id,name,email,date,product_prize) values('$product_id','$user_name','$uname',".date('Ymd').",'$product_prize')";

            mysqli_query($conn,$qry);
            echo $qry;
            
             echo"<script>alert('Payment successfully completed')</script>";      
               
            echo '<script type="text/javascript">location.href="http://localhost/aquaproject/asset/viewproduct.php";</script>';
        
}
?>
                                            
                                             <!-- <div class="single-bottom">
                                                    <ul>
                                                        <li>
                                                            <input type="checkbox"  id="brand" value="" required>
                                                            <label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
                                                        </li>
                                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                        <div class="payment-info">
                                            <h3>Net Banking</h3>
                                            <div class="radio-btns">
                                                <div class="swit">                              
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Andhra Bank</label> </div></div>
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Allahabad Bank</label> </div></div>
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank of Baroda</label> </div></div>
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Canara Bank</label> </div></div> 
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>IDBI Bank</label> </div></div>
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Icici Bank</label> </div></div>  
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Indian Overseas Bank</label> </div></div>    
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Punjab National Bank</label> </div></div>    
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>South Indian Bank</label> </div></div>
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>State Bank Of India</label> </div></div>     
                                                </div>
                                                <div class="swit">                              
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>City Union Bank</label> </div></div>
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>HDFC Bank</label> </div></div>
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>IndusInd Bank</label> </div></div>
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Syndicate Bank</label> </div></div>
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Deutsche Bank</label> </div></div>   
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Corporation Bank</label> </div></div>
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>UCO Bank</label> </div></div>    
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Indian Bank</label> </div></div> 
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Federal Bank</label> </div></div>    
                                                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>ING Vysya Bank</label> </div></div>  
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <a href="#">Continue</a>
                                        </div>
                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                        <div class="payment-info">
                                            <h3>PayPal</h3>
                                            <h4>Already Have A PayPal Account?</h4>
                                            <div class="login-tab">
                                                <div class="user-login">
                                                    <h2>Login</h2>
                                                    
                                                   
                                                        <input type="text" value="name@email.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name@email.com';}" required="">
                                                        <input type="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}" required="">
                                                            <div class="user-grids">
                                                                <div class="user-left">
                                                                    <div class="single-bottom">
                                                                            <ul>
                                                                                <li>
                                                                                    <input type="checkbox"  id="brand1" value="" required>
                                                                                    <label for="brand1"><span></span>Remember me?</label>
                                                                                </li>
                                                                            </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="user-right">
                                                                    <input type="submit" value="LOGIN" required>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            
                                                    

            
                                                </div>
                                            </div>
                                        </div> -->
                                    <!-- </div> -->
                                    <!-- <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">   
                                        <div class="payment-info">
                                       
                        
                                            <h3 class="pay-title">Dedit Card Info</h3>
                                                                                           <div class="tab-for">               
                                                    <h5>NAME ON CARD</h5>
                                                        <input type="text" value="" required>
                                                    <h5>CARD NUMBER</h5>                                                    
                                                        <input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" maxlength=16 required="">
                                                </div>  
                                                <div class="transaction">
                                                    <div class="tab-form-left user-form">
                                                        <h5>EXPIRATION</h5>
                                                            <ul>
                                                                <li>
                                                                    <input type="number" class="text_box" type="text" value="6" min="1" required/>  
                                                                </li>
                                                                <li>
                                                                    <input type="number" class="text_box" type="text" value="1988" min="1" required/>   
                                                                </li>
                                                                
                                                            </ul>
                                                    </div>
                                                    <div class="tab-form-right user-form-rt">
                                                        <h5>CVV NUMBER</h5>                                                 
                                                        <input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <input type="submit" value="PAY NOW" required>
                                                
                                            
                                            


                                            <div class="single-bottom">
                                                    <ul>
                                                        <li>
                                                            <input type="checkbox"  id="brand" value="">
                                                            <label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
                                                        </li>
                                                    </ul>
                                            </div>
                                        </div>  
                                    </div>
                                </div>  
                            </div>
                        </div>  

        </div> -->
        <div>
        <p class="footer">
        ©  Aquaphonics | 2023
        <a href="http://localhost/aquaphonics/asset/aindex1.php" target="_blank">Home</a>
      </p> 
    </div>
</body>
</html>