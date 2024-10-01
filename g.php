 task 1
  <?php 
 echo  (int) 15.2 + (int)14.7 + (10.5 + 10.5); // 50
 
 echo "<br>";
 echo gettype((int) 15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer
 echo "<br>";
 
 echo gettype(100);
 echo "<br>";
 $name = 100;
 echo gettype($name);
 
 echo "<br>";
 echo "<br>";
 echo"Hello 'Elzero' \\ ''' We Love '$\$PHP'";
 echo"<br>";
 echo "<br>";
 echo "We <br>
Love
 <br>
Elzero
 <br>
Web
 <br>
School <br>";
echo "<br>";
 
        //  echo <<<"Here"       
        //  Hello "'Elzero'" 
        //  We Love $Programming$
        //  Languages Specially "PHP"


        //      Here;
// $something = "Programming";

// echo <<<'code'
//          Hello \PHP\ 
//          We Love $something
//         code;
// echo (int)"Hello PHP" +1   ;
// echo '<br>';
//  echo gettype((int) "Hello PHP")

// Needed Output
 $arr =[
    "frontend"=>[
        0=> "html",
        1=> "css",
        "js"=>[
            "Vuejs" =>[
                2=>"v2",
                3=>"v3",
            ],
            0=>"Rectjs",
            1=>"Svelte" 
        ]
    ],
     
    "BackEnd"=>[
      0=> "PHP" ,
      1=> "Mysqle",
      2=> "sec"

    ],
    0=>"git",
    1=>"github",
    "Testing" =>[
       0=>"Unit Testing",  
       1=>"End To End",
       2=> "Integration"
       //     )  
    ]
 ];
 echo "<pre>";
 print_r($arr); 
 echo "</pre>"; 
// Array
// (
//   [FrontEnd] => Array
//     (
//       [0] => HTML
//       [1] => CSS
//       [JS] => Array
//         (
//           [Vuejs] => Array
//             (
//               [2] => v2
//               [3] => v3
//             )

//           [0] => Reactjs
//           [1] => Svelte
//         )
//     )

//   [BackEnd] => Array
//     (
//       [0] => PHP
//       [1] => MySQL
//       [2] => Security
//     )

//   [0] => Git
//   [1] => Github
//   [Testing] => Array
//     (
//       [0] => Unit Testing
//       [1] => End To End
//       [2] => Integration
//     )
// )
 
 ?>