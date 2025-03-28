<html>
    <head>
    <title>Admin login page</title> 
    <style>
     #outer
     {
        height: 600px;
        width: 1330px;
        border: 1px solid;
        background-image: url('blockchainwallpaper.jpg');
            background-repeat: no-repeat;
            background-size: cover;
     }   
     #first
     {
        height: 600px;
        width: 330px;
        //border: 1px solid;
        float: left;
        background-color: white;
            opacity: 0.5;
     }
     .nav{
      width: 200px;
      height: 500px;
      margin: 0px auto;
      margin-top: 100px;
     }
     #second
     {
        height: 600px;
        width: 1000px;
        //border: 1px solid;
        float: left;
       
     }
     #second h1
     {
        margin-left: 120px;
     }
     #second h2
     {
        margin-left: 400px;
     }
    #first ul 
     {
        list-style-type: none;
     }
    #first ul li{
        padding: 20px;
     }
    #first ul li a
     {
        text-decoration: none;
        color: black;
        font-weight: bold;
     }
     .box
     {
        height: 250px;
        width: 350px;
       // border: 2px solid;
        margin-left: 350px;
     }
     button{
      border: blue;
      border-radius: 50px; 
      background-color: blue;
       margin-left: 50px; 
       margin-top: 50px; 
       color: aliceblue;
        width: 200px; 
        height: 25px;
        font-size: large;  
     }
     button a{
      text-decoration: none;
     }
    </style>   
        </head>
        <body>
        <div id="outer">
        <div id="first">
               <div class="nav">
                  <ul>
                <li><a href="">HOME</li>
                    <li><a href="">ADMIN</a>
                        <li><a href="">USER</li>
                            <li><a href="">LOGOUT</li>
               </ul>
               </div>
            </div>
        <div id="second"><br>
        <h1>Blockchain Based Personal Identity Security System</h1><br><br>
        <h2>Admin Login Page</h2>
        <div class="box">
            <table>
         <form>
           <tr>
            <th>Username:
               <td><input type="text" placeholder="name"></td>
               </th>
            </tr>
            <tr>
               <th>Password:
                  <td><input type="Password" placeholder="password"></td>
                  </th>
               </tr>
            </form>
        </table>
        <button type="submit" name="submit"><a href="adminnavbar.php">Login</a></button>
            
        </div>
        </div> 
        </div>
        </body>
    </html>