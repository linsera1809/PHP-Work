<?php

   // This is used for Error handling
   // if ($_SERVER["REQUEST_METHOD"] === "POST" ) {
   //     die("Error: POST requests not allowed.");
   //  }

    class POSTRequestWarningException extends Exception
    {

        public function __construct() {

            parent::__construct("The use of POST requests to this page is not advised.");

        }

    }

    session_start(); //this needs to be before all coding if using a session
?>

<html lang="en">
<head>
    <title>Form Submission/Session -- 8-6-2017</title>
    <meta charset="utf-8">
</head>
<body>

<?php

/*

    //Commenting out to practice the use of sessions. This is for cookies
    if ( isset( $_COOKIE['newsletter_signup_first_name'] ) ) { //if there is a cookie for first name

        $first_name = $_COOKIE['newsletter_signup_first_name'];

        echo "<h1> Thanks for joining our newsletter, <?php echo $first_name ?>!</h1>";

        setcookie( 'newsletter_signup_first_name', null, time()- 1);
        //setting a cookie in the past deletes it. Deleting cookies after use is good practice
 */

    if ( isset( $_SESSION['subscribe_form_first_name'] ) ) { //if there is a session running

        $first_name = $_SESSION['subscribe_form_first_name'];

        echo "<h1> Thanks for joining our newsletter, <?php echo $first_name ?>!</h1>";

        $_SESSION['subscribe_form_first_name'] = null;

}

    try {

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            throw new POSTRequestWarningException();

        }
    }

    catch ( POSTRequestWarningException $e ) {

        echo "<h3>".$e->getMessage()."</h3>";

    }

    catch ( Exception $e ) {

    }

?>

</body>
</html>

<?php
    session_unset(); //This needs to be done after all coding if using a session
    session_destroy(); //Cleanly destroys and closes
?>
