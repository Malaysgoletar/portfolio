<html>
<head>
<style>
table, td {
  border: 1px solid black;
  width: 800px;
  height: 100px;
}
</style>
</head>
<body>

<form action="" method="post">
  Number of Rows: <input type="text" name="rows"><br><br>
  Number of Columns: <input type="text" name="columns"><br><br>
  <input type="submit" value="Submit">
</form>

<br><br>

<?php
if (isset($_POST['rows']) && isset($_POST['columns'])) {
  $rows = $_POST['rows'];
  $columns = $_POST['columns'];

  echo "<table>";

  for ($row = 0; $row < $rows; $row++) {
    echo "<tr>";
    for ($col = 0; $col < $columns; $col++) {
      $total = $row + $col;
      if ($total % 2 == 0) {
        echo "<td bgcolor=#FFFFFF></td>";
      } else {
        echo "<td bgcolor=#000000></td>";
      }
    }
    echo "</tr>";
  }

  echo "</table>";
}
?>

</body>
</html>
