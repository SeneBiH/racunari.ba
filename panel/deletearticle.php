<?php 

require('../konekcija/conn.php'); // povezuje sa bazom podataka

session_start(); // starta sesiju

if (isset($_POST['brisanjeArtikla'])) {     // ako je kliknut submit, odnosno button sprema unose, odnosno geta ih post metodom i sprema u dole navedene
	$id = $_POST['id'];  // varijable, isto kao i kod prijava.php

			$provjeraArtikla = ("SELECT * FROM artikli WHERE id='$id' "); // ukoliko ne postoji korisnik u bazi sa tim usernemom kreira se novi upit
			$rezultatProvjere = mysqli_query($db, $provjeraArtikla);
			if(mysqli_num_rows($rezultatProvjere) == 1) {

				$brisanjeArtikla = ("DELETE FROM artikli WHERE id = '$id' "); // ukoliko ne postoji korisnik u bazi sa tim usernemom kreira se novi upit
				$brisiArtikal = mysqli_query($db, $brisanjeArtikla);
				
			if ($brisanjeArtikla) {
	
				echo "<script>alert('Uspješno ste izbrisali artikal!')</script>"; // ukoliko postoji neka greska
				echo  '<script>window.location="artikli.php";</script>';
            
            	return true;
			} else {
				echo "<script>alert('Pokusajte ponovo!')</script>"; // ukoliko postoji neka greska
				echo  '<script>window.location="izbrisiartikal.php";</script>';
			}
        } else {
			echo "<script>alert('Ne postoji artikal sa tim ID-em!')</script>"; // ukoliko postoji neka greska
			echo  '<script>window.location="izbrisiartikal.php";</script>';
	} 
	mysqli_close($db); 
	return true;
	}
	mysqli_close($db); 
	return true;
?>
