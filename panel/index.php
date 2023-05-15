<?php
    require('../konekcija/conn.php'); 
    require('prijava.php');
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
 


  <section id="projects">
  <div class="projects container">
    
      <div class="projects-header">
        <h1 class="section-title"><span>Racunari</span></h1>
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
            <h1 style="padding:2rem 0;">'.$formatiranaCijena.' KM</h1>
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
  <!-- End Projects Section -->

 
 <?php
 require('./assets/footer.php');
 ?>