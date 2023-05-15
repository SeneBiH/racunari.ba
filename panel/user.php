<?php
    require('../konekcija/conn.php');
    require('prijava.php');
    require('./assets/header-user.php');
  
    if(empty($_SESSION["korisnik_sesija"])) { echo'<script>window.location="../login.php";</script>'; return true;} 
 
    ?>
 

  <section id="projects">
  <div class="projects container">
    
      <div class="projects-header">
        <h1 class="section-title"><span>Računari</span></h1>
      </div>
      <div class="all-projects">

  <?php 

$bazaArtikala = "SELECT * FROM artikli ORDER BY id DESC"; // upit se sprema u varijablu
    $nasiArtikli = mysqli_query($db, $bazaArtikala); // izvrsava se upit
    $uzmiArtikle = mysqli_fetch_all($nasiArtikli , MYSQLI_ASSOC);
    
    foreach($nasiArtikli as $artikal) {

      $formatiranaCijena = number_format($artikal['cijena']);
    echo '

        <div class="project-item">
          <div class="project-info">
            <h1>'.$artikal['naslov'].'</h1>
            <p>'.$artikal['opis'].'</p>
            <h1 style="padding:2rem 0;">'.$formatiranaCijena.'KM</h1>
          </div>
          <div class="project-img">
            <img src="'.$artikal['slika'].'" alt="'.$artikal['kljucneRijeci'].'">
          </div>
    </div>';
    }
    ?>
          </div>
          </div>
          </div>


  </section>

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
            <h1>Email</h1>
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
  
 
 <?php
    require('./assets/footer.php');
 ?>