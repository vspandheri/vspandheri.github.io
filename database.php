<?php
$connect=mysqli_connect('localhost','root','','myguests');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
else
{
	echo 'Connected';
}

?>