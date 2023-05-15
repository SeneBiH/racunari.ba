<?php 
 require('../konekcija/conn.php'); 
 require('prijava.php');
 include_once './assets/header.php';

 $username = $_SESSION["korisnik_sesija"]; // sprema korisnicki username pomocu sesiju, jer nam je sesija zasnovana na username

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


  <body>
    <div class="content">
		<form action="editpost.php" method="POST" enctype="multipart/form-data">
    <div class="noviArtikal">
    <h1>Uredi računar</h1> 
        <input type="text" placeholder="ID" name="id">
        <input type="text" placeholder="Naslov" name="naslov">
        <input type="number" placeholder="Cijena" name="cijena">
        <input type="text" placeholder="Ključne riječi" name="rijeci">
        <textarea class="textarea" type="text" placeholder="Opis artikla" name='tekst'></textarea>
        <div class="upload-btn-wrapper">
        <button class="dodajSliku">Dodaj sliku</button>
        <input type="file" name="slika" />
      </div>
        <button name="uredivanjeArtikla" type="submit">Uredi računar</button>
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
    include_once './assets/footer.php';
 ?>