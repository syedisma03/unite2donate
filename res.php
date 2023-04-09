<html>

<style>
h6{
background-color:black;

margin-left:1300px;
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
</style>
<body>
<h6><a href="http://localhost/techc/index.php">HOME</a></h6>

<?php
$con=mysqli_connect("localhost","root","","blooddonors");

if(isset($_GET['sub']))
{
$bl=$_GET['bloods'];
$s="SELECT gender,blood_group,Door_number,Address,phone_number FROM donors WHERE blood_group='$bl'";

$res=mysqli_query($con,$s);
if(mysqli_num_rows($res)>0)
{

echo "<table style='margin-left:295px;margin-top:70px;'>";


echo "<tr style='background-color:tomato;text-align:centre;'>";



echo"<th width='11%'>Gender</td>";

echo"<th width='11%'>Blood Type</td>";

echo "<th width='15%'>Door number</td>";

echo"<th width='30%'>Address</td>";

echo"<th>Contact Number</td>";

echo"</tr>";


while($row=mysqli_fetch_assoc($res))
{
echo "<tr style='background-color:yellow;text-align:center;'>";
echo"<td>".$row["gender"]."</td>";
echo"<td>".$row["blood_group"]."</td>";
echo "<td>".$row["Door_number"]."</td>";
echo"<td>".$row["Address"]."</td>";
echo"<td>".$row["phone_number"]."</td>";
echo"</tr><br>";
}
echo"</table>";
}
}
else
echo "error";
$con->close();
?>
</body>
</html>
