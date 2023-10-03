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
<!-- NAV -->
<?php
    
    include('../../includes/top-and-nav.php');
    
    ?>

<!-- NAV END -->

<main>
    
<div class="header-title-mobile mobile-show">
  <div class="container container-padding">
    <a href="<?php echo $root; ?>bibliotecnica/">
    <div class="header-title-mobile-content">
      <svg class="Backward_arrow" data-name="Backward arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
        <path class="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(16 16) rotate(180)" fill="#6b6d69"/>
      </svg>
      <h1>Articoli</h1> </div>
    </a>  
  </div>
</div>

<!-- header x-slim -->
<header class="header-xslim bg-azure lg-screen-show" style="background-image: url('<?php echo $root; ?>images/desktop/headers/articoli-1920x224.jpg'), url('<?php echo $root; ?>images/desktop/headers/articoli-1920x224.webp'); background-repeat: no-repeat;">
  <div class="container container-padding">
    <h1>Articoli</h1>
  </div>
</header>
<!-- header x-slim end --> 

<!-- breadcrumbs -->
<section class="lg-screen-show">
  <div class="container container-padding">
    <div class="breadcrumbs-wrap">
      <div class="breadcrumbs">
        <ul>
          <li><a href="<?php echo $root; ?>">Home</a></li>
          <li><a href="<?php echo $root; ?>bibliotecnica/">Bibliotecnica</a></li>
        </ul>
      </div>
      <div class="crumb-now">
        <div> <span><a href="<?php echo $root; ?>bibliotecnica/articoli/">Articoli</a></span> </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumbs ens-->    
    
<!-- list link -->
<section class="wrapper-a">
    <div class="container container-padding">
        <div class="linked-list-wrapper">
        <ul class="linked-list">
            <li><a href="<?php echo $root; ?>docs/articoli/misura-della-conducibilita-in-acqua.pdf">Misurazione della conducibilità</a></li>
            <li><a href="<?php echo $root; ?>docs/articoli/test-ossigeno-disciolto-irlanda.pdf">Risultati di uno studio sul campo sui sensori di ossigeno disciolto </a></li>
            <li><a href="<?php echo $root; ?>docs/articoli/calibrazione-turbidimetro-in-linea.pdf">Calibrazione del turbidimetro in linea TurbSense<sup>®</sup></a></li>
            <li><a href="<?php echo $root; ?>docs/articoli/test-turbidimetro-stati-uniti.pdf">Risultati di uno studio sul TurbSense<sup>®</sup></a></li>
            <li><a href="<?php echo $root; ?>docs/articoli/centralina-per-piscine.pdf">Analizzatore AquaSense e costi energetici nelle piscine </a></li>
        </ul>
        </div>
    </div>
</section>
<!-- list link end -->
    
</main>
    
<!-- FOOTER -->
<?php
include ('../../includes/footer.php');
?>
<!-- FOOTER END --> 
</body>
</html>
