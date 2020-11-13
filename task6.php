<?php
$name=array('kabir','shihab','asif','shipon','imran','morshed','fahim','munna','hridoy','rony');
foreach ($name as  $value) {
	if(strlen($value)<=5){
		echo "<b>you are invited:</b><br>".$value."<br>";
	}else{
		echo"you are not invited=>".$value."<br>";
	}
}
?>