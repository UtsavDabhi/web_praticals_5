
<?php
echo "<h3>Palindrome Programm</h3>";
echo " <label>The Number is "." "."</label>";

if(isset($_POST['button']))
$no=$_POST['number'];
$sum=0; 
$temp = $no;
	
			while (floor($no) > 0) 
            {
				$r = $no % 10;
				$sum = ($sum * 10) + $r;
				$no = $no / 10;
			}
			if ($temp == $sum)
            {
				echo "Palindrome";
			} 
            else
             {
				echo "Not Palindrome";
			}

?>






