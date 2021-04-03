<?php
echo "<h3>Armstrong Program</h3>";
echo " <label>The Number is "." "."</label>";

if(isset($_POST['button']))
$no=$_POST['number'];
    $c=0; 
    $temp=$no;  
    while($no>0)  
    {  
    $a=$no%10;  
    $no=$no/10;  
    $c=$c+($a*$a*$a);  
    }  
    if($temp==$c)  
  echo "armstrong number";   
    else  
        echo "Not armstrong number";   
?>