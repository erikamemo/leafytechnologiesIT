<?php
  include ('../../includes/bootstrap.php');
  
  $ishomepage = TRUE;
  $title = "Strumentazione per l'analisi e la misura dell'acqua";
  $metadescription = "La Leafy Technologies è una azienda specializzata nella vendita di strumentazione  e soluzioni per l'analisi dell'acqua in continuo ed in linea.";
  $additional_style = '';
  
  include ('../../includes/header.php');
  
  ?>
<!--
  Numero doc.: xxx;
  Indirizzo: https://www.leafytechnologies.it/;
  
  Pubblicato: xxx;
  Ultima revisione: xxx;
  
  W3C HTML: Attesa nuovo layout;
  W3C CSS: Attesa nuovo layout;
  
  Traduzione: 100% ;
  Grammatica: 100%;
  
  Da fare: 
  -->
<body>
  <?php
    include('../../includes/top-and-nav.php');
    
    ?>
  <!-- NAV END --> 
  <main>
    <!-- HEADER -->
    <header style="display: none;">
      <!-- carousel -->
      <div class="header-wrap">
        <div class="slider-container">
          <div class="slider-content">
            <div class="slider-single" data-index="0">
              <img class="slider-single-image" src="../../carousel/breno-machado-in9-n0JwgZ0-unsplash.jpg" alt="1" />
              <div class="slider-text">
                <h1>Title 1</h1>
                <ul>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                </ul>
                <div class="slider-btns"> <span><a href="#" class="link">Scopri di più</a></span> <span><a href="#" class="btn btn-primary">Preventivo</a></span> </div>
              </div>
            </div>
            <div class="slider-single" data-index="1">
              <img class="slider-single-image" src="../../carousel/purnomo-capunk-KZC7BJo0Cl0-unsplash.jpg" alt="2" />
              <div class="slider-text">
                <h1>Title 2</h1>
                <p>Lorem ipsum dolor sit amet.</p>
                <div class="slider-btns"> <span><a href="#" class="link">Scopri di più</a></span> <span><a href="#" class="btn btn-primary">Preventivo</a></span> </div>
              </div>
            </div>
            <div class="slider-single" data-index="2">
              <img class="slider-single-image" src="../../carousel/samuel-ferrara-IEHPDNk2-8w-unsplash.jpg" alt="3" />
              <div class="slider-text">
                <h1>Title 3</h1>
                <p>Lorem ipsum dolor sit amet.</p>
                <div class="slider-btns">
                  <span><a href="#" class="link">Scopri di più</a></span> <span><a href="#" class="btn btn-primary">Preventivo</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- HEADER END --> 
    <!-- breadcrumbs -->
    <section class="lg-screen-show">
      <div class="container container-padding">
        <div class="breadcrumbs-wrap">
          <div class="breadcrumbs">
            <ul>
              <li><a href="<?php echo $root; ?>">Home</a></li>
              <li><a href="<?php echo $root; ?>prodotti/">Prodotti</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatori/">Analizzatori</a></li>
            </ul>
          </div>
          <div class="crumb-now">
            <div> <span><a href="<?php echo $root; ?>prodotti/analizzatori/overview.php">Overview</a></span> </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumbs ens--> 
    <!-- highlights -->
    <section>
      <div class="container container-padding">
        <div class="highlights">
          <div class="high">
            <a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-base/">
              <div class="top">
                <picture>
                  <source type="image/webp" srcset="<?php echo $root; ?>images/mobile/products/analizzatore-multiparametrico-base180x154.webp">
                  <img src="<?php echo $root; ?>images/mobile/products/analizzatore-multiparametrico-base180x154.png" alt="Crius"> 
                </picture>
              </div>
              <div class="bottom">
                <h2>CRONOS<sup>®</sup></h2>
              </div>
            </a>
          </div>
          <div class="high">
            <a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-avanzato/">
              <div class="top">
                <picture>
                  <source type="image/webp" srcset="<?php echo $root; ?>images/mobile/products/analizzatore-multiparametrico-avanzato180x154.webp">
                  <img src="<?php echo $root; ?>images/mobile/products/analizzatore-multiparametrico-avanzato180x154.png" alt="Crius"> 
                </picture>
              </div>
              <div class="bottom">
                <h2>CRIUS<sup>®</sup></h2>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- highlights ENDS --> 
    <!-- highligh banners -->
    <section>
      <div class="highlight-banner bg-azure">
        <div class="container container-padding">
          <div class="highlight-banner-content wrapper-a">
            <div class="box-a">
              <h2>Analizzatore base CRONOS<sup>®</sup></h2>
              <p style="visibility:hidden;">Misura cloro nell'acqua</p>
              <div class="buttons"> <a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-base/" class="link">Scopri di più</a> <a href="<?php echo $root; ?>azienda/contatti.php" class="btn btn-primary">Preventivo</a> </div>
            </div>
            <div class="box-b">
              <picture>
                <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/crius308x443.webp">
                <img src="<?php echo $root; ?>images/desktop/products/crius308x443.png" alt="Crius"> 
              </picture>
            </div>
          </div>
        </div>
      </div>
      <div class="highlight-banner">
        <div class="container container-padding">
          <div class="highlight-banner-content wrapper-a">
            <div class="box-a">
              <h2>Analizzatore base CRIUS<sup>®</sup></h2>
              <p style="visibility:hidden;">Misura cloro nell'acqua</p>
              <div class="buttons"> <a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-avanzato/" class="link">Scopri di più</a> <a href="<?php echo $root; ?>azienda/contatti.php" class="btn btn-primary">Preventivo</a> </div>
            </div>
            <div class="box-b">
              <picture>
                <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/cronos308x443.webp">
                <img src="<?php echo $root; ?>images/desktop/products/cronos308x443.png" alt="Cronos"> 
              </picture>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- highligh banners ENDS --> 
    <!-- analizzatori list -->
    <section class="wrapper-a">
      <div class="container container-padding">
        <div class="grid-2-columns">
          <?php include( '../../includes/snippets/cronos-card-lg-snippet.php' ); ?>
          <?php include( '../../includes/snippets/crius-card-lg-snippet.php' ); ?>
          <?php include( '../../includes/snippets/centralina-per-piscine-card-lg-snippet.php' ); ?>
          <?php include( '../../includes/snippets/accesso-remoto-card-lg-snippet.php' ); ?>
          <?php include( '../../includes/snippets/coagsense-card-lg-snippet.php' ); ?>
        </div>
      </div>
    </section>
    <!-- analizzatori list end --> 
  </main>
  <!-- FOOTER -->
  <?php
    include ('../../includes/footer.php');
    ?>
  <!-- FOOTER END --> 
  <script src="<?php echo $root; ?>js/scroll-x.js"></script>
  <script src="<?php echo $root; ?>js/carousel.js"></script>
  <!-- form contatti -->    
  <?php
    include( '../../includes/call-back-form-scripts.php' );
    ?>
</body>
</html>
