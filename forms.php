<style>
h6{
background-color:black;

margin-left:1200px;
margin-top:20px;
width:45px;
height:20px;
padding-left:18px;
padding-top:6px;
border-radius:6px;
}
h6 a
{color:white;
text-decoration:none;
}
form
{
  box-sizing:border-box;
}


</style>


<?php
$h="localhost";
$r="root";
$n="";
$db="blooddonors";
$con=new mysqli($h,$r,$n,$db);
if($con->connect_errno)
{
echo $con->connect_errno;
die();
}
?>
<html>
<style>
#act #sel #ab
{
text-align:center;
border:5px solid black;
font-family: "Times New Roman", Times, serif;
}
#act #sel
{


width:68px;
height:25px;


}
</style>
<body>
<h6><a href="http://localhost/techc/index.php">HOME</a></h6>
<form id="act"action="forms.php" method="post" style="margin-left:560px;margin-top:00px;background-color:yellow;width:400px;text-align:center;height:500px;">

<br><br><br><lable style="margin-left:-10px;">Name</lable> <input type="text" name="name" required><br><br>
<lable style="margin-left:-20px;">Age</lable>    <input type="text" name="age" required><br><br>
<label style="margin-left:-43px;">Gender</label>
  <input type="radio" name="gender" value="m"><label>Male</label>
<input type="radio" name="gender" value="f"><label>Female</label><br><br>
<lable style="margin-left:-89px;">BloodType</lable>
<select name="blood" id="sel">
<option value="a+" id="ab">A+ve</option>
<option value="b+" id="ab">B+ve</option>
<option value="o+" id="ab">O+ve</option>
<option value="a1+" id="ab">A1+ve</option>
<option value="a-" id="ab">A-ve</option>
<option value="b-" id="ab">B-ve</option>
<option value="o-" id="ab">O-ve</option>

</select><br><br>
<lable style="margin-left:35px;">Door number</lable> <input type="text" name="door"><br><br>
Address   <input type="text" name="address" required><br><br>
Pincode   <input type="number" name="pincode" required><br><br>
phone no   <input type="number"name="number" required><br><br>

password   <input type="password" name="password" required placeholder="6-didit pin"><br><br>
        <input type="submit" name="submit" style="margin-left:50px;">
</form>
<?php
if (isset($_POST['submit']))
{
  $name=$_POST['name'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $bloodgroup=$_POST['blood'];
$address=$_POST['address'];
  $pincode=$_POST['pincode'];
$phone=$_POST['number'];
$door=$_POST['door'];
$password=$_POST['password'];
$ph=mysqli_query($con,"SELECT * FROM donors WHERE phone_number='$phone'");
$pin=mysqli_query($con,"SELECT * FROM donors WHERE password='$password'");
$phc=strlen($phone);
$pinc=strlen($pincode);
$a=strlen($password);

if(mysqli_num_rows($ph)>0)
    echo '<script>alert("Phone number already exists")</script>';
elseif(mysqli_num_rows($pin)>0)
	echo '<script>alert("Password Pin number already exists Or Invalid pin")</script>';
elseif($phc!=10)
	echo '<script>alert("Invalid Phone Number")</script>';
elseif($pinc!=6)
	echo '<script>alert("Invalid Pincode")</script>';
elseif($a!=6)
	echo '<script>alert("Invalid Pin Password")</script>';

    else{
  $sql="insert into donors(name,age,gender,blood_group,Address,pincode,phone_number,password,Door_number) values ('$name','$age','$gender','$bloodgroup','$address','$pincode','$phone','$password','$door')";
  $run=mysqli_query($con,$sql);
}
  if($run)
{
echo '<script>alert("Registered Successfully")</script>';

}
else
echo "Not Registererd";
}



else
                                                       echo "All data required";

?>
</body>
</html>