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

<img class ="naslovnaslika" src="banner.jpg" alt="Banner T�S"> 

	<ul>
	  <li><a href="index.php">Po�etna</a></li>
	  <li><a href="smjerovi.html">O smjerovima</a></li>
	  <li><a href="povijest.html">Povijest T�S</a></li>
	  <li><a href="upis.html">Upisi u T�S</a></li>
	  <li><a href="raspored.html">Raspored sati</a></li>  
	  <li><a href="zr.html">O zavr�nom radu</a></li>
	  <li><a href="kontakt.php">Kontaktirajte T�S</a></li>
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
<a class="button_povratak" href="index.php">Povratak na po�etnu stranicu</a> <br> <br> &nbsp;

<div class="podnozje">
Tehni�ka �kola Sisak Adresa: Marijana Cvetkovi�a 2, 44000 Sisak // Projekt izradili: Norman Podgor�ek, Filip Rakas, Andrija Klari�, Antonio �ugaj </div>
</body>

</html>