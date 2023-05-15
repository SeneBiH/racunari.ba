<?php 
// require('panel/registracija.php');
  if(isset($_SESSION['korisnik_sesija'])) { echo '<script>window.location="panel/index.php</script>'; return true; } ?>
<?php require('./assets/header-signup.php'); ?>


  <!-- Signup Section  -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="content">
		<form action="./panel/registracija.php" method="POST">
    <div class="noviArtikal">
    <h1>REGISTRUJTE SE</h1> 
        <input type="text" placeholder="Username" name="korisnik" required>
        <input type="email" placeholder="Email" name="email" required>
        <input type="date" placeholder="Godište" name="datumRodjenja" required>
        <input type="password" placeholder="Password" name="sifra">
        <input type="password" placeholder="Ponovo unesite password" name="rsifra" required>
        <div class="redirect">
        Imate račun? <a href="login.php" class="linked">Prijavite se!</a>
        </div>
        <button name="registrujteSe" type="submit">Registrujte se</button>
      </div>
		</form>
  </div>

  <!-- End Contact Section -->

 <?php
    include_once './assets/footer.php';
 ?>