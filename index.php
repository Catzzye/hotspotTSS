<html>

<head>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title> Hotspot TSS </title> 

<link rel="stylesheet" type="text/css" href="zaglavlje.css">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ffff80;
}


<!--#forma{
float:right;

}
-->


</style>
	


</head>

<body>

<div class="pocetak">

<!--
 <form id="forma">
MOJ WEB:  Username:  <input type="text" name="firstname">  Password:  <input type="Password" name="Password">
</form> 
-->


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

<!--<a class="button_gornji" href="povijest.html">Povijest TŠS</a> <a class="button_gornji" href="kontakt.html">Kontaktirajte TŠS</a> <a class="button_gornji" href="smjerovi.html">O smjerovima</a> <br> <br> -->

<hr>


<table align="center" width="100%" cellspacing="8" height="100%">


<tr><td width="20%" height="300" align="center" valign="top">

<br><br><br><br><br><br><br><br><br>
//Ovdje ide sadrzaj lijevog sidebara koji se trenutno ne koristi

 </td>
<td  height="300" align="center" valign="top">
<?php
$servername ="localhost";
					$username = "root";
					$password = "password";

					$link = mysqli_connect($servername,$username);

					if (!$link) {
					die("Connection failed: " . mysqli_connect_error());
					}
					
					
					echo "<table>";
					mysqli_select_db($link, "korisnici");

					$result = mysqli_query($link , "SELECT * FROM feed");

					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					echo "<tr><td align=left valign=top><h3>".$row["naslov"]."</h3></td></tr>
					<tr><td align=left valign=top bgcolor=white><br><br><br>".$row["vijest"]."<br><br><br></td></tr>";
					}
					mysqli_free_result($result);
					echo "</table>";
					



?>

<br> <br>
<a class="button_povratak" href="index.php">Povratak na pocetnu stranicu</a> <br> <br> &nbsp;
</td>
<td width="20%" height="300" align="center" valign="top">
<img  src="agencija.jpg" height="200" width="200"><br><br>
<img  src="erasmus.jpg" height="200" width="200"><br><br>
<img  src="grb.png" height="200" width="200">

 </td></tr>
</table>

<div class="podnozje">
Tehnièka Škola Sisak Adresa: Marijana Cvetkovica 2, 44000 Sisak // Projekt izradili: Norman Podgorsek, Antonio Žugaj, Filip Rakas ,Andrija Klaric </div>

</body>

</html>