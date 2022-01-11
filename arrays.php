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
    $color=array("red","white","green");
    $paragraph="The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[0] carpet, the $color[2] lawn, the $color[1] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
    echo $paragraph;
    
    #Ex2
    echo "<hr/>";
    echo("<ul>
    <li>$color[0]</li>
    <li>$color[1]</li>
    <li>$color[2]</li>
    </ul>");

    #Ex3
    echo "<hr/>";
    $cities=array("Italy" =>"Rome" ,"france"=>"Paris","Germany"=>"Berlin","Greece"=>"Athens");
     asort($cities);
     foreach($cities as $cityName => $keyValue)
     echo "The Capital of $cityName is $keyValue". "<br>";
    
     #Ex4 
     echo "<hr/>";
     $colors=array("Green","Red","White");
     echo $colors[0]."<br/>";

     #Ex5
     echo "<hr/>";
     $arr=array(1,2,3,4,5);
     array_splice($arr,3,0,'$');
     echo join(" ",$arr);
     
     #Ex6
     echo "<hr/>";
     $fruits=array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");
      asort($fruits);
      foreach($fruits as $fruitKey => $keyValue){
          echo "$fruitKey = $keyValue" ."<br/>";
      }

     #Ex7
     echo "<hr/>";
     $temp=[78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73];
     $sum=0;
     rsort($temp) ;
     $max_five=array_slice($temp,0,5);
     sort($temp);
     $min_five=array_slice($temp,0,5);
     foreach($temp as $element){
       $sum+=$element;
     }
     $average=$sum/count($temp);
     echo "Average temperature is : $average" ."<br/>";
     echo "Highest Five teampretures is:". join(" ",$max_five) ."<br/>" ;
     echo "Lowest Five teampretures is:". join(" ",$min_five) ;
     
     #Ex8
     echo "<hr/>";
     $array1=array("color"=>"red",2,4);
     $array2=array("a","b","color"=>"green","shape"=>"trapezoid",4);
     print_r(array_merge($array1,$array2));

     #Ex9
     echo "<hr/>";
     $colors2=array("red","blue","white","yellow");
     print_r(array_map('ucfirst',$colors2));

     #Ex10
     echo "<hr/>";
     $colors3=array("RED","BLUE","WHITE","YELLOW");
     print_r(array_map('strtolower',$colors3));

     #Ex11
     echo "<hr/>";
    //  $num=200;
    //  while($num<250){
    //      echo $num;
    //      $num+=4;
    //  }
     for($num=200;$num<250;$num+=4){
         echo $num ." ";
        
     }

     #Ex12
     echo "<hr/>";
     $words=array("abcd","abc","de","hjjj","g","wer");
     $max_length=0;
     $min_length=9999;
     foreach($words as $word){
         if(strlen($word)>$max_length){
             $max_length=strlen($word);
         }
         if(strlen($word)<$min_length){
             $min_length=strlen($word);
         }
     }
     echo "The shortest array length is $min_length. The longest array length is $max_length";
     
     #Ex13
     echo "<hr/>";
     for($number=0;$number<10;$number++){
         echo(rand(11,20))." ";
     }
     
     #Ex14
     echo "<hr/>";
     $array3=array(2,0,10,12,6);
     $min=9999;
     foreach($array3 as $number){
         if($number<$min && $number!=0){
             $min=$number;
         }
     }
     echo $min;
    ?>
    
    
</body>
</html>