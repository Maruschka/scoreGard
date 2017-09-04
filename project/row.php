  <?php
          
    $all_elements = get_elements();
    $all_spins = get_spins();
    $all_spin_names = get_spin_names();

    $jump_row = "jump_" . $row;
    $jump_combo_row = "jump_combo_" .  $row;
    $jump_combo2_row = "jump_combo2_" . $row;

    $combo_check_row = "combo_" . $row;
    $combo2_check_row = "combo2_" . $row;

    $spin_row = "spin_" . $row;
    $spin_level_row = "spin_level_" . $row;
    $goe_row = "goe_" . $row;

    $jump = (isset($_POST[$jump_row]) ? $_POST[$jump_row] : "");
    $jump_combo = (isset($_POST[$jump_combo_row]) ? $_POST[$jump_combo_row] : ""); 
    $jump_combo_2 = (isset($_POST[$jump_combo2_row]) ? $_POST[$jump_combo2_row] : "");

    $combo_check = (isset($_POST[$combo_check_row]) ? "checked" : "");
    $combo2_check = (isset($_POST[$combo2_check_row]) ? "checked" : "");

    $spin = (isset($_POST[$spin_row]) ? $_POST[$spin_row] : "");
    $spin_level = (isset($_POST[$spin_level_row]) ? $_POST[$spin_level_row] : "B");
    $goe = (isset($_POST[$goe_row]) ? $_POST[$goe_row] : '0');

  ?>

      <tr>
        <td>
          <?php echo $row; ?>
        </td>
        <td>
          <?php include "jump.php"; ?>
        </td>
      <td>
          <?php include "spin.php"; ?>
      </td>
      
        <?php 
      if ($jump != "") 
      {
        $rowID = $jump;

        if($jump_combo != "") 
        { 
          $rowID = $jump . " + " . $jump_combo; 
           
          if($jump_combo_2 != "")
          {
            $rowID = $rowID . " + " . $jump_combo_2;
          }
        }
      }

      else if ($spin != "")
      {
        $full_spin = $spin . $spin_level;
        $rowID = $full_spin;
      }
      else  
      {
        $rowID = "";
      }

      //TODO - create function to get row object for insertion
      $row_1->rowID =  $rowID; 
?>
      <td>
<?php
      echo $row_1->rowID;
?>  
    </td>
    <td>
      <?php include "goe.php"; ?>

    </td>  

    <?php 
    $baseValue = get_baseValue($all_elements, $jump) + get_baseValue($all_elements, $jump_combo)
     + get_baseValue($all_elements, $jump_combo_2) + get_baseValue($all_spins, $full_spin);

    ?>
    <td> <?php echo $baseValue; ?> </td>

    <td> <?php echo $rowTotal = $baseValue; ?> </td>
  </tr>

<?php
  echo $spin_level

?>

