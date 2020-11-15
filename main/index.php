<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
   
    include 'links.php';
    ?>
</head>
<body >
<?php
    include 'nav.php';
  
    ?>
  <div class=" container-fluid center my-5" >
<div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/d1.jpg" class=" image_c" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="./img/d3.jpeg" class=" image_c " alt="...">
    
    </div>
    <div class="carousel-item ">
      <img src="./img/d2.jpg" class=" image_c" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="./img/d4.jpg" class=" image_c" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="./img/d5.jpg" class=" image_c" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="True"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="True"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="container">
 <div class="row ">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="thedeliveryboy";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name,image,price FROM items ORDER BY id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
  {
    // echo "id: " .. " - Name: " . $row["image"]. " " . $row["price"]. "<br>";
    ?>
             
          
          <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
            
            <div class="card" style="width: 18rem">
                <small class="card-text badge badge-primary "><span><?php echo $row["name"]?></span></small>
                <div class="card-body">
                <img src="./img/<?php echo $row["image"]?>" class="img-fluid" style="height:200px;">
                 <h6 class="card-text"> &#8377;<?php echo $row["price"]?></h6>
              <a href="#" class="btn btn-primary d-fill">addToCart</a>
                 <a href="#" class="btn btn-primary d-fill ">Buy</a>
            </div>
          </div>
          </div>

       
      
   


    <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>

 </div>
 </div>  
   
 
    
     
</body>
</html>