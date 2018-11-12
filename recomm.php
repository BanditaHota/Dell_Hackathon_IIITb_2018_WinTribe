<?php
   require "db_config/config.php";
   
   ?>


<html>
    <head>
      <title>Laptops</title>
      <link rel="stylesheet" href="laptop.css">
      <link rel="stylesheet" href="recomm.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body style="background-color:silver">
        <div class="header" id="main-header">
        <img src="images/icon.png" alt="logo" />
         <div id="logo">
         
            <span id="ist">Lappy</span><span id="iist">Place.com</span>

        </div>
          
     <div id="search">
    <form action="">
        <input class="search-area" type="text" name="text" placeholder="Search here">
        <input class="search-btn" type="submit" name="submit" value="SEARCH">

        <div id="user-menu">
    <li><a href="cart.php">Cart</a></li>
    <li><a href="web_home3.php">LogOut</a></li>
</div>

        </form>   

</div>

</div>

<div class="container">
    <div id="heading-block">
    <h3>Products recommended for you:</h3>
</div>

<div class="container-fluid image-reck" >

<?php
$query="select product.name,product.price,product.image from product inner join registered_users on product.id=registered_users.id and product.type=registered_users.ptype ";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){

    echo '<div class="image-reck">';
    echo 
	'<img src="data:image/jpeg;base64,'.base64_encode($row["image"]).'" height="150px" width="150px"/> ';
    echo "<h6><strong>Rs. ".$row['price']."</strong><h6>"; 
    echo '</div>';  
}
mysqli_close($con);
?>

</div>
    </body>

</html>