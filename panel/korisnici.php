<?php
    require('../konekcija/conn.php'); 
    session_start(); // pokrece sesiju
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
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services articles">
      <div class="service-top">
        <h1 class="section-title"><span>Registrovani</span></h1>
      </div>
      <div class="service-bottom">

      <?php
      
    $user = "SELECT * FROM registrovani"; // upit se sprema u varijablu
    $userSrc = mysqli_query($db, $user); // izvrsava se upit
    $rowUser = mysqli_fetch_all($userSrc, MYSQLI_ASSOC);
    
    foreach($rowUser as $oneUser) {

      echo'
        <div class="service-item">
          <p>Username: '.$oneUser['korisnik'].'</p>
          <p>Datum rodjenja: '.$oneUser['datumRodjenja'].'</p>
          <p>Email: '.$oneUser['email'].'</p>
          <p>Lozinka: '.$oneUser['sifra'].'</p>
        </div>';
    }
        ?>
   
      </div>
    </div>
  </section>
 

 
 <?php
     require('./assets/footer.php');

 ?>