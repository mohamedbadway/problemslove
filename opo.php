<?php

// super gloable variables

// $_COOKIE;
// $_ENV;
// $_GET;
// $_POST;
// $_FILES;
// $_SERVER;
// $_REQUEST;
// $_SESSION;

// $GLOBALS
// refer to

// $array =[
//   "key" => "value" 
// ]
// $x = 10;
// function hello(){
// //     global $x;
// // echo $x = 30;
// echo   $GLOBALS['x'] = 200;
 
// }
// hello();
// echo"<br/>";
// echo $x;

// $y = 20;
 

// function changeY(){
//    echo $GLOBALS['y'] = 500;
// }
// changeY();
// echo"<br/>";
// echo $y;

// echo "<pre>";
// print_r($_SERVER);
// echo "<pre/>";








 


// if(isset($_GET['username'])){
//     echo "username". "::".$_GET['username'] ;
// }else{
//     echo "error";
// }

 







?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            background-color: #fff;
            height: 70vh;
            width: 300px;
            display: block;
            justify-content: center;
            align-items: center;
            border-radius: 40px;
            position: relative;
            margin: auto;
            margin-top: 70px;
             
        }
        button{
            /* margin-top: 100px;
             position: relative;
             left: -240px;
             padding-top: 20px;
             padding-right:100px ;
             padding-left: 100px;
             text-align: center; */
             color: wheat;
             background-color: yellow;
             margin-left: 50px;
             margin-top: 80px;
             padding:10px 30px 10px 30px;
             margin-left: 100px;
             border: none;
             border-radius:10px;
            
        }
        body{
            background: wheat;
        }
        input[ type="text"],input[type="password"],label{
            padding: 10px 2px ;
           display: block ;
           justify-content: space-between;
           align-items: center;
           position: relative;
           top: 70px;
          left: 60px;
          border: none;
          border-radius: 5px;
          
        }
        form input{
            background-color:  #fff;
            color: yellowgreen;
        }
        
        /* label,input{
            display: flex;
            justify-content: center;
            align-items: center;
        } */
       
    </style>
</head>
<body>
      <a href="v.php?id=50"> go to user</a> -->
    <!-- <form action="v.php" method="">
        <label for="">name:</label>
        <input type="text" placeholder="username" name="username" value="">
        <br/>
        <label for="">password:</label>
        <input type="password" placeholder="username" name="username" value="">
        
        <br/>
        <button >submit</button>
    </form>
</body>
</html>  -->
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <form action="v.php" method="GET">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>