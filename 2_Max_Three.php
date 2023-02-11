<!-- Write PHP Script to find the maximum number out of three given numbers(using else if ladder). -->

<form action="2_Max_Three.php" method="post">
    <input type="number" name="number1" >
    <input type="number" name="number2" >
    <input type="number" name="number3" >
    <button type="submit" name="result">Result</button>
</form>

<?php


if (isset($_POST['result'])) {
    $no1=$_POST['number1'];
    $no2=$_POST['number2'];
    $no3=$_POST['number3'];
  

if ($no1>$no2 )  {
    if($no1>$no3) {
        echo "$no1 is greatest number ";
    }
    else{
        echo "$no3 is greatest number ";
    }
} 
else  {
    if($no2>$no3){
         echo "$no2 is greatest number ";
    }
    else{
        echo "$no3 is greatest number ";
    }
}


}



?>
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
        background-color: blue;
        color:white;
        border:none;
        border-radius: 3px;
    }
</style>

