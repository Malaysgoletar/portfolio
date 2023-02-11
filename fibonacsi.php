<html>
<body>

<form action="" method="post">
Enter the number: <input type="text" name="num"><br><br>
<input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['num'])) {
  $num = $_POST['num'];
  $first = 0;
  $second = 1;
  echo "The first $num terms of the Fibonacci series are:<br>";
  $i = 1;
  do {
    echo $first, ', ';
    $next = $first + $second;
    $first = $second;
    $second = $next;
    $i++;
  } while ($i <= $num);
}
?>

</body>
</html>
