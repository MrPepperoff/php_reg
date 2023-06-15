	<?php
		
		if(strlen($_POST['first_name']) < 1){
			// Error
			header("location: index.php?status=101&first_name=&last_name=");
		}
		else{
			// Good
			header("location: index.php?status=201&first_name=".$_POST['first_name']."&last_name=".$_POST['last_name']);
		}
		// echo status_request($status);
	?>
