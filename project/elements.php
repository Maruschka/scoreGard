<?php

//$id, $name, $type, $baseValue

 function get_elements() {
	$elements = array(
	$_1A = new Element('1A', 'Single Axel', 'Jump', '1.1'), 
	$_1S = new Element('1S', 'Single Salchow', 'Jump', '1.1'), 
	$_1T = new Element('1T', 'Single Toeloop', 'Jump', '1.1'), 
	$_1Lo = new Element('1Lo', 'Single Loop', 'Jump', '1.1'), 
	$_1F = new Element('1F', 'Single Flip', 'Jump', '1.1'), 
	$_1Lz = new Element('1Lz', 'Single Lutz', 'Jump', '1.1')
);

return $elements;
}


echo $e1A->name;


$row_1 = new Row(1);
$row_2 = new Row(2);
$row_3 = new Row(3);
$row_4 = new Row(4);
$row_5 = new Row(5);
$row_6 = new Row(6);
$row_7 = new Row(7);







?>