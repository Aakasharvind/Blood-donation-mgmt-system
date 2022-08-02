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
    <link href="new1.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div ckass="container">
        <div class="banner">
            <div class="logo">
                <a href="#"><img src="blood.jfif" width=90px  height=90px ></a> </div>
            
            <div class="heading"> 
                <h1> LSA Blood Donation Management System </h1>  </div>

            <div class="ad"> 
            <p class="ses">Welcome, <?php echo $_SESSION['name'].'!'; ?>   <br>  <p class="ses"> <a href="project.php">Logout </a> </p> <br>  </p> 
            <br>
           

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



                    

<h1 > <span style="color:blue;background-color:white;margin-left:350px;"> DONORS WHO HAVE REGISTERED </span></h1>
                    <?php 
error_reporting(E_ERROR | E_PARSE); 

$link=mysqli_connect("localhost","root","",'project');
if ($link==false){
    die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="SELECT * from donor";
$result=mysqli_query($link,$sql);
$numrows=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($result=mysqli_query($link,$sql)){
    if(mysqli_num_rows($result)>0){
        echo "<table border=2>";
        echo "<tr>";
        echo "<th> Name </th>";
        echo "<th> Gender</th>";
        echo "<th> Age </th>";
        echo "<th> BloodGroup </th>";
        echo "<th> Email  </th>";
        echo "<th> Weight </th>";
        echo "<th> Disease</th>";
        echo "<th> Tablets </th>";
        echo "<th> Phone </th>";
        echo "<th> Country </th>";
        echo "<th> State</th>";
        echo "<th> District </th>";
        echo "<th> Area </th>"; 
        echo "<th> agree </th>";
        echo "</tr>";
        while($row=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<Td>".$row["Donor_name"]."</td>";
            echo "<Td>".$row["Gender"]."</td>";
            echo "<Td>".$row["Age"]."</td>";
            echo "<Td>".$row["blood"]."</td>";
            echo "<Td>".$row["Email"]."</td>";
            echo "<Td>".$row["Weight"]."</td>";
            echo "<Td>".$row["Disease"]."</td>";
            echo "<Td>".$row["Tablets"]."</td>";
            echo "<Td>".$row["donor_phone"]."</td>";
            echo "<Td>".$row["Country"]."</td>";
            echo "<Td>".$row["State"]."</td>";
            echo "<Td>".$row["District"]."</td>";
            echo "<Td>".$row["Area"]."</td>";
            echo "<Td>".$row["agree"]."</td>";

            echo "</tr>";
        }
    echo "</table>";
    mysqli_free_result($result);
} 
else{
    echo "No records found";
}
}
else{
    echo "<br>SORRY!!Error".mysqli_error($link);
}



?>
<style>

table{
    background-color:red;
   
    width:90%;
    height:200px;
    font-size:x-large;
    color:white;
    
    
}
table th{
    background-color:lime;
    font-size:xx-large;
    color:black;
}
table tr:nth-child(odd){
    background-color:yellow;
    color:Blue;
}
</style>
<br>
<h1 > <span style="color:blue;background-color:white;margin-left:350px;"> RECIPIENTS WHO HAVE REGISTERED </span></h1>

<?php 
error_reporting(E_ERROR | E_PARSE); 

$link2=mysqli_connect("localhost","root","",'project');
if ($link2==false){
    die("ERROR:Could not connect".mysqli_connect_error());
}
$sql2="SELECT * from recepient";
$result2=mysqli_query($link2,$sql2);
$numrows2=mysqli_num_rows($result2);
$row2=mysqli_fetch_array($result2);
if($result2=mysqli_query($link2,$sql2)){
    if(mysqli_num_rows($result2)>0){
        echo "<table border=2>";
        echo "<tr>";
        echo "<th> Name </th>";
        echo "<th> Gender</th>";
        echo "<th> Age </th>";
        echo "<th> Email  </th>";
        echo "<th> Bloodgroup </th>";
        echo "<th> Quantity </th>";

       
        echo "<th> Phone </th>";
        echo "<th> Country </th>";
        echo "<th> State</th>";
        echo "<th> District </th>";
        echo "<th> Area </th>"; 
        echo "<th> robot  </th>";
        echo "</tr>";
        while($row2=mysqli_fetch_array($result2)){
            echo "<tr>";
            echo "<Td>".$row2["name"]."</td>";
            echo "<Td>".$row2["gender"]."</td>";
            echo "<Td>".$row2["age"]."</td>";
            echo "<Td>".$row2["email"]."</td>";
            echo "<Td>".$row2["bloodgroup"]."</td>";
            echo "<Td>".$row2["quantity"]."</td>";
          
            echo "<Td>".$row2["mobile"]."</td>";
            echo "<Td>".$row2["country"]."</td>";
            echo "<Td>".$row2["state"]."</td>";
            echo "<Td>".$row2["district"]."</td>";
            echo "<Td>".$row2["area"]."</td>";
            echo "<Td>".$row2["robot"]."</td>";

            echo "</tr>";
        }
    echo "</table>";
    mysqli_free_result($result2);
} 
else{
    echo "No records found";
}
}
else{
    echo "<br>SORRY!!Error".mysqli_error($link2);
}



?>

<h1 > <span style="color:blue;background-color:white;margin-left:350px;"> UPDATE AND DELETE DONOR DETAILS </span></h1>

<h2> <span style="margin-left:100px;"> Update Donor Details </h2>
<form method="get">

<input type="text" class="form-input" placeholder="Mobile Number" maxlength="10" name="mobile1"required> <Br> 
<input type="text" class="form-input" placeholder=" Blood Group" maxlength="10"required name="blood1">  <Br> <Br>
<input type="submit" value="Submit " class="button"> 
</form>




<?php 
 error_reporting(E_ERROR | E_PARSE);
 $lin1=mysqli_connect("localhost","root","",'project');
 if ($lin1==false){
     die("ERROR:Could not connect".mysqli_connect_error());
 }

 $mobile1=$_GET['mobile1'];

 $blood1=$_GET['blood1'];
 echo "<br>";


$sq="UPDATE donor SET blood ='$blood1' WHERE donor_phone='$mobile1' ";

$result=mysqli_query($lin1,$sq);


mysqli_close($lin1);



 
 ?>





<h2> <span style="margin-left:100px;"> Delete Donor Record </h2>
<form method="post">

<input type="text" class="form-input" placeholder="Mobile Number" maxlength="10" name="mobile2"required> <Br>  <Br> <Br>
<input type="submit" value="Submit " class="button"> 
</form>




<?php 
 error_reporting(E_ERROR | E_PARSE);
 $lin2=mysqli_connect("localhost","root","",'project');
 if ($lin2==false){
     die("ERROR:Could not connect".mysqli_connect_error());
 }

 $mobile2=$_POST['mobile2'];


 echo "<br>";


$sq1="DELETE from donor WHERE donor_phone='$mobile2' ";

$result2=mysqli_query($lin2,$sq1);


mysqli_close($lin2);



 
 ?>























<br> <br> <br>

<h1 > <span style="color:blue;background-color:white;margin-left:350px;"> UPDATE AND DELETE RECIPIENT DETAILS </span></h1>

<h2> <span style="margin-left:100px;"> Update Recipient Details </h2>
<form method="get">

<input type="text" class="form-input" placeholder="Mobile Number" maxlength="10" name="mobile3"required> <Br> 
<input type="text" class="form-input" placeholder=" Blood Group" maxlength="10"required name="blood3">  <Br> <Br>
<input type="submit" value="Submit " class="button"> 
</form>




<?php 
 error_reporting(E_ERROR | E_PARSE);
 $lin3=mysqli_connect("localhost","root","",'project');
 if ($lin3==false){
     die("ERROR:Could not connect".mysqli_connect_error());
 }

 $mobile3=$_GET['mobile3'];

 $blood3=$_GET['blood3'];
 echo "<br>";


$sq3="UPDATE recepient SET bloodgroup ='$blood3' WHERE mobile='$mobile3' ";

$result3=mysqli_query($lin3,$sq3);


mysqli_close($lin3);



 
 ?>





<h2> <span style="margin-left:100px;"> Delete Recipient Record </h2>
<form method="post">

<input type="text" class="form-input" placeholder="Mobile Number" maxlength="10" name="mobile4"required> <Br>  <Br> <Br>
<input type="submit" value="Submit " class="button"> 
</form>




<?php 
 error_reporting(E_ERROR | E_PARSE);
 $lin4=mysqli_connect("localhost","root","",'project');
 if ($lin4==false){
     die("ERROR:Could not connect".mysqli_connect_error());
 }

 $mobile4=$_POST['mobile4'];


 echo "<br>";


$sq4="DELETE from recepient WHERE mobile='$mobile4' ";

$result4=mysqli_query($lin4,$sq4);


mysqli_close($lin4);



 
 ?>







<style>

.button{
    margin-left:120px;
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
</style>


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
                <footer>
            <h4> WEBSITE BY LS AAKASH <br>
                &#169; Atmajitsinh(shiny)
                &#169; WHO  <br>
                &#169; NBTC

                &#169; Indian Red Cross

</footer>