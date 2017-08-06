//Structure/Introduction

<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
          <?php
            echo "My first line of PHP!"; 
          ?>
        </p>
	</body>
</html>

//You might have noticed that our main file is now index.php 
//instead of index.html. This is important! It tells the PHP interpreter
//that there's PHP code in the file to evaluate.

//The concatenation operator is just a dot (.). (If you're coming to PHP 
//from JavaScript, the dot does the same thing for strings that + does 
//in JavaScript.)

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
        <p>
          <?php
          echo "Hello," . " I am testing concatenation" . " with the . operator"
          ?>
        </p>
	</body>
</html>

//Examples:

//  $myName = "Beyonce";
//  $myAge = 32;

//All variable names in PHP start with a dollar sign ( $ ).

<!DOCTYPE html>
<html>
    <head>
        <link type='text/css' rel='stylesheet' href='style.css'/>
		<title>PHP FTW!</title>
	</head>
	<body>
        <!-- Write your PHP code below!-->
        <p>
            <?php
            $myName = "Bobby";
            $myAge = 23;
            echo $myAge;
            echo $myName;
            ?>
        </p>   
	</body>
</html>

