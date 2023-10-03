<?php
include( '../../includes/bootstrap.php' );

$ishomepage = TRUE;
$title = "Strumentazione per l'analisi e la misura dell'acqua";
$metadescription = "La Leafy Technologies è una azienda specializzata nella vendita di strumentazione  e soluzioni per l'analisi dell'acqua in continuo ed in linea.";
$additional_style = '';

include( '../../includes/header.php' );

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

include( '../../includes/top-and-nav.php' );

?>

  <!-- NAV END -->

  <main>
    <!-- header x-slim -->
    <header class="header-xslim lg-screen-show" style="background-image: url('../../images/desktop/headers/parametri-hd.jpg'), url('<?php echo $root; ?>images/desktop/headers/parametri-hd.webp'); background-repeat: no-repeat;
">
      <div class="container container-padding">
        <h1 style="color: white;">Kemio</h1>
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
            </ul>
          </div>
          <div class="crumb-now">
            <div> <span><a href="<?php echo $root; ?>parametri/">Kemio</a></span> </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumbs ens-->

    <section class="wrapper-a">
      <div class="container container-padding">
        <article class="center-page-article">
          <h3 style="text-align:center;">E se l’analisi sulle acque di balneazione fosse diversa?</h3>
          <p style="text-align:center;">SirenBW è un approccio innovativo al monitoraggio delle acque di balneazione: utilizza un metodo scientifico consolidato per fornire informazioni in tempo reale sul rischio di agenti patogeni.</p>
          <p>Con SirenBW puoi realizzare i rapporti sulla qualità delle acque di balneazione ed averne un quadro completo. Grazie alla tecnologia affidabile, frutto di un metodo scientifico consolidato, con questo strumento puoi:</p>
          <ul>
            <li>Prevenire gli incidenti sanitari chiudendo le aree problematiche</li>
            <li>Rilevare gli agenti patogeni e valutarne il rischio</li>
            <li>Risolvere i problemi in maniera efficiente, monitorando l'inquinamento delle acque</li>
            <li>Tecnologia affidabile con metodo scientifico consolidato</li>
          </ul>
        </article>
      </div>
    </section>
    <!-- HIGHLIGHTS -->
    <section class="container container-padding">
      <div class="highlight-banner-wrap">
        <div class="highlight-banner">
          <div class="box-a">
            <picture>
              <!-- <sourcetype="image" srcset="<?php echo $root; ?>images/desktop/products/crius308x443.webp"> -->
              <img src="<?php echo $root; ?>images/palintest/Kemio-Disinfection-Screen-clear.png"
                alt="analizzatore multiparametrico avanzato">
            </picture>
          </div>
          <div class="box-b">
            <h2>Kemio&trade; Disinfection</h2>
            <p>Uno strumento di misura di nuova generazione che permette di validare i risultati utilizzando una
              metodologia approvata
              dalla EPA statunitense, dando così sicurezza all’operatore.</p>
            <ul>
              <li>Misura del <b>cloro, biossido di cloro, clorito ed acido peracetico</b> (PPA) con un unico strumento
              </li>
              <li>Ottieni un risultato di conformità positivo o negativo in modo <b>chiaro e veloce</b></li>
              <li>Risultato in un massimo di <b>60 secondi</b>: permette azioni tempestive</li>
              <li><b>Metodo di misurazione semplice</b>: l’operatore non ha bisogno di una formazione specifica</li>
              <li><b>Registro automatico</b> di tutti i risultati: completo, conforme e verificabile</li>
              <li>Adatto per tutti i tipi di campioni, Kemio <b>non subisce l’interferenza di colore, torbidità,
                  particelle
                  in sospensione
                  o luce ambiente</b></li>
            </ul>
            <span><a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-avanzto/" class="link">Scopri di
                più</a></span>
            <span><a href="<?php echo $root; ?>azienda/contatti.php" class="btn btn-primary">Preventivo</a></span>
          </div>
        </div>
        <div class="highlight-banner">
          <div class="box-a">
            <picture>
              <!-- <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/products/cronos308x443.webp"> -->
              <img src="<?php echo $root; ?>images/palintest/Kemio-HM-Perform-test-clear-1.png"
                alt="analizzatore multiparametrico base">
            </picture>
          </div>
          <div class="box-b">
            <h2 style="line-height: 0.9;">Kemio&trade; Heavy Metals </br> <span style="font-size: 20px;">(Metalli
                pesanti)</span></h2>
            <p>è uno strumento per la misurazione del <b>piombo</b> e del <b>cadmio</b> in acque potabili e di processo,
              che offre
              risultati precisi
              e ripetibili.</p>
            <ul>
              <li>L’unico metodo approvato dall’EPA per la misurazione del piombo</li>
              <li>Fornisce risultati affidabili in 3 minuti</li>
              <li>Per l’utilizzo sia in laboratorio che in campo, Kemio&trade; Heavy Metals è leggero e robusto</li>
              <li>Metodo di misura semplice con processo guidato sullo schermo</li>
              <li>Offre un risultato di conformità positivo o negativo in modo <b>chiaro e veloce</b>, per azioni
                tempestive
              </li>
              <li>Adatto per tutti i tipi di campioni, Kemio <b>non subisce l’interferenza di colore, torbidità,
                  particelle
                  in sospensione
                  o luce ambientale</b></li>
            </ul>
            <span><a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-base/" class="link">Scopri di
                più</a></span> <span><a href="<?php echo $root; ?>azienda/contatti.php"
                class="btn btn-primary">Preventivo</a></span>
          </div>
        </div>
      </div>
    </section>
    <!-- HIGHLIGHTS END -->
  </main>

  <!-- FOOTER -->
  <?php
    include( '../../includes/footer.php' );
    ?>
  <!-- FOOTER END -->
</body>

</html>