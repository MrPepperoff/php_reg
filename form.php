<?php 
	require_once('lib/function.php');
	
	// echo errorSuccess('first_name')['text'];
	// echo errorSuccess('last_name')['text'];
?>
	<form class="two" action="obr.php" method="POST">
		<h1>Регистрация</h1>
		<div class="name_reg ">
			<div class="name_item">
				<label for="first_name">Имя:</label>
				<input type="text" name="first_name" id="first_name" class='<?php echo (isset(errorSuccess('first_name')['class']))? errorSuccess('first_name')['class']: "";?>' placeholder="Введите имя" value='<?php echo (isset(errorSuccess('first_name')['text']))? errorSuccess('first_name')['text']: "";?>'>
			</div>
			<div class="name_item">
				<label for="last_name">Фамилия:</label>
				<input type="text" name="last_name" id="last_name" class='<?php echo (isset(errorSuccess('last_name')['class']))? errorSuccess('last_name')['class']: ""; ?>' placeholder="Введите фамилию" value='<?php echo (isset(errorSuccess('last_name')['text']))? errorSuccess('last_name')['text']: ""; ?>'>
			</div>
		</div>
		<div class="gender <?php echo (isset(errorSuccess('gender_i')['class']))? errorSuccess('gender_i')['class']: ""; ?>">
			<h2>Пол</h2>
			<div class="gender_item">
				<input type="radio" name="gender_i" id="man" value="M" <?php echo ((isset(errorSuccess('gender_i')['text'])) && errorSuccess('gender_i')['text'] == 'M')? 'checked': ""; ?>>
				<label for="man">Мужской</label>
			</div>
			<div class="gender_item">
				<input type="radio" name="gender_i" id="woman" value="W" <?php echo ((isset(errorSuccess('gender_i')['text'])) && errorSuccess('gender_i')['text'] == 'W')? 'checked': ""; ?>>
				<label for="woman">Женский</label>
			</div>
		</div>
		<div class="data">
			<h2>Дата рождения</h2>
			
			<div class="data_wrap">
				<select name="day" class="<?php echo (isset(errorSuccess('day')['class']))? errorSuccess('day')['class']: ""; ?>">
					<option selected disabled>День</option>
					<option value="1" <?php echo (isset(errorSuccess('day')['text']) == 1)? 'selected': ""; ?>>1</option>
					<option value="2" <?php echo (isset(errorSuccess('day')['text']) == 2)? 'selected': ""; ?>>2</option>
					<option value="3" <?php echo (isset(errorSuccess('day')['text']) == 3)? 'selected': ""; ?>>3</option>
					<option value="4" <?php echo (isset(errorSuccess('day')['text']) == 4)? 'selected': ""; ?>>4</option>
					<option value="5" <?php echo (isset(errorSuccess('day')['text']) == 5)? 'selected': ""; ?>>5</option>
					<option value="6" <?php echo (isset(errorSuccess('day')['text']) == 6)? 'selected': ""; ?>>6</option>
					<option value="7" <?php echo (isset(errorSuccess('day')['text']) == 7)? 'selected': ""; ?>>7</option>
					<option value="8" <?php echo (isset(errorSuccess('day')['text']) == 8)? 'selected': ""; ?>>8</option>
					<option value="9" <?php echo (isset(errorSuccess('day')['text']) == 9)? 'selected': ""; ?>>9</option>
					<option value="10" <?php echo (isset(errorSuccess('day')['text']) == 10)? 'selected': ""; ?>>10</option>
					<option value="11" <?php echo (isset(errorSuccess('day')['text']) == 11)? 'selected': ""; ?>>11</option>
					<option value="12" <?php echo (isset(errorSuccess('day')['text']) == 12)? 'selected': ""; ?>>12</option>
					<option value="13" <?php echo (isset(errorSuccess('day')['text']) == 13)? 'selected': ""; ?>>13</option>
					<option value="14" <?php echo (isset(errorSuccess('day')['text']) == 14)? 'selected': ""; ?>>14</option>
					<option value="15" <?php echo (isset(errorSuccess('day')['text']) == 15)? 'selected': ""; ?>>15</option>
					<option value="16" <?php echo (isset(errorSuccess('day')['text']) == 16)? 'selected': ""; ?>>16</option>
					<option value="17" <?php echo (isset(errorSuccess('day')['text']) == 17)? 'selected': ""; ?>>17</option>
					<option value="18" <?php echo (isset(errorSuccess('day')['text']) == 18)? 'selected': ""; ?>>18</option>
					<option value="19" <?php echo (isset(errorSuccess('day')['text']) == 19)? 'selected': ""; ?>>19</option>
					<option value="20" <?php echo (isset(errorSuccess('day')['text']) == 20)? 'selected': ""; ?>>20</option>
					<option value="21" <?php echo (isset(errorSuccess('day')['text']) == 21)? 'selected': ""; ?>>21</option>
					<option value="22" <?php echo (isset(errorSuccess('day')['text']) == 22)? 'selected': ""; ?>>22</option>
					<option value="23" <?php echo (isset(errorSuccess('day')['text']) == 23)? 'selected': ""; ?>>23</option>
					<option value="24" <?php echo (isset(errorSuccess('day')['text']) == 24)? 'selected': ""; ?>>24</option>
					<option value="25" <?php echo (isset(errorSuccess('day')['text']) == 25)? 'selected': ""; ?>>25</option>
					<option value="26" <?php echo (isset(errorSuccess('day')['text']) == 26)? 'selected': ""; ?>>26</option>
					<option value="27" <?php echo (isset(errorSuccess('day')['text']) == 27)? 'selected': ""; ?>>27</option>
					<option value="28" <?php echo (isset(errorSuccess('day')['text']) == 28)? 'selected': ""; ?>>28</option>
					<option value="29" <?php echo (isset(errorSuccess('day')['text']) == 29)? 'selected': ""; ?>>29</option>
					<option value="30" <?php echo (isset(errorSuccess('day')['text']) == 30)? 'selected': ""; ?>>30</option>
					<option value="31" <?php echo (isset(errorSuccess('day')['text']) == 31)? 'selected': ""; ?>>31</option>
				</select>
				<div class="data_wrap">
					<select name="month" class="<?php echo (isset(errorSuccess('month')['class']))? errorSuccess('month')['class']: ""; ?>">
						<option selected disabled>Месяц</option>
						<option value="1" <?php echo (isset(errorSuccess('month')['text']) == 1)? 'selected': ""; ?>>Январь</option>
						<option value="2" <?php echo (isset(errorSuccess('month')['text']) == 2)? 'selected': ""; ?>>Февраль</option>
						<option value="3" <?php echo (isset(errorSuccess('month')['text']) == 3)? 'selected': ""; ?>>Март</option>
						<option value="4" <?php echo (isset(errorSuccess('month')['text']) == 4)? 'selected': ""; ?>>Апрель</option>
						<option value="5" <?php echo (isset(errorSuccess('month')['text']) == 5)? 'selected': ""; ?>>Май</option>
						<option value="6" <?php echo (isset(errorSuccess('month')['text']) == 6)? 'selected': ""; ?>>Июнь</option>
						<option value="7" <?php echo (isset(errorSuccess('month')['text']) == 7)? 'selected': ""; ?>>Июль</option>
						<option value="8" <?php echo (isset(errorSuccess('month')['text']) == 8)? 'selected': ""; ?>>Август</option>
						<option value="9" <?php echo (isset(errorSuccess('month')['text']) == 9)? 'selected': ""; ?>>Сентябрь</option>
						<option value="10" <?php echo (isset(errorSuccess('month')['text']) == 10)? 'selected': ""; ?>>Октябрь</option>
						<option value="11" <?php echo (isset(errorSuccess('month')['text']) == 11)? 'selected': ""; ?>>Ноябрь</option>
						<option value="12" <?php echo (isset(errorSuccess('month')['text']) == 12)? 'selected': ""; ?>>Декабрь</option>
					</select>
					 <?php 
					 // echo ( $_POST['age']== 1991)? 'selected': ""; 
					 ?>
					<select name="age" class="<?php echo (isset(errorSuccess('age')['class']))? errorSuccess('age')['class']: ""; ?>">
						<option value="" selected disabled>Год</option>
						<option value="1991" <?php echo (isset(errorSuccess('age')['text']) == 1991)? 'selected': ""; ?>>1991</option>
						<option value="1992" <?php echo (isset(errorSuccess('age')['text']) == 1992)? 'selected': ""; ?>>1992</option>
						<option value="1993" <?php echo (isset(errorSuccess('age')['text']) == 1993)? 'selected': ""; ?>>1993</option>
						<option value="1994" <?php echo (isset(errorSuccess('age')['text']) == 1994)? 'selected': ""; ?>>1994</option>
						<option value="1995" <?php echo (isset(errorSuccess('age')['text']) == 1995)? 'selected': ""; ?>>1995</option>
						<option value="1996" <?php echo (isset(errorSuccess('age')['text']) == 1996)? 'selected': ""; ?>>1996</option>
						<option value="1997" <?php echo (isset(errorSuccess('age')['text']) == 1997)? 'selected': ""; ?>>1997</option>
						<option value="1998" <?php echo (isset(errorSuccess('age')['text']) == 1998)? 'selected': ""; ?>>1998</option>
						<option value="1999" <?php echo (isset(errorSuccess('age')['text']) == 1999)? 'selected': ""; ?>>1999</option>
						<option value="2000" <?php echo (isset(errorSuccess('age')['text']) == 2000)? 'selected': ""; ?>>2000</option>
						<option value="2001" <?php echo (isset(errorSuccess('age')['text']) == 2001)? 'selected': ""; ?>>2001</option>
						<option value="2002" <?php echo (isset(errorSuccess('age')['text']) == 2002)? 'selected': ""; ?>>2002</option>
						<option value="2003" <?php echo (isset(errorSuccess('age')['text']) == 2003)? 'selected': ""; ?>>2003</option>
						<option value="2004" <?php echo (isset(errorSuccess('age')['text']) == 2004)? 'selected': ""; ?>>2004</option>
						<option value="2005" <?php echo (isset(errorSuccess('age')['text']) == 2005)? 'selected': ""; ?>>2005</option>
						<option value="2006" <?php echo (isset(errorSuccess('age')['text']) == 2006)? 'selected': ""; ?>>2006</option>
						<option value="2007" <?php echo (isset(errorSuccess('age')['text']) == 2007)? 'selected': ""; ?>>2007</option>
						<option value="2008" <?php echo (isset(errorSuccess('age')['text']) == 2008)? 'selected': ""; ?>>2008</option>
						<option value="2009" <?php echo (isset(errorSuccess('age')['text']) == 2009)? 'selected': ""; ?>>2009</option>
						<option value="2010" <?php echo (isset(errorSuccess('age')['text']) == 2010)? 'selected': ""; ?>>2010</option>
						<option value="2011" <?php echo (isset(errorSuccess('age')['text']) == 2011)? 'selected': ""; ?>>2011</option>
						<option value="2012" <?php echo (isset(errorSuccess('age')['text']) == 2012)? 'selected': ""; ?>>2012</option>
						<option value="2013" <?php echo (isset(errorSuccess('age')['text']) == 2013)? 'selected': ""; ?>>2013</option>
						<option value="2014" <?php echo (isset(errorSuccess('age')['text']) == 2014)? 'selected': ""; ?>>2014</option>
						<option value="2015" <?php echo (isset(errorSuccess('age')['text']) == 2015)? 'selected': ""; ?>>2015</option>
						<option value="2016" <?php echo (isset(errorSuccess('age')['text']) == 2016)? 'selected': ""; ?>>2016</option>
						<option value="2017" <?php echo (isset(errorSuccess('age')['text']) == 2017)? 'selected': ""; ?>>2017</option>
						<option value="2018" <?php echo (isset(errorSuccess('age')['text']) == 2018)? 'selected': ""; ?>>2018</option>
						<option value="2019" <?php echo (isset(errorSuccess('age')['text']) == 2019)? 'selected': ""; ?>>2019</option>
						<option value="2020" <?php echo (isset(errorSuccess('age')['text']) == 2020)? 'selected': ""; ?>>2020</option>
					</select>
				</div>	
			</div>
		</div>
		<div class="interests <?php echo (isset(errorSuccess('intersting')['class']))? errorSuccess('intersting')['class']: ""; ?>" >
			<?php
				if(isset(errorSuccess('intersting')['text'])){
					$arrInter = json_decode(errorSuccess('intersting')['text']);
				}
					
			 ?>
			<h2>Интересы</h2>
			<div class="interest_item">
				<input type="checkbox" name="intersting[]" value="A" id="prog" <?php echo (isset($arrInter) && in_array('A',$arrInter) == 1)? 'checked': ""; ?>>
				<label for="prog">Програмирование</label>
			</div>
			<div class="interest_item">
				<input type="checkbox" name="intersting[]" value="B" id="prod" <?php echo (isset($arrInter) && in_array('B',$arrInter)== 1)? 'checked': ""; ?>>
				<label for="prod">Продвижение</label>
			</div>
			<div class="interest_item">
				<input type="checkbox" name="intersting[]" value="C" id="smm" <?php echo (isset($arrInter) && in_array('C',$arrInter)== 1)? 'checked': ""; ?>>
				<label for="smm">SMM</label>
			</div>
			<div class="interest_item">
				<input type="checkbox" name="intersting[]" value="D" id="ver" <?php echo (isset($arrInter) && in_array('D',$arrInter)== 1)? 'checked': ""; ?>>
				<label for="ver">Верстка</label>
			</div>
			<div class="interest_item">
				<input type="checkbox" name="intersting[]" value="E" id="diz" <?php echo (isset($arrInter) && in_array('E',$arrInter)== 1)? 'checked': ""; ?>>

				<label for="diz">Дизайн</label>
			</div>
		</div>
		<div class="about <?php echo (isset(errorSuccess('about')['class']))? errorSuccess('about')['class']: ""; ?>">
			<textarea placeholder="Расскажите о себе"></textarea>
		</div>
		<button >Отправить</button>

	</form>	

	<!-- disabled -->
	
<?php
		echo 'test: ';

		

?>