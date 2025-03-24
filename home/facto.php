<?php 
function factorials($number){
	$num=1;
	for($i=1; $i <= $number; $i++){
		$num=$num*$i;
	}
	return $num;
}

echo factorials(5);