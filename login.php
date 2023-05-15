<?php 
require('./assets/header-signup.php');
?>

  <!-- Login Section  -->


  <body>
  <div class="content">
		<form action="./panel/prijava.php" method="POST">
    <div class="noviArtikal">
    <h1>PRIJAVITE SE</h1> 
        <input name="korisnik" type="text" placeholder="Username" required>
        <input name="sifra" type="password" placeholder="Password" required>
        <div class="redirect">
        Nemaš račun? <a href="signup.php" class="linked">Registrujte se!</a>
        </div>
        <button>Prijava</button>
      </div>
		</form>
  </div>
   
  
  <!-- End Login Section  -->

  <!-- Contact Section -->
  
  <!-- End Contact Section -->
 
 <?php
require('./assets/footer.php');
?>