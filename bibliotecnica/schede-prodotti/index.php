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
      <h1>Schede prodotto</h1> </div>
    </a>  
  </div>
</div>

<!-- header x-slim -->
<header class="header-xslim bg-azure lg-screen-show" style="background-image: url('<?php echo $root; ?>images/desktop/headers/schede-prodotto-1920x224.jpg'), url('<?php echo $root; ?>images/desktop/headers/schede-prodotto-1920x224.webp'); background-repeat: no-repeat;">
  <div class="container container-padding">
    <h1>Schede prodotto</h1>
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
        <div> <span><a href="<?php echo $root; ?>bibliotecnica/schede-prodotto/">Schede prodotto</a></span> </div>
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
            <li><a href="<?php echo $root; ?>docs/note-tecniche/accesso-remoto-analizzatori.pdf">Funzionalità di accesso remoto nel'analizzatore CRIUS<sup>®</sup> </a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/compressore-per-pulizia-automatica-sensori.pdf">Sistema AirFlush</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/sistema-filtrazione-uv254.pdf"> Unità di filtrazione per l'UV254Sense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/centralina-multiparametrica-avanzata.pdf">Analizzatore multiparametrico avanzato - CRIUS<sup>®</sup></a></li>
            <li><a href="https://www.leafytechnologies.it/docs/schede-prodotto/centralina-multiparametrica-di-base.pdf">Analizzatore multiparametrico base - CRONOS<sup>®</sup></a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/sistema-di-pulizia-automatica-dei-sensori.pdf">Sistema AutoFlush</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-streaming-current.pdf">Analizzatore di corrente fluente - StreamerSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-acido-peracetico.pdf">Analizzatore di acido peracetico - PeraSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-biossido-di-cloro.pdf">Analizzatore di biossdido di cloro - DioSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-cloro.pdf">Analizzatore di cloro - HaloSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-conducibilita.pdf">Analizzatore di conducibilità  - ConductiSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-fluoro.pdf">Analizzatore di fluoro - FluoriSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-ossigeno-disciolto.pdf">Analizzatore di ossigeno disciolto - OxySense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-ozono.pdf">Analizzatore di ozono - OzoSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-ph.pdf">Analizzatore di pH - pHSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-solidi-sospesi.pdf">Analizzatore di solidi sospesi - SoliSense<sup>®</sup></a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/analizzatore-di-carica-colloidale.pdf">Analizzatore di carica elettrocinetica - ChargeSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-perossido-di-idrogeno.pdf">Analizzatore di perossido di idrogeno - PeroxiSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/analizzatore-di-uv254.pdf">Analizzatore di UV254 - UV254Sense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/centralina-per-piscina.pdf">	Centralina per piscina - AquaSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/contatori-di-particelle.pdf">	Contatori di particelle - Linea Sense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/analizzatore-redox.pdf">	Misuratore di redox - ORPSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/sistema-controllo-automatico-coagulazione.pdf">Sistema controllo automatico della coagulazione - CoagSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/sistema-controllo-automatico-coagulazione.pdf">Turbidimetro in linea - TurbSense<sup>®</sup></a></li>            
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/analizzatore-di-carica-colloidale-laboratorio.pdf">Analizzatore di domanda di coagulante - LabSense</a></li>
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
