<?php
	include '../database/users.php';
?>
<div class="logon">
	<span id="banner">eLojA</span>
	<form method="POST">
		<span class="icon-user icon-list"></span><input type="text" name="username" placeholder="Nome de Utilizador" class="inputBox" required>
		<br>
		<input type="password" name="password" placeholder ="Password" class="inputBox" required>
		<br>
		<br>
		<button type="submit">Iniciar Sessão</button>
	</form>
</div>