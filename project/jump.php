          <?php echo "<select name=" . $jump_row . " onchange='this.form.submit()'>"; ?>  
              <option value=""></option>
  <?php
            foreach ($all_elements as $key) {
              echo "<option "; 
              if($jump == $key->id) { echo "Selected"; }
              echo " value=" . $key->id . ">" . $key->name . "</option>"; 
            } ?>
          </select>

          <?php if($jump != "")
          { 
          ?>
         <?php echo "<select name=" . $jump_combo_row . " onchange='this.form.submit()'>"; ?> 
            <option value=""></option>

            <?php
            foreach ($all_elements as $key) 
            {
              echo "<option "; 
              if($jump_combo == $key->id) { echo "Selected"; }
              echo " value=" . $key->id . ">" . $key->name . "</option>";
            } ?>
          </select>
          <?php 
          
          if($jump_combo != "")
          {
            ?>
            <?php echo "<select name=" . $jump_combo2_row . " onchange='this.form.submit()'>"; ?> 
              <option value=""></option>

              <?php
              foreach ($all_elements as $key) 
              {
                echo "<option "; 
                if($jump_combo_2 == $key->id) { echo "Selected"; }
                echo " value=" . $key->id . ">" . $key->name . "</option>";
              } 
              ?>
            </select>
            <?php 
          }


        } else {
          $jump_combo = "";
          $jump_combo_2 = "";
        }
?>