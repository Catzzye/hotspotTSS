<html>

<head>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>KOSTUR KOSTUR KOSTUR</title> 

<link rel="stylesheet" type="text/css" href="zaglavlje.css">
	
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ffff80;
}
</style> 

</head>

<body>

<div class="pocetak">

<img class ="naslovnaslika" src="banner.jpg" alt="Banner TŠS"> 

	<ul>
	  <li><a href="index.php">Poèetna</a></li>
	  <li><a href="smjerovi.html">O smjerovima</a></li>
	  <li><a href="povijest.html">Povijest TŠS</a></li>
	  <li><a href="upis.html">Upisi u TŠS</a></li>
	  <li><a href="raspored.html">Raspored sati</a></li>  
	  <li><a href="zr.html">O završnom radu</a></li>
	  <li><a href="kontakt.php">Kontaktirajte TŠS</a></li>
	  <li><a href="admin.php">Prijava</a></li>
	</ul>

<hr>


<div class="naslovi">
Nova podatak zapisan u bazu podataka</div></div> <br>	<br>

	<?php
					$servername ="localhost";  
					$username = "root";
					$password = "password";

					$link = mysqli_connect($servername,$username); 

					if (!$link) {
					die("Connection failed: ".mysqli_connect_error());
					}
					mysqli_select_db($link,"korisnici"); 
					$naslov=$_GET["naslov"];
					$vijest=$_GET["feed"];
					

					$sql = "INSERT INTO `feed` (`naslov`, `vijest`) VALUES ('$naslov', '$vijest')";   
			
					if(!(mysqli_query($link,$sql))) 
						echo "error".mysqli_connect_error();

	?>


<br> <br>
<a class="button_povratak" href="index.php">Povratak na poèetnu stranicu</a> <br> <br> &nbsp;

<div class="podnozje">
Tehnièka Škola Sisak Adresa: Marijana Cvetkoviæa 2, 44000 Sisak // Projekt izradili: Norman Podgoršek, Filip Rakas, Andrija Klariæ, Antonio Žugaj </div>
</body>

</html>