<?php include 'connect.php'; ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="feedback.css">
    <title>YOUR FEEDBACKS</title>
    </head>
    <body>
    <?php 
        $query=mysql_query("SELECT * FROM feedback WHERE fullname='$_SESSION[teacher]'" );
        $i=1;
        echo "<form method='POST' action='connect1.php'>";
        while($array=mysql_fetch_assoc($query))
        {
            
            echo "<input type='radio' value='$array[id]' name='check'>feedback
            $i <br>";
            $i++;
        }
            echo "<input type='submit' value='check!'>
            
            </form>";
            
        

        ?>
    
    
    
    </body>
</html>