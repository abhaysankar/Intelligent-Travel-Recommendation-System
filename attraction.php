<?php
include("header.php");
include('connection.php');
?>


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Attraction Detail</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Blog Detail</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <?php
	$sel=mysqli_query($con,"SELECT * FROM `attraction` where id='$_REQUEST[id]'");
	$row=mysqli_fetch_array($sel);
	
	$myfile = fopen("attraction_id.txt", "w") or die("Unable to open file!");
	$txt = $_REQUEST['id'];
	fwrite($myfile, $txt);
	fclose($myfile);
	
	$python = `python travel_recommendation.py`;
	//echo "<pre>".$python."</pre>";
	
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
                                <img class="img-fluid w-100" src="admin/attraction/uploads/<?php echo $row['image']  ?>" alt="">
                                
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" >Location</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $_SESSION['loc']; ?></a>
                            </div>
                            <h2 class="mb-3"><?php echo $row['name']  ?></h2>
                            <p><?php echo $row['description']  ?></p>
                            
                        </div>
                    </div>
                    <!-- Blog Detail End -->
    
                   
                </div>
				
				
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    

                    <!-- Category List -->
                   
                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recommendation</h4>
                        
						<?php
						$myfile = fopen("attraction_recomm.txt", "r") or die("Unable to open file!");
						$a=fread($myfile,filesize("attraction_recomm.txt"));
						fclose($myfile);
						//echo $a;
						
						$bb=trim($a, "[");
						$bb=trim($bb, "]");
						$b=explode(",",$bb);
						$i = 0;
						foreach ($b as $value) {
						
						//echo $value."<br>";
						
						$x= $x."id=$value OR ";
						
						//echo $x;
						}
						
						$sel1="select * from attraction  where $x id='1000000'";
						//echo $sel;
						
						$res1=mysqli_query($con,$sel1);
						while($row1=mysqli_fetch_array($res1))
						{
							$sel2=mysqli_query($con,"SELECT * FROM `location` WHERE `id`='$row1[location]'");
							$row2=mysqli_fetch_array($sel2);
						?>
						
						<a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="admin/attraction/uploads/<?php echo $row1['image'];?>" style="width:100px; height:100px;" alt="">
                            <div class="pl-3">
                                <h6 class="m-1"><?php echo $row1['name']; ?></h6>
                                <small><?php echo $row2['name']; ?></small>
                            </div>
                        </a>
						<?php
						}
						?>
						
                    </div>
    
                    <!-- Tag Cloud -->
                </div>
				
				<div class="col-lg-8 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    

                    <!-- Category List -->
                   
                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Mode Of Travel</h4>
                        <?php
						$sel7=mysqli_query($con,"SELECT * FROM `travel_mode` WHERE `location` ='$_REQUEST[loc]'");
						$row7=mysqli_fetch_array($sel7);
						
						$sel5=mysqli_query($con,"SELECT * FROM `location` WHERE `name` ='$_SESSION[loc]'");
						$row5=mysqli_fetch_array($sel5);
						
						$lat1=$row5['latitude'];
						$lon1=$row5['longtitude'];
						
						$sel6=mysqli_query($con,"SELECT * FROM `location` WHERE `id` ='$_REQUEST[loc]'");
						$row6=mysqli_fetch_array($sel6);
						
						$lat2=$row6['latitude'];
						$lon2=$row6['longtitude'];
						//echo $lat2;
						
						function distance($lat1, $lon1, $lat2, $lon2, $unit) {
						  if (($lat1 == $lat2) && ($lon1 == $lon2)) {
							return 0;
						  }
						  else {
							$theta = $lon1 - $lon2;
							$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
							$dist = acos($dist);
							$dist = rad2deg($dist);
							$miles = $dist * 60 * 1.1515;
							$unit = strtoupper($unit);

							if ($unit == "K") {
							  return ($miles * 1.609344);
							} else if ($unit == "N") {
							  return ($miles * 0.8684);
							} else {
							  return $miles;
							}
						  }
						}

						//echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
						$dis=distance($lat1, $lon1, $lat2, $lon2, "K") . " Kilometers<br>";
						//echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";
						
						
						?>
						
						
						<a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <div class="pl-3">
                                <h6 class="m-1">Total Distance</h6>
                                <small><?php echo $dis; ?></small>
								<h6 class="m-1">Nearest Airport</h6>
                                <small><?php echo $row7['airport']; ?></small>
								<h6 class="m-1">Nearest Train Stations</h6>
                                <small><?php echo $row7['railway_station']; ?></small>
								<h6 class="m-1">Nearest Metro</h6>
                                <small><?php echo $row7['bus_station']; ?></small>
                            </div>
                        </a>
						
                    </div>
    
                    <!-- Tag Cloud -->
                </div>
				
				
				
				
            </div>
        </div>
    </div>
    <!-- Blog End -->



<?php
include("footer.php");
?>