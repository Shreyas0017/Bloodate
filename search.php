<?php 

	//include header file
	include ('include/header.php');

?>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;

	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center center-aligned">
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
								<select>
  <option value="">-- Select --</option>
  <optgroup title="West Bengal" label="&raquo; West Bengal"></optgroup>
  <option value="Alipur" >Alipur</option>
  <option value="Bankura" >Bankura</option>
  <option value="Birbhum" >Birbhum</option>
  <option value="Cooch Behar" >Cooch Behar</option>
  <option value="Dakshin Dinajpur" >Dakshin Dinajpur</option>
  <option value="Darjeeling" >Darjeeling</option>
  <option value="Hooghly" >Hooghly</option>
  <option value="Howrah" >Howrah</option>
  <option value="Jalpaiguri" >Jalpaiguri</option>
  <option value="Jhargram" >Jhargram</option>
  <option value="Kalimpong" >Kalimpong</option>
  <option value="Kolkata" >Kolkata</option>
  <option value="Malda" >Malda</option>
  <option value="Murshidabad" >Murshidabad</option>
  <option value="Nadia" >Nadia</option>
  <option value="North 24 Parganas" >North 24 Parganas</option>
  <option value="Paschim Bardhaman" >Paschim Bardhaman</option>
  <option value="Purba Bardhaman" >Purba Bardhaman</option>
  <option value="Purba Medinipur" >Purba Medinipur</option>
  <option value="Purulia" >Purulia</option>
  <option value="South 24 Parganas" >South 24 Parganas</option>
  <option value="Uttar Dinajpur" >Uttar Dinajpur</option>
</select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
						</div>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->

</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>
