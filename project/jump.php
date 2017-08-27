          <?php echo "<select name=" . $jump_row . " onchange='this.form.submit()'>"; ?>  
              <option value=""></option>
  <?php
            foreach ($all_elements as $key) {
              echo "<option "; 
              if ($jump == $key->id) { echo "Selected"; }
              echo " value=" . $key->id . ">" . $key->name . "</option>"; 
            } ?>
          </select>
          <?php echo "<input name=" . $combo_check_row . " onchange='this.form.submit()' type='checkbox'" . $combo_check .">"; ?> 
          <?php if ($combo_check == 'checked')
          { 
          ?>
         <?php echo "<select name=" . $jump_combo_row . " onchange='this.form.submit()'>"; ?> 
            <option value=""></option>

            <?php
            foreach ($all_elements as $key) 
            {
              echo "<option "; 
              if ($jump_combo == $key->id) { echo "Selected"; }
              echo " value=" . $key->id . ">" . $key->name . "</option>";
            } ?>
          </select>
          <?php echo "<input name=" . $combo2_check_row . " onchange='this.form.submit()' type='checkbox'" . $combo2_check .">"; ?>
          <?php 
          
          if ($combo2_check == 'checked')
          {
            ?>
            <?php echo "<select name=" . $jump_combo2_row . " onchange='this.form.submit()'>"; ?> 
              <option value=""></option>

              <?php
              foreach ($all_elements as $key) 
              {
                echo "<option "; 
                if ($jump_combo_2 == $key->id) { echo "Selected"; }
                echo " value=" . $key->id . ">" . $key->name . "</option>";
              } 
              ?>
            </select>
            <?php 
          }
          else 
          {
            $jump_combo_2 = "";
          }
        } 
        else 
        {
          $jump_combo = "";
        }
?>