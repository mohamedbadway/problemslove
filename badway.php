<!-- start -->
<?php
// 1. Reverse a String
// Problem:
// Write a PHP function to reverse a given string without using built-in functions.

// input:
// Hello World!
// Welcome Backend 31

// Output:
// dlroW olleH
// 13 dnekcaB emocleW
// var hello = "rrrrr";
// $$hello = "mohamed";
// echo $$hello;
// builtinfuncation
// $name = "mostefa";
// echo strrev($name);


// function reverse($string){
//   $i = strlen($string) ;
//   $rev = "";
//   while($i >= 0)  {
//     $rev .= $string[$i];
//     $i--;
//   }
//   return $rev;
// }
// echo reverse("mohamed");
// solve1
//  function rev($hello) {
//     $i = strlen($hello) -1;
//           while($i >= 0){
//     echo $hello[$i];  
//     $i--;  
//     }
//    }
//     echo rev("Hello World!"); 
 

//  echo "<br/>";
//  echo rev("Welcome Backend 31");

//  $string ="mohamed";
// for($i=6;$i >= 0; $i--){
//     echo $string[$i];
// }
// $string ="mohamed";
// for($i=6;$i >= 0; $i--){
//     echo $string[$i];
// }
// function reverse($string){
//     for($i=$string;$i >=0;$i--){
//         $string[$i];
//     }
// }

// 2. Check if a Number is Prime

// Problem:
// Write a PHP function to check whether a number is prime without using built-in functions.

// input:
// 7
// 3
// 12
// prime
// self ,1
// solve2
// $number = 7;
// for($i=1;$i<=$number;$i++){
//   $prime = 0;
//   if($number % $i == 0){
//     $prime++;
//   }  
// }
// if($prime == 2 ){
//     echo "  prime";
// }else{
//     echo "not prime";
// }
// $number = 7;
// for($i=1;$i<=$number;$i++){
//   $prime = 0;
//   if($number % $i == 0){
//     $prime++;
//   }  
// }
// if($prime == 2 ){
//     echo "  prime";
// }else{
//     echo "not prime";
// }
// $number = 7;
// $prime = 0;
// for($i=2;$i<$number;$i++){
  
//   if($number % $i == 0){
//     $prime++;
//   }  
// }
// if($prime == 0 ){
//     echo "  prime";
// }else{
//     echo "not prime";
// }



// function getprime($number){
//     for($i =2 ; $i < $number; $i++){
// if($number % $i  ==0){
//     return 0;
// }
//     }
//     return 1;
// }
// if(getprime(12)){
//     echo "this number is prime";
// }else{
//  echo "not a prime number";
// }
// echo"<br/>";
// if(getprime(3)){
//     echo "this number is prime";
// }else{
//  echo "not a prime number";
// }
// echo"<br/>";
// if(getprime(12)){
//     echo "this number is prime";
// }else{
//  echo "not a prime number";
// }




// solve3
// 3. Factorial of a Number
// Problem:
// Write a PHP function to calculate the factorial of a number without using recursion or built-in functions.

// input:
// 5
// 8

// Output:
// 120
// 40320
// $num = 5*4*3*2*1;
// echo $num;
// echo "<br/>";
// $text = 8*7*6*5*4*3*2*1;
// echo $text;

// function fact($num){
//    $fac = 1; 
//     for($i=1;$i <= $num;$i++){
//     $fac = $fac * $i;
//     }
//     return $fac;
// }
// print fact(5);



// function f (  $number) {
//     $result =1;
//     for($i =$number ; $i >= 1; $i--){
//     $result = $result * $i;
//     } 
//     return $result;
// }
// echo f(5);
// echo"<br/>";
// echo f(8);
// function getfac ($number){
//     if($number == 1){
//         return 1;
//     }
//     return $number*getfac($number -1);
// } 
// echo getfac(5);




// solve4
// 4. Check if a String is a Palindrome
// Problem:
// Write a PHP function to check whether a given string is a palindrome without using built-in functions.

// input:
// madam
// hidden
// civic

// Output:
// Palindrome
// Not Palindrome
// Palindrome
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

//  function fact($num){
//     $i = strlen($num);
//     $hamda = "";
//     for($j = $i -1;$j >= 0;$j--){
//         $hamda = $hamda . $num[$j];

         
//     }
//     return $hamda;
//  }

// if($hamda == fact("madam")){
//     echo "Palindrome";
// }else{
//     echo "Not Palindrome";
// }
// echo reverse("mohamed");


// solve5
// 5. Sum of Digits in a Number
// Problem:
// Write a PHP function to calculate the sum of digits of a given number without using built-in functions.

// input:
// 12348
// 9254

// output:
// 18
// 20
 function sumde($number){
    $sum =0;

    // if($number < 0){
    //     $number = -$number;
    // }
    while($number > 0){
        $digit = $number % 10;
        $sum = $sum + $digit;
        $number = ($number /10);

    }
return $sum;
 }
 echo sumde(12348);
//  echo "<br/>";
//  echo sumde(9254);

// $num = (int)(12.5);
//  var_dump($num);

//solve 6
// 6. Check if a Number is Even or Odd
// Problem:
// Write a PHP function to check if a number is even or odd without using built-in functions.
// input:
// 12
// 5

// output:
// Even
// Odd
// $n = 12; 
// 12even 5odd
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


//solve7
// 7. Find the Maximum Value in an Array
// Problem:
// Write a PHP function to find the maximum value in an array without using built-in functions.

// input:
// array(1, 5, 9, 3, 7)
// array(6, 2, 4, 14, 5)

// output:
// 9
// 14
// $array =[1,5,9,7,3,7];
// $max = $array[0];
// foreach($array as $value){
//     if($max < $value){
//         $max = $value;
//     }
// }
// echo $max;
// $array =[6,2,4,14,5];
// $max = $array[0];
// foreach($array as $value){
//     if($max < $value){
//         $max = $value;
//     }
// }
// echo $max;



//  solve8
// 8. Remove Duplicates from an Array
// Problem:
// Write a PHP function to remove duplicate values from an array without using built-in functions.

// input:
// array(1, 2, 2, 3, 4, 4, 5)
// array(6, 6, 5, 4, 12, 12, 52, 1);

// output:
// Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
// Array ( [0] => 6 [1] => 5 [2] => 4 [3] => 12 [4] => 52 [5] => 1 )
// $num = array(
//     0 => 1,
//     1 => 2,
//     2 => 2,
//     3 => 3,
//     4 => 4,
//     5 => 4,
//     6 => 5,
     
//    );
//     foreach($num as $value){
//        $count =0;
   
//        foreach($num as $index => $num){
//            if($value == $num){
//             $count++; 
//             if($count > 1){
//                unset($num[$index]);
//             }  
//            }
//        }
    
//     }
//     echo "<pre";
//     print_r($num);
//     echo"<pre/>";

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

//  $num = array(
//     0 => 1,
//     1 => 2,
//     2 => 2,
//     3 => 3,
//     4 => 4,
//     5 => 4,
//     6 => 5
     
//    );
// $num = [1,2,2,3,4,4,5];


// for($i=0; $i < 9 ;$i++){
// for($j=0;$j<$i;$j++){
// if($num[$i] != $num[$j]){}
// echo "$num[$i] ";
// } 

 
}










?>
<!-- finsh -->