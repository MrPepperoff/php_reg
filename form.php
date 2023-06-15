<?php 
	require_once('lib/function.php');
	
	// echo errorSuccess('first_name')['text'];
	// echo errorSuccess('last_name')['text'];
?>
	<form class="two" action="obr.php" method="POST">
		<h1>Регистрация</h1>
		<div class="name_reg">
			<div class="name_item">
				<label for="first_name">Имя:</label>
				<input type="text" name="first_name" id="first_name" class='<?php echo errorSuccess('first_name')['class'];?>' placeholder="Введите имя" value='<?php echo errorSuccess('first_name')['text'];?>'>
			</div>
			<div class="name_item">
				<label for="last_name">Фамилия:</label>
				<input type="text" name="last_name" id="last_name" class='<?php echo errorSuccess('last_name')['class']; ?>' placeholder="Введите фамилию" value='<?php echo errorSuccess('last_name')['text']; ?>'>
			</div>
		</div>
		<div class="gender">
			<h2>Пол</h2>
			<input type="radio" name="gender_i">Мужской
			<input type="radio" name="gender_i">Женский
		</div>
		<div class="date">
			<h2>Дата рождения</h2>
			<div class="date_wrap">
				<select>
					<option>День</option>
					<option value="">1</option>
					<option value="">2</option>
					<option value="">3</option>
					<option value="">4</option>
					<option value="">5</option>
					<option value="">6</option>
					<option value="">7</option>
					<option value="">8</option>
					<option value="">9</option>
					<option value="">10</option>
					<option value="">11</option>
					<option value="">12</option>
					<option value="">13</option>
					<option value="">14</option>
					<option value="">15</option>
					<option value="">16</option>
					<option value="">17</option>
					<option value="">18</option>
					<option value="">19</option>
					<option value="">20</option>
					<option value="">21</option>
					<option value="">22</option>
					<option value="">23</option>
					<option value="">24</option>
					<option value="">25</option>
					<option value="">26</option>
					<option value="">27</option>
					<option value="">28</option>
					<option value="">29</option>
					<option value="">30</option>
					<option value="">31</option>
				</select>
				<div class="date_wrap">
					<select>
						<option>Месяц</option>
						<option>Январь</option>
						<option>Февраль</option>
						<option>Март</option>
						<option>Апрель</option>
						<option>Май</option>
						<option>Июнь</option>
						<option>Июль</option>
						<option>Август</option>
						<option>Сентябрь</option>
						<option>Октябрь</option>
						<option>Ноябрь</option>
						<option>Декабрь</option>
					</select>
					<select name="" id="">
						<option value="">Год</option>
						<option value="">1991</option>
						<option value="">1992</option>
						<option value="">1993</option>
						<option value="">1994</option>
						<option value="">1995</option>
						<option value="">1996</option>
						<option value="">1997</option>
						<option value="">1998</option>
						<option value="">1999</option>
						<option value="">2000</option>
						<option value="">2001</option>
						<option value="">2002</option>
						<option value="">2003</option>
						<option value="">2004</option>
						<option value="">2005</option>
						<option value="">2006</option>
						<option value="">2007</option>
						<option value="">2008</option>
						<option value="">2009</option>
						<option value="">2010</option>
						<option value="">2011</option>
						<option value="">2012</option>
						<option value="">2013</option>
						<option value="">2014</option>
						<option value="">2015</option>
						<option value="">2016</option>
						<option value="">2017</option>
						<option value="">2018</option>
						<option value="">2019</option>
						<option value="">2020</option>
					</select>
				</div>	
			</div>
		</div>
		<div class="interests">
			<h2>Интересы</h2>
			<div class="interest_item">
				<input type="checkbox" name="intersting" id="prog">
				<label for="prog">Програмирование</label>
			</div>
			<div class="interest_item">
				<input type="checkbox" name="intersting" id="prog">
				<label for="prog">Продвижение</label>
			</div>
			<div class="interest_item">
				<input type="checkbox" name="intersting" id="prog">
				<label for="prog">SMM</label>
			</div>
			<div class="interest_item">
				<input type="checkbox" name="intersting" id="prog">
				<label for="prog">Верстка</label>
			</div>
			<div class="interest_item">
				<input type="checkbox" name="intersting" id="prog">
				<label for="prog">Дизайн</label>
			</div>
		</div>
		<div class="about">
			<textarea placeholder="Расскажите о себе"></textarea>
		</div>
		<button >Отправить</button>
	</form>	

	<!-- disabled -->