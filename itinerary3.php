
<?php
 include("header.php");
 include("connection.php");
 ?>

<style>
input[type="range"] {
  width: 600px;
  
}
</style>
<script>
        function printDiv() {
            var divContents = document.getElementById("GFG").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
          
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Trouvaille</h6>
                <h2 class="mb-5">Get Your Personalised Itinerary</h2>
            </div>
            <div class="row">
 
            
                <div  class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                   
				   <div id="GFG" >
				   <?php
				   $tot=0;$loc=0;
		$checkbox1=$_POST['interest2']; 
		$i=0;
		
		foreach($checkbox1 as $chk1)  
   {  
   $i++;
   
   if($i==1)
   {
	   echo"<h2>DAY 1</h2>";
   }
      
	if($i==6)
   {
	   echo"<h2>DAY 2</h2>";
   }
   if($i==11)
   {
	   echo"<h2>DAY 3</h2>";
   }
        
							   $sel = "SELECT * FROM pakages WHERE id='$chk1'"; 
                               $res=mysqli_query($con,$sel);
                               $row=mysqli_fetch_array($res);
                                
	  echo "<b>".$row['sublocation']."(".$row['sub_category']." )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <br>".$row['description']." </b><br>
		Rate : ".$row['rate']."<br>";
		
		$tot=$tot+$row['rate'];
		
		if($loc!='')
		{
	  $loc= $loc."/".$row['lat'].",".$row['lng'];
		}
		else
		{
			 $loc=$row['lat'].",".$row['lng'];
		}
	  
	  
	  
   }
   
   echo"<h3>TOTAL COST : $tot</h4>";
   
   if($tot>$_POST['budget'])
   {
	   echo"Buddget Exceed ";
   }
   
				   ?>
				   
				   
				  
				   
				  
				   
				   </div>
				   
				   
				   <a href='https://www.google.com/maps/dir/<?php echo $loc ?>' class='btn btn-danger' target='_blank'>MAP LINK </a>
				   
				   
				    <input type="button" value="Print" onclick="printDiv()" class='btn btn-primary'>
				   
				   </div>
				   
                </div>
            </div>
        </div>
    </div> </div> </div>
    <!-- Contact End -->

    <script>
function updateBudgetValue() {
  var slider = document.getElementById("budget");
  var value = document.getElementById("budget-value");
  value.innerHTML = slider.value;
}
</script>


    <?php //include("footer.php"); ?>
