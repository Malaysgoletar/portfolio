<html>
<body>

<form action="" method="post">
Enter the first number: <input type="text" name="num1"><br><br>
Enter the second number: <input type="text" name="num2"><br><br>
Enter the third number: <input type="text" name="num3"><br><br>
Enter the fourth number: <input type="text" name="num4"><br><br>
Enter the fifth number: <input type="text" name="num5"><br><br>
Enter the sixth number: <input type="text" name="num6"><br><br>
Enter the seventh number: <input type="text" name="num7"><br><br>
Enter the eighth number: <input type="text" name="num8"><br><br>
Enter the ninth number: <input type="text" name="num9"><br><br>
Enter the tenth number: <input type="text" name="num10"><br><br>
<input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['num4']) && isset($_POST['num5']) && isset($_POST['num6']) && isset($_POST['num7']) && isset($_POST['num8']) && isset($_POST['num9']) && isset($_POST['num10'])) {
  $numbers = array($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5'], $_POST['num6'], $_POST['num7'], $_POST['num8'], $_POST['num9'], $_POST['num10']);
  $n = count($numbers);

  for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
      if ($numbers[$j] > $numbers[$j + 1]) {
        $temp = $numbers[$j];
        $numbers[$j] = $numbers[$j + 1];
        $numbers[$j + 1] = $temp;
      }
    }
  }

  echo "The sorted numbers are:<br>";
  for ($i = 0; $i < $n; $i++) {
    echo $numbers[$i], ', ';
  }
}
?>

</body>
</html>
