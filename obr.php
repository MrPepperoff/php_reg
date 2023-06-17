	<?php
		
		if(strlen($_POST['status']) == 201){
			// Error
			header("location: index.php?status=201&first_name=".$_POST['first_name']."&last_name=".$_POST['last_name']."&gender_i=".$_POST['gender_i']."&data=".$_POST['data']."&intersting=".$_POST['intersting']);
		}
		else{
			// Good
			header("location: index.php?status=201&first_name=".$_POST['first_name']."&last_name=".$_POST['last_name']."&gender_i=".$_POST['gender_i']."&data=".$_POST['data']."&intersting=".$_POST['intersting']);
		}
		
	?>
