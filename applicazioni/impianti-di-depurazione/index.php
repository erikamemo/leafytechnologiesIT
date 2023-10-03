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
      <h1 style="color: white;">Sistemi per impianti di depurazione</h1>
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
          <div> <span><a href="<?php echo $root; ?>applicazioni/impianti-di-depurazione/">Sistemi per impianti di depurazione</a></span> </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumbs ens-->
  
  <section class="wrapper-a">
    <div class="container container-padding">
      <article class="center-page-article">
        <p> Le acque reflue rappresentano una delle applicazioni più impegnative per la strumentazione di misura in linea. Far sì che i sensori continuino a funzionare in queste acque, senza interruzioni, è una vera sfida.</p>
          
        <p> In questa pagina si riportano i sensori e le soluzioni per il monitoraggio in linea in acque reflue, effluenti industriali, depuratori e tutti quei processi dove l’acqua da analizzare possa essere considerata “difficile”.</p>
      </article>
    </div>
  </section>
    

  <section class="wrapper-a">
    <div class="container container-padding">
      <div class="grid-2-columns">
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-solidi-sospesi/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/solidi-sospesi-installazione-276x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/solidi-sospesi-installazione-276x234.png" alt="Sensore solidi sospesi"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Solidi sospesi</h2>
            <p class="lg-screen-show">Misuratore ed analizzatore di solidi sospesi, utilizzato sia per determinare la quantità di solidi sospesi nelle parti iniziali del processo di trattamento (<strong>sedimentazione, chiarificazione</strong>), sia per controllare il livello di solidi sospesi negli <strong>effluenti</strong>. Il sensore può essere utilizzato in varie modalità e riporta le letture in NTU (torbidità), mg/l o g/l (solidi sospesi) o anche in % di sostanza secca. Il sensore può essere dotato di pulizia automatica ed offre una calibrazione semplice e veloce.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/sensore-acido-peracetico-installazione-159x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/sensore-acido-peracetico-installazione-159x234.jpg" alt="Foto dell’installazione di un analizzatore di cloro totale"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Cloro libero e totale</h2>
            <p class="lg-screen-show">In impianti di depurazione a volte vi è la necessita di misurare il cloro nell’effluente. In questi casi il cloro si utilizza per abbattere la carica batterica che altrimenti sarebbe a livelli troppo elevati nell’acqua in uscita dall’impianto. In questa applicazione è opportuno considerare un sistema <strong>AutoFlush</strong> per la pulizia automatica del sensore in queste acque difficili.</p>
            <span class="btn btn-secondary">Scopri di più</span> 
            </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-ossigeno-disciolto/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/ossigeno-disciolto-cappuccio-276x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/ossigeno-disciolto-cappuccio-276x234.jpg" alt="Sensore d'ossigeno disciolto"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Ossigeno disciolto</h2>
            <p class="lg-screen-show">Misuratore ed analizzatore di ossigeno disciolto, utilizzato principalmente per la misura dell’ossigeno disciolto nei <strong>fanghi attivi</strong> e nelle <strong>vasche di aereazione</strong>. Il sistema OxySense presenta vantaggi importanti rispetto agli altri sistemi presenti sul mercato, tra cui un sistema di autopulizia ed autoverifica che permette di utilizzare il sistema fino a 36 mesi senza quasi alcuna manutenzione, un’elevatissima resistenza all’abrasione e alla degradazione UV e tempi di risposta alle variazioni di temperatura e DO estremamente rapidi.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-ph/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/ph-in-linea-sensore-concappuccio-276x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/ph-in-linea-sensore-concappuccio-276x234.jpg" alt="Misuratore di pH"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>pH in linea</h2>
            <p class="lg-screen-show">La misura del pH è importantissima per il controllo del processo di depurazione. La linea pHSense include un elettrodo di pH a <strong>“testa piatta”</strong> (elettrodo pH3) che è molto più resistente allo sporcamento e può essere munito di un <strong>cappuccio autopulente</strong> che, utilizzando un getto d’aria compressa, può pulire la testa sensore riducendo la necessità di manutenzione.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/misuratore-redox/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/misuratore-redox-03-180x154.webp">
              <img src="<?php echo $root; ?>images/desktop/products/misuratore-redox-03-180x154.png" alt="Misuratore del potenziale di ossido-riduzione"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Redox</h2>
            <p class="lg-screen-show">La misura del redox è utilizzata nei processi di trattamento delle acque reflue per determinare il potenziale di ossido-riduzione nell’acqua. La linea ORPSense include un elettrodo redox a <strong>“testa piatta”</strong> (elettrodo ORP 3) che è molto più resistente allo sporcamento e può essere munito di un <strong>cappuccio autopulente</strong> che, utilizzando un getto d’aria compressa, può pulire la testa sensore riducendo la necessità di manutenzione.</p>
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
            <p class="lg-screen-show">In impianti di depurazione può esserci la necessita di misurare i <strong>livelli di ozono</strong> nell’acqua. In questi casi l’ozono si utilizza per abbattere velocemente la carica batterica, senza il rischio di produrre sottoprodotti della disinfezione. In questa applicazione è opportuno considerare un sistema <strong>AutoFlush</strong> per la pulizia automatica del sensore in queste acque difficili.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-uv254/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-uv254-159x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/analizzatore-uv254-159x234.jpg" alt="Analizzatore uv254"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>UV254</h2>
            <p class="lg-screen-show">Il sistema UV254Sense permette di effettuare la misurazione in continuo dell’UVA/UVT, misure che sono correlabili alla quantità di <strong>sostanze organiche</strong> presenti nell’acqua ed anche al TOC ed al COD in acque reflue naturali.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a></div>
        <div class="card-lg card-gradient"> <a href="<?php echo $root; ?>prodotti/turbidimetro-in-linea/">
          <div class="card-lg-left">
            <picture>
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-torbidita-installazione-159x234.webp">
              <img src="<?php echo $root; ?>images/desktop/products/analizzatore-torbidita-installazione-159x234.jpg" alt="Turbidimetro in linea"> </picture>
          </div>
          <div class="card-lg-right">
            <h2>Torbidità</h2>
            <p class="lg-screen-show">Il turbidimetro in linea TurbSense<sup>®</sup> utilizza una tecnologia patentata e segue lo standard ISO 7027. Può essere dotato di un sistema autopulente e necessita di una ricalibrazione <strong>solo una volta all’anno</strong>.</p>
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