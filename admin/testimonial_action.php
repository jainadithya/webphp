<?php
    include 'connection.php';
	// check if the 'approve' parameter is set in the URL
    if(isset($_GET['approve'])){
		// get the value of the 'approve' parameter
        $id = $_GET["approve"];
		
		// create an SQL query to update the 'status' column of the testimonial with the specified ID to 'Approved'
        $update_query = "UPDATE testimonial SET `status`='Approved' WHERE `id`='$id'";
		// get the value of the 'approve' parameter
        $run = mysqli_query($con, $update_query);
		// check if the query was successful
        if($run){
			// display a success message
            echo "<script>alert('Testimonial Successfully Approved')</script>";
			// redirect the user to the testimonial.php page
            echo "<script>window.location.href='testimonial.php'</script>";
            

        }
        else{
			// redirect the user to the testimonial.php pages
            echo "<script>alert('Testimonial Not Approved')</script>";
			// redirect the user to the testimonial.php page
            echo "<script>window.location.href='testimonial.php'</script>";
        }
    }
	// if the 'approve' parameter is not set, assume the 'deny' parameter is set
    else{
		// if the 'approve' parameter is not set, assume the 'deny' parameter is set
        $id = $_GET["deny"];
		// create an SQL query to delete the testimonial with the specified ID
        $update_query = "DELETE FROM testimonial WHERE `id`='$id'";
		// run the delete query
        $run = mysqli_query($con, $update_query);
	
		 // check if the query was successful
        if($run){
			// check if the query was successful
            echo "<script>alert('Testimonial Successfully Denyed')</script>";
			 // redirect the user to the testimonial.php page
            echo "<script>window.location.href='testimonial.php'</script>";
            

        }
        else{
			 // redirect the user to the testimonial.php page
            echo "<script>alert('Testimonial Not Denyed')</script>";
			 // redirect the user to the testimonial.php page
            echo "<script>window.location.href='testimonial.php'</script>";
        }
    }

    
?>