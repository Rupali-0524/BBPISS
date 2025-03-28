<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
<style type="text/css">
   @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@600&family=Poppins:wght@200;300;500;600;800&display=swap');
.outer
{
width: 1517px;
            height: 717px;
            //border: 1px solid;
             background-image: url('blockchainwallpaper.jpg');
             background-repeat: no-repeat;
             background-size: cover;
}
.innerleft
{
width: 320px;
             height: 717px;;
//border: 1px solid;
float: left;

opacity: 0.5;
background: white;

}
.innerright
{
width: 1194px;
            height: 717px;
border: 1px solid;
float: left;   

}

ul{
list-style-type: none;
}
ul li{
padding: 12px 25px;
font-weight: bold;
}
ul li a{
text-decoration: none;
font-size: 20px;
font-family: Andalus;
color:darkblue;
}
ul li i{
padding: 7px;
color: darkblue;
}
.nav
{
  height:500px;
  width: 360px;
  //border: 1px solid;
  margin-left: -12px;
  margin-top: 75px;
}
h1
{
   text-align: center;
          color: #fcc300;
          margin-top: 32px;
          font-family: Tw Cen MT Condensed Extra Bold;
          font-size: 50px;
          font-weight: 900;
}
h2{
          text-align: center;
          color: white;
          margin-bottom: 40px;
          font-family: Andalus;
          font-weight: bold;
          font-size: 32px;
        }
 .buttom{
   width: 300px;
   height: 100px;
   margin: 0px auto;
   text-align: center;
   margin-top: 100px;
   font-size: 20px;
 }
 .buttom a{
   text-decoration: none;
   color: black;
 }

   </style>
</head>
<body>
<div class="outer">
<div class="innerleft">
   <div class="nav">
<ul>
   <li><i class="fa-solid fa-house"></i><a href="adminhome.php"><strong>Home</strong></a></li>
    <li><i class="fa-solid fa-eye"></i><a href="viewalluser.php"><b>View All Users</b></a></li>
    <li><i class="fa-solid fa-file-arrow-up"></i><a href="useruplaodpages.php"><b>User Uploaded Request</b></a></li>
    <li><i class="fa-solid fa-layer-group"></i><a href="countofrequest.php"><b>Count Of The User Request</b></a></li>
    <li><i class="fa-solid fa-file-arrow-up"></i><a href="userrequest.php"><b>User Request</b></a></li>
    <li><i class="fa-solid fa-file"></i><a href=""><b>View All Files</b></a></li>
    <li><i class="fa-solid fa-bars"></i><a href="attributedetails.php"><b>Attribute Details</b></a></li>
    <li><i class="fa-solid fa-chart-simple"></i><a href="graph.php"><b>Graph</b></a></li>
    <li><i class="fa-solid fa-right-from-bracket"></i><a href="adminhome.php"><b>Logout</b></a></li>
</ul>
    </div>

</div>
<div class="innerright">
<h1> Blockchain Based Personal Identity Security System</h1>
<div class="buttom">
   <h2>Graph</h2>
<a href="resultofattribute.php" style="color: #fcc300">&nbsp&nbsp&nbsp&nbsp&nbsp Result of Number of the attribute</a><br>
<a href="resultofcount.php" style="color: #fcc300">Result of Count of download</a>
</div>
</div>      
    </div>
</body>
</html>