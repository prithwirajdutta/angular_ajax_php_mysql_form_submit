<?php
$con = mysqli_connect("localhost","root","","angdb");

  $name=$_POST['name'];
  $email=$_POST['email'];
  $query="insert into dettb(name,email)values('$name','$email');";
  $result=mysqli_query($con,$query);
  if($result)
    echo "Success";
  else {
    echo "Failed";
  }

?>
