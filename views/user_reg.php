<?php 
	if($text){ ?>
		<h3>Вы успешно зарегистрировались!</h3>
	<?PHP }	
?>
<br>
<form method="post">
	<input type="text" name="name" placeholder="Введите имя" required>
	<input type="text" name="login" placeholder="Введите логин" required>
	<input type="password" name="password" placeholder="Введите пароль" required>
	<input type="submit" name="button" value="Зарегистрировать">
</form>