<?php
include( '../../includes/bootstrap.php' );

$ishomepage = TRUE;
$title = "Strumentazione per l'analisi e la misura dell'acqua";
$metadescription = "La Leafy Technologies è una azienda specializzata nella vendita di strumentazione  e soluzioni per l'analisi dell'acqua in continuo ed in linea.";
$additional_style = '';

include( '../../includes/header.php' );

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

include( '../../includes/top-and-nav.php' );

?>

<!-- NAV END -->

<main> 
  
  <!-- header x-slim -->
  <header class="header-xslim bg-azure lg-screen-show" style="background-image: url('<?php echo $root; ?>images/desktop/headers/depur-hd.jpg'); background-repeat: no-repeat;">
    <div class="container container-padding">
      <h1 style="color: white;">Settore alimentare</h1>
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
            <li><a href="<?php echo $root; ?>applicazioni/">Applicazioni</a></li>
          </ul>
        </div>
        <div class="crumb-now">
          <div> <span><a href="<?php echo $root; ?>applicazioni/settore-alimentare/">Settore alimentare</a></span> </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumbs ens-->
  
  <section class="wrapper-a">
    <div class="container container-padding">
      <article class="center-page-article">
        <p> Le aziende che lavorano nel settore alimentare hanno bisogno di controllare sempre meglio i propri processi di produzione per assicurarsi che l’acqua utilizzata nella produzione segua degli <strong>standard rigorosi</strong> e per assicurarsi che la <strong>disinfezione</strong> avvenga in modo corretto.</p>
          
        <p> La Leafy Technologies è specializzata nella fornitura di strumentazione per l’analisi dell’acqua in linea come analizzatori di <a href="<?php echo $root; ?>prodotti/analizzatore-perossido-idrogeno/">perossido di idrogeno</a>, <a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">cloro libero</a>, <a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">cloro totale</a>, <a href="<?php echo $root; ?>prodotti/analizzatore-di-ozono/">ozono</a>, <a href="<?php echo $root; ?>prodotti/analizzatore-di-biossido-di-cloro/">biossido di cloro</a> ed <a href="<?php echo $root; ?>prodotti/analizzatore-di-acido-peracetico/">acido peracetico</a>, <a href="<?php echo $root; ?>prodotti/analizzatore-di-ph/">pH</a>, <a href="<?php echo $root; ?>prodotti/misuratore-redox/">redox</a> e <a href="<?php echo $root; ?>prodotti/turbidimetro-in-linea/">torbidità</a> per menzionarne alcuni. </p>
          
        <p>Inoltre, il sistema CRIUS<sup>®</sup> 4.0 della Process Instruments offre un sistema di accesso remoto completo, che permette di accedere allo strumento in lettura ed in scrittura e, grazie al sistema InSite permette di creare <strong>report automatici</strong> sulla conformità dell’acqua per avere tracciabilità assoluta.</p>
          
        <p>Di seguito si riportano alcune delle soluzioni più utilizzate nel settore alimentare.</p>
      </article>
    </div>
  </section>
  <section class="wrapper-a">
    <div class="container container-padding">
      <div class="grid-2-columns">
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-biossido-di-cloro/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/installazione-biossido-cloro-276x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/installazione-biossido-cloro-276x234.jpg" alt="Sensore biossido di cloro"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Biossido di cloro</h2>
            <p class="lg-screen-show">Il biossido di cloro è uno dei disinfettanti principalmente utilizzati nel settore alimentare. Grazie al sistema DioSense è possibile misurare il biossido di cloro in linea ed in continuo; è integrabile con sistemi di <strong>pulizia automatica</strong> per acque con livelli di torbidità e solidi sospesi elevati.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-di-cloro-installazione-276x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/analizzatore-di-cloro-installazione-276x234.jpg" alt="Analizzatore di cloro"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Analizzatore di cloro</h2>
            <p class="lg-screen-show">Il sistema HaloSense ha bisogno di manutenzione una volta all’anno (cambio di elettrolita e membrana), segue lo standard EPA 334, non ha bisogno di reagenti e ha una <strong>deriva ridotta</strong>.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-conducibilita/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/conduttivita-276x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/conduttivita-276x234.png" alt="contatore conducibilità"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Conducibilità</h2>
            <p class="lg-screen-show">La gamma di sensori ConductiSense è composta da vari sensori di conducibilità per acque pulite, acque reflue ad alta conducibilità, acque a bassa conducibilità.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/misuratore-redox/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/misuratore-redox-03-180x154.webp">
              <img src="<?php echo $root; ?>images/desktop/products/misuratore-redox-03-180x154.png" alt="Misuratore Redox"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Redox</h2>
            <p class="lg-screen-show">La misura del potenziale redox è fondamentale in molti processi; grazie ad elettrodi di qualità si ottengono misure precise ed in continuo.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-ozono/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/sensore-di-ozono-installazione-impianto-acqua-potabile-276x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/sensore-di-ozono-installazione-impianto-acqua-potabile-276x234.jpg" alt="Analizzatore di ozono"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Ozono</h2>
            <p class="lg-screen-show">Il sistema OzoSense permette la misurazione in linea ed in continuo dell’ozono dell’acqua. Semplice da installare, richiede manutenzione <strong>una volta ogni 6 mesi</strong> ed è estremamente <strong>stabile</strong> e preciso.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-acido-peracetico/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/sensore-acido-peracetico-installazione-159x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/sensore-acido-peracetico-installazione-159x234.jpg" alt="analizzatore di acido peracetico"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Acido peracetico</h2>
            <p class="lg-screen-show">Il sistema PeraSense permette di effettuare la misurazione dell’acido peracetico in continuo a livelli di ppm (mg/l) nell’acqua. Il sistema può essere dotato di un apparato di pulizia automatica per assicurarsi che il sensore funzioni sempre correttamente.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-ph">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/sensore-ph-installazione-276x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/sensore-ph-installazione-276x234.jpg" alt="analizzatore pH"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Analizzatore pH</h2>
            <p class="lg-screen-show">Utilizzando alcuni tra i migliori elettrodi per la misura del pH, la linea pHSense permette di effettuare la misurazione del pH in linea, senza bisogno di ricalibrazioni frequenti del sensore e con soluzioni per acqua a <strong>bassa conducibilità</strong>.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/turbidimetro-in-linea/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-torbidita-installazione-159x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/analizzatore-torbidita-installazione-159x234.jpg" alt="turbidimetro in linea"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Torbidità</h2>
            <p class="lg-screen-show">Il turbidimetro TurbSense<sup>®</sup>, con tecnologia brevettata, segue lo standard USO 7027 ed è ideale per il monitoraggio dell’acqua in uscita dai filtri a <strong>livelli bassissimi di torbidità</strong>. Il sensore è ideato in maniera tale da avere una deriva quasi inesistente.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-solidi-sospesi/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/solidi-sospesi-installazione-159x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/solidi-sospesi-installazione-159x234.jpg" alt="Analizzatore di ozono"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Solidi sospesi</h2>
            <p class="lg-screen-show">I misuratori per solidi sospesi nel settore alimentare devono essere affidabili e praticamente non aver bisogno di manutenzione. Grazie al sistema di <strong>autopulizia</strong> ed a una tecnologia brevettata, si ottiene un sistema che <strong>non ha bisogno di calibrazioni frequenti</strong> e richiede pochissima manutenzione.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
      </div>
    </div>
  </section>
  <section class="wrapper-a">
    <div class="container container-padding">
      <h2>Altri parametri</h2>
        <!-- parameters -->
  <?php
include( '../../includes/snippets/parametri-list-snippet.php' );
?>
  <!-- parameters --> 

    </div>
  </section>
  
  
</main>

<!-- FOOTER -->
<?php
include( '../../includes/footer.php' );
?>
<!-- FOOTER END -->
</body>
</html>