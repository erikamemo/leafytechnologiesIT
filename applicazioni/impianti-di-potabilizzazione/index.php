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
Indirizzo: https://www.leafytechnologies.it/applicazioni/impianti-di-potabilizzazione/;

Pubblicato: 19/04/2021;
Ultima revisione: 19/04/2021;

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
  <header class="header-xslim bg-azure lg-screen-show" style="background-image: url('<?php echo $root; ?>images/desktop/headers/depur-hd.jpg'); background-repeat: no-repeat;
">
    <div class="container container-padding">
      <h1 style="color: white;">Impianti di potabilizzazione</h1>
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
          <div> <span><a href="<?php echo $root; ?>applicazioni/impianti-di-potabilizzazione/">Impianti di potabilizzazione</a></span> </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumbs ens-->
  
  <section class="wrapper-a">
    <div class="container container-padding">
      <article class="center-page-article">
        <p> Gli impianti municipali di potabilizzazione dell’acqua, noti anche come potabilizzatori, hanno bisogno di strumentazione e soluzioni affidabili per la gestione in automatico ed in continuo dei propri processi. La Leafy Technologies con la Process Instruments propone sul mercato italiano una serie di soluzioni di monitoraggio e controllo senza eguali. </p>
        <p> Ad esempio, il sistema <strong>CoagSense</strong> permette di effettuare il controllo automatico della coagulazione misurando uno o più parametri in entrata impianto. D’altra parte, l’analizzatore di assorbanza/trasmittanza di <strong>UV254</strong> permette di determinare la carica organica nell’acqua e controllare i sistemi di disinfezione UV.</p>
        <p> Oltre a questi sistemi innovativi si propongono anche soluzioni classiche come analizzatori di cloro, pH, redox e torbidità in continuo. Tutti questi sistemi sono concepiti in modo tale da <strong>non aver bisogno di manutenzione costante</strong>, avere una <strong>bassa deriva</strong> della misura e possono essere accompagnati da sistemi di pulizia automatica. </p>
        <p> Per una panoramica dei principali prodotti per impianti di potabilizzazione far riferimento alla lista seguente. </p>
      </article>
    </div>
  </section>
  <section class="wrapper-a">
    <div class="container container-padding">
      <div class="grid-2-columns">
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/sistema-controllo-coagulazione/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/controllo-coagulazione-159x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/controllo-coagulazione-159x234.jpg" alt="Sistema di controllo della coagulazione"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Controllo della coagulazione - CoagSense</h2>
            <p class="lg-screen-show">L’analizzatore per il controllo della coagulazione CoagSense permette di effettuare il dosaggio del coagulante in automatico. Il sistema misura uno o più parametri quali pH, corrente fluente, UV254 e torbidità per menzionarne alcuni e poi, utilizza questi valori per determinare la dose di coagulante ideale in ogni dato momento.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-elettrocinetico-laboratorio/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-elettrocinetico-laboratorio-159x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/analizzatore-elettrocinetico-laboratorio-159x234.png" alt="LabSense Flocculatore Rapido"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Flocculatore Rapido - LabSense</h2>
            <p class="lg-screen-show">Il sistema LabSense è un sostituto dei flocculatori da banco tradizionali e permette di effettuare test per determinale la dose di coagulante ideale. Utilizzato insieme ad uno StreamerSense (analizzatore di corrente fluente) o ad un CoagSense aiuta ad identificare il valore obiettivo di volta in volta.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/contatore-di-particelle/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/contatore-di-particelle-276x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/contatore-di-particelle-276x234.jpg" alt="contatore di particelle"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Contatori di particelle</h2>
            <p class="lg-screen-show">Negli impianti di potabilizzazione, i contatori di particelle trovano principalmente due applicazioni: il monitoraggio dei filtri per ottimizzarne il controlavaggio (ed identificare eventuali problemi); identificare eventuali proliferazioni di Cryptosporidium and Giardia.</p>
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
            <p class="lg-screen-show">Gli analizzatori di cloro libero e totale in linea sono tra gli strumenti più importanti in un impianto di potabilizzazione. Il sistema HaloSense ha bisogno di manutenzione una volta all’anno (cambio di elettrolita e membrana), segue lo standard EPA 334, non ha bisogno di reagenti e ha una <strong>deriva ridotta</strong>.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-ph/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-di-ph-installazione-159x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/analizzatore-di-ph-installazione-159x234.jpg" alt="Analizzatore di pH"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Analizzatore di pH</h2>
            <p class="lg-screen-show">Utilizzando alcuni tra i migliori elettrodi per la misura del pH, la linea pHSense permette di effettuare la misurazione del pH in linea, senza bisogno di ricalibrazioni frequenti del sensore e con soluzioni per acqua a <strong>bassa conducibilità.</strong></p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-corrente-fluente-coagulazione/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/corrente-fluente-installazione-276x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/corrente-fluente-installazione-276x234.jpg" alt="analizzatore corrente fluente coagulazione"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Corrente fluente</h2>
            <p class="lg-screen-show">Un analizzatore di corrente fluente (streaming current), permette di determinare il continuo la <strong>domanda di coagulante</strong> dell’acqua e controllare i processi di coagulazione. Il sistema controlla il dosaggio di coagulante e fa partire un allarme in caso di sovra o sotto dosaggio.</p>
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
            <p class="lg-screen-show">Il turbidimetro TurbSense<sup>®</sup>, con tecnologia brevettata, segue lo standard USO 7027 ed è ideale per il monitoraggio dell’acqua in uscita dai filtri a livelli bassissimi di torbidità. Il sensore è ideato in maniera tale da avere una deriva quasi inesistente.</p>
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