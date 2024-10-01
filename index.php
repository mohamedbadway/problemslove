<?php

/**
 * DataTypes int, float, string, boolean, null, array
 * variables
 * operators + - / * %, < > <= >= == === != <>, && ||
 * if else_if else
 * switch case
 * function
 * loops while, do while, for, foreach
 * 
 */
$arr = array(10, "Ali", "ahmed", true, 1000);
 
for ($x = 4; $x >= 0; $x--) {
   $arr[$x] . "<br/>";
}
echo "<pre>";
print_r($arr);
echo "<pre/>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>


<?php


// If Condition
// $age = 41;
// if ($age > 19 && $age < 27) {
//   echo "يا شااااااب";
// } else if ($age >= 27 && $age <= 40) {
//   echo "هاتخلص ورق المعاش امتى";
// } else if ($age > 40) {
//   echo "اسفين يا حج";
// } else {
//   echo "يلا يابني من هنا";
// }

// $wish = 'run';

// switch ($wish) {
//   case 'eat':
//     echo "Your wish is to eat";
//     break;
//   case 'drink':
//     echo "Your wish is to drink";
//     break;
//   case "run":
//     echo "Your wish is to run";
//     break;
//   default:
//     echo "your wish is not available";
// }
// ============================
// $age = 41;

// switch ($wish) {
//   case $age < 18:
//     echo "You are young";
//     break;
//   case $age < 30:
//     echo "عبد الخالق يانج";
//     break;
//   case $age < 60:
//     echo "مسا مسا يا حاج";
//     break;
//   default:
//     echo "مسا مسا يا رؤوف";
// }
// =====================================
// function age($currentYear, $birthYear)
// {
//   $age = $currentYear - $birthYear;
//   return $age;
// }


// $ahmed = age(2024, 1990);
// $Mohamed = age(2024, 2000);

// echo "Ahmed is $ahmed years old &nbsp;";
// echo "Mohamed is $Mohamed year old <br>";
// ==============================================
// function check($age, $name)
// {
//   // can get National ID
//   if ($age < 16) {
//     echo "$name ميقدرش يطلع بطاقة <br>";
//   } else {
//     echo "$name يقدر يطلع بطاقة <br>";
//   }
//   // can vote or not
//   if ($age < 18) {
//     echo "$name عايز تنتخب يا فسلة <br>";
//   } else {
//     echo "$name صوتك امانة  <br>";
//   }
//   // can be a senator
//   if ($age < 30) {
//     echo "$name هش من هنا <br>";
//   } else {
//     echo "$name قدم ورققك في انتخابات مجلس الشعب فقط  <br>";
//   }
//   echo "<hr>";
// }

// function calcAge($birthYear, $name, $currentYear = 2024)
// {
//   $age = $currentYear - $birthYear;
//   check($age, $name);
// }
// calcAge(1996, "ali");
// calcAge(2010, "Ahmed");
// calcAge(1980, "Mohamed");
// ==================
// Indexed array
// $arr = array(10, "Ali", "ahmed", true, 1000);
// multidimenstional Array
// $arr = array(10, array("Mohamed", "Ibrahim", "Ali"), "ahmed", true, 1000);

// associative array
// $arr = array(
//     "id" => 1,
//     "name" => "Ibrahim",
//     "phone" => "010",
//     "birthyear" => "1920"
//   )
// Multidimensional associative array
// $arr = array(
//   array(
//     "id" => 1,
//     "name" => "Ibrahim",
//     "phone" => "010",
//     "birthyear" => "1920"
//   ),
//   array(
//     "id" => 1,
//     "name" => "Ahmed",
//     "phone" => "010",
//     "birthyear" => "1920"
//   ),
//   array(
//     "id" => 1,
//     "name" => "Mohamed",
//     "phone" => "010",
//     "birthyear" => "1920"
//   ),
//   array(
//     "id" => 1,
//     "name" => "Alaa",
//     "phone" => "010",
//     "birthyear" => "1920"
//   )
// );
// ======================
// $arr = array(10, "Ali", "ahmed", true, 1000);
// $x = 4; //1 2 3 4 5
// while ($x >= 0) {
//   echo $arr[$x] . "<hr>";
//   $x--;
// }
// ======================
// $users = array(
//   array(
//     "id" => 1,
//     "name" => "Ibrahim",
//     "phone" => "010",
//     "birthyear" => "1920"
//   ),
//   array(
//     "id" => 1,
//     "name" => "Ahmed",
//     "phone" => "010",
//     "birthyear" => "1920"
//   ),
//   array(
//     "id" => 1,
//     "name" => "Mohamed",
//     "phone" => "010",
//     "birthyear" => "1920"
//   ),
//   array(
//     "id" => 1,
//     "name" => "Alaa",
//     "phone" => "",
//     "birthyear" => "1920"
//   )
// );

// foreach ($users as $user) {
//   echo "id: " . $user['id'] . "<br>";
//   echo "name: " . $user['name'] . "<br>";
//   echo "phone: " . $user['phone'] . "<br>";
//   echo "birthyear: " . $user['birthyear'] . "<br>";
//   echo "age: " . $user['age'] . "<br>";
//   echo "<hr>";
// }
// ======================
// ======================
// ======================