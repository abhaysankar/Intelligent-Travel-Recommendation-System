<!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Attraction</h6>
                <h1>Explore Top Attraction</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
			<?php
			$sel=mysqli_query($con,"SELECT * FROM `attraction` where location='$_REQUEST[loc]'");
			//echo $sel;
			while($row=mysqli_fetch_array($sel))
			{
			$sel1=mysqli_query($con,"SELECT * FROM `location` where id='$row[location]'");
			$row1=mysqli_fetch_array($sel1);
			?>
                <a href="attraction.php?id=<?php echo $row['id'];?>&loc=<?php echo $_REQUEST['id'];?>">
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