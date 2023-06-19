<?php
include("header.php");
include('connection.php');
?>

<style>
a:link {
  text-decoration: none;
}
.jus{
 text-align: justify;
 text-justify: inter-word;	
}
</style>

<?php
$sel1=mysqli_query($con,"SELECT * FROM `location` where id='$_REQUEST[to]'");
$row11=mysqli_fetch_array($sel1);
$b=$_REQUEST['Budget'];
$d=$_REQUEST['Duration'];
$total=$b/$d;
$v=round($total);
//$sel=mysqli_query($con,"SELECT * FROM `attraction` where location='$_REQUEST[loc]'");
//echo "SELECT * FROM `attraction` where location='$_REQUEST[loc]'";
$sel11=mysqli_query($con,"SELECT * FROM `attraction` where location='$_REQUEST[from]'OR location='$_REQUEST[to]'  ");
//echo "SELECT * FROM `attraction` where location='$_REQUEST[from]' and location='$_REQUEST[to]'";
?>

    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Location-<?php echo $row11['name'];?> | Budget -<?php echo $_REQUEST['Budget'];  ?> 
                <h1>Pefect Stay Packages</h1>
            </div>
            <div class="row">
			<?php
			//echo $_REQUEST['loc'];
			$sel=mysqli_query($con,"SELECT * FROM `stay` where location='$_REQUEST[to]' and rate<=$b ORDER BY rating DESC" );
			//echo "SELECT * FROM `stay` where location='$_REQUEST[to]'and rate<=$v  ORDER BY rating DESC" ;
			while($row=mysqli_fetch_array($sel))
			{
			$sel1=mysqli_query($con,"SELECT * FROM `location` where id='$row[location]'");
			$row1=mysqli_fetch_array($sel1);
			?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" style='height:200px; width:400px;' src="admin/stay/uploads/<?php echo $row['image']; ?>" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>
								<?php echo $row['amenities']; ?><?php echo $row1['amenities']; ?></small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>Type:<?php echo $row['type']; ?></small>
                            </div>
                            <a class="h5 text-decoration-none" href="stay_single.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo $row['rating']; ?> <small>(250)</small></h6>
                                    <h5 class="m-0">₹<?php echo $row['rate']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
				}
				?>
               
                
              
            </div>
        </div>
    </div>
    <!-- Packages End -->


    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Attraction</h6>
                <h1>Explore Top Attraction</h1>
            </div>
            <div class="row">
			<?php
			$sel=mysqli_query($con,"SELECT `id`, `name`, `location`, `image`, CONCAT(SUBSTRING_INDEX(`description`, ' ', 40), '...') AS cc FROM `attraction` where location='$_REQUEST[to]'");
			//echo $sel;
			while($row=mysqli_fetch_array($sel))
			{
			$sel1=mysqli_query($con,"SELECT * FROM `location` where id='$row[location]' ");
			$row1=mysqli_fetch_array($sel1);
			?>
                
				<div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" style='height:200px; width:400px;' src="admin/attraction/uploads/<?php echo $row['image']; ?>" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>
								<?php echo $row['name']; ?></small>
                            </div>
                            <a href="attraction.php?id=<?php echo $row['id'];?>&loc=<?php echo $_REQUEST['id'];?>">
							<div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mt-5 jus"><?php echo $row['cc']  ?>
                                    
                                </div>
                            </div>
							</a>
                        </div>
                    </div>
                </div>
				
                <?php
				}
				?>
               
                
              
            </div>
        </div>
    </div>
    <!-- Packages End -->






    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Restaurant</h6>
                <h1>Explore Top Restaurant</h1>
            </div>
            <div class="row pb-3">
				<?php
			
			$sel=mysqli_query($con,"SELECT * FROM `restaurant` where location='$_REQUEST[to]'");
			while($row=mysqli_fetch_array($sel))
			{
			$sel1=mysqli_query($con,"SELECT * FROM `location` where id='$row[location]'");
			$row1=mysqli_fetch_array($sel1);
			?>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" style="width: 400px; height: 200px;" src="admin/restaurant/uploads/<?php echo $row['image'];?>" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1"></h6>
                                <small class="text-white text-uppercase"></small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $row1['name'];?></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $row['phone'];?></a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href=""><?php echo $row['name'];?></a>
                        </div>
                    </div>
                </div>
              <?php
			  
				}
			  ?>
           
            </div>
			
			<center><a href='itinerary.php' class='btn btn-danger'>Generate Itinerary</a></center>
        </div>
    </div>
	
	
    <!-- Blog End -->


    


<?php
//include("footer.php");
?>