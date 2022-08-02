<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500|Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <title>Student Management System</title>
    <link href="hamproj.css" rel="stylesheet">
</head>
<img src="aps.jfif" width=80px height=80px>
<h1> APS STUDENT MANAGEMENT SYSTEM </h1> 


<form>
<div class="form-container">
    <h1> ADMIN LOGIN </h1>
   <form class="sign-up-form" id="sign" method="POST">
    
        <label for="username"> USERNAME: </label>
        <input type="text" class="form-input" placeholder=" Username" maxlength="20" name="username">      <Br>         
        <label for="password"> PASSWORD:                                    </label>
        <input type="password" class="form-input" placeholder="Password" maxlength="20" name="password"><br>
        <input type="submit" class="b"><br>
       
</form>
</div>
</form>


<?php 
error_reporting(E_ERROR | E_PARSE);

$u=$_GET['username'];
$p=$_GET['password'];
if ($u=='admin' && $p=='aps'){
    header('location: SMS2.php');
    
}





?>
<style>




body{

background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)), url("apschennai.png") center no-repeat;

}
h1{
    color:black;
    background:linear-gradient(orange,white,green);
    text-align:center;
    text-decoration:underline;
}
h2{
    background-color:blue;
    color:white
}
marquee{
    text-align:center;
}
.sign-up-form {
    width: 70%;
   
    background-color: #232328;
    padding: 120px 50px;
    box-sizing: border-box;
    margin-left: 190px;
    visibility:hidden;
}
.form-input {
    width: 300px;
    font-family: 'Oswald', sans-serif,;
    font-size: 18px;
    letter-spacing: 1px;
    color: #e45315;
    background-color: transparent;
  border: none;
    border-bottom: 2px solid #fff;
    margin-bottom: 50px;
    outline: none;
    padding: 10px 0;
    transition: border-bottom-color .8s;
    margin-left:30px;
}
.form-input:focus {
    border-bottom-color: #cc683c;
}




.form-container{
    background-color:black;
    position:absolute;
    top:75%;
    left:38%;
    transform:translateX(-50%,-50%);

}
.b {
    display: block;
    margin-top: 80px;
    width: 150px;
    padding: 8px 5px;
    background-color: transparent;
    color: rgb(240, 238, 238);
    border: 5px solid rgb(175, 110, 11);
    border-radius: 50px;
    outline: none;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 15px;
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer;
    transition: background-color .5s ;
    transition: transform .5s;
    margin-left: 150px;
 }
 .b:hover{
     background-color: rgb(82, 35, 168);
     transform: translateY(-2px);
 }
 
 label {
    color: red;
    font-family: 'Oswald', sans-serif;
    font-size: 15px;
    font-weight: 200;
    letter-spacing: 1px;
    text-transform: uppercase;
}
h3{
    color:pink;
}

    </style>