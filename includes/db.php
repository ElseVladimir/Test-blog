<?php 

$connection = mysqli_connect(
$config['db']['server'],
$config['db']['username'],
$config['db']['password'],
$config['db']['name']
);

if($connection == false)
  {
mysqli_connect_error();
echo 'Connection from db not established'.'<br/>';
exit();
  }
  ?>