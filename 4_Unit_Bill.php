<!-- write a PHP program to calculate electricity bill using if-else conditions. -->
<!-- Conditions: -->

<!-- For first 50 units – Rs. 3.50/unit -->
<!-- For next 100 units – Rs. 4.00/unit -->
<!-- For next 150 units – Rs. 5.20/unit -->
<!-- For units above 250 – Rs. 6.50/unit -->

<form action="4_Unit_Bill.php" method="post">
    <input type="text" name="power" id="number">
    <button type="submit" name="submit">Submit</button>
</form>
<h1>
<?php

if (isset($_POST['submit'])) {
    $power=$_POST['power'];

// $power=80;
$bill=NULL;

if ($power>250) {
    $price=6.50;
    $bill=$power*$price;
    echo "$power watts X ₹ $price = ₹". $bill;
}
 else if ($power>150) {
    $price=5.20;
    $bill=$power*price;
    echo "$power watts X ₹ $price = ₹". $bill;
} 
else if ($power>100) {
    $price=4.00;
    $bill=$power*$price;
    echo "$power watts X ₹ $price = ₹". $bill;
}
else if ($power>50) {
    $price=3.50;
    $bill=$power*$price;
    echo "$power watts X ₹ $price = ₹". $bill;
}
else if ($power<50) {
    $price=1.50;
    $bill=$power*$price;
    echo "$power watts X ₹ $price = ₹". $bill;
}


}
?>

</h1>

<style>
h1{
    color:green;
    text-align:center;
    border:4px solid black;
    background-color:gray;
    padding:5px;
    font-size:3rem;
    font-family:verdana;
}
form{
    border:1px solid black;
    padding:1rem;
    font-size:1rem;
}
</style>