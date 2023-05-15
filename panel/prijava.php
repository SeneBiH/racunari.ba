<?php
require('../konekcija/conn.php'); // povezuje sa bazom podataka


session_start(); // pokrece sesiju


if (isset($_POST['korisnik'])) {    // ako je unesen username, ako je ispunjen uslov if statmenta izvrsava se kod ispod
	$username = $_POST['korisnik'];  // dohvata username POST metodom i sprema u varijablu $username
	$password = $_POST['sifra'];    // dohvata password POST metodom i sprema u varijablu $password

	$sql = "SELECT * FROM registrovani WHERE korisnik='$username' AND sifra ='$password'"; // $sql je varijabla u koju smo spremili upit
	$rezultat = mysqli_query($db, $sql); 												  // $rezultat je varijabla koja salje upit u bazu
	if (mysqli_num_rows($rezultat) == 1) {												// putem funkcije mysqli_query
		$row = mysqli_fetch_assoc($rezultat);											// $db se odnosi na naziv nase databaze, $sql je ranije spremljen
		$_SESSION['korisnik_sesija'] = $row['korisnik'];                               // upit u varijablu, upite mozemo izvrsavat i direktno
		echo'<script>window.location="index.php";</script>'; return true;			// unutar zagrade a i spremanjem u varijablu kao u ovom slucaju
	} else {																			// zatim pozivanjem iste
		echo "<script>alert('Netačan username ili šifra.')</script>"; 
		echo'<script>window.location="../login.php";</script>'; return true;			// unutar zagrade a i spremanjem u varijablu kao u ovom slucaju
		// uslov u if statmentu jeste mysqlu_num_rows za prethodni upit
																						// odnosno vraca nam kompletan red od korisnika koji se prijavljuje
	}																					// ukoliko isti postoji, tj sve podatke od istog
}																						// te ukoliko isti postoji izvrsava se IF, odnosno statment je TRUE
	
// mysqli_fetch_assoc nam je upit u databazu koji vraca odredjenu kolonu iz reda, odredjenu vrijednost u ovom slucaju korisnik, sto zapravo
// predstavlja username, koji se zatim sprema u sesiju, odnosno na osnovu username se kreira i starta sesija te nas redirecta na index.php
// odnosno panel/php koja predstavlja pocetnu stranicu od panel a ukoliko ne pronadje unesene podatke u db vraca nam alert, odnosno izvrsava se
// else

// echo sluzi za ispis, pomocu istog mozemo vratiti neku stranicu, odraditi ispis i slicno, slican print samo sto posjeduje dosta vise mogucnosti









?>																					