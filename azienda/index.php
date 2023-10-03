<?php
include ('../includes/bootstrap.php');

$ishomepage = TRUE;
$title = "La Leafy Technologies: Chi Siamo, I Nostri Valori";
$metadescription = "La LT è un'azienda specializzata nella distribuzione di tencologie innovative per il settore dell'acqua e dell'ambientale";
$additional_style = '';

include ('../includes/header.php');

?>
<!--

Numero doc.: LTSP0003;
Indirizzo: https://www.leafytechnologies.it/lazienda/;

Pubblicato: 01/08/2019;
Ultima revisione: 01/06/2020;

W3C HTML: Attesa nuovo layout;
W3C CSS: Attesa nuovo layout;

Traduzione: 100% ;
Grammatica: 100%;

Da fare: 
-->

<body>
<!-- NAV -->
<?php
    
    include('../includes/top-and-nav.php');
    
    ?>

<!-- NAV END -->

<main>
    
<!-- header -->
<header class="header-lg">
  <div class="header-wrap header-vd-background">
      
      <video loop autoplay muted>
              <source src="<?php echo $root; ?>images/desktop/headers/natura-01.mp4" type="video/mp4">
      </video>
      <div class="header-vd-text">
      <h1 style="font-size: 46px; text-align: center;">Dalla Natura alla Natura</h1>
            <p style="font-size: 26px; text-align: center;">
              Dalla Natura alla Natura
    </p>
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
        </ul>
      </div>
      <div class="crumb-now">
        <div> <span><a href="<?php echo $root; ?>azienda/">Azienda</a></span> </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumbs ens--> 

<!-- la visione -->
<section class="wrapper-a">
  <div class="container container-padding visione-wrapper">
    <div class="box-a bg-gray">
      <div>
        <p> La Leafy Technologies è un'azienda specializzata nella distribuzione e diffusione di tecnologie innovative in ambito ambientale, con un focus speciale sul settore dell’analisi in linea dell’acqua. <br>
          <br>
          Forte di un’esperienza decennale nel settore della strumentazione per il monitoraggio in continuo della qualità dell'acqua, siamo attualmente i rappresentati ufficiali per l’Italia della Process Instruments (UK), azienda inglese con 20 anni di esperienza nella produzione di sensoristica ed analizzatori.<br>
          <br>
          La nostra visione aziendale è semplice: "Consci delle enormi sfide che l’ambiente ed il settore dell’acqua devono affrontare, abbiamo deciso di dedicare il nostro tempo e le nostre migliori energie per identificare e fornire soluzioni e tecnologie innovative ed in questo modo propagare la passione per l’ambiente e la tecnica alle nuove generazioni".<br>
          <br>
          In questo modo, non solo forniremo le migliori soluzioni ai nostri clienti ma assicureremo un futuro in cui il rispetto dell’ambiente, l’ottimizzazione energetica ed una forte etica del lavoro diventino lo standard di riferimento. <br>
          <br>
        </p>
      </div>
    </div>
    <div class="box-b">
      <div>
        <h2>La nostra visione</h2>
      </div>
    </div>
  </div>
</section>
<!-- la visione end --> 

<!-- supporto -->
<section class="wrapper-a">
  <div class="container container-padding">
    <div class="supporto">
      <div class="box-a">
        <h2>Supporto e 
          Competenze 
          Tecniche</h2>
      </div>
      <div class="box-b bg-blue">
        <div>
        <p>
          Forte di una specializzazione in ingegneria elettronica e sistemi integrati e grazie ad una esperienza maturata sul campo il nostro ingegnere ed il nostro responsabile vendita, sono in grado di fornire le soluzioni adeguate alle sfide poste dai processi di trattamento dell'acqua. <br>
          <br>
          Il responsabile vendite ha un’esperienza internazionale e decennale in impianti di trattamento di acque potabili, di scarico, di processo, ospedaliere e così discorrendo. Questo offre la sicurezza di un approccio metodico e serio nella determinazione del miglior strumento e/o soluzione per il proprio processo.
        </p>
          
        <p>
         L’installazione della strumentazione come, ad esempio, il fissaggio dello strumento su un pannello apposito, connessione dell’acqua, regolazione del flusso e così discorrendo viene normalmente effettuata dai tecnici dei nostri clienti o da aziende terze specializzate. Ove sia necessario il nostro intervento possiamo comunque offrire questo servizio direttamente o attraverso i nostri partner in varie località nella penisola e sulle isole.<br>
          <br>
Durante la messa in servizio, invece, soprattutto per il primo strumento, raccomandiamo la presenza del nostro ingegnere o di uno dei nostri partner per assicurarsi che il sistema sia calibrato correttamente ed impostato per dare il miglior rendimento possibile. 
            </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- supporto end --> 
    
</main>

<!-- FOOTER -->
<?php
include ('../includes/footer.php');
?>
<!-- FOOTER END --> 

<script src="<?php echo $root; ?>js/carousel.js"></script>
</body>
</html>
