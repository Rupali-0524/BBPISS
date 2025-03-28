<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <style type="text/css">
      .outer{
        width: 1517px;
        height: 717px;
       // border: 1px solid;
       background-image: url('blockchainwallpaper.jpg');
             background-repeat: no-repeat;
             background-size: cover;

      }
      .left{
        width: 324px;
        height: 717px;
        //border: 1px solid;
        float: left ;
         background-color: white;
        opacity: 0.5;
      }

      .right{
        width: 1190px;
        height: 717px;
        border: 1px solid;
        float: left;
       
      }
      .nav{
        width: 300px;
        height: 300px;
        margin: 0px auto;
        margin-top: 120px;
      }
      .nav ul li{
        list-style-type: none;
        padding: 10px;
        font-size: 20px;
        font-family: Andalus;
      }
      a{
        text-decoration: none;
          color: darkblue;

      }
      .table{
        width: 670px;
        height: 200px;
        margin: 0px auto;
        margin-top: 170px;
      }
      table{
                 border: 1px solid white;
                 margin: 0px auto;
        }
        h1{
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
        ul li i{
          padding: 6px;
          color: darkblue;
        }
        th
        {
          color: #fcc300;
        }
    </style>
  <body>
    <div class="outer">
      <div class="left">
        <div class="nav">
<ul> 
  <li><i class="fa-solid fa-house"></i><a href="adminhome.php"><b>Home</b></a></li>
  <li><i class="fa-solid fa-eye"></i><a href="viewalluser.php"><b>View all User</b></a></li>
    <li><i class="fa-solid fa-paper-plane"></i><a href="useruplaodpages.php"><b>User Uploaded Request</b></a></li>
    <li><i class="fa-solid fa-database"></i><a href="countofrequest.php"><b>Count of the User Request</b></a></li>
    <li><i class="fa-solid fa-paper-plane"></i><a href="userrequest.php"><b>User Request</b></a></li>
    <li><i class="fa-sharp fa-solid fa-file"></i><a href="#"><b>View all Files</b></a></li>
    <li><i class="fa-solid fa-list"></i><a href="attributedetails.php"><b>Attribute Details</b></a></li>
    <li><i class="fa-solid fa-chart-column"></i><a href="graph.php"><b>Graph</b></a></li>
    <li><i class="fa-solid fa-right-from-bracket"></i><a href="logout.php"><b>Logout</b></a></li>
</ul>
          
        </div>
      </div>
      <div class="right">
        <h1>Blockchain Based Personal Identity Security System</h1>
        <div class="table">
        <h2>View All User</h2>
        <br>
        
          <table border="stylesheet">
            <tr>
                         <th>ID</th>
                         <th> Name</th>
                         <th>Mail</th>   
                         <th>DOB</th>   
                         <th>Gender</th>
                         <th>Contact</th>
                         <th>Address</th>   
                         <th>Action</th>  
                         </tr>
                         <tr>
                          <td>....</td>
                          <td>.......</td>
                          <td>.......</td>
                          <td>.......</td>
                          <td>.......</td>
                          <td>.......</td>
                          <td>.......</td>
                          <td>.......</td>
                         </tr>     
          </table>
        </div>
      </div>  
    </div>
  </body> 
  </head>
</html>