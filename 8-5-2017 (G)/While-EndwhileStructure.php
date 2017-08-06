<!DOCTYPE html>
<html>
    <head>
		<title>A loop of your own</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
	//Add while loop below
    $looping = true;
    while ($looping == true):
     echo "<p> The loop is running.</p>";
        
        $looping = false;
    endwhile;
    
    echo "the loop is complete.";
    ?>
    </body>
</html>