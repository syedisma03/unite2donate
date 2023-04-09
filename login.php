<HTML>
<head><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /></script></head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style>
#main
{
background-color:#ffffcc;
height:100%;
width:100%;
overflow:hidden; 
z-index:0;
}
button
{
color:red;
border:2px solid black;
background-color:;
margin:2px;

border:5px solid black;

font-family:Brush Script;
font-type:bold;
height:70px;
width:160px;
font-size:25px;
border-radius:10px;
cursor:pointer;

}
#ani
{
background-color:red;
border-radius:50px;
width:20px;
height:20px;
position:absolute;
overflow:hidden;
margin-left:400px;
margin-top:18%;
z-index:1;
animation:anim 5s linear 0s infinite normal;
}
#ma
{
background-color:red;
border-radius:50px 50px 4px 4px;
padding-left:25px;
padding-top:45px;
width:80px;
opacity:0.5;
height:120px;
position:absolute;
overflow:hidden;
margin-left:618px;
margin-top:14%;
z-index:1;


}
#ma span
{
height:10px;
width:30px;
margin-left:12px;
margin-top:22px;
opacity:1.0;
font-size:42px;
}
@keyframes anim

{
0%
{
margin-left:400px;
margin-top:16%;

}
15%
{
margin-left:400px;
margin-top:11%;

}
35%
{
margin-left:660px;
margin-top:11%;
}
50%{
margin-left:660px;
margin-top:16%;

}
65%
{
margin-left:660px;
margin-top:29%;

}
85%
{
margin-left:920px;
margin-top:29%;

}
100%
{
margin-left:918px;
margin-top:21%;

}
}



button:hover
{
color:black;
filter:brightness(0.5) ;
filter: drop-shadow(2px 2px 5px rgb(0 0 0 / 0.5));
background-color:red;
border:5px solid white;
font-family:'Oswald',"sans-serif";
}
ol li
{
color:white;
display:inline;
float:right;
margin-right:25px;
text-decoration:none;
}
ol li a
{
color:white;
}
#main_b
{
background-color:#ffff66;
width:100%;
opacity:0.7;

border-radius:4px solid rgba(255,255,255,.18);

height:720px;
margin-left:0px;
margin-top:0px;
border-radius:10px;

}
ol li
{
font-size:25px;
}

ol li:hover
{
color:yellow;
cursor:pointer;
}
ol li a:hover
{
color:yellow;
cursor:pointer;
}
.about
{
margin-top:0px;
}


#up
{
background-color:black;
width:100%;
height:50px;
color:white;
margn-top:0px;
overflow:hidden;
}
#don
{

margin-top:250px;
margin-left:333px;


}
#don a
{
text-decoration:none;

}
#acc
{

margin-top:-74px;
margin-left:840px;

}
#pi
{
height:60px;
width:20px;
background-color:grey;
margin-top:190px;
overflow:hidden;
position:absolute;
opacity:1.0;
margin-left:400px;



}
#pi2
{
height:64px;
width:20px;
background-color:grey;
margin-top:381px;
overflow:hidden;
position:absolute;
opacity:1.0;
margin-left:660px;



}

#pit
{
height:38px;
width:20px;
background-color:grey;
margin-top:180px;
overflow:hidden;
position:absolute;
opacity:1.0;
margin-left:660px;



}
#pit2
{
height:148px;
width:20px;
background-color:grey;
margin-top:316px;
overflow:hidden;
position:absolute;
opacity:1.0;
margin-left:920px;



}

#pe
{
height:20px;
width:280px;
background-color:grey;
margin-top:170px;
overflow:hidden;
position:absolute;
opacity:1.0;
margin-left:400px;
}
#pe2
{
height:24px;
width:280px;
background-color:grey;
margin-top:440px;
overflow:hidden;
position:absolute;
opacity:1.0;
margin-left:660px;


}
#acc a
{
text-decoration:none;
}


</style>
<body>
<div id="main">
<div id="up">
<ol><li><a href="http://localhost/techc/index.php" target="_blank"><span class="material-symbols-outlined" id="logo">
home
</span></a></li>
<li><span class="material-symbols-outlined">
settings
</span></li></ol>
</div>
<div id="ani"></div>
<div id="ma">
<span class="material-symbols-outlined">
volunteer_activism
</span>
</div>
<div id="pi"></div>
<div id="pi2"></div>
<div id="pe"></div>
<div id="pe2"></div>

<div id="pit"></div>
<div id="pit2"></div>




<div id="main_b">

<button id="don"><a href="http://localhost/techc/beforealter.php">DONOR</a></button><br>
<button id="acc"><a href="http://localhost/techc/bloodpage.html" target="_blank">ACCEPTOR</a></button>
</div>


</div>


</body>
</HTML>