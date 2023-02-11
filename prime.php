<html>
<body>

<form action="" method="post">
Enter the number : <input type="text" name="num"><br><br>
<input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['num'])) {
  $num = $_POST['num'];
  $count = 0;
  $i = 2;

  echo "The first $num prime numbers are:<br>";
  while ($count < $num) {
    $flag = 0;
    for ($j = 2; $j <= $i / 2; $j++) {
      if ($i % $j == 0) {
        $flag = 1;
        break;
      }
    }
    if ($flag == 0) {
      echo $i, ', ';
      $count++;
    }
    $i++;
  }
}
?>

</body>
</html>
