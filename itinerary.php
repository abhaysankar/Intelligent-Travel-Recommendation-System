
<?php include("header.php"); ?>

<style>
input[type="range"] {
  width: 600px;
  
}
</style>



    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mb-5">Get Your Personalised Itinerary</h2>
            </div>
			<div class="row">
				<div class="card-body rounded-bottom bg-white p-5">
					<form action='itinerary2.php' method='post'>
						<div class="form-group col-md-12">
							<label for="name">Choose Your Orgin</label>
							<input type="text" class="form-control" id="name"  name='org' placeholder="Your Name">
						</div>
						<div class="form-group col-md-12">
							<label for="name">Choose Your Destination</label>
							<input type="text" class="form-control" id="name"  name='Place' placeholder="Your Name">
						</div>
						<div class="form-group col-md-12">
							<label for="budget">Budget:</label>
							<input type="range" id="budget" name="budget" min="500" max="50000" step="100" value="5000" oninput="updateBudgetValue()"><br><br>
							<div id="budget-value">5000</div>
						</div>
						<div class="form-group col-md-12">
							<label for="subject">Tour Days</label>
							<input type="number" class="form-control" name="day" id="subject" placeholder="Subject">
						</div>
						<div class="form-group col-md-12">
							<label for="subject">Preffered Attractions</label>
							<input type="text" class="form-control" id="subject" name="attractions" placeholder="Subject">
						</div>
						<div class="form-group col-md-12">
							<label for="subject">Meal Preferences</label>
							<input type="text" class="form-control" id="subject" name="preferences" placeholder="Subject">
						</div>
						<div>
							<button class="btn btn-primary w-100 py-3" type="submit">Generate Itinerary</button>
						</div>
					</form>
				</div>
            </div>
			
            
        </div>
    </div>
    <!-- Contact End -->

    <script>
function updateBudgetValue() {
  var slider = document.getElementById("budget");
  var value = document.getElementById("budget-value");
  value.innerHTML = slider.value;
}
</script>
    <?php include("footer.php"); ?>
