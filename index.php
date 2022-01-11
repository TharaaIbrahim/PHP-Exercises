<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php 
        #Ex1
        $sentence="welcome to php";
        echo strtoupper($sentence);
        echo strtolower($sentence);
        echo ucfirst($sentence);
        echo ucwords($sentence);
        #Ex2
        $date="085119";
        $datef =  date( "H:s:i", strtotime( $date ) );
        echo "<h1>$datef</h1>";
        #Ex3
        $word="I am a full stack developer at orange academy";
        if(strpos($word,"orange")){
            echo "<h2>Word Found!</h2>";
        }
        #Ex4
        $url="www.orange.com/index.php";
        $urlArr=explode("/",$url);
        echo "<h2>$urlArr[1]</h2>";

        #Ex5
        $email="info@orange.com";
        $emailArr=explode("@",$email);
        echo "<h2>$emailArr[0]</h2>";
        #Ex6
        $lastchar=explode(".",$email);
        echo "<h2>$lastchar[1]</h2>";
 
        #Ex7
        function random_password($length){
        $characters="0123456789ABCDEFGHIJKLMNOPQIXTUVWXYZabcdefjhijklmnopqixtuvwxyz";
        return substr(str_shuffle($characters),0,$length);
        }
       $password=random_password(8);
       echo "<h2>$password</h2>";
        #Ex8
        $word_replace=str_replace("I","You",$word);
        echo "<h2>$word_replace</h2>";
        #Ex9
        $first_word="hello";
        $second_word="hallo";
        $index=strcmp($first_word,$second_word);
        echo "<h2>First difference between strings at position $index : $first_word[$index] and $second_word[$index]<h2/>";
        
       #Ex10
        $str="Twinkle,twinkle,little star";
        $strToArr=explode(",",$str);
        print_r($strToArr) ;
        #Ex11
        $char="a";
        if($char==="z"){
            $next_char="a";
        }else $next_char=++$char;
       
        echo "<h2>$next_char</h2>" ;
        #Ex12
        $replacement="web ";
        $new_word=substr_replace($word,$replacement,18,0);
        echo "<h2>$new_word</h2>";
        #Ex13
        echo strtok($new_word," ");
        #Ex14
        $num1="00006541.2";
        $new_num1=trim($num1,"0000");
        echo "<h2>$new_num1</h2>";
        #Ex15
        $delete=substr_replace($new_word,"",3,3);
        echo $delete;
        #Ex16
        $word2="The quick fox ---";
        $new_word2=trim($word2,"---");
        echo "<h2>$new_word2</h2>";
        #Ex17
        $word3='\"\1+2/3*2:2-3/4*3';
        $new_word3=str_ireplace(array( '\\', '"',
        '+' , '*', ':', '-' ,'/'),"",$word3);
        echo "<h2>$new_word3</h2>";
        #ex18
        $word4="The quick brown fox jumps over the lazy dog ";
        $first_five = implode(' ', array_slice(str_word_count($word4, 1), 0, 5));
        echo "<h2>$first_five</h2>";
        #ex19
        $num3='2,543.12';
        $new_num3=str_ireplace(',',"",$num3);
        echo "<h2>$new_num3</h2>";
        #Ex20  
        for($letter="a";$letter<="z";$letter++){
         echo $letter;
          if($letter==="z"){
              break;
          }
      }
        ?>
        
   
    </body>
</html>
    