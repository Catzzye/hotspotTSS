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

		<?php
					$user=$_GET["user"];
					$pas=$_GET["pas"];
					
					if($user == "admin" && $pas == "admin"){
					
					echo '	
					<h1>Novi podatak za naslovnu stranicu.</h1>
	
					<form method="GET" action="feed.php">
					naslov<br><br>
					<input type="text" name="naslov"><br><br>
					vijest<br><br>
					<textarea name="feed"></textarea><br><br>
					<input type="submit" name="Dodaj podatak">
					</form><br><br>


					<h1>Upiti od posjetitelja</h1>';
					
					$servername ="localhost";
					$username = "root";
					$password = "password";

					$link = mysqli_connect($servername,$username);

					if (!$link) {
					die("Connection failed: " . mysqli_connect_error());
					}
					
					
					
					echo "<table width=100%>
							<tr><th>IME</th><th>PREZIME</th><th>EMAIL</th><th>UPIT</th></tr>";
					mysqli_select_db($link, "korisnici");

					$result = mysqli_query($link , "SELECT * FROM upiti");

					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					echo "<tr><td align=center>".$row["ime"]."</td><td align=center>".$row["prezime"]." </td><td align=center>".$row["email"]."</td><td align=center>".$row["upit"]."</td></tr>";
					}
					mysqli_free_result($result);
					echo "</table>";
					}else{
						echo "<h1>pogresan username ili password</h1>";
					}


					?>






<br> <br>
<a class="button_povratak" href="index.php">Povratak na poèetnu stranicu</a> <br> <br> &nbsp;


<div class="podnozje">
Tehnièka Škola Sisak Adresa: Marijana Cvetkoviæa 2, 44000 Sisak // Projekt izradili: Norman Podgoršek, Filip Rakas, Andrija Klariæ, Antonio Žugaj </div>
</body>

</html>