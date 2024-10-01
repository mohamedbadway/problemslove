<?php



// function reverse($string){
//     $i = strlen($string) -1;
//     $rev = "";
//     while($i >= 0){
// $rev .= $string[$i];
// $i--;
//     }
//     return $rev;
// }
// echo reverse("yasser");



// function getprime($number){
//     for($i = 2 ; $i < $number; $i++){
// if($number % $i  ==0){
//     return 0;
// }
//     }
//     return 1;
// }
// if(getprime(7)){
//     echo "this number is prime";
// }else{
//  echo "not a prime number";
// }
// function hi($num){
//     for($i =2 ; $i < $num ; $ $i++){
//         if($num % $i == 0){
//             return 0;
//         }
//     }
//     return 1;
// }
// if(hi(7)){
//     echo "prime";
// }else{
//     echo "not prime";
// }

// function fac  ($number) {
//     $result =1;
//     for($i =$number ; $i >= 1; $i--){
//     $result = $result * $i;
//     } 
//     return $result;
// }
// echo fac(5);
// function hello ($num){
//     $result = 1;
//     for($i = $num ; $i >= 1 ; $i--){
//         $result = $result * $i;
//     }
//     return $result;
// }
// echo hello(5);

// function palind($text){
//     $length = strlen($text);
//     for($i =0 ; $i < $length / 2 ; $i++){
//         if($text[$i] !== $text[$length - $i -1]){
//             return "Not Palindrome";
//         }
//     }
//     return "Palindrome";
// }
// echo palind("madam") . "<br/>";
// echo palind("hidden") . "<br/>";
// echo palind("civic") . "<br/>";



//  function sumde($number){
//     $sum =0;

//     if($number < 0){
//         $number = -$number;
//     }
//     while($number > 0){
//         $digit = $number % 10;
//         $sum +=  $digit;
//         $number = ($number /10);

//     }
// return $sum;
//  }
//    echo sumde(12348);
// switch($n % 2){
//     case 0:
//         echo "the number of even";
//         break;
//         default:
//         echo "the number of odd";

// }
// if($n % 2 == 0){
//     echo "the number of even";
// }
// else{
//     echo "the number of odd";
// } 
// function num($num){
//     if($num % 2 == 0){
//         echo "this number is even";
//     }else{
//         echo "this number is odd";
//     }
// }
// echo num (5);
// echo "<br/>";
// echo num(12);

// $array =[1,5,9,7,3,7];
// $max = $array[0];
// foreach($array as $value){
//     if($max < $value){
//         $max = $value;
//     }
// }
// echo $max;
// function max($array){
//   $max = $array[0];
// foreach($array as $value){
//     if($max < $value){
//         $max = $value;
//     }
//     return $max;
// } 
 
// }
// echo max( $array =[1,5,9,7,3,7]);
// $array =[6,2,4,14,5];
// $max = $array[0];
// foreach($array as $value){
//     if($max < $value){
//         $max = $value;
//     }
// }
// echo $max;

//  function remove($array){
//     $result = [];
//     foreach($array as $value) {
//         $founds = false;
//         foreach($result as  $_resValue){
//             if($_resValue === $value) {
//                 $founds = true;
//                 break;
//             }
//         }
//         if(!$founds){
// $result[] = $value;
//         }
//     }
//     return $result;
//  }
//  echo "<pre>";
//  print_r(remove(array(1, 2, 2, 3, 4, 4, 5)));
//  echo "<pre/>";
//  echo "<br/>";
//  print_r(remove(array(6, 6, 5, 4, 12, 12, 52, 1)) );
?>