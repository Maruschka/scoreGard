<?php

//$id, $name, $type, $baseValue

 function get_elements() {
	$elements = array(
	$_1A = new Element('1A', 'Single Axel', 'Jump', 1.2), 
	$_1S = new Element('1S', 'Single Salchow', 'Jump', 0.1), 
	$_1T = new Element('1T', 'Single Toeloop', 'Jump', 0.2), 
	$_1Lo = new Element('1Lo', 'Single Loop', 'Jump', 0.3), 
	$_1F = new Element('1F', 'Single Flip', 'Jump', 0.4), 
	$_1Lz = new Element('1Lz', 'Single Lutz', 'Jump', 0.5)
);

return $elements;
}

function get_spins() {
		$elements = array(
	$_Ssp = new Element('Ssp', 'Sit', 'Spin', 1.2), 
	$_Lsp = new Element('Lsp', 'Layback', 'Spin', 0.1), 
	$_Asp = new Element('Asp', 'Camel', 'Spin', 0.2), 
	$_Usp = new Element('Usp', 'Upright', 'Spin', 0.3), 
	$_Wsp = new Element('Wsp', 'Combo', 'Spin', 0.4), 
	$_Osp = new Element('Osp', 'Flying Sit', 'Spin', 0.5)
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