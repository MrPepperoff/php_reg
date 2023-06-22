	<?php
		$data = [
					"day" => $_POST['day'],
					"month" => $_POST['month'],
					"age" => $_POST['age'],
				];
		
		if(strlen($_POST['status']) == 201){
			// Error
			header("location: index.php?status=201&first_name=".$_POST['first_name']."&last_name=".$_POST['last_name']."&gender_i=".$_POST['gender_i']."&day=".json_encode($_POST['day'])."&intersting=".json_encode($_POST['intersting']));
		}
		else{
			// Good
		
			header("location: index.php?status=201&first_name=".$_POST['first_name']."&last_name=".$_POST['last_name']."&gender_i=".$_POST['gender_i']."&day=".$_POST['day']."&month=".$_POST['month']."&age=".$_POST['age']."&intersting=".json_encode($_POST['intersting']));

		}
		
	?>
