<?php

// print($_GET['password']);
// print_r([$_GET]);
// print($_REQUEST);
// echo "<pre>";
// print_r($_SERVER);
// echo "<pre/>";
// if(isset($_GET['password'])){
//     print  $_GET['name'];  
//     print "<br/>";
// print  $_GET['password'];
// }else{
// print "No, password";
// }
if(isset( $_GET['+'])){
$result = $_GET['n1'] + $_GET['n2'];
echo $result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" >

    <!-- <label for="">username</label>
    <input type="text" name="name" disabled>
    <label for="">password</label>
    <input type="password" name="password" readonly>
    <button>submit</button> -->
    <label for="">n1</label>
    <input type="text" name="n1" >
    <label for="">n2</label>
    <input type="password" name="n2" >
    <button >+</button>
    <button>-</button>
    </form>
</body>
</html>








