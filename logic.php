<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    #Ex1
    function leapYear($year){
        if($year%4==0){
            return "$year is a leap year";
        }else{
            return "$year is not a leap year";}
            
        
    }
    echo leapYear(2013);

    #Ex2
    echo "<hr/>";
    function check_temperture($temp){
        if($temp<20){
            echo "We are in winter";
        }else echo "It is summer time";
    }
    check_temperture(20);

    #Ex3
    echo "<hr/>";
    function sum($arr){
        $keys=array_keys($arr);
     if($arr[$keys[0]]===$arr[$keys[1]]){
         return ($arr[$keys[0]]+$arr[$keys[1]])*3;
     }else return $arr[$keys[0]]+$arr[$keys[1]];

    }
    $arr=array("firstInt" =>2,"secondInt"=>2);
    echo sum($arr);

    #Ex4
    echo "<hr/>";
    function check_sum($arr){
        $keys=array_keys($arr);
        $sum=$arr[$keys[0]]+$arr[$keys[1]];
        if($sum==30) echo $sum;
        else echo "false";
    }
    check_sum(["firstInt" =>2,"secondInt"=>10]);

    #Ex5
    echo "<hr/>";
    function multiOf3($num){
        if ($num>0 && $num%3 === 0) echo $num;
        else echo "false";
    }
    
    multiOf3(20);
    
    #Ex6
    echo "<hr/>";
    function check_inclusivity($num){
        if($num<=50 || $num>=20) echo "true";
        else echo "false";
        }
        check_inclusivity(50);

    #Ex7
    echo "<hr/>";
    function largest_num($arr){
        $max=0;
        foreach($arr as $num){
            if($num>$max) $max=$num;
        }
        echo $max;
    }
    largest_num([1,5,9]);

    #Ex8
    echo "<hr/>";
    function electricity_bill($unit){
        if($unit<=50){
            echo ($unit*2.50)." JD";
        }elseif($unit<=100){
            echo(50*2.50 +($unit-50)*5)." JD";
        }elseif($unit<=200){
            echo (50*2.50+(50*5)+($unit-100)*6.20) ." JD";
        }elseif($unit>250){
            echo (50*2.50+50*5+150*6.20+($unit*250)*7.50)." JD";
        }
    }
    electricity_bill(70);

    #Ex9
    echo "<hr/>";
    function calculator($num1,$num2,$operator){
        switch($operator){
            case "+": echo $num1+$num2;break;
            case "-": echo $num1-$num2;break;
            case "/":echo $num1/$num2;break;
            case "*":echo $num1*$num2;break;
        
        }
    }
    calculator(5,2,"/");

    #Ex10
    echo "<hr/>";
    function eligible_vote($age){
        if($age<18) echo "This person is not eligible to vote";
        else echo "This person is eligible to vote";
    }
    eligible_vote(15);

    #Ex11
    echo "<hr/>";
    function sign_num($num){
        if($num>0) echo "Positive";
        else echo "Negative";
    }
    sign_num(-60);

    #Ex12
    echo "<hr/>";
    function grade($arr){
        $sum=array_sum($arr);
        $avg=$sum/count($arr);
        if($avg<60) echo "F";
        elseif ($avg<70) echo "D";
        elseif ($avg<80) echo "C";
        elseif ($avg<90) echo "B";
        elseif ($avg<=100) echo "A";

    }
    grade([60,86,95,63,55,74,79,62,50]);

    ?>
</body>
</html>