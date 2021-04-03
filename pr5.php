
<?php

if(isset($_POST['button']))
$email=$_POST['email'];
$password=$_POST['password'];

if(($email==="utsav@gmail.com") && ($password==="123"))
{
echo "You Login SuccessFully";
}
else
{
    echo "Please Fill the Correct Details!!!";  
}

?>






