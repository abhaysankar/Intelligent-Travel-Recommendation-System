
<?php include("header.php");

 ?>

<style>
input[type="range"] {
  width: 600px;
  
}

@import url('https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900');
html {
	box-sizing: border-box;
}
*, *:before, *:after {
	box-sizing: inherit;
}

a {
	font-family: "Raleway", sans-serif;
	text-decoration: none;
	outline: none;
}
a:hover, a:focus {
	color: #373e18;
}

h2 {
	color: #1a0e0e;
	font-size: 26px;
	font-weight: 700;
	margin: 0;
	line-height: normal;
	text-transform: uppercase;
}
h2 span {
	display: block;
	padding: 0;
	font-size: 18px;
	opacity: 0.7;
	margin-top: 5px;
	text-transform: uppercase;
}
#float-right {
	float: right;
}
.ScriptTop {
	background: #fff none repeat scroll 0 0;
	float: left;
	font-size: 0.69em;
	font-weight: 600;
	line-height: 2.2;
	padding: 12px 0;
	text-transform: uppercase;
	width: 100%;
}
.ScriptTop ul {
	margin: 24px 0;
	padding: 0;
	text-align: left;
}
.ScriptTop li {
	list-style: none;
	display: inline-block;
}
.ScriptTop li a {
	background: #6a4aed none repeat scroll 0 0;
	color: #fff;
	display: inline-block;
	font-size: 14px;
	font-weight: 600;
	padding: 5px 18px;
	text-decoration: none;
	text-transform: capitalize;
}
.ScriptTop li a:hover {
	background: #000;
	color: #fff;
}
.ScriptHeader {
	float: left;
	width: 100%;
	padding: 2em 0;
}
.rt-heading {
	margin: 0 auto;
	text-align: center;
}
.Scriptcontent {
	line-height: 28px;
}
.ScriptHeader h1 {
	font-family: "brandon-grotesque", "Brandon Grotesque", "Source Sans Pro", "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
	text-rendering: optimizeLegibility;
	-webkit-font-smoothing: antialiased;
	color: #6a4aed;
	font-size: 26px;
	font-weight: 700;
	margin: 0;
	line-height: normal;
}
.ScriptHeader h2 {
	color: #312c8f;
	font-size: 20px;
	font-weight: 400;
	margin: 5px 0 0;
	line-height: normal;
}
.ScriptHeader h1 span {
	display: block;
	padding: 0;
	font-size: 22px;
	opacity: 0.7;
	margin-top: 5px;
}
.ScriptHeader span {
	display: block;
	padding: 0;
	font-size: 22px;
	opacity: 0.7;
	margin-top: 5px;
}
.rt-container {
	margin: 0 auto;
	padding-left: 12px;
	padding-right: 12px;
}
.rt-row:before, .rt-row:after {
	display: table;
	line-height: 0;
	content: "";
}
.rt-row:after {
	clear: both;
}
[class^="col-rt-"] {
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-o-box-sizing: border-box;
	-ms-box-sizing: border-box;
	padding: 0 15px;
	min-height: 1px;
	position: relative;
}
@media (min-width: 768px) {
	.rt-container {
		width: 750px;
	}
	[class^="col-rt-"] {
		float: left;
		width: 49.9999999999%;
	}
	.col-rt-6, .col-rt-12 {
		width: 100%;
	}
}
@media (min-width: 1200px) {
	.rt-container {
		width: 1170px;
	}
	.col-rt-1 {
		width: 16.6%;
	}
	.col-rt-2 {
		width: 30.33%;
	}
	.col-rt-3 {
		width: 50%;
	}
	.col-rt-4 {
		width: 67.664%;
	}
	.col-rt-5 {
		width: 83.33%;
	}
}
@media only screen and (min-width:240px) and (max-width: 768px) {
	.ScriptTop h1, .ScriptTop ul {
		text-align: center;
	}
	.ScriptTop h1 {
		margin-top: 0;
		margin-bottom: 15px;
	}
	.ScriptTop ul {
		margin-top: 12px;
	}
	.ScriptHeader h1, .ScriptHeader h2, .scriptnav ul {
		text-align: center;
	}
	.scriptnav ul {
		margin-top: 12px;
	}
	#float-right {
		float: none;
	}
}
.feedback {
	width: 100%;
	max-width: 780px;
	background: #fff;
	margin: 0 auto;
	padding: 15px;
	box-shadow: 1px 1px 16px rgba(0, 0, 0, 0.3);
}
.survey-hr {
	margin: 10px 0;
	border: .5px solid #ddd;
}
.star-rating {
	margin: 25px 0 0px;
	font-size: 0;
	white-space: nowrap;
	display: inline-block;
	width: 175px;
	height: 35px;
	overflow: hidden;
	position: relative;
	background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
	background-size: contain;
}
.star-rating i {
	opacity: 0;
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 20%;
	z-index: 1;
	background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
	background-size: contain;
}
.star-rating input {
	-moz-appearance: none;
	-webkit-appearance: none;
	opacity: 0;
	display: inline-block;
	width: 20%;
	height: 100%;
	margin: 0;
	padding: 0;
	z-index: 2;
	position: relative;
}
.star-rating input:hover+i, .star-rating input:checked+i {
	opacity: 1;
}
.star-rating i~i {
	width: 40%;
}
.star-rating i~i~i {
	width: 60%;
}
.star-rating i~i~i~i {
	width: 80%;
}
.star-rating i~i~i~i~i {
	width: 100%;
}
.choice {
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	text-align: center;
	padding: 20px;
	display: block;
}
span.scale-rating {
	margin: 5px 0 15px;
	display: inline-block;
	width: 100%;
}
span.scale-rating>label {
	position: relative;
	-webkit-appearance: none;
	outline: 0 !important;
	border: 1px solid grey;
	height: 33px;
	margin: 0 5px 0 0;
	width: calc(10% - 7px);
	float: left;
	cursor: pointer;
}
span.scale-rating label {
	position: relative;
	-webkit-appearance: none;
	outline: 0 !important;
	height: 33px;
	margin: 0 5px 0 0;
	width: calc(10% - 7px);
	float: left;
	cursor: pointer;
}
span.scale-rating input[type=radio] {
	position: absolute;
	-webkit-appearance: none;
	opacity: 0;
	outline: 0 !important;
	/*border-right: 1px solid grey;*/
	height: 33px;
	margin: 0 5px 0 0;
	width: 100%;
	float: left;
	cursor: pointer;
	z-index: 3;
}
span.scale-rating label:hover {
	background: #fddf8d;
}
span.scale-rating input[type=radio]:last-child {
	border-right: 0;
}
span.scale-rating label input[type=radio]:checked~label {
	-webkit-appearance: none;
	margin: 0;
	background: #fddf8d;
}
span.scale-rating label:before {
	content: attr(value);
	top: 7px;
	width: 100%;
	position: absolute;
	left: 0;
	right: 0;
	text-align: center;
	vertical-align: middle;
	z-index: 2;
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
                <h6 class="section-title bg-white text-center text-primary px-3">WanderPlan</h6>
                <h2 class="mb-5">Get Your Personalised Itinerary</h2>
            </div>
            <div class="row">
 
            
                <div  class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                   
				   <div id="GFG" >
				 
				 <form  action='itinerary3.php' method='POST'>
				   <?php
	
$or=$_POST['Place'];
$des="ernakulam";
$or=str_replace(" ","_",$or);
$des=str_replace(" ","_",$des);

$url="https://maps.googleapis.com/maps/api/directions/json?origin=$or&destination=$des&key=AIzaSyDkWmpj6LhBakVdioDB1--1CIepEPE5404";

$data=file_get_contents($url);

//echo $data;


$wordChunks = explode("html_instructions", $data);
$wordChunks2 = explode("distance", $data);
$wordChunks3 = explode("start_location", $data);








$i=0;

$data= explode("\"", $wordChunks[$i]);
$j=$i+2;
$distance= explode("\",", $wordChunks2[$j]);
$distance=str_replace("text\" : \""," ",$distance[0]);

$distance=str_replace("\" : {"," ",$distance);
$distance=str_replace("\""," ",$distance);

$data=str_replace("\u003c/b\u003e"," ",$data[2]);

$data=str_replace("\u003cb\u003e"," ",$data);
$data=str_replace("\u003cdiv style="," ",$data);
$distance=trim($distance);
$a= $wordChunks3[$j];
$a=substr($a,0,100);
$a = explode(":", $a);
$lat=$a[2];
$lat=explode(",",$lat);
$lat=trim($lat[0]);
$lon=$a[3];
$lon = explode(" ",$lon);
$lon=trim($lon[1]);

				   
				   include("connection.php");
				  $i=1;
				  $d=$_POST['day'];
				
				  $bud=$_POST['budget'] and rate<$bud;
				  if($lat!="" & $lon!="")
{
	
	
	$i=1;
	$f=0;
	//echo "SELECT id,sub_cat,address,lat,lng, ( 3959 * acos( cos( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians($lon ) ) + sin( radians($lat) ) * sin( radians( lat ) ) ) ) AS distance FROM table2 where $content2 group by sub_cat HAVING distance < $_REQUEST[dis]    ORDER BY distance LIMIT 0 , 10 ";
	

		$lm=$d*5;
	
	$day=1;
	
	$i=1;
	$res=mysqli_query($con,"SELECT id,location,sublocation,pereferances,attraction,sub_category,description,rate,lat,lng,round( 3959 * acos( cos( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians($lon ) ) + sin( radians($lat) ) * sin( radians( lat ) ) ) ) AS distance FROM pakages WHERE location='$_POST[Place]' and rate<$bud  HAVING distance < 100  ORDER BY distance LIMIT 0 , $lm") or die(mysqli_error($con));

//echo "SELECT id,location,sublocation,pereferances,attraction,sub_category,description,rate,lat,lng,round( 3959 * acos( cos( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians($lon ) ) + sin( radians($lat) ) * sin( radians( lat ) ) ) ) AS distance FROM pakages WHERE location='$_POST[Place]'  HAVING distance < 100  ORDER BY distance LIMIT 0 , $lm ";

	echo "<div style='background:#fff;color:#000;margin:10px;'>";
	while($row=mysqli_fetch_array($res))
	{
		
			if($i==1)
			{
			echo "<h3>DAY $day</h3>";}
			
		
		
		echo "<input type='checkbox' name='interest2[]' value='$row[id]' />";
		echo "<b>".$row['sublocation']."(".$row['sub_category']." )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <br>".$row['description']."<b> Distance".$row['distance']."KM </b><br>
		Rate : ".$row['rate']."<br>";
		
		
		$i++;
		
		if($i==6)
		{
			$day++;
			$i=1;
		}
		
	}

	echo "</div><div>";
	
	
		echo "<input type='hidden' name='budget' value='$_POST[budget]' />";
	
	echo"</div>";
}
				   ?>
				   
				   
				   <label>USER FEED BACK ?</label><br>
            <span class="star-rating">
              <input type="radio" name="rating1" value="1"><i></i>
              <input type="radio" name="rating1" value="2"><i></i>
              <input type="radio" name="rating1" value="3"><i></i>
              <input type="radio" name="rating1" value="4"><i></i>
              <input type="radio" name="rating1" value="5"><i></i>
            </span>
            <div class="clear"></div> 
            <hr class="survey-hr">
				   
				   
				   <input type='submit' name='sub' value='Generate'>
				   </form>
				   
				   
				   </div>
				   
				   
				   
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


   <div id="sample">
<script type="text/javascript" src="nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
    <?php //include("footer.php"); ?>
