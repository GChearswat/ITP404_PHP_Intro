<?php
	require('functions.php');

	if (!isset($_POST['submit'])) {
		redirect('Hw1.php');
	}
?>

<html>
<head>
	<title></title>
</head>
<body>

<?php
	if (isset($_POST['submit'])) {

		if (($_POST['name'] != "") && ($_POST['email'] != "") && ($_POST['message']) != ""){
			$email = $_POST['email'];
			checkEmail($email);
		}
		else{
			redirect('Hw1.php');
		}	
	} 
	else {
		redirect('Hw1.php');
	}
?>

</body>
</html>
