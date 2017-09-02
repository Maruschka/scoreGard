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

function get_spins() 
{
	$elements = array(
		$_SspB = new Element('SspB', 'Sit', 'Spin', 1.2),
		$_Ssp1 = new Element('Ssp1', 'Sit', 'Spin', 2.2), 
		$_Ssp2 = new Element('Ssp2', 'Sit', 'Spin', 3.2), 
		$_Ssp3 = new Element('Ssp3', 'Sit', 'Spin', 4.2), 
		$_Ssp4 = new Element('Ssp4', 'Sit', 'Spin', 5.2),  
		$_LspB = new Element('LspB', 'Layback', 'Spin', 0.1), 
		$_Lsp1 = new Element('Lsp1', 'Layback', 'Spin', 1.1), 
		$_Lsp2 = new Element('Lsp2', 'Layback', 'Spin', 2.1), 
		$_Lsp3 = new Element('Lsp3', 'Layback', 'Spin', 3.1), 
		$_Lsp4 = new Element('Lsp4', 'Layback', 'Spin', 4.1), 
		$_Asp1 = new Element('Asp1', 'Camel', 'Spin', 0.2), 
		$_Asp2 = new Element('Asp2', 'Camel', 'Spin', 1.2), 
		$_Asp3 = new Element('Asp3', 'Camel', 'Spin', 2.2), 
		$_Asp4 = new Element('Asp4', 'Camel', 'Spin', 3.2), 
		$_Asp5 = new Element('Asp5', 'Camel', 'Spin', 4.2), 
		$_UspB = new Element('UspB', 'Upright', 'Spin', 0.3),
		$_Usp1 = new Element('Usp1', 'Upright', 'Spin', 1.3), 
		$_Usp2 = new Element('Usp2', 'Upright', 'Spin', 2.3), 
		$_Usp3 = new Element('Usp3', 'Upright', 'Spin', 3.3), 
		$_Usp4 = new Element('Usp4', 'Upright', 'Spin', 4.3),  
		$_WspB = new Element('WspB', 'Combo', 'Spin', 0.4), 
		$_Wsp1 = new Element('Wsp1', 'Combo', 'Spin', 1.4), 
		$_Wsp2 = new Element('Wsp2', 'Combo', 'Spin', 2.4), 
		$_Wsp3 = new Element('Wsp3', 'Combo', 'Spin', 3.4), 
		$_Wsp4 = new Element('Wsp4', 'Combo', 'Spin', 4.4), 

	);
	
	return $elements;
}


 function get_spin_names() 
 {
 	$elements = array(
 		'Ssp' => 'Sit',
 		'Lsp' => 'Layback',
 		'Asp' => 'Camel',
 		'Usp' => 'Upright',
 		'Wsp' => 'Combo'
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