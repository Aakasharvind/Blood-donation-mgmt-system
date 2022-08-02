<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500|Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <title>Blood Donation Management system</title>
    <link href="project.css" rel="stylesheet">
</head>
<body>

    <div ckass="container">
        <div class="banner">
            <div class="logo">
                <a href="#"><img src="blood.jfif" width=90px  height=90px ></a> </div>
            
            <div class="heading"> 
                <h1> LSA Blood Donation Management System </h1>  </div>

                <div class="ad">
                <h2> <a href="admin.php">  Admin Login </a> </h2> </div>

</div>

<nav class="top-nav">
                <ul class="nav-list">
                    <li>
                        <a href="project.php" class="nav-link" data-text="Home">Home</a>
                    </li>
                    <li>
                        <a href="before.php" class="nav-link" data-text="Before & After Donation">Before & After Donation</a>
                    </li>
                    <li>
                        <a href="info.php" class="nav-link" data-text="More Info on Donation">More Info on Donation</a>
                    </li>
                    <li>
                        <a href="process.php" class="nav-link" data-text="Process of Blood Donation">Process of Blood Donation</a>
                    </li>
                    <li>
                        <a href="contact.php" class="nav-link" data-text="Contact">Contact</a>
                    </li>
                    </ul>
                    </nav>



                    <nav class="bottom-nav">
                <ul class="nav-list1">
                    <li>
                        <a href="donor.php" class="nav-link1" data-text="Home">Donor? Click Here to Register!</a>
                    </li>
                    <li>
                        <a href="recep.php" class="nav-link1" data-text="Before & After Donation">Need Blood? Click Here!</a>
                    </li>
                    
                    </ul>
                    </nav> 
                    <br><br>




                    <h2 class="head"> <span style="color:red ;"> BLOOD RECIPIENT </span> REGISTRATION FORM </h2> 
 <div class="form-container">
    <form class="sign-up-form" method="get">
  
        <input type="text" class="form-input" placeholder=" Name" maxlength="40" required name="name">             
        
        <input type="text" class="form-input" placeholder=" Blood Group" maxlength="40" required name="blood">  
        <input type="text" class="form-input" placeholder=" Required Quantity" maxlength="40"required name="quantity">  
     
        <input type="text" class="form-input" placeholder=" Country" maxlength="40" name="country"required name="country">  
        <input type="text" class="form-input" placeholder=" State" maxlength="40" name="state"required name="state">  
        <input type="text" class="form-input" placeholder=" District" maxlength="40" name="district"required name="district">  
        <input type="text" class="form-input" placeholder="Area" maxlength="40" name="area"required name="area">  <br>
<p> GENDER </p> <p>
      <input type="radio" name="gender"  id="gender" checked="checked" value="Male">  Male
      <input type="radio" name="gender"  id="gender" value="Female"> Female</p>
       <br>
        <input type="text" class="form-input" placeholder="Age" maxlength="2" name="age"required>
        <input type="text" class="form-input" placeholder="Mobile Number" maxlength="10" name="mobile"required>
       
        <input type="email" class="form-input" placeholder="Email" maxlength="40" name="email"required>
       
     
        
        
        <p>I am not a Robot</p>
        <label>No</label>
        <input type="checkbox" name="robot" value="No" checked="checked">
        <label>Yes</label> <br> <br> <br>
      <input type="submit" value="Submit" class="button"> 
    </form>



    <style>

.ad{
position:absolute;
display: inline-block;
margin-left:1100px;
}
a:visited{
    color:red;
    
}
.head{
    margin-left:380px;
}
.button{
    margin-left:320px;
    width:150px;
    height:40px;
    border-radius:50px;
    color:red;
    font-size:x-large;
    transition: all .5s;
    cursor:pointer;
    perspective:50px;
   
}
.button:hover{
    background-color:lime;
    transform:translateY(-4px);
}
h3{
    margin-left:500px;
    color:orange;
}
</style>





<?php 
     error_reporting(E_ERROR | E_PARSE);
$link1=mysqli_connect("localhost","root","",'project');
if ($link1==false){
    die("ERROR:Could not connect".mysqli_connect_error());
}





$name=$_GET['name'];
$blood=$_GET['blood'];
$quantity=$_GET['quantity'];

$country=$_GET['country'];

$state=$_GET['state'];

$district=$_GET['district'];

$area=$_GET['area'];

$gender=$_GET['gender'];




$age=$_GET['age'];




$mobile=$_GET['mobile'];

$email=$_GET['email'];

$robot=$_GET['robot'];







echo "<br>";










$sql1="INSERT INTO recepient(name,bloodgroup,quantity,country,state,district,area,gender,age,mobile,email,robot) VALUES('$name','$blood','$quantity','$country','$state','$district','$area','$gender','$age','$mobile','$email','$robot')";
$result1=mysqli_query($link1,$sql1);
echo " <h3> RESPONSE RECORDED </h3>";
mysqli_close($link1);





?>




<?php 
 error_reporting(E_ERROR | E_PARSE);
 $lin=mysqli_connect("localhost","root","",'project');
 if ($lin==false){
     die("ERROR:Could not connect".mysqli_connect_error());
 }


 echo "<br>";


$sq="DELETE FROM recepient where name='' ";

$result1=mysqli_query($lin,$sq);


mysqli_close($lin);



 
 ?>

    <br> <br>
    <nav class="top-nav">
                <ul class="nav-list">
                    <li>
                        <a href="project.php" class="nav-link" data-text="Home">Home</a>
                    </li>
                    <li>
                        <a href="before.php" class="nav-link" data-text="Before & After Donation">Before & After Donation</a>
                    </li>
                    <li>
                        <a href="info.php" class="nav-link" data-text="More Info on Donation">More Info on Donation</a>
                    </li>
                    <li>
                        <a href="process.php" class="nav-link" data-text="Process of Blood Donation">Process of Blood Donation</a>
                    </li>
                    <li>
                        <a href="contact.php" class="nav-link" data-text="Contact">Contact</a>
                    </li>
                    </ul>
                    </nav>

