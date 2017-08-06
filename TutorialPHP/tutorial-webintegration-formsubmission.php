


<html>
<head>
    <title>Form Submission -- 8-6-2017</title>
    <meta charset="utf-8">
</head>
<body>
<?php

/**
 * Created by PhpStorm and Garrett Mills (YT).
 * User: blinse93
 * Date: 8/6/2017
 * Time: 12:30 PM
 * Broken, something wrong in sending a request to the website
 */

function sanitize( $string ){ //removes all of the special chars and slashes

    $string = htmlspecialchars( $string );
    $string = stripslashes( $string );

    return $string;

}

function handler( $first_name, $last_name, $email ) { //Driver function

    echo "
    
    <script> //Javascript integrating
    
    alert('Thank you for signing up for our newsletter, $first_name!');
    
    </script>
    
    
    ";

}

$errors = [];


if ($_SERVER["REQUEST_METHOD"] === "POST" ){ //removes slashes and unwanted chars

    $error = false;

    $first_name = sanitize( $_POST['first_name'] );
    $last_name = sanitize( $_POST['last_name'] );
    $email = sanitize( $_POST['email'] );

    if ( !ctype_alnum( $first_name) ) { //checks to see if name is a name
        $error = true;
        $errors['first_name'] = "The first name must be alphanumeric.";

    }

    if ( !ctype_alnum( $last_name) ) { //checks to see if name is a name
        $error = true;
        $errors['last_name'] = "The last name must be alphanumeric.";

    }

    if ( !filter_var( $email, FILTER_VALIDATE_EMAIL) ) { //validates emails
        $error = true;
        $errors['email'] = "Please provide a valid email address.";

    }

    if ( !$error ){ //if there is no error, it sends info to handler function
        handler($first_name, $last_name, $email);
    }

}

?>

<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

    <?php

        if( isset( $errors['first_name'] ) ) { //if there is an error, echo it

            echo $errors['first_name'];
        }

    ?>

    <br><input type="text" name="first_name" placeholder="First Name"><br>

    <?php

        if( isset( $errors['last_name'] ) ) { //if there is an error, echo it

            echo $errors['last_name'];
        }

    ?>

    <br><input type="text" name="last_name" placeholder="Last Name"><br>

    <?php

        if( isset( $errors['email'] ) ) { //if there is an error, echo it

            echo $errors['email'];
        }

    ?>

    <br><input type="text" name="email" placeholder="Email Address"><br>

    <input type="Submit">

</form>


</body>
</html>