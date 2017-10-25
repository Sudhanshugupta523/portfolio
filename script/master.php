<?php
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
mail("sudhanshu523.sg@gmail.com",$subject,$message);
 ?>
