<?php
include( 'includes/bootstrap.php' );

$ishomepage = TRUE;
$title = "Strumentazione per l'analisi e la misura dell'acqua";
$metadescription = "La Leafy Technologies è una azienda specializzata nella vendita di strumentazione  e soluzioni per l'analisi dell'acqua in continuo ed in linea.";
$additional_style = '';

include( 'includes/header.php' );

?>
</head>
<!--

Numero doc.: LTSP0001;
Indirizzo: https://www.leafytechnologies.it/;

Pubblicato: 01/08/2019;
Ultima revisione: 02/03/2021;

Da fare: 
  Revisione in profondità
-->

<body>

<!-- NAV -->
<?php

include( 'includes/top-and-nav.php' );

?>

<!-- NAV END -->

<main> 
  
  <!-- HERO HEADER -->
  <header class="hero-header">
    <div class="hero-text container-padding">
      <div>
        <h1>Cosa vuoi misurare?</h1>
      </div>
      <?php include('includes/snippets/filter-parametri-list.php' ); ?>
      <div class="hero-btns"> <a href="<?php echo $root; ?>applicazioni/" class="btn btn-primary">Applicazioni</a> <a href="<?php echo $root; ?>prodotti/" class="btn btn-primary">Prodotti</a> <a href="<?php echo $root; ?>azienda/contatti.php" class="btn btn-secondary">Contact</a> </div>
      <div class="v-line"></div>
      <ul class="parameters-list">
        <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-fluoro/">Fluoro</a></li>
        <li><a href="<?php echo $root; ?>prodotti/turbidimetro-in-linea/">Torbidità</a></li>
        <li><a href="<?php echo $root; ?>prodotti/contatore-di-particelle/">Contatori di particelle</a></li>
        <li><a href="<?php echo $root; ?>prodotti/analizzatore-uv254/">UV254 - Organici</a></li>
        <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-ozono/">Ozono</a></li>
        <li><a href="<?php echo $root; ?>prodotti/analizzatore-perossido-idrogeno/">Perossido d'idrogeno</a></li>
        <li><a href="<?php echo $root; ?>prodotti/analizzatore-corrente-fluente-coagulazione/">Corrente fluente (SCM)</a></li>
        <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-ph/">pH</a></li>
        <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-conducibilita/">Conducibilità</a></li>
        <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">Cloro</a></li>
        <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-acido-peracetico/">Acido peracetico</a></li>
        <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-solidi-sospesi/">Solidi sospesi (SS)</a></li>
        <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-biossido-di-cloro/">Biossido di cloro</a></li>
        <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-ossigeno-disciolto/">Ossigeno disciolto</a></li>
        <li><a href="<?php echo $root; ?>prodotti/misuratore-redox/">Redox</a></li>
      </ul>
    </div>
  </header>
  <!-- HERO HEADER END --> 
  
  <!-- MOBILE MONITOR -->
  <section class="home-section-wrap container-padding mobile-show md-show">
    

    <div class="home-section-title">
      <h3><a href="<?php echo $root; ?>prodotti/analizzatori/">Analizzatori</a></h3>
      <a href="<?php echo $root; ?>prodotti/analizzatori/">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
        <path class="right-arrow" data-name="Right Arrow" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#6B6D69"/>
      </svg>
      </a> </div>
    <div class="cards-sm-wrap">
      <div class="card-gradient card-sm"> <a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-base/">
        <div class="card-sm-top"> 
          <picture> 
            <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-multiparametrico-base180x154.webp" >
            <img src="<?php echo $root; ?>images/desktop/products/analizzatore-multiparametrico-base180x154.png" alt="analizzatore multiparametrico base"> 
        </picture>
        </div>
        <div class="card-sm-bottom">
          <h2>CRONOS<sup>®</sup></h2>
        </div>
        </a> </div>
      <div class="card-gradient card-sm"> <a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-avanzato/">
        <div class="card-sm-top"> 
          <picture> 
            <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-multiparametrico-avanzato180x154.webp" >
            <img src="<?php echo $root; ?>images/desktop/products/analizzatore-multiparametrico-avanzato180x154.png" alt="analizzatore multiparametrico avanzato"> 
        </picture>
        </div>
        <div class="card-sm-bottom">
          <h2>CRIUS<sup>®</sup></h2>
        </div>
        </a> </div>
    </div>
  </section>
  <!-- MOBILE MONITOR END --> 
  
  <!-- DESKTOP MONITOR -->
  <section class="bg-blue lg-screen-show">
    <div class="container container-padding">
      <div class="home-analyzers">
        <div class="box-1">
          <picture> 
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/homepage/cronos-crius745x624.webp">
              <img src="<?php echo $root; ?>images/desktop/homepage/cronos-crius745x624.png" alt="analizzatori multiparametrici CRONOS e CRIUS"> </picture>
        </div>
        <div class="box-2">
          <h2>CRIUS<sup>®</sup> <span>analizzatore avanzato</span></h2>
          <p>Il CRIUS<sup>®</sup> è un analizzatore multiparametrico avanzato ideato per i processi di misurazione in linea; supporta fino a 16 parametri distinti ed offre opzioni di controllo e comunicazione avanzate.</p>
          <span><a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-base/" class="btn btn-secondary">CRONOS<sup>®</sup></a></span> <span><a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-avanzato/" class="btn btn-secondary">CRIUS<sup>®</sup></a></span> </div>
      </div>
    </div>
  </section>
  <!-- DESKTOP MONITOR END --> 
  
  <!-- PARAMETERS -->
  <section class="home-section-wrap lg-screen-show">
    <div class="container container-padding">
      <div class="home-section-title">
        <h3>Parametri</h3>
      </div>
      <div class="home-parameter-desktop">
        <div class="parameter-item"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">
          <p>Cloro</p>
          </a> </div>
        <div class="parameter-item"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-fluoro/">
          <p>Fluoro</p>
          </a> </div>
        <div class="parameter-item"> <a href="<?php echo $root; ?>prodotti/turbidimetro-in-linea/">
          <p>Torbidità</p>
          </a> </div>
        <div class="parameter-item">
          <div> <a href="<?php echo $root; ?>prodotti/analizzatore-uv254/">
            <p>UV254</p>
            </a> </div>
          <div> <a href="<?php echo $root; ?>prodotti/analizzatore-di-ph/">
            <p>pH</p>
            </a> </div>
        </div>
        <div class="parameter-item"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-ozono/">
          <p>Ozono</p>
          </a> </div>
        <div class="parameter-item"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-conducibilita/">
          <p>Conducibilità</p>
          </a> </div>
        <div class="parameter-item"> <a href="<?php echo $root; ?>prodotti/analizzatore-perossido-idrogeno/">
          <p>Perossido di idrogeno</p>
          </a> </div>
      </div>
      <span><a href="<?php echo $root; ?>parametri/" class="link">Lista parametri</a></span> </div>
  </section>
  <!-- PARAMETERS END --> 
  
  <!-- HIGHLIGHTS -->
  <section class="home-section-wrap lg-screen-show">
    <div class="container container-padding home-highlight-wrap">
      <div class="home-highlight">
        <div class="box-a"> 
          <picture> 
            <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/crius308x443.webp">
            <img src="<?php echo $root; ?>images/desktop/products/crius308x443.png" alt="analizzatore multiparametrico avanzato"> 
          </picture>
          </div>
        <div class="box-b">
          <h2>CRIUS<sup>®</sup></h2>
          <p>Analizzatore multiparametrico avanzato che supporta fino a <strong>16 sensori</strong> contemporaneamente, accesso remoto in lettura e scrittura via internet, registro dati e funzioni di controllo e comunicazione avanzate.</p>
          <span><a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-avanzto/" class="link">Scopri di più</a></span> <span><a href="<?php echo $root; ?>azienda/contatti.php" class="btn btn-primary">Preventivo</a></span> </div>
      </div>
      <div class="home-highlight">
        <div class="box-a">
          <picture> 
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/cronos308x443.webp">
              <img src="<?php echo $root; ?>images/desktop/products/cronos308x443.png" alt="analizzatore multiparametrico base"> </picture>
        </div>
        <div class="box-b">
          <h2>CRONOS<sup>®</sup></h2>
          <p>Analizzatore multiparametrico base, supporta fino a <strong>2 parametri</strong>, <br> registro dati opzionale e funzioni di controllo e comunicazione avanzate.</p>
          <span><a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-base/" class="link">Scopri di più</a></span> <span><a href="<?php echo $root; ?>azienda/contatti.php" class="btn btn-primary">Preventivo</a></span> </div>
      </div>
    </div>
  </section>
  <!-- HIGHLIGHTS END --> 
  
  <!-- SENSORS -->
  <section class="home-section-wrap">
    <div class="container container-padding">
      <div class="home-section-title">
        <h3><a href="<?php echo $root; ?>prodotti/sensori-in-linea/">sensori</a></h3>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
          <path class="right-arrow" data-name="Right Arrow" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#6B6D69"/>
        </svg>
        </a> </div>
      <div class="scrollable-cards">
        <div class="card-sm card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">
          <div class="card-sm-top"> 
          <picture> 
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-di-cloro180x154.webp">
              <img src="<?php echo $root; ?>images/desktop/products/analizzatore-di-cloro180x154.png" alt="analizzatore di cloro"> </picture>
          </div>
          <div class="card-sm-bottom">
            <h2>HaloSense</h2>
            <p>Analizzatore per la misura del cloro libero, totale, combinato, in presenza di acido cianurico, per processi industriali e per impianti di trattamento municipali.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a> </div>
        <div class="card-sm card-gradient"> <a href="<?php echo $root; ?>prodotti/misuratore-redox/">
          <div class="card-sm-top"> 
          <picture> 
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/misuratore-redox180x154.webp">
              <img src="<?php echo $root; ?>images/desktop/products/misuratore-redox180x154.png" alt="misuratore di redox"> </picture>
          </div>
          <div class="card-sm-bottom">
            <h2>ORPSense</h2>
            <p>Centralina per la misura in linea del potenziale redox, include una linea di sensori per applicazioni in acque potabili, reflue ed industriali.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a> </div>
        <div class="card-sm card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-ossigeno-disciolto/">
          <div class="card-sm-top"> 
          <picture> 
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-di-ossigeno-disciolto180x154.webp">
              <img src="<?php echo $root; ?>images/desktop/products/analizzatore-di-ossigeno-disciolto180x154.png" alt="analizzatore di ossigeno disciolto"> </picture>
          </div>
          <div class="card-sm-bottom">
            <h2>OxySense</h2>
            <p>Sistema per la misura in linea ed in continuo dell'ossigeno disciolto in acque reflue, ideale per la misura in vasche di aerazione. La linea include tre sensori differenti rispettivamente per acque reflue, industriali e per caldaie industriali.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a> </div>
        <div class="card-sm card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-ph/">
          <div class="card-sm-top"> 
          <picture> 
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-di-ph180x154.webp">
              <img src="<?php echo $root; ?>images/desktop/products/analizzatore-di-ph180x154.png" alt="analizzatore di pH"> </picture>
          </div>
          <div class="card-sm-bottom">
            <h2>pHSense</h2>
            <p>Centralina e misuratore di pH in linea, include una linea di sensori di pH per acque reflue, potabili, di processo, industriali e per piscine.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a> </div>
        <div class="card-sm card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-di-biossido-di-cloro/">
          <div class="card-sm-top"> 
          <picture> 
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-di-biossido-di-cloro180x154.webp">
              <img src="<?php echo $root; ?>images/desktop/products/analizzatore-di-biossido-di-cloro180x154.png" alt="analizzatore di biossido di cloro"> </picture>
          </div>
          <div class="card-sm-bottom">
            <h2>DioSense</h2>
            <p>Analizzatore per la misurazione in linea ed in continuo del biossido di cloro. Il sensore standard misura il biossido di cloro e su richiesta è possibile effettuare la misura del clorito.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a> </div>
        <div class="card-sm card-gradient"> <a href="<?php echo $root; ?>prodotti/analizzatore-corrente-fluente-coagulazione/">
          <div class="card-sm-top"> 
          <picture> 
              <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/analizzatore-corrente-fluente-coagulazione180x154.webp">
              <img src="<?php echo $root; ?>images/desktop/products/analizzatore-corrente-fluente-coagulazione180x154.png" alt="analizzatore di corrente fluente e della coagulazione"> </picture>
          </div>
          <div class="card-sm-bottom">
            <h2>StreamerSense</h2>
            <p>Sistema per il controllo automatico della coagulazione. Lo StreamerSense è un sistema innovativo che permette di misurare in linea ed in continuo la domanda di coagulante ed utilizzare il segnale per automatizzare il dosaggio del coagulante.</p>
            <span class="btn btn-secondary">Scopri di più</span> </div>
          </a> </div>
      </div>
      <span><a href="<?php echo $root; ?>prodotti/sensori-in-linea/" class="link">Lista sensori</a></span> </div>
  </section>
  <!-- SENSORS END --> 
  
  <!-- CONTACT FORM SLIM -->

  <!-- CONTACT FORM SLIM END --> 
  
  <!-- APPLICATIONS -->
  <section class="home-section-wrap">
    <div class="container container-padding">
      <div class="home-section-title">
        <h3><a href="<?php echo $root; ?>applicazioni/">applicazioni</a></h3>
        <a href="<?php echo $root; ?>applicazioni/">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
          <path class="right-arrow" data-name="Right Arrow" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#6B6D69"/>
        </svg>
        </a> </div>
      <div class="applications" style="margin-left: auto; margin-right: auto;">
        <div class="application"> <a href="<?php echo $root; ?>applicazioni/impianti-di-depurazione/">
          <div class="application-top">
            <div class="application-icon">
              <div class="img-wrap">
                <picture> 
                    <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/icons/water-hand.webp">
                    <img src="<?php echo $root; ?>images/desktop/icons/water-hand.png" alt="Impianti di depurazione"> </picture>
              </div>
            </div>
          </div>
          <div class="application-bottom">
            <h2>Impianti di depurazione</h2>
          </div>
          </a> </div>
        <div class="application"> <a href="<?php echo $root; ?>applicazioni/impianti-di-potabilizzazione/">
          <div class="application-top">
            <div class="application-icon">
              <div class="img-wrap">
                <picture>
                    <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/icons/potabile.webp">
                    <img src="<?php echo $root; ?>images/desktop/icons/potabile.png" alt="Impianti di potabilizzazione"> </picture>
              </div>
            </div>
          </div>
          <div class="application-bottom">
            <h2>Impianti di potabilizzazione</h2>
          </div>
          </a> </div>
        <div class="application"> <a href="<?php echo $root; ?>applicazioni/settore-alimentare/">
          <div class="application-top">
            <div class="application-icon">
              <div class="img-wrap">
                <picture> 
                    <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/icons/pizza.webp">
                    <img src="<?php echo $root; ?>images/desktop/icons/pizza.png" alt="Settore alimentare"> </picture>
              </div>
            </div>
          </div>
          <div class="application-bottom">
            <h2>Settore alimentare</h2>
          </div>
          </a> </div>
        <div class="application"> <a href="<?php echo $root; ?>applicazioni/trattamento-acque-industriali/">
          <div class="application-top">
            <div class="application-icon">
              <div class="img-wrap">
                <picture> 
                    <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/icons/acque-processo.webp">
                    <img src="<?php echo $root; ?>images/desktop/icons/acque-processo.png" alt="Trattamento acque industriali"> </picture>
              </div>
            </div>
          </div>
          <div class="application-bottom">
            <h2>Trattamento acque industriali</h2>
          </div>
          </a> </div>
      </div>
      <span><a href="<?php echo $root; ?>applicazioni/" class="link">Lista applicazioni</a></span> </div>
  </section>
  <!-- APPLICATIONS END --> 
  
  <!-- BIBLIO -->
  <section class="home-section-wrap biblio">
    <div class="container container-padding">
      <div class="home-section-title">
        <h3><a href="<?php echo $root; ?>bibliotecnica/">bibliotecnica</a></h3>
        <a href="<?php echo $root; ?>bibliotecnica/">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
          <path class="right-arrow" data-name="Right Arrow" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#6B6D69"/>
        </svg>
        </a> </div>
      <div class="biblio-wrap">
        <picture> 
            <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/homepage/biblio.webp">
            <img src="<?php echo $root; ?>images/desktop/homepage/biblio.png" alt="Bibliotecnica"> </picture>
        <ul>
          <li><a href="<?php echo $root; ?>bibliotecnica/note-tecniche/">Note Tecniche</a></li>
          <li><a href="<?php echo $root; ?>bibliotecnica/approfondimenti/">Approfondimenti</a></li>
          <li><a href="<?php echo $root; ?>bibliotecnica/schede-prodotti/">Schede prodotti</a></li>
          <li><a href="<?php echo $root; ?>bibliotecnica/articoli/">articoli</a></li>
          <li><a href="<?php echo $root; ?>bibliotecnica/presentazioni/">presentazioni</a></li>
          <li><a href="<?php echo $root; ?>bibliotecnica/" class="link">esplora</a></li>
        </ul>
      </div>
    </div>
  </section>
  <!-- BIBLIO END --> 
  
  <!-- NEWS -->
  <section class="home-section-wrap home-news">
    <div class="container container-padding">
      <div class="home-section-title">
        <h3><a href="<?php echo $root; ?>news/">news</a></h3>
        <a href="<?php echo $root; ?>news/">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
          <path class="right-arrow" data-name="Right Arrow" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#6B6D69"/>
        </svg>
        </a> </div>
      <div class="news-wrap">
      <div class="news"> <a href="#">
          <div class="news-top">
          <picture>
            <img src="<?php echo $root; ?>images/desktop/backgrounds/coagsense-thumbnail-news.jpg" alt="Thumbnail particlesense news">    
            <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/backgrounds/coagsense-thumbnail-news.webp">
          </picture>   
          </div>
          <div class="news-bottom">
            <div class="date"> <span>8 Gennaio 2021</span> </div>
            <h4>Controllo della coagulazione</h4>
            <p>Il sistema per il controllo e l'ottimizzazione della coagulazione CoagSense ideato dalla Process Instruments, consiste di un analizzatore integrato multiparametrico e modulare che può essere adattato a diversi impianti e situazioni, con l'aggiunta di vari sensori come ad esempio quello per il pH, il flusso, la temperatura, l'UV254, la torbidità ed il misuratore di corrente fluente (<i>streaming current</i>). </p>
          </div>
          </a> </div>
        <div class="news"> <a href="#">
          <div class="news-top">
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/backgrounds/news-new-website.webp">
            <img src="<?php echo $root; ?>images/desktop/backgrounds/news-new-website.jpg" alt="Nuovo sito!">    
          </picture>  
          </div>
          <div class="news-bottom">
            <div class="date"> <span>1 Marzo, 2021</span> </div>
            <h4>Nuovo sito!</h4>
            <p>Dopo mesi e mesi di lavoro siamo finalmente on-line con il nuovo sito, più ricco di informazioni, idee ed offerte per i professionisti del settore dell'acqua. </p>
          </div>
          </a> </div>
        <div class="news"> <a href="#">
          <div class="news-top">
          <picture>
            <img src="<?php echo $root; ?>images/desktop/backgrounds/accesso-remoto-news-thumbnail.jpg" alt="CRIUS e MQTT">    
            <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/backgrounds/accesso-remoto-news-thumbnail.webp">
          </picture>   
          </div>
          <div class="news-bottom">
            <div class="date"> <span>Febbraio, 2021</span> </div>
            <h4>CRIUS e MQTT</h4>
            <p>La Process Instruments ha finalmente rilasciato la nuova versione del sistema CRIUS che, opzionalmente, supporta accesso remoto via internet ma anche vari protocolli tra i quali MQTT per l'Internet delle Cose. Questo risulta particolarmente interessante per applicazioni industriali dove si vogliono sfruttare le opportunità offerte dall'Industria 4.0 </p>
          </div>
          </a> </div>
      </div>
      <span><a href="<?php echo $root; ?>news/" class="link">Leggi le news</a></span> </div>
  </section>
  <!-- NEWS END --> 
  
  <!-- COMPANY -->
  <section class="home-section-wrap">
    <div class="container container-padding">
      <div class="home-section-title">
        <h3>Leafy Technologies</h3>
      </div>
      <div class="company">
        <div class="box-a">
          <picture> 
            <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/backgrounds/ingegnere-trattamento-acque.webp">
            <img src="<?php echo $root; ?>images/desktop/backgrounds/ingegnere-trattamento-acque.jfif" alt="ingegnere trattamento delle acque"> 
        </picture>
        </div>
        <div class="box-b">
          <p>La Leafy Technologies è un'azienda specializzata nella distribuzione e diffusione di tecnologie innovative in ambito ambientale, con un focus speciale sul settore dell’analisi in linea dell’acqua. <br>
            <br>
            Forte di un’esperienza decennale nel settore della strumentazione per il monitoraggio in continuo della qualità dell'acqua, siamo attualmente i rappresentati ufficiali per l’Italia della Process Instruments (UK), azienda inglese con 20 anni di esperienza nella produzione di sensoristica ed analizzatori. </p>
          <span><a href="<?php echo $root; ?>azienda/" class="link">Scopri chi siamo</a></span> </div>
      </div>
    </div>
  </section>
  <!-- COMPANY END --> 
  
</main>

<!-- FOOTER -->
<?php
include( 'includes/footer.php' );
?>
<!-- FOOTER END --> 

<!-- horizontal scroll for mobile  -->
<script src="<?php echo $root; ?>js/scroll-x.js"></script>
    
<!-- form contatti -->    
<?php
include( 'includes/call-back-form-scripts.php' );
?>

</body>
</html>