<?php
// $result =1;
// for($i =8 ; $i >= 1; $i--){
// $result = $result * $i;
// }

// echo $result;
// function f (  $number) {
//     $result =1;
//     for($i =$number ; $i >= 1; $i--){
//     $result = $result * $i;
//     } 
//     return $result;
// }
// echo f(5);
// function getfac ($number){
//     if($number == 1){
//         return 1;
//     }
//     return $number*getfac($number -1);
// } 
// echo getfac(5);

// prime
// self ,1
// function getprime($number){
//     for($i =2 ; $i < $number; $i++){
// if($number % $i  ==0){
//     return 0;
// }
//     }
//     return 1;
// }
// if(getprime(13)){
//     echo "this number is prime";
// }else{
//  echo "not a prime number";
// }
// whether
// removede
// array(1, 2, 2, 3, 4, 4, 5)
$num = array(
 0 => 1,
 1 => 2,
 2 => 2,
 3 => 3,
 4 => 4,
 5 => 4,
 6 => 5,
  
);
 foreach($num as $value){
    $count =0;

    foreach($num as $index => $num){
        if($value == $num){
         $count++; 
         if($count > 1){
            unset($num[$index]);
         }  
        }
    }
 
 }
 echo "<pre";
 print_r($num);
 echo"<pre/>";
?>
