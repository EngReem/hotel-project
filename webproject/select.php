<?php
 
 // Username is root
 $user = 'root';
 $password = '';
  
 // Database name is gfg
 $database = 'project';
  
 // Server is localhost with
 // port number 3308
 $servername='localhost';
 $mysqli = new mysqli($servername, $user,
                 $password, $database);
  
 // Checking for connections
 if ($mysqli->connect_error) {
     die('Connect Error (' .
     $mysqli->connect_errno . ') '.
     $mysqli->connect_error);
 }
  
 // SQL query to select data from database
 $sql = "SELECT * FROM book";
 $result = $mysqli-> query($sql);
 $mysqli->close();
 ?>
 <!DOCTYPE html>
 
 <html lang="en">
  
 <head>
     <meta charset="UTF-8">
     <title>book Details</title>
     <link rel="stylesheet" type="text/css" href="cssweb.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <style>
        .mytb{
  margin: 0 auto;
  font-size: large;
  border: 1px solid black;
}

#h1 {
  text-align: center;
  color: black;
  font-size: xx-large;
  font-family: 'Gill Sans', 'Gill Sans MT',
  ' Calibri', 'Trebuchet MS', 'sans-serif';
}

.mytb td {
  border: 1px solid black;
  background-color: #ffcc00;

}

.mytb th, td {
  font-weight: bold;
  border: 1px solid black;
  padding: 10px;
  text-align: center;
}

.mytb td {
  font-weight: lighter;
}
    </style>
    </head>

  <body>
  <header>
    <div id= "div1"><!--first div containt the logo and  text -->
        <img src="four.png" alt="Four logo" width="170" height="170" >
        <p>Laxury Hotel</p>
    </div>
    <nav id ="nav2"><!--navigation links, toØ´ments.  -->
        <a class="active" href="home.html">Home</a>
        <a href="Accommodation.html">Accommodation</a>
        <a href="aboutus.html">About Us</a>
        <a href="contactus.html">Contact Us</a>
    </nav>



</header>

     <section>
     <h1 id=h1 >Booking Details</h1>
         <!-- TABLE CONSTRUCTION-->
         <table class="mytb">
             <tr>
                 
                 <th>Guest name</th>
                 <th>Guest email</th>
                 <th>Guest telephone</th>
                 <th>Number of Adults</th>
                 <th>Number of children</th>
                 <th>Check in Date</th>
                 <th>check Out Date</th>
                 <th>Comment</th>

                </tr>

             <!-- PHP CODE TO FETCH DATA FROM ROWS-->
             <?php   // LOOP TILL END OF DATA
                 while($rows=$result->fetch_assoc())
                 {
              ?>
             <tr>
                 <!--FETCHING DATA FROM EACH
                     ROW OF EVERY COLUMN-->
                
                 <td><?php echo $rows['guestname'];?></td>
                 <td><?php echo $rows['guestemail'];?></td>
                 <td><?php echo $rows['guestelephone'];?></td>
                 <td><?php echo $rows['adults'];?></td>
                 <td><?php echo $rows['children'];?></td>
                 <td><?php echo $rows['checkin'];?></td>
                 <td><?php echo $rows['checkout'];?></td>
                 <td><?php echo $rows['comment'];?></td>
                </tr>
             <?php
                 }
              ?>
         </table>
     </section>
 </body>
  
 </html>






