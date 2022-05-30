<!DOCTYPE html>
<html>
   <head>
   	 <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="cssweb.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <style type="text/css">
     *{box-sizing: border-box; /* put the body content in border- box */
     outline: none;}
button {
     width: 100%;
     height: 100%;
background-color:black;
color:white;
}
     </style>	 
<title>Accommodation</title>

<body >
<?php
ini_set('display_errors',0);
 
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
$n1 = $_REQUEST['first_value'];

 
if($operator=="1")
{
$res= $n1+ 500;
}
if($operator=="2")
{
$res= $n1+ 1000;
}
if($operator=="3")
{
$res =$n1+ 250;
}

 
if($_REQUEST['first_value']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
}
}
?>
<header>
    <div id= "div1"><!--first div containt the logo and  text -->
        <img src="four.png" alt="Four logo" width="170" height="170" >
        <p>Laxury Hotel</p>
    </div>
    <nav id ="nav2"><!--navigation links, to other documents.  -->
        <a class="active" href="home.html">Home</a>
        <a href="Accommodation.html">Accommodation</a>
        <a href="aboutus.html">About Us</a>
        <a href="contactus.html">Contact Us</a>
    </nav>



</header>
<!-- -------------------------------------------------------- -->
<h1><center>additional services<br> _______________ </center></h1>

<p><center>You can try many new and interesting experiences in our hotel at reasonable prices</center></p>

<main id="main-4">
<div id="div11"> 
	<div class="container"><!--contain all Hotel rooms  "img + info" -->
				   <div class="card"><!--Gold room -->
					<div class="pic">
					<img src="p1.jpg" class="img-fluid" alt="Gold room image" >
					</div>
					<div class= "content"><!--information and price of the room -->
					<p><strong>Personal driver
</strong></p>
<p>You can have your own chauffeur service throughout your stay in the hotel, as this helps you to spend all your work outside the hotel easily and easily.</p>

					<h4>service 1</h4>
					
				   </div> </div>
                   
				    <div class="card"><!--Signiture room -->
					<div class="pic">
					<img src="p2.jpg" class="img-fluid" alt="Signiture room image">
					</div>
					<div class= "content">	
<p><strong>City tour</strong></p>				
					<p>If you love to explore new and interesting places in our city, then you are in the right place. Hotel Four offers a wonderful plan for its visitors to introduce them every day to one of the most important landmarks in the city.</p>
					<h4>service 2</h4>


					</div>
				   </div><!--Signiture room end -->

				    <div class="card">
					<div class="pic">
					<img src="p3.jpg" class="img-fluid" alt="Suite">
					</div>
					<div class= "content">
<p><strong>Courses and lectures
</strong></p>	
					<p>The hotel is frequented by four famous speakers in all fields, in addition to the courses that are held in the conference room regularly
If you are a fan of learning about various fields of knowledge, just choose this service and you will have a great time between fun and benefit. </p>
					<h4>service 3</h4>

					</div>
				   </div>
				  
				     	            
        </div>
    </div>
</main>
<form>
<table style="border:groove #00FF99">
 
<tr>
<td style="background-color:turquoise; color:black; font-family:'Times New Roman'">Enter your room salary</td>
<td colspan="1">
<input name="first_value" type="text" style="color:red"/></td>
</tr>
 
<tr>
<td style="color:red; font-family:'Times New Roman'">Select service </td>
<td>
<select name="operator" style="width: 63px">
<option>1</option>
<option>2</option>
<option>3</option>
</select></td>
</tr>
 

 
<tr>
<td></td>
<td><input type="submit" name="calculate" value="Calculate" style="color:wheat;background-color:rosybrown" /></td>	 
</tr>
 
<tr>
<td style="background-color:turquoise;color:black">Output = </td>
<td style="color:darkblue"><?php echo $res;?></td>
</tr>	
 
</table>
</form>
<!-- -------------------------------------------------------- -->

 <!-- the footer contain the social data -->

        <footer class="footer" >
          <div class="social"  >
             <a href = "#" ><i class="fab fa-instagram"></i></a>
              <a href = "#"><i class="fab fa-snapchat"></i></a>
               <a href = "#"><i class="fab fa-twitter"></i></a>
                <a href = "#"><i class="fab fa-facebook-f"></i></a>
          </div>
          <ul> <!-- unorder list-->
           
            <li><a href="terms.html">Terms And Conditions</a></li>
           
          </ul>
        <p class="copyright">Â©FourHotel</p>
      </footer>

</body>
</html>


