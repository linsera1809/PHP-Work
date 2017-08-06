<html>
    <p>
    <?php
    // Use rand() to print a random number to the screen
    print rand();
    
    ?>
    </p>
    <p>
    <?php
    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.
    
    $name = "Fuck this nonsense";
    $max = strlen($name);
    $one = rand(0,$max-1);
    print substr($name,$one,1);


    ?>
    </p>
</html>
    


    ?>
    </p>
</html>