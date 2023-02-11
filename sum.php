<html>
<body>

<form action="" method="post">
Enter the first number: <input type="text" name="num1"><br><br>
Enter the second number: <input type="text" name="num2"><br><br>
<input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['num1']) && isset($_POST['num2'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $sum = 0;

  while ($num1 > 0) {
    $rem = $num1 % 10;
    $sum += $rem;
    $num1 = (int) ($num1 / 10);
  }

  while ($num2 > 0) {
    $rem = $num2 % 10;
    $sum += $rem;
    $num2 = (int) ($num2 / 10);
  }

  echo "The sum of digits of the two numbers is: $sum";
}
?>

</body>
</html>
