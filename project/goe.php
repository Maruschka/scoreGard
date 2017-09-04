<?php

	        $goe_levels = array ('+3','+2','+1','0','-1','-2','-3');


        echo "<select name=" . $goe_row . " onchange='this.form.submit()'>";
?> 
          
<?php
            foreach ($goe_levels as $key) 
            {
              echo "<option "; 
              if ($goe == $key) { echo "Selected"; }
              echo " value=" . $key . ">" . $key . "</option>";
            } 
?>
          </select>




