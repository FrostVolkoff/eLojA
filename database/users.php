<?php
/* User Funtions */

function userCount(){
	return mysql_result(mysql_query("SELECT COUNT (´ID_user´) FROM `users`"), 0);
}

function loggenIn(){
	return(isset($_SESSION['id'])) ? true : false;
}

function userIdFromUsername($username){
	$username = $username;
	$query = mysql_query("SELECT `ID_user` FROM `users` WHERE `username` = '$username'");
	return mysql_result($query, 0, 'id');
}

function userExists($username){
	$username = $username;
	$query = mysql_query("SELECT COUNT(`ID_user`) FROM `users` WHERE `Username` = '$username'");
	return(mysql_result($query, 0) >=1) ? true : false;
}

function login($username, $password){
	$userID = userIdFromUsername($username);

	$username = $username;
	$password = md5($password);

	$query = mysql_query("SELECT COUNT(`ID_user`) FROM `users` WHERE `Username` = $'username' AND `Password` = '$password' ");
	return(mysql_result($query, 0) == 1) ? $userID : false;
}

function loginPage(){
	if(empty($_POST) == false){
		echo "O nome de utilizador e a password não podem estar em branco!";
	} elseif (userExists($username) == false) {
		echo "O nome de utilizador não existe!";
	} else {
		$login = login($username, $password);
		if ($login == false) {
			echo "Password incorreta!";
		} else {
			$_SESSION['id'] = $login;
			header('location: homepage.php');
			exit();
		}
	}
}

function loggout(){
	global $rootpath;
	session_destroy();
	header('location: index.php');
	exit();
}

?>