<?php 
	require('header.php');
	
?>
<br>

<div class="borderL">
	<p>The time is: <output id="date"></output></p>
	<h2>My Skills</h2>
	<ul id="box">
		<li>C++ Programming</li>
		<li>SQL Programming</li>
		<li>HTML 5</li>
		<li>CSS 3</li>
	</ul>
	<br>
	<h2>Preseption of my future employment</h2>
	<p>I plan on obtaining an internship at a company called caresource in dayton right after highschool. 
	   I will do this and go to college at the same time. After college I plan on obtaining a job in the field of Software Engineering.</p>
	   
	
</div>
<div class="borderR">
	<h2>Preseption of my future education </h2>
	<p>I am pursuing a career in Software Engineering. I plan on going to sinclair and transfer to another college to finish my bachelors degree.</p>
	
	<p id="MyLocation">Click the button to get your position:</p>
<button onclick="getLocation()">My Location</button>
<div id="map"> </div>
<script>
var x=document.getElementById("MyLocation");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }

function showPosition(position)
  {
  var latlon=position.coords.latitude+","+position.coords.longitude;

  var img_url="http://maps.googleapis.com/maps/api/staticmap?center="
  +latlon+"&zoom=14&size=400x300&sensor=false";
  document.getElementById("map").innerHTML="<img src='"+img_url+"' />";
  }

function showError(error)
  {
  switch(error.code)
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="User denied the request for Geolocation.";
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="Location information is unavailable.";
      break;
    case error.TIMEOUT:
      x.innerHTML="The request to get user location timed out.";
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="An unknown error occurred.";
      break;
    }
  }
</script>
</div>

<?php 
	require("footer.php")

?>

	

</body>
</html>