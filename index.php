
<?php
$a = range('A', 'Z');
for($i=0; $i<=4; $i++)
{
 for($j=4; $j>=$i; $j--)
  echo "<div>&nbsp;</div>";
 for($k=0; $k<=$i; $k++)
  echo "<div>" . $a[$k] . "</div>";
 $n = $k - 1;
  for($m = 0; $m < $i; $m++)
 echo "<div>" . $a[--$n] . "</div>";
 echo "<br>";
}
?>
