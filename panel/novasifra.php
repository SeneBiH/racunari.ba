<?php  require('../konekcija/conn.php');  // requira bazu i prijava.php
session_start(); // pokrece sesiju
 
?>

<?php
if(isset($_POST['promjenaSifre'])) {
      $sifra = $_POST['sifra']; 
      $novasifra = $_POST['novasifra'];
      $korisnik1 = $_SESSION['korisnik_sesija'];

      $upit = "SELECT * FROM registrovani WHERE sifra='$sifra' AND korisnik='$korisnik1'";
      $provjera = mysqli_query($db, $upit); 

      if(mysqli_num_rows($provjera) == 1) {
        $sql = "UPDATE registrovani SET sifra='$novasifra' WHERE sifra='$sifra' AND korisnik='$korisnik1'"; 
        mysqli_query($db,$sql);          
        echo "<script>alert('Uspješno ste promijenili šifru!')</script>"; 
		    echo  '<script>window.location="index.php";</script>';
        return true;  
        
      } else {
        echo "<script>alert('GREŠKA! Pokušajte ponovo.')</script>"; 
		    echo  '<script>window.location="changepass.php";</script>';
       } 
      }

?>