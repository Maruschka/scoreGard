 
<?php 
  
?>
  <form method="post" action="index.php">
   <table>
   	<th>JUMPS</th><th>SPINS</th><th>ID</th><th>Base Value</th><th>Total</th>
    <?php 
    $row="1";
    include ("row.php"); 
    $row="2";
    include ("row.php"); 
    ?>



</table>
<noscript><input type="submit" value="Submit"></noscript>
</form>