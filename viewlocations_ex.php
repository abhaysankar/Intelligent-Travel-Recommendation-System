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


    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Pefect Stay Packages</h1>
            </div>
            <div class="row">
			<?php
			
			$sel=mysqli_query($con,"SELECT * FROM `stay` where location='$_REQUEST[id]' ORDER BY rating DESC");
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
                            <a class="h5 text-decoration-none" href="stay_single.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?>
                        </a>
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



    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Attraction</h6>
                <h1>Explore Top Attraction</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
			<?php
			
			$sel=mysqli_query($con,"SELECT * FROM `attraction` where location='$_REQUEST[id]'");
			while($row=mysqli_fetch_array($sel))
			{
			$sel1=mysqli_query($con,"SELECT * FROM `location` where id='$row[location]'");
			$row1=mysqli_fetch_array($sel1);
			$_SESSION['cc']=$row1['name'];
			?>
                <a >
				<div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="admin/attraction/uploads/<?php echo $row['image']  ?>" style="width: 277px; height: 190px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5 jus"><?php echo $row['description']  ?>
                        </p>
                        <h5 class="text-truncate"><?php echo $row['name']  ?></h5>
                        <span><?php echo $row1['name']  ?></span>
                    </div>
                </div>
				
				</a>
				
                <?php
				
					}
				?>
                
              
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Restaurant</h6>
                <h1>Explore Top Restaurant</h1>
            </div>
            <div class="row pb-3">
				<?php
			
			$sel=mysqli_query($con,"SELECT * FROM `restaurant` where location='$_REQUEST[id]'");
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
        </div>
    </div>
    <!-- Blog End -->
	
	
</form>



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">WANDER</span>PLAN</h1>
                </a>
                <p>Wanderplan: Your personalized travel itinerary creation website. Plan your dream trip effortlessly with our easy-to-use platform. Discover curated recommendations, customize your itinerary, and embark on unforgettable adventures.

</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
     
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, Whitefield, Banglore</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 8958950011</p>
                <p><i class="fa fa-envelope mr-2"></i>wanderplan@gmail.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include("footer.php");
?>