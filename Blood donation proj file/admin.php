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
    <link href="projectblood.css" rel="stylesheet" type="text/css">
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


<br> <div class="admin">
<h1 > <u> ADMIN LOGIN </u> </h1>

<img src="adminphoto.png" width=100px height=100px>


</div>


















<style> 


.admin{
    margin-left:500px;
}
.admin img{
    margin-left:50px;
}
 .admin h1{
    color:orange;

}
.form-input{
    margin-left:280px;
    font-weight:bold;
}
.sign-up-form{
    background-color:lime;
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
    background-color:blue;
    transform:translateY(-4px);
}

</style>
<br> <Br>

<div class="form-container">
    <form class="sign-up-form" method="post">
  
        <input type="text" class="form-input" placeholder=" Name" maxlength="40" required name="name">       <br>      
        
        <input type="text" class="form-input" placeholder=" Username" maxlength="40" required name="username">  <br>
        <input type="password" class="form-input" placeholder=" Password" maxlength="40"required name="password">  <br><br>
        <input type="submit" value="Submit " class="button">

</form>


<?php 
error_reporting(E_ERROR | E_PARSE);


$name=$_POST['name'];
$uname=$_POST['username'];
$password=$_POST['password'];

 if ($uname=='admin' and  $password=='admin'){
    header('location: admin2.php');
 }
 else{
     echo " <h2> Wrong Username or Password </h3>";
 }






?>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['name'] = $_POST['name'];
       
        
      
    }


?>

<?php 






?>






</div>

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


<style>

.nav-list{
    background-color:yellow;
}
</style>