<?php
    include_once './assets/header.php';
?>

<link rel="stylesheet" href="style1.css" />

<button class="toggle_btn" id="toggle_btn">
          <i class="ri-menu-line"></i>
        </button>
      </nav>
    </header>

    <section class="wrapper">
      <div class="container">
        <div class="grid-cols-2">
          <div class="grid-item-1">
            <h1 class="main-heading">
              Dobrodošli na <span>racunari.ba</span>
              <br />
              Kupite najbolje.
            </h1>
            <p class="info-text">
              Najbolji i najkvalitetniji računari i računarska oprema na tržištu!
            </p>

            <div class="btn_wrapper">
              <button class="btn view_more_btn">
              <a href="login.php"> Prijava</a> <i class="ri-arrow-right-line"></i>
              </button>

              <button class="btn view_more_btn"><a href="signup.php">Registracija</a></button>
            </div>
          </div>
          <div class="grid-item-2">
            <div class="team_img_wrapper">
              <img src="./img/racunari.webp" alt="team-img" />
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="services">
    <div class="services container">
        <h4 class="section-title">Da biste mogli vidjeti artikle <span class="link"><a href="login.php">prijavite se!</a></span></h4>
      </div>
  </section>

    <section id="about">
      <div class="about container" data-aos="fade-up" data-aos-duration="1000">
        <div class="grid-cols-3">
          <div class="grid-col-item">
            <div class="icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                />
              </svg>
            </div>
            <div class="featured_info">
              <span>O nama </span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                ratione facilis animi voluptas exercitationem molestiae.
              </p>
            </div>
          </div>
          <div class="grid-col-item">
            <div class="icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"
                />
              </svg>
            </div>
            <div class="featured_info">
              <span>Kupovina na rate</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                ipsum esse corrupti. Quo, labore debitis!
              </p>
            </div>
          </div>

          <div class="grid-col-item">
            <div class="icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                />
              </svg>
            </div>
            <div class="featured_info">
              <span>Partnerski program</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                nostrum voluptate totam ipsa corrupti vero!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer></footer>


  </body>
</html>

 
 <?php
    include_once './assets/footer.php';
    ?>