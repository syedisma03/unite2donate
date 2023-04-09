<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Volkhov:wght@700&display=swap" rel="stylesheet">
<style>
h6 a
{
text-decoration:none;
}
</style>
<body>
<br><br>
<marquee direction="left" behaviour="alternate" style="background-color:black;font-size:20px;color:white;width:350px;margin-left:550px;font-family: 'Volkhov', serif;"">Your   login   name   can't   be   change</marquee>
<h6><a href="http://localhost/techc/index.php" style="margin-left:1300px;font-size:13px;border:2px solid black;background-color:red;color:white;">HOME</a></h6>

<form method="GET" action="alters.php" style="width:400px;height:430px;margin-left:590px;margin-top:60px;font-family: 'Source Serif Pro', serif;">
<lable style="margin-left:0px;font-size:20px;">Name</lable> <input type="text" placeholder="Give Login Id" name="id" required style="margin-top:26px;margin-left:10px;text-align:center;"><br><br>
<lable style="margin-left:0px;font-size:20px;">Age</lable>    <input type="text" name="age" required style="margin-left:10px;"><br><br>
<label style="margin-left:0px;font-size:20px;font-size:20px;">Gender</label>
  <input type="radio" name="gender" value="m"><label>Male</label>
<input type="radio" name="gender" value="f"><label>Female</label><br><br>
<lable style="margin-left:0px;font-size:20px;">BloodType</lable>
<select name="blood" id="sel">
<option value="a+" id="ab">A+ve</option>
<option value="b+" id="ab">B+ve</option>
<option value="o+" id="ab">O+ve</option>
<option value="a1+" id="ab">A1+ve</option>
<option value="a-" id="ab">A-ve</option>
<option value="b-" id="ab">B-ve</option>
<option value="o-" id="ab">O-ve</option>

</select><br><br>
<lable style="margin-left:0px;font-size:20px;">Door number</lable> <input type="text" name="door" style="margin-left:5px;" required><br><br>
<lable style="font-size:20px;">Address</lable>   <input type="text" name="address" style="margin-left:10px;" required><br><br>
<lable style="font-size:20px;">Pincode</lable>   <input type="number" name="pincode" style="margin-left:10px;" required><br><br>
<lable style="font-size:20px;">phone no</lable>   <input type="number"name="number" style="margin-left:10px;" required><br><br>

<lable style="font-size:20px;">password</lable>   <input type="password" name="pass" required style="margin-left:10px;"><br><br><br>
       
<input type ="submit" value="alter"  name="s" style="margin-left:110px;font-size:19px;background-color:red;border-radius:35% 35% 35% 35%;color:white;">
</form>
</body>
</html>
<?php
if (isset($_GET['s']))
{
$con=mysqli_connect("localhost","root","","blooddonors");
  $age=$_GET['age'];
$ids=$_GET['id'];
  $gender=$_GET['gender'];
  $bloodgroup=$_GET['blood'];
$address=$_GET['address'];
  $pincode=$_GET['pincode'];
$phone=$_GET['number'];
$door=$_GET['door'];
$password=$_GET['pass'];
$sq="update donors set age='$age',gender='$gender',blood_group='$bloodgroup',Address='$address',pincode='$pincode',phone_number='$phone',password='$password',Door_number='$door' where name='$ids'";
$res=mysqli_query($con,$sq);


}

?>