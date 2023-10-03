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
      <h1>Note Tecniche</h1> </div>
    </a>  
  </div>
</div>

<!-- header x-slim -->
<header class="header-xslim bg-azure lg-screen-show" style="background-image: url('<?php echo $root; ?>images/desktop/headers/note-tecniche-1920x224.jpg'), url('<?php echo $root; ?>images/desktop/headers/note-tecniche-1920x224.webp'); background-repeat: no-repeat;">
  <div class="container container-padding">
    <h1>Note Tecniche</h1>
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
        <div> <span><a href="<?php echo $root; ?>bibliotecnica/note-tecniche/">Note tecniche</a></span> </div>
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
            <li><a href="<?php echo $root; ?>docs/note-tecniche/acqua-4.0-industria-4.0.pdf">Industria 4.0, Acqua 4.0, Internet delle Cose, SMART, DIGITAL</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/benefici-testare-uvt-sul-campo.pdf">Misurare la trasmittanza UV in loco</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/bolle-nella-misura-torbidita.pdf">Bolle e torbidità</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/clorazione-acqua-di-mare.pdf">Clorazione dell'acqua di mare</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/confronto-sensori-redox-sensori-amperometrici.pdf">Sensori redox e sensori di cloro amperometrici</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/controllo-coagulazione-con-streaming-current.pdf">Controllo automatico della coagulazione</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/controllo-pid-analizzatori-acqua.pdf">Il controllo PID negli analizzatori in linea dell'acqua </a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/correlare-uv254-parametri-organici.pdf">Correlazione tra UV254 e TOC, COD e BOD</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/effetti-variazione-ph-sensore-cloro.pdf">Effetti della variazione del pH sui sensori amperometrici di cloro</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/istruzioni-centralina-per-piscina.pdf">Istruzioni d'uso per la centralina per piscina AquaSense</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/le-parole-della-misura.pdf">Le parole della misura</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/lista-controllo-DPD.pdf">Lista di controllo per il metodo DPD</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/manutenzione-sensore-cloro-libero.pdf">Manutenzione del sensore di cloro libero</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/manutenzione-sensore-cloro-totale.pdf">Manutenzione del sensore di cloro totale</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/manutenzione-sensore-di-ph.pdf">Manutenzione del sensore di pH</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/misura-dei-solidi-sospesi.pdf">Misurazione dei solidi sospesi</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/misura-in-linea-acido-peracetico.pdf">Monitoraggio in linea ed in continuo dell'acido peracetico</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/misura-ossigeno-disciolto-controllo-aerazione.pdf">Misura dell'ossigeno disciolto nelle vasche di aerazione</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/misura-uvt-controllo-disinfezione-uv.pdf">Trasmittanza UV e disinfezione con luce ultravioletta</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/opzioni-installazione-misuratore-solidi-sospesi.pdf">Opzioni di installazione del sensore SoliSense<sup>®</sup></a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/rele-e-pompe.pdf">Pompe e relé</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/rumore-e-zero-in-turbidimetri.pdf">Rumore e zero nei turbidimetri</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/sensore-di-cloro-libero.pdf">Sensore di cloro libero residuo</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/sensore-misura-zero-assenza-cloro.pdf">Misurare l'assenza di cloro</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/sistemi-pulizia-sensori.pdf">Sistemi di pulizia automatica dei sensori per l'analisi in linea</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/specificare-analizzatori-multiparametrici-acqua.pdf">Configurazione di un analizzatore multiparametrico</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/strumenti-portabili-e-da-laboratorio.pdf">Analizzatori da laboratorio e portatili</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/tipi-controllo-analizzatori-acqua.pdf">Tipi di controllo negli analizzatori multiparametrici</a></li>
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
