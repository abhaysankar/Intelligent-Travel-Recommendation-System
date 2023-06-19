<?php
include("header1.php");
?> 

    <div class="container-fluid bg-registration py-5" >
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="text-white">Welcome back to <span class="text-primary">WanderPlan</span></h1>
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
                            <h1 class="text-white m-0">Sign In Now</h1>
                        </div>
                        <br>
                        <?php
                        error_reporting(0);
                        if($_REQUEST['st']=='fail')
                        {
                            echo '
                            <div class="alert alert-danger">
                              <center> <a class="alert-link">invalid username or password!!</a></center>
                            </div>';
                        }


                        ?>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form method="POST" action="log.php">
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" name="email" placeholder="Username" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control p-4" name="password" placeholder="Password" required="required" />
                                    
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit" name="login" >Sign In Now</button>
                                </div><br>
								<div class="text-center">
									New User? <a href="register.php">Sign Up</a>
								</div>
                            </form>
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