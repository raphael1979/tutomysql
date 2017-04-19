<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tuto mysql</title>
</head>
<body>
	<h1>tuto mySql</h1>
	<?php 
	$connect=mysqli_connect('localhost', 'root', 'root', 'mybase') or die ('problème de serveur');
	
	$result=mysqli_query($connect, 'SELECT * FROM login');
	while($data=mysqli_fetch_assoc($result)){
		echo 'login :'.$data['login'].'<br/>';
		echo 'mdp :'.$data['mdp'].'<br/><br/>';
	}
	//mysqli_query($connect,"INSERT INTO login(login,mdp)VAlUES('Perceval', 'cPasFo')");
	//mysqli_query($connect, "UPDATE login SET login='Karadoc' WHERE login='Perceval'");
	mysqli_query($connect, "DELETE FROM login WHERE idLogin=3 ");
	?>
	
</body>
</html>