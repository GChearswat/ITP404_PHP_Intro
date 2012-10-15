<?php

function checkEmail($email) {
	$StrArr = str_split($email);
	$ATflag = 0;
	$_domains = array(
		'gmail.com', 
		'yahoo.com', 
		'hotmail.com',
		'aol.com',
		'usc.edu'
		);
	$domain = "";
	foreach($StrArr as $letter) {
		if ($ATflag){
			$domain = $domain . $letter;
		}
		if ($letter == '@'){
			$ATflag = 1;
		}		
	}

	$DomainFlag = in_array($domain,$_domains);

	if ($ATflag && $DomainFlag){
		echo "Thank you for your submission";
	}
	else {
		redirect('Hw1.php');
	}


}

function redirect($url) {
	header('Location: ' . $url);
}


?>