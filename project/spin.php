       <?php echo "<select name=" . $spin_row . " onchange='this.form.submit()'>"; ?> 
        <option value=""></option>

            <?php
            foreach ($all_spins as $key) 
            {
              echo "<option "; 
              if($spin == $key->id) { echo "Selected"; }
              echo " value=" . $key->id . ">" . $key->name . "</option>";
            } 
            ?>
          </select>