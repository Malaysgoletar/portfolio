<form action="6_Calculator_Post.php" method="post">
    <input type="number" name="number1" >
    <input type="number" name="number2" >
    <button type="submit" name="add">Addition</button>
    <button type="submit" name="sub">Substraction</button>
    <button type="submit" name="mul">Multiplication</button>
    <button type="submit" name="div">Division</button>


<style>
    form{
        border: 1px solid black;
        padding: 0.5em;
        display:flex;
        flex-direction: column;
        width:100%;
        align-items: center;
    }
    button,input{
        margin: 0.5em;
        width:30%;
        padding: 1rem;
        font-size: 1.4rem;
    }
    button{
        background-color: black;
        color:white;
        border-radius: 3px;
    }
</style>
<button>
<?php

// if (isset($_POST['submit'])) {

    

  if (isset($_POST['add'])) {
    $a=$_POST['number1'];
    $b=$_POST['number2'];
    echo "A+B : ".$a+$b;
  }

  elseif (isset($_POST['sub'])) {
    $a=$_POST['number1'];
    $b=$_POST['number2'];
    echo "A-B : ".$a-$b;
  }

  elseif (isset($_POST['mul'])) {
    $a=$_POST['number1'];
    $b=$_POST['number2'];
    echo "A*B : ".$a*$b;
  }

  elseif (isset($_POST['div'])) {
    $a=$_POST['number1'];
    $b=$_POST['number2'];
    echo "A/B : ".$a/$b;
  }
?>

</button>

</form>