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
  <div class="projects articles">
    
      <div class="projects-header">
        <h1 class="section-title"><span>Računari</span></h1>
      </div>
      <div class="pretragaBar">
      <label>Ovdje možete pretražiti računare</label>
      <input type="text" class="pretraga" id="pretraga" placeholder="Pretražite artikle" onkeyup="Pretraga()">
      </div>
      <table id="proizvodi">
      <tr>
        <th>ID</th>
        <th>Naslov</th>
        <th>Ključne riječi</th>
        <th>Cijena</th>
      </tr>
      <?php 

    $bazaArtikala = "SELECT * FROM artikli ORDER BY id DESC"; // upit se sprema u varijablu
    $nasiArtikli = mysqli_query($db, $bazaArtikala); // izvrsava se upit
    $uzmiArtikle = mysqli_fetch_all($nasiArtikli , MYSQLI_ASSOC);
    
    foreach($nasiArtikli as $artikal) {

echo '

  <tr>
    <td scope="row">'.$artikal['id'].'</td>
    <td scope="row">'.$artikal['naslov'].'</td>
    <td scope="row">'.$artikal['kljucneRijeci'].'</td>
    <td scope="row">'.number_format($artikal['cijena']).' KM</td>
  </tr>';
    }
    ?>
    </table>
  </div>


  </section>
  <!-- End Projects Section -->
  <script>
  function Pretraga() { 

var input, filter, table, tr, td, i, txtValue;

input = document.getElementById("pretraga");
filter = input.value.toUpperCase();
table = document.getElementById("proizvodi");
tr = table.getElementsByTagName("tr");

for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
  </script>
 
 <?php
     require('./assets/footer.php');
     ?>