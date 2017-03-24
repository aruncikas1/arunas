<!DOCTYPE html>
<html>
<head>
	<title>PHP forms</title>
</head>

<body>

<?php


/* patikrina ar musu kintamasis nustatytas */

if (isset($_POST)) {
	$vardas = $_POST['vardas'];
	$password = $_POST['password'];
	// var_dump($_POST);
	$amzius = $_POST['age'];
	$gimimometai = 2017 - $amzius; 
}
	else {
		$vardas = "";
		$password = "";
	}

 	
?>
<h1>Geriausia svetaine pasaulyje</h1>
<?php if($vardas == "" && $password == "") : ?>

	<form action="index.php" method="POST">
		<input type="text" name="vardas" value="<?=$vardas; ?>">
		<input type="text" name="password" value="<?=$password; ?>">
	    <input type="text" name="age" value="<?=$amzius; ?>">
<!--  <div class="myNumber">
	Skaiciu suma <?= $c; ?>

	Skaiciaus <?php echo $skaicius; ?>
	kvadratas yra <?php echo $skaicius*$skaicius; ?>  -->


		<input type="submit">
		
	</form>
<?php else: ?>
	<h2> Sveiki prisijunge, <?= $vardas; ?> Jusu amzius: <?= $amzius ?></h2>
	Tu esi gimes :<?php echo "$gimimometai"; ?> 


<?php endif; ?>
</body>


</html>



	




