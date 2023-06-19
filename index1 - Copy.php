<?php
include("header.php");
include ("connection.php");
?>
	<br><br><br><br><br>
	
    <!-- Booking Start -->
    <form method="POST">
	<div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    
					<div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-4 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;" name="from">
                                        <option value="">From</option>
										<?php
										$sel=mysqli_query($con,"select * from location");
										while($row=mysqli_fetch_array($sel))
										{
										?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                        <?php
										}
										?>
                                    </select>
                                </div>
                            </div>
							<div class="col-md-4">
                                <div class="mb-4 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;" name="to">
                                        <option value="">To</option>
										<?php
										$sel=mysqli_query($con,"select * from location");
										while($row=mysqli_fetch_array($sel))
										{
										?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                        <?php
										}
										?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-4 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 " placeholder="Budget " name="Budget" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-4 mb-md-0">
                                    <input type="text" class="form-control p-4 " placeholder="Duration " name="Duration" />
                                </div>
                            </div>
							
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" name="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
					</form>
					
					
					
					<?php
					if(isset($_POST['submit']))
							{
								$from=$_POST['from'];
								$to=$_POST['to'];
								$Budget=$_POST['Budget'];
								$Duration=$_POST['Duration'];
								
								echo $loc;
								echo $Budget;
								echo $Duration;
								
								echo "<script>
								window.location.href='viewlocations1.php?from=$from&to=$to&Budget=$Budget&Duration=$Duration';
								</script>";
							}
							
					
					?>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->

    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Explore Top Destination</h1>
            </div>
            <div class="row">
			<?php
			include('connection.php');

			$sel=mysqli_query($con,"SELECT * FROM `location`");
			while($row=mysqli_fetch_array($sel))
			{
				$_SESSION['loc']=$row['name'];
			?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" style='height:200px; width:400px;' src="admin/location_tbl/uploads/<?php echo $row['image']; ?>" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="viewlocations.php?id=<?php echo $row['id'];?>">
                            <h5 class="text-white"><?php echo $row['name']; ?></h5>
                                                    <span>100 Cities</span>

						</a>
                    </div>
                </div>
             <?php
			}
			 ?>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


<?php
include("footer.php");
?>