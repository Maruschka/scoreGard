<?php   
        $spin_levels = array ('B','1','2','3','4');


        echo "<select name=" . $spin_row . " onchange='this.form.submit()'>";
?> 
          <option value=""></option>
<?php
            foreach ($all_spin_names as $key => $value) 
            {
              echo "<option "; 
              if ($spin == $key) { echo "Selected"; }
              echo " value=" . $key. ">" . $value . "</option>";
            } 
?>
          </select>

<?php
          if ($spin != "")
          {
            echo "<select name=" . $spin_level_row . " onchange='this.form.submit()'>";
              foreach ($spin_levels as $key) 
              {
                echo "<option ";
                if ($spin_level == $key) { echo "Selected"; }
                echo " value=" . $key . ">". $key . "</option>";
              }

            echo "</select>";
          }
  

?>