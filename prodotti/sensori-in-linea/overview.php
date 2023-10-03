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
    <div  class="slider-container">
      <div class="slider-content">
        <div class="slider-single" data-index="0"> <img class="slider-single-image" src="../../carousel/breno-machado-in9-n0JwgZ0-unsplash.jpg" alt="1" />
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
        <div class="slider-single" data-index="1"> <img class="slider-single-image" src="../../carousel/purnomo-capunk-KZC7BJo0Cl0-unsplash.jpg" alt="2" />
          <div class="slider-text">
            <h1>Title 2</h1>
            <p>Lorem ipsum dolor sit amet.</p>
            <div class="slider-btns"> <span><a href="#" class="link">Scopri di più</a></span> <span><a href="#" class="btn btn-primary">Preventivo</a></span> </div>
          </div>
        </div>
        <div class="slider-single" data-index="2"> <img class="slider-single-image" src="../../carousel/samuel-ferrara-IEHPDNk2-8w-unsplash.jpg" alt="3" />
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
<li><a href="<?php echo $root; ?>prodotti/">Prodotti</a></li></ul>
      </div>
      <div class="crumb-now">
        <div> <span><a href="<?php echo $root; ?>prodotti/sensori-in-linea/overview.php">Overview</a></span> </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumbs ens--> 

<!-- highlights -->
<section>
  <div class="container container-padding">
    <div class="highlights">
      <div class="high"><a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">
        <div class="top">
          <picture> 
   <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-di-cloro180x154.webp"> <img src="<?php echo $root; ?>images/desktop/products/analizzatore-di-cloro180x154.png" alt="Cronos"> </picture>        </div>
        <div class="bottom">
          <h2>HaloSense</h2>
        </div>
        </a></div>
      <div class="high"><a href="<?php echo $root; ?>prodotti/misuratore-redox/">
        <div class="top">
          <picture> 
   <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/misuratore-redox180x154.webp"> <img src="<?php echo $root; ?>images/desktop/products/misuratore-redox180x154.png" alt="Cronos"> </picture>
        </div>
        <div class="bottom">
          <h2>OrpSense</h2>
        </div>
        </a></div>
      <div class="high"><a href="<?php echo $root; ?>prodotti/analizzatore-di-ossigeno-disciolto/">
        <div class="top">
          <picture> 
   <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-di-ossigeno-disciolto180x154.webp"> <img src="<?php echo $root; ?>images/desktop/products/analizzatore-di-ossigeno-disciolto180x154.png" alt="Cronos"> </picture>
        </div>
        <div class="bottom">
          <h2>OxySense</h2>
        </div>
        </a></div>
      <div class="high"><a href="<?php echo $root; ?>prodotti/analizzatore-di-ph/">
        <div class="top">
          <picture> 
   <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-ph443x308.webp"> <img src="<?php echo $root; ?>images/desktop/products/analizzatore-ph443x308.png" alt="Cronos"> </picture>
        </div>
        <div class="bottom">
          <h2>pHSense</h2>
        </div>
        </a></div>
      <div class="high"><a href="<?php echo $root; ?>prodotti/analizzatore-di-biossido-di-cloro/">
        <div class="top">
          <picture> 
   <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-di-biossido-di-cloro180x154.webp"> <img src="<?php echo $root; ?>images/desktop/products/analizzatore-di-biossido-di-cloro180x154.png" alt="Cronos"> </picture>
        </div>
        <div class="bottom">
          <h2>DioSense</h2>
        </div>
        </a></div>
    </div>
  </div>
</section>
<!-- highlights ENDS --> 

<!-- highligh banners -->
<section>
  <div class="highlight-banner">
    <div class="container container-padding">
      <div class="highlight-banner-content wrapper-a">
        <div class="box-a">
          <h2>HaloSense</h2>
          <p>Analizzatore di cloro</p>
          <div class="buttons"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/" class="link">Scopri di più</a> <a href="<?php echo $root; ?>azienda/contatti.php" class="btn btn-primary">Preventivo</a> </div>
        </div>
        <div class="box-b">
          <picture> 
   <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-di-cloro443x308.webp"> <img src="<?php echo $root; ?>images/desktop/products/analizzatore-di-cloro443x308.png" alt="Cronos"> </picture>
        </div>
      </div>
    </div>
  </div>
  <div class="highlight-banner">
    <div class="container container-padding">
      <div class="highlight-banner-content wrapper-a">
        <div class="box-a">
          <h2>DioSense</h2>
          <p>Analizzatore biossido di cloro</p>
          <div class="buttons"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-biossido-di-cloro/" class="link">Scopri di più</a> <a href="<?php echo $root; ?>azienda/contatti.php" class="btn btn-primary">Preventivo</a> </div>
        </div>
        <div class="box-b">
          <picture> 
   <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-biossido-cloro308x323.webp"> <img src="<?php echo $root; ?>images/desktop/products/analizzatore-biossido-cloro308x323.jpg" alt="Cronos"> </picture>
        </div>
      </div>
    </div>
  </div>
  <div class="highlight-banner">
    <div class="container container-padding">
      <div class="highlight-banner-content wrapper-a">
        <div class="box-a">
          <h2>pHSense</h2>
          <p>Analizzatore di pH</p>
          <div class="buttons"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-ph/" class="link">Scopri di più</a> <a href="<?php echo $root; ?>azienda/contatti.php" class="btn btn-primary">Preventivo</a> </div>
        </div>
        <div class="box-b">
          <picture> 
   <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-ph443x308.webp"> <img src="<?php echo $root; ?>images/desktop/products/analizzatore-ph443x308.png" alt="Cronos"> </picture>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- highligh banners ENDS --> 

<!-- analizzatori -->
<section class="wrapper-a">
  <div class="container container-padding">
    <div class="section-title">
      <h2>Gli analizzatori</h2>
      <a href="<?php echo $root; ?>prodotti/analizzatori/" class="link">Lista analizzatori</a> </div>
    <div class="scrollable-cards">
      <?php include( '../../includes/snippets/crius-card-md-snippet.php' ); ?>
      <?php include( '../../includes/snippets/cronos-card-md-snippet.php' ); ?>
    </div>
    <div class="controller-dots mobile-show">
      <div><a href="#"></a></div>
      <div><a href="#"></a></div>
    </div>
  </div>
</section>
<!-- analizzatori ends --> 
</main>

<!-- FOOTER -->
<?php
include ('../../includes/footer.php');
?>
<!-- FOOTER END --> 
    
    
<script src="<?php echo $root; ?>js/scroll-x.js"></script>
<script src="<?php echo $root; ?>js/carousel.js"></script>
</body>
</html>
