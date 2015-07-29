<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>SHOPYOURWAY</title>
<h4>
<?php
echo "Welcome"."   ".$_SESSION['name'];?></h4>
<a href="http://localhost/logout.php">logout </a>
<a href="http://localhost/cartlist.php">View your cart</a>
  <link rel="stylesheet" type="text/css" href="http://localhost/products.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<h1 class="jumbotron">LAPTOPS</h1>   
<div class="row">
    <div class="col-md-3">
      <div class="drop">
        <img src="http://localhost/images/addcart1.jpeg" height="250" width="220" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px"> 
          <ul class="menu">
            <li><h2 class="pj">Dell Inspiron 3551 Notebook</h2></li>
            <li><h3 class="pj">Rs. 19999 only</h3></li>
     	<a href="http://localhost/spec1.html"> VIEW SPECIFICATIONS </a>      
         </ul>
         <form action="http://localhost/addtocart/addtocart1.php" method='post'>
		Quantity:<input type="number" max="10" min="1" name="quan" >
		<input type="submit" name="submit" value="Buy now">		
	</form>
     </div>
  </div>

  <div class="col-md-3">
    <div class="drop">
      <img src="http://localhost/images/addcart2.jpeg" height="250" width="220" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px"> 
         <ul class="menu" role="menu">
           <li><h2 class="pj">HP 15-ac042TU (Notebook)</h2></li>
           <li><h3 class="pj">Rs.26999 only</h3></li>
           <a href="http://localhost/spec2.html"> VIEW SPECIFICATIONS </a>
       </ul>
	 <form action="http://localhost/addtocart/addtocart2.php"method='post'>
		Quantity:<input type="number" max="10" min="1" name="quan" >
		<input type="submit" name="submit" class="Buy" value="Buy now">		
	</form>
    </div>
  </div>
  <div class="col-md-3">
    <div class="drop">
    <img src="http://localhost/images/addcart3.jpeg" height="250" width="220" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px"> 
         <ul class="menu">
           <li><h2 class="pj"> HP Pavilion 15-ab032TX (Notebook)</h2></li>
           <li><h3 class="pj">Rs. 53999 only</h3></li>
  <a href="http://localhost/spec3.html"> VIEW SPECIFICATIONS </a>
 
         </ul>
	 <form action="http://localhost/addtocart/addtocart3.php" method='post'>
		Quantity:<input type="number" max="10" min="1" name="quan" >
		<input type="submit" name="submit" value="Buy now">		
	</form>
    </div>
 </div>   
  <div class="col-md-3">
    <div class="drop">
      <img src="http://localhost/images/addcart4.jpeg" height="250" width="220" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px"> 
         <ul class="menu">
           <li><h2 class="pj">Lenovo G50-70 Notebook</h2></li>
           <li><h3 class="pj">Rs. 27999</h3></li>
 <a href="http://localhost/spec4.html"> VIEW SPECIFICATIONS </a>

         </ul>
	 <form action= "http://localhost/addtocart/addtocart4.php" method='post'>
		Quantity:<input type="number" max="10" min="1" name="quan" >
		<input type="submit" name="submit" value="Buy now">		
	</form>
    </div>
  </div>
</div>
<!--End of first row -->
<!-- Shoes -->
<br><br>
<h1 class="jumbotron">SHOES</h1>
<div class="row">
   <div class="col-md-3">
      <img src="http://localhost/images/addcart5.jpeg" height="225" width="225" style="margin:10px">
        <div class="drop">
         <li><h2 class="pj">Puma Cat Runner Running Shoes</h2></li>
            <li><h3 class="pj">Rs. 3999</h3></li>
            <a href="http://localhost/spec5.html"> VIEW SPECIFICATIONS </a>
</ul>
		 <form action="http://localhost/addtocart/addtocart5.php" method='post'>
		Quantity:<input type="number" max="10" min="1" name="quan" >
		<input type="submit" name="submit" value="Buy now">		
	</form>
     </div> 
  </div>
  <div class="col-md-3">
    <img src="http://localhost/images/addcart6.jpeg" height="225" width="225" style="margin:10px">
      <div class="drop">
          <ul class="menu">
            <li><h2 class="pj">Adidas Altros 1.0 M Running Shoes</h2></li>
            <li><h3 class="pj">Rs. 1499</h3></li>
<a href="http://localhost/spec6.html"> VIEW SPECIFICATIONS </a>
 </ul>
		<form action="http://localhost/addtocart/addtocart6.php" method='post'>
		Quantity:<input type="number" max="10" min="1" name="quan" >
		<input type="submit" name="submit" value="Buy now">		
	</form>
     </div> 
  </div>
  <div class="col-md-3">
    <img src="http://localhost/images/addcart7.jpeg" height="225" width="225" style="margin:10px">
      <div class="drop">
       
            <li><h2 class="pj">Reebok Speedy Runner Lp Running Shoes</h2></li>
            <li><h3 class="pj">Rs. 2148</h3></li>
                  <a href="http://localhost/spec7.html"> VIEW SPECIFICATIONS </a>
          </ul>
			 <form action="http://localhost/addtocart/addtocart7.php" method='post'>
		Quantity:<input type="number" max="10" min="1" name="quan" >
		<input type="submit" name="submit" value="Buy now">		
	</form>
     </div> 
  </div>
  <div class="col-md-3">
    <img src="http://localhost/images/addcart8.jpeg" height="225" width="225" style="margin:10px">
     <div class="drop">
           <li><h2 class="pj">Columbus Tab-0115 Running Shoes</h2></li>
           <li><h3 class="pj">Rs. 499</h3></li>
                        <a href="http://localhost/spec8.html"> VIEW SPECIFICATIONS </a>
         </ul>
		 <form action="http://localhost/addtocart/addtocart8.php" method='post'>
		Quantity:<input type="number" max="10" min="1" name="quan" >
		<input type="submit" name="submit" value="Buy now">		
	</form>
     </div> 
 </div>
</div>

<div class="footer">
   <h4>SHOPYOURWAY © 2015 All Rights Reserved</h4>  
</div>
</body>
</html>
