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

<div class="container container-padding mobile-show" style="margin-top: 15px; display: flex; flex-direction: row; justify-content: space-between;"> <a href="<?php echo $root; ?>prodotti/analizzatori/" class="btn btn-primary">Analizzatori</a><a href="<?php echo $root; ?>prodotti/sensori-in-linea/" class="btn btn-primary">Sensori</a><a href="<?php echo $root; ?>prodotti/" class="btn btn-primary">Tutti</a> </div>
    
<!-- header -->
<header class="header-slim lg-screen-show" style="display: none;"> 
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
<!-- header end -->
    
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
        <div> <span><a href="<?php echo $root; ?>prodotti/sensori-in-linea/">Fotometri</a></span> </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumbs ens--> 

<section class="wrapper-a">
      <div class="container container-padding">
        <article class="center-page-article">
          <p style="text-align:center;">Wagtech&trade; da tempo riconosciuto come il fornitore leader di kit portatili per l’analisi dell'acqua per i settori dello sviluppo internazionale. I kit Wagtech sono completamente portatili e autonomi: sono progettati per determinare la sicurezza delle fonti di acqua potabile in loco, lavorando in luoghi remoti, lontano dai laboratori.</p>
          <h3>Quale kit Wagtech™ è adatto a te?</h3>
          <p>Offriamo una gamma di kit per soddisfare le tue esigenze, dai test di emergenza a breve termine al monitoraggio della qualità dell'acqua a lungo termine. Visualizza la nostra tabella di confronto per confrontare le dimensioni dei kit e ciò che ogni kit può analizzare.</p>
        </article>
      </div>
    </section>

    

<!-- filter  
<div class="container container-padding lg-screen-show wrapper-a">
    <div style="display: flex; justify-content: center; align-items: center;">
   <span style="color: rgb(38, 95, 170); padding-top: 20px; margin-right: 38px;">Lista:</span>
   <? /* php include( '../../includes/snippets/filter-parametri-list.php' );  */ ?>
    </div>
</div> -->
<!-- filter end -->


<!-- sensori list -->
<section class="wrapper-a">
  <div class="container container-padding">
    <div class="grid-2-columns">
      <?php include( '../../includes/snippets/wagtech-potalab.php' ); ?>
      <?php include( '../../includes/snippets/wagtech.php' ); ?>
      <?php include( '../../includes/snippets/wagtech-potatech.php' ); ?>
      <?php include( '../../includes/snippets/wagtech-potacheck.php' ); ?>
      <?php include( '../../includes/snippets/wagtech-potakit.php' ); ?>
      <?php include( '../../includes/snippets/wagtech-potatest-dual.php' ); ?>
      <?php include( '../../includes/snippets/wagtech-potatest-classic.php' ); ?>
      <?php include( '../../includes/snippets/wagtech-potatest-go.php' ); ?>
      <?php include( '../../includes/snippets/wagtech-kit-sicurezza-acqua.php' ); ?>
    </div>
  </div>
</section>
<!-- sensori list end --> 
    
<section class="wrapper-a">
      <div class="container container-padding">
        <article class="center-page-article">
          <h3>A cosa serve un kit Wagtech?</h3>
          <h4>Interventi di emergenza e soccorso in caso di calamità naturali</h4>
          <p>I kit Wagtech sono stati a lungo utilizzati per l’analisi dell'acqua in situazioni di emergenza, ad esempio disastri naturali e campi profughi.</p>
          <h4>Programma di sorveglianza dell’acqua</h4>
          <p>I kit Wagtech vengono utilizzati per programmi di sorveglianza dell'acqua che servono a monitorare l'acqua in diverse località.</p>
          <h4>Monitoraggio della qualità dell’acqua nelle zone rurali</h4>
          <p>I kit Wagtech sono completamente portatili, dunque ideali per l'uso in zone rurali, lontano dai laboratori.</p>
          <h4>Monitoraggio della qualità dell'acqua a lungo termine</h4>
          <p>I kit Wagtech possono essere utilizzati per il monitoraggio professionale della qualità dell'acqua a lungo termine.</p>
          <h4>Spedizioni dirette in tutte le parti del mondo</h4>
          <p>Con una rete logistica globale consolidata, la nostra risposta alle crisi non è seconda a nessuno, le nostre apparecchiature possono arrivare anche negli ambienti più remoti o difficili.</p>
        </article>
      </div>
    </section>
    

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
