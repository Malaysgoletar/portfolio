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

<table>

<?php
for ($row = 0; $row < 8; $row++) {
  echo "<tr>";
  for ($col = 0; $col < 8; $col++) {
    $total = $row + $col;
    if ($total % 2 == 0) {
      echo "<td bgcolor=#FFFFFF></td>";
    } else {
      echo "<td bgcolor=#000000></td>";
    }
  }
  echo "</tr>";
}
?>

</table>

</body>
</html>
