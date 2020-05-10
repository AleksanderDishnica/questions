<?php
	if(isset($_POST['allCookies'])){
		$cookies = $_POST['allCookies'];

		$mysqli = mysqli_connect('localhost', 'root', '', 'db_test');

		$stmt = $mysqli->query("INSERT INTO answers(name, email, answer1, answer2)
								VALUES('$cookies[0]','$cookies[1]','$cookies[2]','$cookies[3]') ");
	}