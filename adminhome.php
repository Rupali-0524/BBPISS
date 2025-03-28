<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@600&family=Poppins:wght@200;300;500;600;800&display=swap');
        .outer {
            width: 1517px;
            height: 685px;
            //border: 1px solid;
            background-image: url('blockchainwallpaper.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
        }
        .leftbox {
            width: 300px;
            height: 685px;
            //border: 1px solid;
            background-color: white;
            opacity: 0.5;
        }
        .rightbox {
            flex: 1;
            height: 685px;
            border: 1px solid;
            
        }
        .leftbox ul {
            list-style-type: none;
            padding: 0;
        }
        .leftbox ul li {
            padding: 15px 30px;
            color: darkblue;
            font-size: 20px;
        }
        .leftbox ul li a {
            text-decoration: none;
            color: darkblue;
        }
        .nav {
          height:500px;
   width: 400px;
   //border: 1px solid;
   margin-left: 3px;
   margin-top: 160px;
        }
        .nav li i {
            padding: 7px;
            color: darkblue;
        }
        h1 {
            text-align: center;
          color: #fcc300;
          margin-top: 32px;
          font-family: Tw Cen MT Condensed Extra Bold;
          font-size: 50px;
          font-weight: 900;
        }
    </style>
</head>
<body>
<div class="outer">
    <div class="leftbox">
        <div class="nav">
<ul>
    <li><i class="fa-solid fa-house"></i>&nbsp<a href="adminhome.php"><strong>Home</strong></a></li>
   <li><i class="fa-solid fa-user-tie"></i>&nbsp<a href="adminloginpage.php"><strong>Admin</strong></a></li>
    <li><i class="fa-solid fa-users"></i>&nbsp<a href="#"><b>Users</b></a></li>
    <li><i class="fa-solid fa-right-from-bracket"></i>&nbsp<a href="adminhome.php"><b>Logout</b></a></li>
</ul>
    </div>
    </div>
    <div class="rightbox">
        <h1>Blockchain Based Personal Identity Security System</h1>
    </div>
</div>
</body>
</html>
