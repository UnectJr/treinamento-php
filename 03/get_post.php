<?php
	// if(isset($_GET['name'])){
	// 	//print_r($_GET);
	// 	$name = $_GET['name'];
	// 	//echo $name;
	// }
	
	// if(isset($_POST['name'])){
	// 	//print_r($_POST);
	// 	$name = htmlentities($_POST['name']);
	// 	//echo $name;
	// }

	if(isset($_REQUEST['name'])){
		//print_r($_REQUEST);
		$name = htmlentities($_REQUEST['name']);
		//echo $name;
	}
	

?>


<!DOCTYPE html>
<html>
	<head>
		<title>My Website</title>
	</head>
<body>
	<form method="post" action="get_post.php">
		<div>
			<label>Name</label><br>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label><br>
			<input type="text" name="email">
		</div>	
		<input type="submit" value="Submit">
	</form>
	<ul>
		<li>
			<a href="get_post.php?name=Higor">Higor</a>
		</li>
		<li>
			<a href="get_post.php?name=Ana">Ana</a>
		</li>
	</ul>
	<h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>