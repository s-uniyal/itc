<?php include'connect.php';

$query=mysql_query("SELECT * FROM feedback where id='$_REQUEST[check]'");

while($array=mysql_fetch_array($query))
{
    echo "1. Uses effective methods of Teaching $array[q1] <br>";
    echo " 2. Is the teacher Punctual $array[q2] <br>";
    echo " 3. Able to maintain Discipline $array[q3] <br>";
    echo "4. Able to clear Doubts $array[q4] <br>";
    echo " 5. Able to maintain interest in the subject $array[q5] <br>";
    echo " 6. Pays attention to every student in the class $array[q6] <br>";
    echo " 7. Good Communication Skills  $array[q7] <br>";
    echo " 8. Dressing Sense $array[q8] <br>";
    echo "RATING:  $array[rating] <br>";
    echo " Comment: $array[comment] <br>";
   
}
?>