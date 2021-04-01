<?php include('header.php'); ?>
<?php include('config.php')?>
<?php $result = mysqli_query($conn,"SELECT * FROM college");?>


	<!-- mc info -->
	<div class="container form-group mc">
		<h2 class="text-center" style="background-color:#272327;color: #fff;">Public Medical College in Nepal</h2>
       <?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Name</td>
    <td>Acronym</td>
    <td>Established</td>
    <td>Location</td>
    <td>Website</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["acronym"]; ?></td>
    <td><?php echo $row["coctact"]; ?></td>
    <td><?php echo $row["location"]; ?></td>
     <td><?php echo $row["website"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
                            
	</div>
	

    <!-- footer section --> 
			 <?php include('footer.php'); ?>
		<!-- footer section Ends--> 


	
	</div><!--  containerFluid Ends -->



	<script src="js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
	
</body>
</html>