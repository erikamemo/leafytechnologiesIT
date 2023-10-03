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
      <h1>presentazioni</h1> </div>
    </a>  
  </div>
</div>

<!-- header x-slim -->
<header class="header-xslim bg-azure lg-screen-show" style="background-image: url('<?php echo $root; ?>images/desktop/headers/schede-prodotto-1920x224.jpg'), url('<?php echo $root; ?>images/desktop/headers/schede-prodotto-1920x224.webp'); background-repeat: no-repeat;">
  <div class="container container-padding">
    <h1>presentazioni</h1>
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
        <div> <span><a href="<?php echo $root; ?>bibliotecnica/presentazioni/">Presentazioni</a></span> </div>
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
            <li><a href="<?php echo $root; ?>docs/presentazioni/analizzatore-di-coagulazione.pptx">StreamerSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/analizzatore-per-piscina.pptx">AquaSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/analizzatore-uv254.pptx">UV254Sense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/contatori-di-particelle-acqua.pptx">Contatori di particelle</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/ottimizzazione-coagulazione-acqua.pptx">CoagSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensore-di-torbidita.pptx">TurbSense<sup>®</sup></a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensore-solidi-sospesi.pptx">SoliSense<sup>®</sup></a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-acido-peracetico.pptx">PeraSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-conducibilita-acqua.pptx">ConductiSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-di-biossido-di-cloro.pptx">DioSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-di-cloro-amperometrici.pptx">HaloSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-di-fluoro.pptx">FluoroSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-di-ph.pptx">pHSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-ossigeno-disciolto.pptx">OxySense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-ozono-in-acqua.pptx">	OzoSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-perossido-idrogeno.pptx">	PeroxiSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-redox.pptx">ORPSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sistema-sostituitivo-flocculatore-da-banco.pptx">LabSense</a></li>
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
