
<?php


function get_baseValue($element_Array, $element) {
	if(!empty($element)) {
		foreach ($element_Array as $key) {
			if($key -> id == $element){
				$baseValue = $key -> baseValue;
				return $baseValue;
			}

		}
	}
	else return 0;
}

function emptyElement($element){
	$element = '';
}


function setElement_row($row_nr, $row_element, $element){


}