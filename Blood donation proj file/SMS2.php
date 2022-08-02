<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500|Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <title>Student Management system</title>
    <link href="hamproj.css" rel="stylesheet">
</head>
<img src="aps.jfif" width=80px height=80px>
<h1> APS STUDENT MANAGEMENT SYSTEM </h1> 

<form>

<div class="form-container">
<h1> Insert student record </h1>
    <form class="sign-up-form" id="sign" method="POST"> 
        <label for=Name"> NAME: </label>
        <input type="text" class="form-input" placeholder=" Name" maxlength="20" name="Name">      <Br>         
        <label for="Class"> Class:                                    </label>
        <input type="text" class="form-input" placeholder="Class" maxlength="20" name="class"><br>
        <label for="section"> Section  </label>
        <input type="text" name="section" class="form-input" placeholder="section"> <br>
        <label for="mobile"> MOBILE:</label>
        <input type="text" class="form-input" placeholder="Mobile Number" maxlength="10" name="mobile"><br>
        <label for="name">Prev marks </label>
        <input type="number" class="form-input" placeholder="Percentage" maxlength="20" name="marks"><br>
        
        <input type="submit" class="b"><br>
       





        <?php


$name=$_GET['Name'];
$class=$_GET['class'];
$section=$_GET['section'];
$mobile=$_GET['mobile'];
$marks=$_GET['marks'];

function chkm($mobile){
    if(strlen($mobile)!=10){
        throw new Exception (" <h1> Mobile number must be of 10 digits! </h1>");
    }
    
    return true;
} 
echo "<br>";
try{
    chkm($mobile);
    
}
catch(Exception $e) {
    echo 'Please Note: ' .$e->getMessage();
  }



    function chkem($class){
     



        if($class<'1' || $class>='12'){
            throw new Exception ("<h1> Class should be between 1 and 12");

        }
        return true;
    }
    echo "<br>";
    try{
        chkem($class);
        
    }
    catch(Exception $e) {
        echo 'Please Note: ' .$e->getMessage();
      }




?>

<?php 
error_reporting(E_ERROR | E_PARSE);

$name=$_GET['Name'];
$class=$_GET['class'];
$section=$_GET['section'];
$mobile=$_GET['mobile'];
$marks=$_GET['marks'];





$link=mysqli_connect("localhost","root","",'sample');

define("MYSQL_CONN_ERROR", "Unable to connect to database.");

// Ensure reporting is setup correctly
mysqli_report(MYSQLI_REPORT_STRICT);

// Connect function for database access
function connect($usr,$pw,$db,$host) {
   try {
      $mysqli = new mysqli("'localhost'","root","",'sample');
      $connected = true;
   } catch (mysqli_sql_exception $e) {
      throw $e;
   }
}

try {
  connect('localhost',"root","",'sample');
  echo 'Connected to database';
} catch (Exception $e) {
    echo 'Please Note this point!: ' .$e->getMessage();
}



if ($link==false){
    die("<br>ERROR:SORRY!Could not connect!!".mysqli_connect_error());
}

$sql="INSERT INTO sms(Name,class,section,mobile,marks) VALUES('$name','$class','$section','$mobile','$marks')";
$result=mysqli_query($link,$sql);
echo "<h1> NEW  RECORD CREATED SUCCESFULLY </h1>";
mysqli_close($link);





?> 

<h1> UPDATE NAME BY ENTERING AADHAR </h1>  <h2>

<form method="get">
    <input type="text" placeholder="mobile" name="mobile1">
    
    <input type="text" placeholder="marks"   name="marks1">

    <input type="submit"> 
</form> 
 <?php 
 error_reporting(E_ERROR | E_PARSE);
 $lin=mysqli_connect("localhost","root","",'sample');
 if ($lin==false){
     die("ERROR:Could not connect".mysqli_connect_error());
 }

 $mobile1=$_GET['mobile1'];

 $marks1=$_GET['marks1'];
 echo "<br>";


$sq="UPDATE sms SET marks='$marks1' WHERE mobile='$mobile1' ";

$result=mysqli_query($lin,$sq);

echo "Name & marks updated SUCCESSFULLY";
mysqli_close($lin);



 
 ?>













<?php 
error_reporting(E_ERROR | E_PARSE); 

$link1=mysqli_connect("localhost","root","",'sample');
if ($link1==false){
    die("ERROR:Could not connect".mysqli_connect_error());
}
$sql1="SELECT * from sms";
$result1=mysqli_query($link1,$sql1);
$numrows=mysqli_num_rows($result1);
$row=mysqli_fetch_array($result1);
if($result1=mysqli_query($link1,$sql1)){
    if(mysqli_num_rows($result1)>0){
        echo "<table border=2>";
        echo "<tr>";
        echo "<th> Name </th>";
        echo "<th> Class </th>";
        echo "<th> Section </th>";
        echo "<th> Mobile </th>";
        echo "<th> Percentage </th>";
        echo "</tr>";
        while($row=mysqli_fetch_array($result1)){
            echo "<tr>";
            echo "<Td>".$row["Name"]."</td>";
            echo "<Td>".$row["class"]."</td>";
            echo "<Td>".$row["section"]."</td>";
            echo "<Td>".$row["mobile"]."</td>";
            echo "<Td>".$row["marks"]."</td>";
            echo "</tr>";
        }
    echo "</table>";
    mysqli_free_result($result1);
} 
else{
    echo "No records found";
}
}
else{
    echo "<br>SORRY!!Error".mysqli_error($link1);
}



?>









<style>


table{
    background-color:yellow;
    width:80%;
    height:50px;
    table-layout:fixed;
}

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
   top:80%;
   left:10%;
   transform:translateX(-50%,-50%);
   text-align:center;

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
    margin-left: 600px;
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