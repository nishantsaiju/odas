<?php if(!isset($_SESSION)){
  session_start();
  }  
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous">

<?php include('header.php'); ?>
  <?php include('../config.php')?>
<?php $result = mysqli_query($conn,"SELECT * FROM college");?>






  <!-- this is for donor registraton -->
  <div class="dashboard" style="background-color:#fff;">
    <h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">All registered Doctor List</h3>
    
    
  </div>
    
  <table>
  <tr>
  <td>S.N</td>
  <td>Name</td>
  <td>Acronym</td>
  <td>Contact</td>
  <td>Location</td>
  <td>Website</td>
  
  </tr>
  <?php
  $i=0;
  while($row = mysqli_fetch_array($result)) {
  ?>
  <td><?php echo $i+1?></td>
  <td><?php echo $row["name"]; ?></td>
  <td><?php echo $row["acronym"]; ?></td>
  <td><?php echo $row["contact"]; ?></td>
  <td><?php echo $row["location"]; ?></td>
  <td><?php echo $row["website"]; ?></td>
 <td><a href="collegedelete.php?collegeid=<?php echo $row['id']; ?>">Delete</a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
  
  
  

  
 <?php include('footer.php'); ?>


  
  </div><!--  containerFluid Ends -->




  <script src="js/bootstrap.min.js"></script>


 
      



  
</body>
</html>
