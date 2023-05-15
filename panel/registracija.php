<?php 

require('../konekcija/conn.php'); // povezuje sa bazom podataka

session_start(); // starta sesiju

if (isset($_POST['registrujteSe'])) {     // ako je kliknut submit, odnosno button sprema unose, odnosno geta ih post metodom i sprema u dole navedene
	$username = $_POST['korisnik'];  // varijable, isto kao i kod prijava.php
	$email = $_POST['email'];
	$password = $_POST['sifra'];
	$rpassword = $_POST['rsifra'];
	$datumRodjenja = $_POST['datumRodjenja'];

	if ($password == $rpassword) {  // if statement, ukoliko je password jednak ponovnom unosu passworda, provjerava da li postoji korisnik sa istim
		$sql = "SELECT * FROM registrovani WHERE korisnik ='$username'"; // usernameom pomocu upita koji su objasnjeni u prijava.php
		$query = mysqli_query($db, $sql);
		if (mysqli_num_rows($query) == 0) {
			$sql = "INSERT INTO registrovani (korisnik, sifra, email, admin, datumRodjenja)
					VALUES ('$username','$password', '$email', 0, '$datumRodjenja')"; // ukoliko ne postoji korisnik u bazi sa tim usernemom kreira se novi upit
			$query = mysqli_query($db, $sql);
			if ($query) {
	; 
            	$_SESSION['korisnik_sesija'] = $username; echo'<script>window.location="index.php";</script>'; // ukoliko upit bude uslov true
				// ukoliko prethodni if statment bude true, biti ce i ovaj te se zatim kreira sesija na osnovu korisnickog usernamea
				// te nas redirecta na panel / index.php
            
             
            	return true;
			} else {
				echo "<script>alert('Pokusajte ponovo!')</script>"; // ukoliko postoji neka greska
				echo'<script>window.location="../signup.php";</script>';

			}
		} else {
			echo "<script>alert('Taj username vec postoji u databazi')</script>"; // ukoliko username postoji u bazi
			echo'<script>window.location="../signup.php";</script>';
		}
		
	} else {
		echo "<script>alert('Sifre se ne podudaraju')</script>"; // ukoliko se sifre ne podudaraju
	}
}

?>
