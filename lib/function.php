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


