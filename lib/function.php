<?php 
	function status_request($str_code){
		if($str_code == 100 || $str_code == 101){
			
			return "error";
		}
		if($str_code == 201){
			
			return"success";
		}
		return '';
	}

	function errorSuccess($item){
		$mass = [
				'class' => null,
				'text' => null,
			];
		if (isset($_GET[$item])) {

			if (empty($_GET[$item])) {
				$class = 'error';
			}
			else{
				$class = 'success';	
			}
			$text = $_GET[$item];

			$mass = [
				'class' => $class,
				'text' => $text,
			];
			return $mass;
		}
	}
?>


<!-- 		if (isset($_GET['first_name'])) {
				if (empty($_GET['first_name'])) {
					$class = 'error';
				}
				$class = 'success';
				$first_name = $_GET['first_name'];
				echo $first_name;
			}
 -->

<!-- 
if (isset($_GET['status'])){
	$class = status_request($_GET['status']);
		if($class == 'success'){
 -->