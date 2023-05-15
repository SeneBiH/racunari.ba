<?php 

require('../konekcija/conn.php'); // povezuje sa bazom podataka

session_start(); // starta sesiju

if (isset($_POST['uredivanjeArtikla'])) {     // ako je kliknut submit, odnosno button sprema unose, odnosno geta ih post metodom i sprema u dole navedene
	
    $id = $_POST['id'];  // varijable, isto kao i kod prijava.php
    
    $provjeraArtikla = ("SELECT * FROM artikli WHERE id='$id' "); // ukoliko ne postoji korisnik u bazi sa tim usernemom kreira se novi upit
    $rezultatProvjere = mysqli_query($db, $provjeraArtikla);
    if(mysqli_num_rows($rezultatProvjere) == 1) {

    
    $id = $_POST['id'];  // varijable, isto kao i kod prijava.php
	$noviNaslov = $_POST['naslov'];  // varijable, isto kao i kod prijava.php
	$noviTekst = $_POST['tekst'];
	$noviAlt = $_POST['rijeci'];
	$novaCijena = $_POST['cijena'];
	$noviImg = $_FILES['slika']['name'];
    $folder = "slike/";
	move_uploaded_file($_FILES['slika']['tmp_name'], $folder.$noviImg); 
    $query = mysqli_query($db, "SELECT * FROM `artikli` WHERE id='$id'"); 
    if(mysqli_num_rows($query) == 1) { 
        if(strlen($noviNaslov) > 3) {
            $sql = "UPDATE `artikli` SET naslov='$noviNaslov' WHERE id='$id'";
            $rezultat = mysqli_query($db, $sql); 
        }
        if(strlen($noviTekst) > 3) {
            $sql = "UPDATE `artikli` SET opis='$noviTekst' WHERE id='$id'";
            $rezultat = mysqli_query($db, $sql); 
        }
        if(strlen($noviAlt) > 3) {
            $sql = "UPDATE `artikli` SET kljucneRijeci='$noviAlt' WHERE id='$id'";
            $rezultat = mysqli_query($db, $sql); 
        }
        if(strlen($novaCijena) > 3) {
            $sql = "UPDATE `artikli` SET cijena='$novaCijena' WHERE id='$id'";
            $rezultat = mysqli_query($db, $sql); 
        }
        if(strlen($noviImg) > 3) {
            $sql = "UPDATE `artikli` SET slika='$folder$noviImg' WHERE id='$id'";
            $rezultat = mysqli_query($db, $sql); 
        }
        echo "<script>alert('Uspješno ste uradili artikal!')</script>"; // ukoliko postoji neka greska
        echo'<script>window.location="artikli.php"; </script> '; 

    } else {
        echo "<script>alert('Došlo je do pogreške!')</script>"; // ukoliko postoji neka greska
        echo'<script>window.location="urediartikal.php"; </script> '; 
    }
    mysqli_close($db); 
	return true;
} else {
    echo "<script>alert('Ne postoji artikal sa tim ID-em!')</script>"; // ukoliko postoji neka greska
    echo'<script>window.location="urediartikal.php"; </script> '; 
}

}
?>
