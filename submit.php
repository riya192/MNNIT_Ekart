<html>
<body>
<?php 
$username=$_POST['username'];
$email=$_POST['email'];
$programme=$_POST['optradio'];
$phn=$_POST['phnno'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$room=$_POST['roomno'];
$password=$_POST['pwd'];
$con=mysqli_connect("localhost","root","","mnnit_ekart");
$qmain="insert into user_details values('$username','$email','$phn','$programme','$branch','$year','$room','$password')";
mysqli_query($con,$qmain);
$q1="select * from user_details where username='$username'";
$q2="select * from user_details where email='$email'";

mysqli_query($con,$q1);
?><br>
</body>
</html>