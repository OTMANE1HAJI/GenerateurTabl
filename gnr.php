<?php
function print_select($name,$nbr){
  echo "<select name='$name'>";
  for($i=1;$i<=$nbr;$i++){
    echo "<option value='$i'> $i </option>";
  }
  echo "</select>";
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TABLEAU</title>
    <style>
      tr,td,th{
        text-align: left;
      }
    </style>
  </head>
  <body>
    <form  action="tableau.php" method="post"  style='margin :auto;;border: solid 1px black; width:50%;'>
      <table border='4' width="80%" align="center">
        <caption><h1>Générateur tableau</h1></caption>
        <tr>
          <th >Nombre de lignes</th><td>
            <?php print_select('ligne',10); ?>
          </td>
        </tr>
        <tr>
          <th>Nombre de colonnes</th><td>
            <?php print_select('cols',10); ?>
          </td>
        </tr>
        <tr>
          <th>bordure</th><td>
            <?php print_select('bordure',10); ?>
          </td>
        </tr>
        <tr>
          <th>Alignement</th><td>
            <select name="alig">
              <option value="center">centrer</option>
              <option value="left">left</option>
              <option value="right">right</option>
          </td>
        </tr>
        <tr>
          <td> <button type="submit" name="send">générer</button> </td>
        </tr>
      </table>
    </form>

  </body>
</html>
