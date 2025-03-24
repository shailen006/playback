<?php
$a=array('a'=>'Amish','b'=>'Banana','c'=>'Cat','d'=>'Dog','e'=>'Elbo');
echo '<pre>';
print_r($a);
echo '</pre>';
$finalArray=array();
foreach($a as $key=>$value){
	$finalArray[$value]=$key;
}
echo '<pre>';
print_r($finalArray);
echo '</pre>';