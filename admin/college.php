<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>




	<!-- this is for donor registraton -->
	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Add Doctor</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:320px; margin-bottom:30px;background-color: #101011;color:#d4530d;;">
		<form enctype="multipart/form-data" action=""  method="post" class="text-center" style="margin-left: 110px">
			 <div class="col-md-12">
				  	
			 		
					<label>
					    <input type="text" name="name" value="" placeholder="Full name" autocomplete="on">
					</label><br><br>
					<label>
						 <input type="text" name="acronym" value="" placeholder="address" >
					</label><br><br>
					<label>
						 <input type="text" name="esta" value="" placeholder="contact" >
					</label><br><br>

					<label>
						 <input type="email" name="location"  value="" placeholder="email" >
					</label><br><br>
					
					<label>
					   <input type="text" name="website" value="" placeholder="Fee" >
					</label><br><br>

					
					<button name="submit" type="submit" style="margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px">Add College</button> <br>
				
			</div>	<!-- col-md-12 -->


				</form>
			</div>




	</div>
	
	
   <?php include('config.php')?>
					<!-- inserting data -->
					<?php  
						if(isset($_POST['submit']))
{	 
	 $first_name = $_POST['name'];
	 $ac = $_POST['acronym'];
	 $estab = $_POST['esta'];
	 $location= $_POST['location'];
	 $website= $_POST['website'];
	 $sql = "INSERT INTO college (name,acronym,established,location,website)
	 VALUES ('$first_name','$ac','$estab','$location','$website')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
						
					<!-- inserting data -->

	



	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


	



</body>
</html>