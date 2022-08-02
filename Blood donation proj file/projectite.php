<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500|Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
   
   
    <title>LSA Blood Donation Management System</title>
</head>
<body>
    
<div class="container">
    <div class="banner" id="ba">
        <h1> LSA BLOOD DONATION MANAGEMENT SYSTEM</h1>
         <a href="http://localhost/sample/project.php">Start Slideshow </a>
    </div>
</div>

        <style>

*{
    margin:0;
    padding:0;

}
.container{
    width: 100%;
    height:100vh;
   background-color: #000;
} 

.banner{
    position:absolute;
    top:35%;
    left:50%;
    transform: translateX(-50%);
    text-align:center;
    overflow:hidden;
    
}
.banner h1{
    color:#91130f;
    font-family:Georgia, 'Times New Roman', Times, serif;
    font-size:  120px;
    margin-bottom: 100px;
    border-top: 5px solid #91130f;
    border-bottom: 5px solid #91130f;
}
.banner::after{
    content: '';
    width:250%;
    height:100%;
    background: linear-gradient(to right,transparent,rgb(0, 0, 0),rgb(0, 0, 0));
    position:absolute;
    top:0;
    right:0;
    animation: bannerAnim 3s linear forwards ;
}
@keyframes bannerAnim{
    0% { right: 0}
    100%{
        right:-250%
    }

}
.banner button{
    
        width: 230px;
        padding: 10px;
        background: linear-gradient(to right, #440402, #c0120c,rgb(218, 218, 63));
        font-family: 'Dosis', sans-serif;
        font-size: 25px;
        letter-spacing: 2px;
        color: #fff;
        border: none;
        outline: none;
        border-radius: 100px;
       transform: perspective(300px) rotateY(-15deg);
       text-shadow: 6px 3px 2px rgba(0,0,0,0.4);
       cursor: pointer;
       transition: all 1s;
       animation: buttonAnim 1s 2.5s backwards;
       overflow:hidden;
}
.banner button:hover{
    transform: translateY(-4px);
    transform: perspective(300px) rotateY(15deg);
    text-shadow: -6px 3px 2px rgba(0, 0, 0, .4);
    background: linear-gradient(to left, #440402, #c0120c,rgb(218, 218, 63));
}
@keyframes buttonAnim {
    0% {opacity: 0}
    100% {opacity: 1}
}
.banner button::before{
    content:'';
    width:100%;
    height:100%;
    background: linear-gradient(to right,transparent,#fff,transparent);
    position:absolute;
    top:0%;
    left:-100%;
    transform:skewX(-30deg);
    transition: left .5s;

}
.banner button:hover::before{
    left:100%;
}

        </style>


