<!-- Write a PHP script to find the price of Car company and model using the switch case. (Company either from 
Maruti- Ertiga, swift
Hyundai- i20,creta
Kia- Seltos, carens) -->

<?php

$company="Kia";
$model="Seltos";
echo "Your Car Price : ";
switch ($company) {
    //1.
    case 'Maruti':
       
        switch ($model) {
            case 'Ergita':
                $price=18.2;
                echo"$price";
                break;
            case 'Swift':
                $price=10.5;
                echo "$price";
                break;
        }
        break;

    // 2.    
    case 'Hyundai':
        switch ($model) {
            case 'creta':
                $price=1.2;
                echo"$price";
                break;
            case 'i20':
                $price=1.5;
                echo "$price";
                break;
        }
        break;

    // 3.    
    case 'Kia':
        switch ($model) {
            case 'Seltos':
                $price=9.01;
                echo"$price";
                break;
            case 'carens':
                $price=9.2;
                echo "$price";
                break;
        }
        break;
    
    
}

?>