<?php
include('../config.php');
$sql = "DELETE FROM college WHERE id='" . $_GET["collegeid"] . "'";
if (mysqli_query($conn, $sql)) {
	 echo "Record deleted successfully";
	echo '<script>location.replace("viewcollege.php");</script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>