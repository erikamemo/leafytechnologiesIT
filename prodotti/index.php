<?php
include( '../includes/bootstrap.php' );

$title = "Tutti i prodotti della Leafy Technologies";
$metadescription = "In questa pagina potete trovare tutti i prodotti della Leafy Technologies: analizzatori di cloro, pH, ozono e molto altro.";

include( '../includes/header.php' );
?>
<!--Numero doc.: LTSP0005;
Indirizzo: https://www.leafytechnologies.it/prodotti/;
Pubblicato: 05/08/2019;
Ultima revisione: 01/06/2020;
W3C HTML: Attesa nuovo layout;
W3C CSS: Attesa nuovo layout;
Traduzione: 100% ;
Grammatica: 100%;
Da fare:-->

<body>
<?php

include( './../includes/top-and-nav.php' );

?>

<!-- NAV END -->

<main>
<div class="container container-padding mobile-show" style="margin-top: 15px; display: flex; flex-direction: row; justify-content: space-between;"> <a href="<?php echo $root; ?>prodotti/analizzatori/" class="btn btn-primary">Analizzatori</a><a href="<?php echo $root; ?>prodotti/sensori-in-linea/" class="btn btn-primary">Sensori</a><a href="<?php echo $root; ?>prodotti/" class="btn btn-primary">Tutti</a> </div>
  
  <!-- header -->
  <header class="header-slim lg-screen-show"> 
    <!-- carousel -->
    <div class="header-wrap">
      <div  class="slider-container">
        <div class="slider-content">
          <div class="slider-single" data-index="0"> 
              <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/carousel/particle-sense-slide1920x505.webp">
              <img class="slider-single-image" src="<?php echo $root; ?>images/desktop/carousel/particle-sense-slide1920x505.jpg" alt="1" />
              </picture>
            <div class="slider-text" style="left: 50%; color: black;">
              <h1>ParticleSense</h1>
              <p style="margin-top: 20px; margin-bottom: 20px; font-size: 20px; font-weight: 600;">Contatore di particelle in acqua</p>
              <ul style="font-size: 18px; font-weight: 500;">
                <li>Per filtri e sitemi di lavaggio</li>
                <li>Da 2 μm a 750 μm</li>
                <li>Per acque potabili ed industriali</li>
              </ul>
              <div class="slider-btns"> <span><a href="<?php echo $root; ?>prodotti/contatore-di-particelle/" class="link" style="color:black; border-bottom-color: black;">Scopri di più</a></span></div>
            </div>
          </div>
          <div class="slider-single" data-index="1">
              <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/carousel/turbidita-sensore-slide1920x505.webp">
              <img class="slider-single-image" src="<?php echo $root; ?>images/desktop/carousel/turbidita-sensore-slide1920x505.jpg" alt="2" />
              </picture>
            <div class="slider-text" style="left: 70%; color: black;">
              <h1>TurbSense</h1>
              <p style="margin-top: 20px; margin-bottom: 20px; font-size: 20px; font-weight: 600;">Turbidimetro in linea</p>
              <div class="slider-btns"> <span><a href="<?php echo $root; ?>prodotti/turbidimetro-in-linea/" class="link" style="color:black; border-bottom-color: black;">Scopri di più</a></span></div>
            </div>
          </div>
          <div class="slider-single" data-index="2"> 
              <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/carousel/coagsense-slide1920x505.webp">
              <img class="slider-single-image" src="<?php echo $root; ?>images/desktop/carousel/coagsense-slide1920x505.jpg" alt="3" />
              </picture>
            <div class="slider-text" style="left: 50%; color: black;">
              <h1>CoagSense</h1>
              <p style="margin-top: 20px; margin-bottom: 20px; font-size: 20px; font-weight: 600;">Sistema di controllo automatico della coagulazione</p>
              <div class="slider-btns"> <span><a href="<?php echo $root; ?>prodotti/sistema-controllo-coagulazione/" class="link" style="color:black; border-bottom-color: black;">Scopri di più</a></span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header end --> 
  
  <!-- breadcrumbs -->
  <section class="lg-screen-show">
    <div class="container container-padding">
      <div class="breadcrumbs-wrap">
        <div class="breadcrumbs">
          <ul>
            <li><a href="<?php echo $root; ?>">Home</a></li>
          </ul>
        </div>
        <div class="crumb-now">
          <div> <span><a href="<?php echo $root; ?>prodotti/">Prodotti</a></span> </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumbs ens--> 
  
  <!-- filter  -->
  <div class="container container-padding lg-screen-show wrapper-a">
    <div style="display: flex; justify-content: center; align-items: center;"> <span style="color: rgb(38, 95, 170); padding-top: 20px; margin-right: 38px;">Lista:</span>
    <?php include( '../includes/snippets/filter-parametri-list.php' ); ?>
    </div>
  </div>
  <!-- filter end --> 
  
  <!-- sensori and analizzatori list -->
  <section class="wrapper-a">
    <div class="container container-padding">
      <div class="grid-2-columns">
        <?php include( '../includes/snippets/perasense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/conductisense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/ozosense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/solisense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/orpsense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/halosense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/crius-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/particlesense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/countersense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/coagsense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/uv254sense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/labsense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/diosense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/peroxisense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/fluorisense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/oxysense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/turbsense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/phsense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/streamersense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/chargesense-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/accesso-remoto-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/centralina-per-piscine-card-lg-snippet.php' ); ?>
        <?php include( '../includes/snippets/cronos-card-lg-snippet.php' ); ?>
      </div>
    </div>
  </section>
  <!-- sensori list end --> 
  
<!-- contact form slim --> 
<!-- contact form slim END --> 
  
</main>

<!-- FOOTER -->
<?php
include( '../includes/footer.php' );
?>

<!-- FOOTER END --> 

<script src="<?php echo $root; ?>js/scroll-x.js"></script> 
<script src="<?php echo $root; ?>js/carousel.js"></script> 

<!-- form contatti -->
<?php
include( './../includes/call-back-form-scripts.php' );
?>
</body>
</html>