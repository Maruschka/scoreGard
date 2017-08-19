<?php
          
  
  $all_elements = get_elements();
  $all_spins = get_spins();



  if(isset($_POST['jump'])){
    $row_1_jump = $_POST['jump']; 

    $row_1_jump_combo = $_POST['jump_combo'];
    $row_1_jump_combo_2 = $_POST['jump_combo_2'];
  }
  
  if(isset($_POST['spin']))
  {
    $row_1_spin = $_POST['spin'];
  }

?>

    <tr>
      <td>
        <?php echo $row; ?>
      </td>
      <td>
        <select name="jump" onchange="this.form.submit()"><option value=""></option>
<?php
          foreach ($all_elements as $key) {
            echo "<option "; 
            if($row_1_jump == $key->id) { echo "Selected"; }
            echo " value=" . $key->id . ">" . $key->name . "</option>";
          } ?>
        </select>

        <?php if($row_1_jump != "")
        { 
        ?>
        <select name="jump_combo" onchange="this.form.submit()"><option value=""></option>

          <?php
          foreach ($all_elements as $key) 
          {
            echo "<option "; 
            if($row_1_jump_combo == $key->id) { echo "Selected"; }
            echo " value=" . $key->id . ">" . $key->name . "</option>";
          } ?>
        </select>
        <?php 
        if($row_1_jump_combo != "")
        {
          ?>
          <select name="jump_combo_2" onchange="this.form.submit()"><option value=""></option>

            <?php
            foreach ($all_elements as $key) 
            {
              echo "<option "; 
              if($row_1_jump_combo_2 == $key->id) { echo "Selected"; }
              echo " value=" . $key->id . ">" . $key->name . "</option>";
            } 
            ?>
          </select>
          <?php 
        }


      } else {
        $row_1_jump_combo = "";
        $row_1_jump_combo_2 = "";
      }
      ?>


    </td>
    <td>
          <?php include "spin.php"; ?>
    </td>
    <td>
      <?php 
      if ($row_1_jump != "") {
        $rowID = $row_1_jump;

        if($row_1_jump_combo != "") { 
         $rowID = $row_1_jump . " + " . $row_1_jump_combo; 
         
         if($row_1_jump_combo_2 != ""){
          $rowID = $rowID . " + " . $row_1_jump_combo_2;
         }
      }
    }
    else if ($row_1_spin != ""){
      $rowID = $row_1_spin;
    }
    else  {
      $rowID = "";
    }

    $row_1->rowID =  $rowID; 

    echo $row_1->rowID;
    ?>  
  </td>

  <?php 
  $baseValue = get_baseValue($all_elements, $row_1_jump) + get_baseValue($all_elements, $row_1_jump_combo)
   + get_baseValue($all_elements, $row_1_jump_combo_2);

  ?>
  <td> <?php echo $baseValue; ?> </td>

  <td> <?php echo $rowTotal = $baseValue; ?> </td>
</tr>