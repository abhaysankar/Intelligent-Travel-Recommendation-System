<?php
include("header.php");
include('connection.php');
?>


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Stay Detail</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <?php
	$sel=mysqli_query($con,"SELECT * FROM `stay` where id='$_REQUEST[id]'");
	$row=mysqli_fetch_array($sel);
	$sel1=mysqli_query($con,"SELECT * FROM `location` where id='$row[location]'");
	$row1=mysqli_fetch_array($sel1);
	
	/*$myfile = fopen("attraction_id.txt", "w") or die("Unable to open file!");
	$txt = $_REQUEST['id'];
	fwrite($myfile, $txt);
	fclose($myfile);
	
	$python = `python travel_recommendation.py`;
	//echo "<pre>".$python."</pre>";*/
	
	?>

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="admin/stay/uploads/<?php echo $row['image']  ?>" alt="">
                                
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" >Location</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $row1['name']; ?></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="<?php echo $row['link']; ?>" target="_blank"><?php echo 'Book Now'; ?></a>
                            </div>
                            <h2 class="mb-3"><?php echo $row['name']  ?></h2>
                            <p><?php echo $row['amenities']  ?></p>
                            <p>Rate: <?php echo $row['rate']  ?></p>
                            <p>Type: <?php echo $row['type']  ?></p>
                            <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo $row['rating']; ?> <small>(250)</small></h6>

                        </div>
                    </div>
                    <!-- Blog Detail End -->
    
                   
                </div>
				
				
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    

    
                    <!-- Tag Cloud -->
                </div>
			
				
				
            </div>
        </div>
    </div>
    <!-- Blog End -->



<?php
include("footer.php");
?>