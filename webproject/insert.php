<!DOCTYPE html>
<html>

<head>
	<title>Insert page</title>
     <link rel="stylesheet" type="text/css" href="cssweb.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <style type="text/css">



.previous {
  color: black;
  margin: 0;
  position: absolute;
  top: 70%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
     </style>
</head>



<body>
<header>
    <div id= "div1"><!--first div containt the logo and  text -->
        <img src="four.png" alt="Four logo" width="170" height="170" >
        <p>Laxury Hotel</p>
    </div>
    <nav id ="nav2"><!--navigation links, toشments.  -->
        <a class="active" href="home.html">Home</a>
        <a href="Accommodation.html">Accommodation</a>
        <a href="aboutus.html">About Us</a>
        <a href="contactus.html">Contact Us</a>
    </nav>



</header>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "project");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
        $guestname = $_POST[ "guestname" ] ;
        $guestemail = $_POST[ "guestemail" ] ;
        $guestelephone = $_POST[ "guestelephone" ] ;
        $adults = $_POST[ "adults" ] ;
        $children = $_POST[ "children" ] ;
        $checkin = $_POST[ "checkin" ] ;
        $checkout = $_POST[ "checkout" ] ;
        $comment = $_POST[ "comment" ] ;
    
		
		// Performing insert query execution
		// here our table name is college
		$sql = "insert into book (guestname, guestemail, guestelephone, adults, children,checkin,checkout, comment) VALUES ( '$guestname', '$guestemail','$guestelephone' , '$adults', '$children','$checkin', '$checkout','$comment' )"; 

		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. "  "
				. " </h3>";
                

			echo nl2br("\n$guestname\n $guestemail\n "
            . "$guestelephone\n"
            . "$adults\n"
            . "$children\n"
            . "$checkin\n"
            . "$checkout\n"
            . "$comment\n");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
   
    <div class= "previous">
    <a href="Book.html"><button class="button">Back to Booking</button></a>
    </div>
</body>

</html>
