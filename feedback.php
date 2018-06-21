<?php include 'connect.php'
//session_start();
?>

<html>
<head><link rel="stylesheet" type="text/css" href="feedback.css">
    <title>FEEDBACK</title>
    </head>
    <body>
        <h1><?php echo $_SESSION['tname']; ?></h1>
        <br>
    <form method="post" action="connect.php">
        1. Uses effective methods of Teaching <input type="radio" name="q1" value="YES">YES
        <input type="radio" name="q1" value="NO">NO
        <br>
        
         2. Is the teacher Punctual <input type="radio" name="q2"  value="YES">YES
        <input type="radio" name="q2"  value="NO">NO
        <br>
        
         3. Able to maintain Discipline <input type="radio" name="q3"  value="YES">YES
        <input type="radio" name="q3"  value="NO">NO
        <br>
         4. Able to clear Doubts <input type="radio" name="q4"  value="YES">YES
        <input type="radio" name="q4"  value="NO">NO
        <br>
         5. Able to maintain interest in the subject <input type="radio" name="q5"  value="YES">YES
        <input type="radio" name="q5"  value="NO">NO
        <br>
         6. Pays attention to every student in the class  <input type="radio" name="q6"  value="YES">YES
        <input type="radio" name="q6"  value="NO">NO
        <br>
        
         7. Good Communication Skills  <input type="radio" name="q7"  value="YES">YES
        <input type="radio" name="q7"  value="NO">NO
        <br>
        
         8. Dressing Sense <input type="radio" name="q8"  value="GOOD">GOOD
         <input type="radio" name="q8"  value="AVERAGE">AVERAGE
        <input type="radio" name="q8"  value="BAD">BAD
        <br>
        
        RATING: <select name="rate">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        
        
        </select>
        <br>
        Comment:<input type="text" style="height:30px;" name="comment" placeholder="Enter your review">
        <br>
        <input type="submit" name="fsubmit" value="Submit Form">
        </form>
    
    </body>
</html>