
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




<marquee> 
    
Register yourself as a <span style="color:red; font-weight:bold" > Donor </span> Now just by filling up the form!  <a href="donor.php">Click Here </a>  to register as a donor!


</marquee> <br>
                    
<p class="what">
       Hello ! Welcome to this Website! This is a website where you can get detailed information about <span style="color:red" font-size="x-large">BLOOD DONATION. </span> 

 This is a WEBSITE whose main aim is to <span style="color:limegreen" font-size="xx-large" >  SAVE LIVES! </span> <br>
 This webiste gives E-information about process of Blood Donation, and also about BEFORE and AFTER BLood Donation.
 <br> It's main purpose is to store the details of willing donors in a database. It also stores the details of the recipients who require blood.<br>
 These Details are sent to the blood banks who may then contact the donors(and the receipients once a suitable donor is available)! <br> <br>


</p> 
<h1 class="om"> WHAT IS <span style="color:red"> BLOOD DONATION </span>? </h1> 
<p class="what"> 

A blood donation occurs when a person voluntarily has blood drawn and
used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole blood components).
 Donation may be of whole blood, or of specific components directly (apheresis). 
 Most blood donors are unpaid volunteers who donate blood for a community supply. <span style="color:red"> Blood Donation </span>not only saves
 someone's life but also replenishes blood in our body and protects us from Fatal Diseases! </p>

 <img src="bd.png" >



 <br>

 <div class="image"> <img id="first" src="bloodimg.jpg" width=500px height=500px>
        <img id ="second" src="hand.jpg" width=500px height=500px> 
</div>


        <br> 

<h1 class="om"> NEED FOR <span style="color:red"> BLOOD DONATION </span> </h1> <br>
<p class="need"> 
The reason to donate is simple…it helps save lives. In fact, every two seconds of every day, someone needs blood.
 Since blood cannot be manufactured outside the body and has a limited shelf life,
  the supply must constantly be replenished by generous blood donors.



  There are many reasons patients need blood. A common misunderstanding about blood usage is that accident victims are the patients who use the most blood.
   Actually, people needing the most blood include those: <br>  <br>

1)Being treated for cancer <br> 
2)Undergoing orthopedic surgeries<br> 
3)Undergoing cardiovascular surgeries<br> 
4)Being treated for inherited blood disorders

</p>
<img src="need.png" >


<h1 class="om"> WHAT IS A <span style="color:red"> BLOOD BANK </span> ?</h1> <br>

<p class="bank"> 
Blood bank is a place where blood is collected and stored before it is used for transfusions.
 Blood banking takes place in the lab. This is to make sure that donated blood and blood products are safe before they are used.
 Blood banking also determines the blood type. The blood is also tested for infectious diseases.  <br> <br>


 Tests such as Typing, Screening,Rh Typing, Seeing whether the blood has got any infections are the tests done by the blood bank.
 They are also responsible for:-  <br>
 1)Rapid response to urgent requests for blood components. <br>
2)Checking pre-transfusion samples and requests. <br>
3)Assessing of immunological compatibility between donor and patient. <br>
4)Selecting of suitable blood component for each clinical condition. <br>
5)Safe delivery and handling of blood components. <br>

<p>
<img src="bank.gif"  width=400px height=400px;>
<h1 class="lsa"> THERE are more than 2000 Blood Banks in India. 
    For ease of access to the location of Each Blood bank, the location of almost all blood banks are given below for Reference.
<br> <br> 
 <div class="iframe">
    <iframe src="https://shiny.rstudio.com/gallery/india-blood-banks.html" width=100% height=700px;> </iframe>
    </div>
    

    <h1 class="lsa"> <u> MAIN PURPOSE OF <span style="color:Red ;font-size:xx-large; font-weight:bold;">LSA </span>BLOOD DONATION MANAGEMENT SYSTEM </u></H1>
   
    <p class="purpose"> <span style="color:Red ;font-size:xx-large; font-weight:bold;">LSA </span>Blood donation management system is mainly designed to save lives. It manages the record of 
    Donors and recipients and sends these details to Blood Banks.  It also gives General and necessary information about 
    blood donation and its process, pre requisites , and its aftemath , which is very useful to create awareness about Blood
    Donation and create more and more donors which would eventually help save more Lives, and also replenish the blood of donors 
    and prevent them from developing a major disease such as cancer.  </p>
    <h3>
    As it has records of donors and recipients , It can be used to find Stolen phones too :)! 
    </h3>
<br>
    <h1 class="end"> 
Let's Promise that we'll donate blood and create awareness about Blood Donation and save many lives!
    </h1>









<style> 
h3{
    color:yellow;
    background-color:black;
}
</style>

<div id="donate">
                <img src="Donate.jfif" width=500px; height=500px background="cover" >
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


        <footer>
            <h4> WEBSITE BY LS AAKASH <br>
                &#169; Atmajitsinh(shiny)
                &#169; WHO  <br>
                &#169; NBTC

                &#169; Indian Red Cross

</footer>
</body>
</html>



<style>
    body{
        border: 3px solid red;
    }

    .image{
        margin-left:500px;
    }
 #first{
  position:absolute;
  display:inline-block;

  

}
  #second{
    position:relative;
    top:0;
    left:0;
transition:linear;
    animation: an 7s infinite;
    transition-timing-function: ease-in-out;
  }
  @keyframes an {
    0% {opacity: 1}
    45%{opacity:1}
    55%{
      opacity:0
    }
    
    
    100% {opacity:0}
}
.nav-list{
    background-color:yellow;
}

</style>

