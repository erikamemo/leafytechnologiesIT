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
  <header class="header-xslim bg-azure lg-screen-show" style="background-image: url('<?php echo $root; ?>images/desktop/headers/depur-hd.jpg'); background-repeat: no-repeat;
">
    <div class="container container-padding">
      <h1 style="color: white;">Trattamento acque industriali</h1>
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
          <div> <span><a href="<?php echo $root; ?>applicazioni/trattamento-acque-industriali/">Trattamento acque industriali</a></span> </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumbs ens-->
  
  <section class="wrapper-a">
    <div class="container container-padding">
      <article class="center-page-article">
        <p> Monitoraggio e controllo sono due aspetti <strong>fondamentali</strong> nei processi di trattamento delle acque industriali. Che si tratti di controllare la disinfezione, la disincrostazione, la gestione dello spurgo in una torre di raffreddamento, il trattamento dell'acqua per caldaie industriali o per membrane a osmosi inversa.</p>
          
        <p> Perciò è essenziale disporre di strumenti che permettano di misurare e controllare l’acqua industriale in modo <strong>preciso ed efficace</strong>.</p>
          
        <p>Molti strumenti presenti sul mercato non permettono una personalizzazione del sistema, quindi, l’utente si trova a dover scegliere una <strong>soluzione preconfezionata</strong> che non necessariamente si adatta completamente alle esigenze del proprio processo.</p>
          
        <p>La Process Instruments adotta un approccio differente: l’analizzatore multiparametrico è completamente personalizzabile e viene fabbricato per rispondere alle <strong>esigenze specifiche</strong> di ogni processo. </p>
          
        <p>Ad esempio, partendo da un analizzatore CRIUS® 4.0, si può configurare un analizzatore che:</p>
          
        <ul>
            <li>Controlla varie pompe di dosaggio con logiche PID</li>
            <li>Misura vari parametri contemporaneamente (ozono, pH, conducibilità, conteggio particelle)</li>
            <li>Permette <strong>l’accesso remoto in lettura e scrittura via Cloud</strong></li>
            <li>Effettua registro dati ed invia report giornalieri, settimanali o mensili</li>
            <li>Supporta il protocollo MQTT per IoT</li>
            <li>Controlla vari temporizzatori, relè e ottiene e gestisce segnali dal processo</li> 
        </ul>
          
        <p>Tutto questo con un unico analizzatore 100% Industria 4.0, che può supportare fino a 16 parametri, 32 relè e moltissimi accessori per pulizia e verifica automatica</p>
      </article>
    </div>
  </section>
  <section class="wrapper-a">
    <div class="container container-padding">
      <div class="grid-2-columns">
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-conducibilita/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/conduttivita-276x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/conduttivita-276x234.png" alt="contatore conducibilità"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Conducibilità</h2>
            <p class="lg-screen-show">La gamma di sensori ConductiSense è composta da vari sensori di conducibilità per acque pulite, acque reflue ad alta conducibilità, acque a bassa conducibilità ed acque ad <strong>alta temperatura</strong> come quelle presenti nelle caldaie industriali. </p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-biossido-di-cloro/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/installazione-biossido-cloro-276x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/installazione-biossido-cloro-276x234.jpg" alt="Sensore biossido di cloro"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Biossido di cloro</h2>
            <p class="lg-screen-show">Il biossido di cloro è uno dei disinfettanti principalmente utilizzati nei sistemi industriali. Grazie al sistema DioSense è possibile misurare il biossido di cloro in linea ed in continuo; è integrabile con sistemi di <strong>pulizia automatica</strong> per acque con livelli di torbidità e solidi sospesi elevati.</p>
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
            <p class="lg-screen-show">I contatori di particelle possono essere utilizzati per determinare il trasporto da corrosione nel ciclo del vapore e per determinare la qualità dell’acqua che dovrà essere trattata dalle membrane ad osmosi inversa. Questo permette di <strong>migliorare il pretrattamento</strong> e far funzionare le membrane a lungo.</p>
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
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-ph/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/sensore-ph-installazione-276x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/sensore-ph-installazione-276x234.jpg" alt="analizzatore pH"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Analizzatore di pH</h2>
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