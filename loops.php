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
    for($num=1;$num<=10;$num++){
        if($num==10){
            echo $num;
        }
        else echo $num . "-";

    }
    #Ex2
    echo "<hr/>";
    $sum=0;
    for($num=0;$num<=30;$num++){
        $sum+=$num;}
        echo $sum;
    #Ex3
    echo "<hr/>";
    $count=0;
    for($char="A";$char<="E";$char++){
        if($char==="A"){
           for ($i=0;$i<5;$i++){ 
               echo $char." ";
            }
             $count+=2;
        }else{ for($j=0;$j<5-$count;$j++){
                echo "A"." ";
            }
            for($i=0;$i<$count && $i<5;$i++){
                    echo $char." ";  
                 }
       } 
       if($char!=="A")$count+=1;
       echo "<br/>";
    }

      #Ex4
      echo "<hr/>";
      $count1=0;
      for($num=1;$num<=5;$num++){
          if($num==1){
             for ($i=0;$i<5;$i++){ 
                 echo $num." ";
              }
               $count1+=2;
          }else{ for($j=0;$j<5-$count1;$j++){
                  echo "1"." ";
              }
              for($i=0;$i<$count1 && $i<5;$i++){
                      echo $num." ";  
                   }
         } 
         if($num!==1)$count1+=1;
         echo "<br/>";
      }

      #Ex5
      echo "<hr/>";
      for($num=1;$num<6;$num++){
      $arr=[0,0,0,0,0];
       array_splice($arr,$num-1,1,$num);
        echo join(" ",$arr)."<br/>";
      }

     #Ex6
     echo "<hr/>";
     function factorial($num){
         $factorial=1;
         for($i=2;$i<=$num;$i++){
           $factorial*=$i;
         }
         echo $factorial;
     }
     factorial(5);

     #Ex7
     echo "<hr/>";
     function fibonacci($length){
          $total=0;
          $arr=array();
         for($num=0;$num<$length;$num++){
             
             if($num>1){
                   $total=$arr[$num-1]+$arr[$num-2];
                   array_push($arr,$total);
             }else{
                 array_push($arr,$total);
                 $total++;
                 
             }
              
         }
         echo join(",",$arr);
     }
     fibonacci(10);

     #Ex8
     echo "<hr/>";
     $sentence="Orange Coding Academy";
     $countChar=0;
     for($i=0;$i<strlen($sentence);$i++){
       if(strtolower($sentence[$i]) ==="c"){
           $countChar++;
       }
     }
     echo $countChar;

     #Ex9
     echo "<hr/>";
     echo "<table style='border:2px solid; border-collapse: seperate'><br/>";
    for($col=1;$col<7;$col++){
        echo "<tr>";
         for($num=1;$num<6;$num++){
             $result=$col*$num;
             echo "<td style='padding: 3px;  border: 1px solid black;'>$col * $num = $result </td>";
     }  
     echo "</tr>";
    
    }
    echo "</table>";

    #Ex10
    echo "<hr/>";
    function repeat_int($length){
       for($int=1;$int<=$length;$int++){
           if($int%5==0 && $int%3==0){
            echo "FizzBuzz"." " ;
         }elseif($int%5==0){
             echo "Buzz"." ";
         }elseif($int%3 ==0){
                   echo "Fizz"." ";
         }else{
             echo $int ." ";
         }
       } 
    }
    repeat_int(10);

    #Ex11
    echo "<hr/>";
    $number=1;
        for($row=1;$row<=5;$row++){ 
            for($num=1;$num<=$row;$num++){
            echo $number." ";
            $number++;
        }
        echo "<br/>";
    }
   
    #Ex12
    echo "<hr/>";
       $charCounter=ord("A");
       $spaces=1;
        for($i=1;$i<=5;$i++){
             for($i=5;$i>=$spaces;$i--){ 
                echo str_repeat('&nbsp;', $i);
            }
        for($char="A";ord($char)<$charCounter;$char++){
            echo str_repeat('&nbsp;', 2);
            echo $char." ";
        }
       $charCounter++;
       $spaces++;
       echo "<br/>";
       
       if($i==5){
        $charCounter=ord("E");
         $spaces=1;
           for($i=1;$i<=5;$i++){
            for($i=1;$i<=$spaces;$i++){ 
               echo str_repeat('&nbsp;', $i);
           }
       for($char="A";ord($char)<$charCounter;$char++){
           echo str_repeat('&nbsp;', 2);
           echo $char." ";
       }
       $charCounter--;
       $spaces++;
       echo "<br/>";
       }
    }
}

    
    ?>
</body>
</html>