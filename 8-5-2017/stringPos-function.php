<html>
    <p>
    <?php
    // Print out the position of a letter that is in
    // your own name
    
    print (strpos("fuckyou", "f")); //0
    print (strpos("fuckyou", "you")); //4
    print (strpos("fuckyou", "fuck")); //0
    
    ?>
    </p>
    <p>
    <?php
    // Check for a false value of a letter that is not
    // in your own name and print out an error message
    
    if (strpos("fuckyou", "cocks") == false) {
     
     print "Sorry you're an idiot";   
        
    }
    
    ?>
    </p>
</html>