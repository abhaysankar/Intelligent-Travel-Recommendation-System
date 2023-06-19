<?php
include("header1.php");
?>

    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Let's Discover The World Together</h1>
                            <a href="login.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
                            <a href="login.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                        <p>At WanderPlan, we are passionate about crafting unforgettable travel experiences. Our itinerary creation platform combines expert knowledge and cutting-edge technology to design personalized travel plans that suit your preferences and interests. Let us take the hassle out of planning so you can focus on creating lifelong memories.</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-2.jpg" alt="">
                            </div>
                        </div>
                        <a href="" class="btn btn-primary mt-1">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>What Our Clients Says</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <?php
				include('connection.php');
				$sel=mysqli_query($con,"SELECT * FROM `feedback`");
				
				while($row=mysqli_fetch_array($sel))
				{
					$sel1=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$row[user_id]'");
					$row1=mysqli_fetch_array($sel1);
					//echo "SELECT * FROM `user` WHERE `id`='$row[user_id]'"
				?>
				<div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="uploads/<?php echo $row1['image']; ?>" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5"><?php echo $row['review']; ?>
                        </p>
						<span>Rating: <?php echo $row['rating']; ?>/5</span><br>
						<span><?php echo $row['date']; ?></span>
                        <h5 class="text-truncate"><?php echo $row1['name']; ?></h5>
                    </div>
                </div>
				<?php
				}
				?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    


<?php
include("footer.php");
?>