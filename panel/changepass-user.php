<?php 
require('../konekcija/conn.php');
require('novasifra.php');
require('./assets/header-user.php');


 
if(empty($_SESSION["korisnik_sesija"])) { echo'<script>window.location="../login.php";</script>'; return true;} 
 
?>

?>

  <!-- Login Section  -->


  <body>
  <div class="content">
		<form action="novasifra.php" method="POST">
    <div class="noviArtikal">
    <h1>PROMIJENITE ŠIFRU</h1> 
        <input type="password" placeholder="Stari password" name="sifra" required>
        <input type="password" placeholder="Novi password" name="novasifra" required>
        <button name="promjenaSifre" type="submit">Potvrdi</button>
      </div>
		</form>
  </div>
   
  
  <!-- End Login Section  -->

   <!-- End Login Section  -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Info <span></span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="contact-info">
            <h1>Broj telefona:</h1>
            <h2>+387 62 610 316</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-info">
            <h1>E-mail:</h1>
            <h2>racunariba@gmail.com</h2>
            <h2></h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-info">
            <h1>Web stranica</h1>
            <h2>www.racunari.ba</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
 
 <?php
    include_once './assets/footer.php';
 ?>