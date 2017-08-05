<html>
  <p>
    <?php
    // Get a partial string from within your own name
    // and print it to the screen!
    $myName = "fuckyou";
    $partial = substr($myName, 0, 4);
    print $partial;
    
    ?>
  </p>
  <p>
    <?php
    // Make your name upper case and print it to the screen:
    $uppercase = strtoupper($myName);
    print $uppercase;
    ?>
  </p>
  <p>
    <?php
    // Make your name lower case and print it to the screen:
    $lowercase = strtolower($myName);
    print $lowercase;
    ?>
  </p>
</html>