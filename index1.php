<?php
include("header.php");
include ("connection.php");
?>
	<br><br><br><br><br>
	
    <!-- Booking Start -->
    <form method="POST">
	<div class="container-fluid booking mt-5 pb-5" style="min-height:450px;">
    <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">WANDERPLAN</h6>
                <h1>Explore Your Destination</h1>
            </div>
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                
                    
					<div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-4 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;" name="from" required>
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
                                    <select class="custom-select px-4" style="height: 47px;" name="to" required>
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
                                        <input type="text" class="form-control p-4 " placeholder="Budget " name="Budget" required/>
                                    </div>
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
								window.location.href='viewlocations1.php?from=$from&to=$to&Budget=$Budget';
								</script>";
							}
							
					
					?>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->




<?php
include("footer.php");
?>