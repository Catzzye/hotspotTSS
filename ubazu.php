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
	  <li><a href="index.php">Pocetna</a></li>
	  <li><a href="smjerovi.html">O smjerovima</a></li>
	  <li><a href="povijest.html">Povijest TSS</a></li>
	  <li><a href="upis.html">Upisi u TSS</a></li>
	  <li><a href="raspored.html">Raspored sati</a></li>  
	  <li><a href="zr.html">O zavrsnom radu</a></li>
	  <li><a href="kontakt.php">Kontaktirajte TSS</a></li>
	  <li><a href="admin.php">Prijava</a></li>
	</ul>

<hr>


<div class="naslovi">
Hvala na slanju upita</div></div> <br>	<br>

	<?php
					$servername ="localhost";  
					$username = "root";
					$password = "password";

					$link = mysqli_connect($servername,$username);  // SPAJANJE NA SERVER

					if (!$link) {
					die("Connection failed: ".mysqli_connect_error());
					}
					mysqli_select_db($link,"korisnici");  // ODABIR BAZE
					$ime=$_GET["ime"];
					$prezime=$_GET["prezime"];
					$email=$_GET["email"];
					$upit=$_GET["upit"];

					$sql = "INSERT INTO `upiti` (`ime`, `prezime`, `email`, `upit`) VALUES ('$ime', '$prezime', '$email', '$upit')";  //UPIS U BAZU  
			
					if(!(mysqli_query($link,$sql))) // PROVJERA DA LI SMO UPISALI
						echo "error".mysqli_connect_error();

	?>
<script>
alert("Upit poslan! Hvala!");

</script>

<br> <br>
<a class="button_povratak" href="index.php">Povratak na pocetnu stranicu</a> <br> <br> &nbsp;

<div class="podnozje">
Tehnièka Škola Sisak Adresa: Marijana Cvetkovica 2, 44000 Sisak // Projekt izradili: Norman Podgorsek, Antonio Žugaj, Filip Rakas ,Andrija Klaric </div>
</body>

</html>