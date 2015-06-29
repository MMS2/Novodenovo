<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>404 - Esta página não existe </title>
<?php 	Publico::css('skeleton');
	
		?>
		
<style>

@import url(http://fonts.googleapis.com/css?family=Bree+Serif|Source+Sans+Pro:300,400);

*{
	maring: 0;
	padding: 0;
}
html { 
  background: url('http://fullcirclegrp1.com/allsaints/wp-content/uploads/2012/06/background3.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

body{
	font-family: 'Source Sans Pro', sans-serif;
	
	color: #444;
}
a:link{
	color: #BDC3C7;
	text-decoration: none;
}
a:active{
	color: #1f3759;
	text-decoration: none;
}
a:hover{
	color: #9fb7d9;
	text-decoration: none;
}
a:visited{
	color: #1f3759;
	text-decoration: none;
}

a.underline, .underline{
	text-decoration: underline;
}

.bree-font{
	font-family: 'Bree Serif', serif;
}

.clearfix:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
 
.clearfix {
	display: block;
}

#logo {
	margin: 1em;
	float: left;
	display: bloack;
}
nav{
	float: right;
	display: block;
}
nav ul > li{
	list-style: none;
	float: left;
	margin: 0 2em;
	display: block;
}

#main-body{
	text-align: center;
}

.enormous-font{
	font-size: 10em;
	margin-bottom: 0em;
}
.big-font{
	font-size: 2em;
}
hr{
	width: 25%;
	height: 1px;
	background: #EEEEEE;
	border: 0px;
}



</style>
</head>
<body>
    <div id="container">
    
        <div class="c16 colunas" id="main-body">
            <p class="enormous-font bree-font"> 404 </p>
            <p class="big-font"> Isto é  meio constrangedor, mas esta página não existe ... </p>
            <hr>
            <p class="big-font"> Voltar ao <?php Texto::link(" ","Site")?></p>
        </div>
    </div>
</body>
</html>
