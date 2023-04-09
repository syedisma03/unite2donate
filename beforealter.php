<HTML>
<head><title>Login Page</title></head>
<style>
#h{
font-size:25px;
font-type:bold;
margin-left:640px;
margin-top:140px;
background:skyblue;
font-family:Fantasy;
width:150px;
height:55px;
padding-left:10px;

padding-top:3px;
border:2px solid black;
border-radius:20px;
color:black;
letter-spacing:2px;

}
#h:hover
{
background: rgb(131,58,180);
background: linear-gradient(90deg, rgba(180,58,180,1) 0%, rgba(273,29,29,1) 50%, rgba(224,176,69,1) 100%);
color:white;
}
#main
{
background:brown;
width:100%;
height:100%;
}
#name{
font-size:22px;
text-spacing:15px;
font-family:Times New Roman;
margin-left:550px;
margin-top:50px;
background:;
border:2px solid black;
border-radius:40px;
text-align:center;
height:70px;
width:340px;
color:;
}
#pass
{
font-size:22px;
text-spacing:15px;
font-family:Times New Roman;
margin-left:550px;
background:white;

margin-top:20px;
border:2px solid black;
border-radius:40px;
text-align:center;
height:70px;
width:340px;
}
#sub

{
font-size:18px;
text-spacing:15px;
font-family:Brush Script MT;
margin-left:640px;
background-color:white;
color:black;
margin-top:20px;
border:2px solid black;
border-radius:40px;
text-align:center;
height:40px;
width:140px;
cursor:pointer;
}
#sub:hover
{
background-color:red;
color:white;

}
#reg
{
color:black;
background-color:white;

width:80px;
height:26px;
margin-left:660px;

padding-top:8px;
padding-left:29px;
border-radius:20px;
}
#reg a
{
text-decoration:none;
font-size:15px;
font-family: "Times New Roman", Times, serif;
}

#dash
{
margin-left:600px;
}
#reg:hover 
{

background-color:blue;
color:white; 	

}
#reg a:hover
{
color:white; 
}
</style>

<body>

<form method="GET" action="http://localhost/techc/beforealter.php/">
<div id="main"><div id="box">
<button id="h">ALTER</button><br>
<input type="text" placeholder="name" id="name" name="na"required>
<input type="password" placeholder="Password" id="pass" name="pa" required>
<input type="submit" id="sub" name="subm">
</form>

</div></div>
</body>
</HTML>
<?php

$link=mysqli_connect('localhost','root','','blooddonors');
	if(isset($_GET['subm']))
	{
		$username=$_GET['na'];
		$password=$_GET['pa'];
		
		$sql="SELECT password FROM donors WHERE name='$username'";
		$res=mysqli_query($link,$sql);
		$set_password=mysqli_fetch_assoc($res);
		$check=$set_password['password'];
		if($password==$check)
		{
			echo "login";
                  header("location:http://localhost/techc/alters.php/");
		}
		else
                  
			echo "Incorrect";
		
	}
            else
                  echo "no";

?>

