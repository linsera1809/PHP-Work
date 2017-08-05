<html lang="en">
<head>
    <title>Testing Get Name 080517RAL</title>
    <meta charset="utf-8">
</head>
<body>
<?php


/**
 *  This block introduces the idea of Dynamic webpage PHP
 */

/*
$name = "Robert";
$class = [

    'Robert',
    'Owen',
    'Violet',
    'Tommy'

];
echo "<h1>Hello, ".$name."</h1>";
$class[0] gives Robert as well
*/

/**
 * This block tests the $_Get function demonstrated with name and birthday,
 * to instantiate this function, in the webaddress bar add ?name=bobby or ?birthday=today
 */

/*

if( isset ($_GET['name'])  ) {

    echo("<h1>Hello, " . $_GET['name'] . "!</h1>");
 }

elseif ( (isset( $_GET['birthday'])) && ($_GET['birthday'] == 'today') ){

    echo("<h1>Happy Birthday!!</h1>");
}

else {

    echo("<h1>Hello, Visitor </h1>" );

}

*/

/**
 * This block tests foreach loop traversing
 */

/*

$class = [
    'David', 'Jon', 'Bobby', 'Christina'
];

foreach ($class as $student) {

    echo "
        <h2>Good Morning, $student! </h2><br>
    ";

}

*/

/**
 * This block tests while loop traversing when a number is address-bar-instantiated
 */

/*
$number = $_GET['number'];
$counter = 0;

while ( $counter  <= $number ){

    echo "The number is: $counter <br>";
    $counter++;
}
*/

/**
 * This block tests switch cases
 */

$i = $_GET['modelNum'];

switch( $i ) {

    case 6:
        echo "Galaxy 6";
        break;

    case 5:
        echo "Sol 5";
        break;

    case 2:
        echo "Terra 2";
        break;

    default:
        echo "Model doesn't exist";
        break;

}

?>
</body>
</html>