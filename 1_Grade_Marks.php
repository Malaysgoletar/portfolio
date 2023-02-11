<h2>
<?php
$math=80;

$science=78;

$eng=50;

$ph=95;

$web=100;

echo "Maths : " . $math;
ECHO "</BR>";
echo "Engines : " . $eng;
ECHO "</BR>";
echo "Physics : " . $ph;
ECHO "</BR>";
echo "Science :". $science;
ECHO "</BR>";
echo "Web : " . $web;
ECHO "</BR>";

$total=$math+$eng+$science+$ph+$web;
echo "Total : " . $total; 
ECHO "</BR>";

$grade=$total/5;

$g=(int)$grade;

echo "Avg : " . $g;
echo "<br>";

if ($g>=90) {
    echo "A+";
}
else if ($g>=80){
    echo "B+";
}
else if ($g>=70){
    echo "C+";
}
else if ($g>=50){
    echo "C+";
}
else if($g>=40){
    echo "D+";
}
else{
    echo "Fail F";
}


?>

</h2>



<style>
h2{
    color:red;
    text-align:center;
    border:4px solid black;
    background-color:gray;
    padding:5px;
    font-size:3rem;
    font-family:verdana;
}
</style>