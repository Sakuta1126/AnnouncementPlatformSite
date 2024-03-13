<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css">
  <div class="row">
    <div class="col-xs-12 col-md-12 col-md-offset-3 text-center">
      <?php if (!isset($_SESSION['is_logged_in'])): ?>
        <div class="text-center">
          <h1>Witaj na stronie z ogłoszeniami!</h1>
          <p class="lead">Na tej stronie znajdziesz najlepsze ogłoszenia, zaloguj sie aby móc je obejrzeć</p>
          <section class="hero text-center text-white animate__animated animate__fadeIn">

          </section>

          <!-- Why Us Section -->
          <section id="why-us" class="bg-light py-5 animate__animated animate__fadeIn">
            <div class="container text-center">
              <h2 class="display-4 fw-bold mb-4">Dlaczego My?</h2>
              <div class="row">
                <div class="col-md-4">
                  <i class="bi bi-trophy fs-1 mb-3 text-primary"></i>
                  <h3>Nagradzane Ogłoszenia</h3>
                  <p>Odkryj nagradzane oferty pracy dostępne tylko u nas.</p>
                </div>
                <div class="col-md-4">
                  <i class="bi bi-people fs-1 mb-3 text-primary"></i>
                  <h3>Wspólnota Profesjonalistów</h3>
                  <p>Dołącz do naszej społeczności skupiającej najlepszych specjalistów.</p>
                </div>
                <div class="col-md-4">
                  <i class="bi bi-clock fs-1 mb-3 text-primary"></i>
                  <h3>Oszczędność Czasu</h3>
                  <p>Nie trać czasu na przeglądanie nieaktualnych ofert. U nas znajdziesz to, czego szukasz.</p>
                </div>
              </div>
            </div>
          </section>

          <!-- Features Section -->
          <section id="features" class="py-5 animate__animated animate__fadeIn">
            <div class="container text-center">
              <h2 class="display-4 fw-bold mb-4">Nasze Funkcje</h2>
              <div class="row">
                <div class="col-md-4">
                  <i class="bi bi-search fs-1 mb-3 text-primary"></i>
                  <h3>Skuteczne Wyszukiwanie</h3>
                  <p>Wykorzystaj zaawansowane filtry, aby szybko znaleźć oferty dopasowane do Twoich oczekiwań.</p>
                </div>
                <div class="col-md-4">
                  <i class="bi bi-chat fs-1 mb-3 text-primary"></i>
                  <h3>Komunikacja Z Pracodawcami</h3>
                  <p>Bezpośredni kontakt z pracodawcami poprzez naszą platformę, aby uzyskać więcej informacji.</p>
                </div>
                <div class="col-md-4">
                  <i class="bi bi-shield fs-1 mb-3 text-primary"></i>
                  <h3>Bezpieczne Transakcje</h3>
                  <p>Nasza platforma gwarantuje bezpieczne transakcje i ochronę Twoich danych.</p>
                </div>
              </div>
            </div>
          </section>

          <!-- Contact Section -->
          <section id="contact" class="bg-light py-5 animate__animated animate__fadeIn">
            <div class="container text-center">
              <h2 class="display-4 fw-bold mb-4">Skontaktuj Się Z Nami</h2>
              <p class="lead">Masz pytania? Jesteśmy tu, aby pomóc. Skontaktuj się z nami.</p>
              <a href="#contact" class="btn btn-primary btn-lg mt-3" onclick="showContactAlert()">Kontakt</a>
            </div>
          </section>
        </div>




      <?php else: ?>
        <div class="text-center">
          <h1>Witaj na stronie z ogłoszeniami!</h1>
          <p class="lead">Na tej stronie znajdziesz najlepsze
            ogłoszenia</p>
          <a class="btn	btn-primary	text-center" href="<?php
          echo ROOT_URL; ?>ads">Zobacz</a>
          <section class="hero text-center text-white animate__animated animate__fadeIn">

          </section>
          <section id="why-us" class="bg-light py-5 animate__animated animate__fadeIn">
            <div class="container text-center">
              <h2 class="display-4 fw-bold mb-4">Dlaczego My?</h2>
              <div class="row">
                <div class="col-md-4">
                  <i class="bi bi-trophy fs-1 mb-3 text-primary"></i>
                  <h3>Nagradzane Ogłoszenia</h3>
                  <p>Odkryj nagradzane oferty pracy dostępne tylko u nas.</p>
                </div>
                <div class="col-md-4">
                  <i class="bi bi-people fs-1 mb-3 text-primary"></i>
                  <h3>Wspólnota Profesjonalistów</h3>
                  <p>Dołącz do naszej społeczności skupiającej najlepszych specjalistów.</p>
                </div>
                <div class="col-md-4">
                  <i class="bi bi-clock fs-1 mb-3 text-primary"></i>
                  <h3>Oszczędność Czasu</h3>
                  <p>Nie trać czasu na przeglądanie nieaktualnych ofert. U nas znajdziesz to, czego szukasz.</p>
                </div>
              </div>
            </div>
          </section>
          <section id="features" class="py-5 animate__animated animate__fadeIn">
            <div class="container text-center">
              <h2 class="display-4 fw-bold mb-4">Nasze Funkcje</h2>
              <div class="row">
                <div class="col-md-4">
                  <i class="bi bi-search fs-1 mb-3 text-primary"></i>
                  <h3>Skuteczne Wyszukiwanie</h3>
                  <p>Wykorzystaj zaawansowane filtry, aby szybko znaleźć oferty dopasowane do Twoich oczekiwań.</p>
                </div>
                <div class="col-md-4">
                  <i class="bi bi-chat fs-1 mb-3 text-primary"></i>
                  <h3>Komunikacja Z Pracodawcami</h3>
                  <p>Bezpośredni kontakt z pracodawcami poprzez naszą platformę, aby uzyskać więcej informacji.</p>
                </div>
                <div class="col-md-4">
                  <i class="bi bi-shield fs-1 mb-3 text-primary"></i>
                  <h3>Bezpieczne Transakcje</h3>
                  <p>Nasza platforma gwarantuje bezpieczne transakcje i ochronę Twoich danych.</p>
                </div>
              </div>
            </div>
          </section>

          <!-- Contact Section -->
          <section id="contact" class="bg-light py-5 animate__animated animate__fadeIn">
            <div class="container text-center">
              <h2 class="display-4 fw-bold mb-4">Skontaktuj Się Z Nami</h2>
              <p class="lead">Masz pytania? Jesteśmy tu, aby pomóc. Skontaktuj się z nami.</p>
              <a class="btn btn-primary btn-lg mt-3" onclick="showContactAlert()">Kontakt</a>
            </div>
          </section>

        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdn.jsdelivr.net/npm/scrollreveal@4.1.0/dist/scrollreveal.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/animate.css"></script>
<script>
  feather.replace();
  ScrollReveal().reveal('.hero, #why-us, #features, #contact', { delay: 300, duration: 800, origin: 'bottom', distance: '50px' });
  function showContactAlert() {
    alert("E-mail: mikusj2005@email.com\nNumer telefonu: +48 539 462 694");
  }
</script>