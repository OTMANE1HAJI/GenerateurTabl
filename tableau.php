<?php
$rows=$_POST['ligne'];
$cols=$_POST['cols'];
$border=$_POST['bordure'];
$align=$_POST['alig'];

function drawTable($l,$c,$align,$border){
  echo "<table border='$border' align='$align'>";
  for($i=1; $i<=$l ; $i++){
    echo "<tr>";
    for($j=1;$j<=$c;$j++){
      echo "<td> ($i,$j) </td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}
drawTable($rows,$cols,$align,$border);


 ?>
