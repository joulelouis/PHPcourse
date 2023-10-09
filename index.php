<?php include("./variables.php") ?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <?php include("./navbar.php") ?> 
    <br/>
    <center>
    <h1>
        <?php
        // Print out to the screen
        echo "Hello World!<br/>";

        // ------------------------------------------------------------------------------------------------------------------

        // 1. variable
        /* 
        $first_name = "Pete"; //string
        $favorite_number = 41;
        $last_name = $first_name;
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 2. Math operators
        // + - * / % **
        /*
        $num_1 = 41;
        $num_2 = 4;
        echo $num_1 + $num_2, "<br/>";
         */

        // ------------------------------------------------------------------------------------------------------------------

        // 3. incrementing and decrementing
        // ++ --
        /*
        echo ++$num_1, "<br/>"; //this will increment before printing
        echo $num_1++, "<br/>"; //this will print first then increment
        echo $num_1, "<br/>";
         */

        // ------------------------------------------------------------------------------------------------------------------

        // 4. Concatenation
        // concatenating in PHP is used by "." instead of "+" that is common with other programming languages
        /* 
        $first_name = "John";
        $last_name = "Elder";

        echo $first_name . " " . $last_name , "<br/>";
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 5. Comparison Operators
        /*  == Equal to
            != Not Equal to
            > Greater than
            < Less Than
            >= Greater or equal to
            <= Less Than or equal to
         */

        /* 
        $num_1 = 41;
        $num_2 = 4;
        $first_name = "John";

        var_dump($first_name == "john");
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 6. Escape Characters
        // \" content \"
        /* 
        echo "And then she said: \"YOU'RE UGLY!\"", "<br/>";
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 7. If, Elseif, and Else Statements
        /* 
        $num_1 = 40;
        $num_2 = 5;

        if ($num_1 > 10) {
          echo $num_1 . " is greater than 10";
        } elseif ($num_2 == 5) {
          echo $num_2 . " is equals 5";
        } else {
          echo $num_1 . " is less than 10";
        }
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 8. Arrays - Numeric
        // arrays are made up of 'key: value' pairs
        // In a numeric array, they key is a number
        /* 
        $last_names = array("Elder", "Smith", "Poppins");
        $first_names = array("John", "Steve", $last_names);

        echo $first_names[0], "<br/>";
        echo $first_names[1], "<br/>";
        echo $first_names[2][0];
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 9. Arrays - Associative
        // In Python this is called 'Dictionaries'. In Ruby, this is called 'Hashes'
        /* 
        $fav_pizza = array(
          "John" => "Pepperoni",
          "Steve" => "Cheese",
          "Mary" => "Mushroom"
        );

        echo $fav_pizza["John"], "<br/>";
        echo count($fav_pizza), "<br/>";
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 10. Array Count
        // 'count()' function in PHP is same as 'len' function in Python
        /* 
        $names = array("John", "Steve", "Mary");

        // this is to get and display the last item/index in an array
        echo $names[count($names) - 1], "<br/>";
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 11. Loops -- While
        // in while loops, explicit counter is needed 
        /* 
        $counter = 0;
        while ($counter <= 10) {
          echo "The count is: $counter<br/>";
          $counter++;
        }
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 12. Loops -- For
        // in for loops, there's an implicit counter in the conditions
        /* 
        for ($count = 0; $count <= 10; $count++) {
          echo "The count is $count <br/>";
        }
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 13. Loops -- Foreach
        /* 
        $names = array("John", "Steve", "Mary");

        foreach ($names as $n) {
          echo "$n<br/>";
        }
        // this can be also done using while loop
        $count = 0;
        while ($count < count($names)) {
          echo "$names[$count] <br/>";
          $count++;
        }
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 14. Functions
        // a function is basically a program inside a program, you need to call/invoke it to run it
        // i.e. 'count()' is a built-in function in PHP, and there are a lot of built-in functions
        /* 
        function helloThere($num_1, $num_2) {
          return $num_1 + $num_2;
        }
        
        $answer = helloThere(41, 4);
        echo $answer * 2;
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 15. Random Function
        // echo rand(0, 10), "<br/>";
        // echo mt_rand(0, 10);
        /* 
        $names = array("John", "Steve", "Mary");
        $rando = mt_rand(0, count($names) - 1);
        echo $names[$rando], "<br/>";

        echo "Guess a number from 1 to 10", "<br/>";
        $number = 5;
        $random_num = mt_rand(1, 10);
        if ($random_num == $number) {
          echo "You got it!, the correct number is $number<br/>";
        } else {
          echo "You guessed the wrong number, the correct number is $number";
        }
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 16. Date Function
        /* 
        echo date("l jS \of F, Y");
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 17. String Manipulation
        /*
        $stuff = "John Elder is a PHP Coding Monster";
        $monster = "Monster";
        $dork = "Weirdo";
        // 'str_replace()' function to replace the content of the string
        echo str_replace($monster, $dork, $stuff), "<br/>";
        // 'strtoupper()' function to uppercase all the string
        echo strtoupper($stuff), "<br/>";
        // 'ucwords()' function to uppercase every first word in a string
        echo ucwords($stuff), "<br/>";
        // 'ucfirst()' function to uppercase the first index in a string
        echo ucfirst($stuff), "<br/>";
        // 'strtolower()' function to lowercase all the string
        echo strtolower($stuff), "<br/>";
        // 'lcfirst()' function to lowercase the first index in a string
        echo lcfirst($stuff), "<br/>";
        // 'strlen()' function to count the number of string
        echo strlen($stuff), "<br/>";
        // 'str_shuffle()' function to shuffle the content of the string
        echo str_shuffle($stuff);
        */

        // ------------------------------------------------------------------------------------------------------------------

        // 18. Include Function
        // include() function is really powerful in web development.
        // include() function is going to be used a lot of the time to include other things from website from other files
        echo "Copyright (c) " . $company_name . " " . date("Y") . " - All Rights Reserved";



        ?>
    </h1>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>



