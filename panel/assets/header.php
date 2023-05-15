<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>racunari.ba</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header">
      <div class="nav-bar">
        <div class="brand">
          <a href="index.php">
            <h1><span>računari.ba</span></h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="racunari">
          <button id="dropdown-button">Dropdown</button>

<ul id="dropdown-menu">
  <li><a href="#">Option 1</a></li>
  <li><a href="#">Option 2</a></li>
  <li><a href="#">Option 3</a></li>
</ul>

            <div class="bar"></div>
          </div>
          <ul>
            <li><a href='index.php' data-after="Home">Home</a></li>
            <li><a href='korisnici.php' data-after="Home">Korisnici</a></li>
            <li><a href="artikli.php" data-after="Proizvodi">Lista</a></li>
            <li><a href="dodajpost.php" data-after="Add Post">Dodajte računar</a></li>
            <li><a href="izbrisiartikal.php" data-after="Add Post">Izbrisite računar</a></li>
            <li><a href="urediartikal.php" data-after="Add Post">Uredite računar</a></li>
            <li><a href='changepass.php' data-after="Contact">Promjena šifre</a></li>
            <li><a href='logout.php' data-after="Login">Odjava</a></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
