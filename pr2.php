<?php
echo "<h3>Factorial Program</h3>";
echo " <label>The Number is "." "."</label>";

if(isset($_POST['button']))
$a=$_POST['number'];
$fact=1;
for($i=1;$i<=$a;$i++)
{
    $fact=$fact*$i;
}
echo "$fact";
?>