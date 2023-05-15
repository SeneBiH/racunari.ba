<?php 
require('../konekcija/conn.php');
require('novasifra.php');
require('./assets/header.php');

$username = $_SESSION["korisnik_sesija"]; // sprema korisnicki username pomocu sesiju, jer nam je sesija zasnovana na username

if(empty($username)) { echo'<script>window.location="../login.php";</script>'; return true;} 


$sqle = "SELECT * FROM registrovani WHERE korisnik='$username'"; // upit se sprema u varijablu
$query2 = mysqli_query($db, $sqle); // izvrsava se upit
$row = mysqli_fetch_row($query2); // vraca nam kompletan red tog korisnika na osnovu prethodnog upita, odnosno usernmaea
foreach($query2 as $row) {  // for petlja prolazi kroc ijeli red dok ne nadje admin kolonu i istom
    $admin = $row['admin'];
}
if($admin == 0) { echo'<script>window.location="user.php";</script>'; return true;} // ukoliko je admin vrijednost == 0 
                                                                                    // ukoliko user nije admin u prevodu
                                                                                    // nema pristup panel/index.php
                                                                                    // nego ga redirecta na panel/user.php
                                                                                    // a u suprotnom korisnik ima pristup panel/index.php


?>

  <!-- Login Section  -->


  <body>
  <div class="content">
		<form action="novasifra.php" method="POST">
    <div class="noviArtikal">
    <h1>Promijenite šifru:</h1> 
    <input type="password" placeholder="Stari password" name="sifra" required>
        <input type="password" placeholder="Novi password" name="novasifra" required>
        <button name="promjenaSifre">Potvrdi</button>
      </div>
		</form>
  </div>
   
  
  <!-- End Login Section  -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Info <span></span></h1>
      </div>
      <div class="contact-items">
      </div>
        <div class="contact-item">
          <div class="contact-info">
            <h1>Kontakt</h1>
            <h2>racunariba@gmail.com<h2>
              <h2>+38762610316</h2>
            <h2>www.racunari.ba</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
 
 <?php
require('./assets/footer.php');
?>