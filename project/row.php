  <?php
          
    $all_elements = get_elements();
    $all_spins = get_spins();
    $jump_row = "jump_" . $row;
    $jump_combo_row = "jump_combo_" .  $row;
    $jump_combo2_row = "jump_combo2_" . $row;
    $spin_row = "spin_" . $row;

    $jump = (isset($_POST[$jump_row]) ? $_POST[$jump_row] : "");
    $jump_combo = (isset($_POST[$jump_combo_row]) ? $_POST[$jump_combo_row] : ""); 
    $jump_combo_2 = (isset($_POST[$jump_combo2_row]) ? $_POST[$jump_combo2_row] : "");
    $spin = (isset($_POST[$spin_row]) ? $_POST[$spin_row] : "");

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
      <td>
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
        $rowID = $spin;
      }
      else  
      {
        $rowID = "";
      }

      //TODO - create function to get row object for insertion
      $row_1->rowID =  $rowID; 

      echo $row_1->rowID;
      ?>  
    </td>

    <?php 
    $baseValue = get_baseValue($all_elements, $jump) + get_baseValue($all_elements, $jump_combo)
     + get_baseValue($all_elements, $jump_combo_2);

    ?>
    <td> <?php echo $baseValue; ?> </td>

    <td> <?php echo $rowTotal = $baseValue; ?> </td>
  </tr>


