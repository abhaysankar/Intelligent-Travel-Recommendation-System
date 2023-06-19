<?php
include("header.php");
include ("connection.php");
?> 

 <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" >
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="text-white">Welcome to <span class="text-primary">WanderPlan</span></h1>
                    </div>
                    <p class="text-white">Wanderplan: Your personalized travel itinerary creation website. Plan your dream trip effortlessly with our easy-to-use platform. Discover curated recommendations, customize your itinerary, and embark on unforgettable adventures.</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Easy To Use</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Create Personalized Itineraries</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Get Professional Travel Support</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" name="name" placeholder="Name" required="required" />
                                </div>
								<div class="form-group">
                                    <input type="text" class="form-control p-4" name="phone" placeholder="Phone" required="required" />
                                </div>
								<div class="form-group">
                                    <select class="form-control " name="loc" required="required" />
										<option>Location</option>
										<?php
										$sel=mysqli_query($con,"select * from location");
										while($row=mysqli_fetch_array($sel))
										{
										?>
										<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
										<?php
										}
										?>
										
									
									</select>
                                </div>
								<div class="form-group">
                                    <input type="email" class="form-control p-4"  name="email" placeholder="Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control p-4" name="password" placeholder="Password" required="required" />
                                </div>
								<div class="form-group">
                                    <input type="file" class="form-control p-4" name="images" required="required" />
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit" name="submit">Sign Up Now</button>
								</div><br>
								<div class="text-center">
									Already a User? <a href="login.php">Sign In</a>
								</div>
                            </form>
							
							<?php
							//session_start();
							
							if(isset($_POST['submit']))
							{
								$name=$_POST['name'];
								$email=$_POST['email'];
								$phone=$_POST['phone'];
								$pwd=$_POST['password'];
								$loc=$_POST['loc'];
								
								if($_FILES['images']['name']){
								move_uploaded_file($_FILES['images']['tmp_name'], "uploads/".$_FILES['images']['name']);
								$img=$_FILES['images']['name'];
								//echo $img;
								}
		
								$ins="insert into user(name,phone,email,password,location,image) values('$name','$phone','$email','$pwd','$loc','$img')";
								//echo $ins;
								mysqli_query($con,$ins);
								echo '<script>alert("Succesfully Registered!")
									  window.location="login.php";
									  </script>'; 
							}
							?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->
	
<?php
include("footer.php");
?>