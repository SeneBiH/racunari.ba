<?php 

require('../konekcija/conn.php'); // povezuje sa bazom podataka

session_start(); // starta sesiju

if (isset($_POST['dodavanjeArtikla'])) {     // ako je kliknut submit, odnosno button sprema unose, odnosno geta ih post metodom i sprema u dole navedene
	$naslov = $_POST['naslov'];  // varijable, isto kao i kod prijava.php
	$tekst = $_POST['tekst'];
	$alt = $_POST['rijeci'];
	$cijena = $_POST['cijena'];
	$img = $_FILES['slika']['name'];
    $folder = "slike/";
	move_uploaded_file($_FILES['slika']['tmp_name'], $folder.$img); 

			$dodajPost = "INSERT INTO artikli (naslov, opis, cijena, kljucneRijeci, slika)
					VALUES ('$naslov','$tekst', '$cijena', '$alt', '$folder$img')"; // ukoliko ne postoji korisnik u bazi sa tim usernemom kreira se novi upit
			$dodavanjePosta = mysqli_query($db, $dodajPost);
			if ($dodavanjePosta) {
	
               
				echo "<script>alert('Uspješno ste dodali novi artikal!')</script>"; 
		    	echo  '<script>window.location="artikli.php";</script>';// ukoliko upit bude uslov true
				// ukoliko prethodni if statment bude true, biti ce i ovaj te se zatim kreira sesija na osnovu korisnickog usernamea
				// te nas redirecta na panel / index.php
            
            	return true;
			} else {
				echo "<script>alert('Pokusajte ponovo!')</script>"; // ukoliko postoji neka greska
				echo  '<script>window.location="dodajpost.php";</script>';
			}
        }

?>
