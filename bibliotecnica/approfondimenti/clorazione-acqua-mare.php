<?php
include( '../../includes/bootstrap.php' );

$title = "Clorazione dell'acqua di mare: misurazione del bromo in linea";
$metadescription = "Quando si effettua la clorazione in acqua salata è il bromo ad effettuare la disinfezione quindi bisogna scegliere l'elettrolita giusto per il sensore.";

include( '../../includes/header.php' );
?>
<!--

Numero doc.: PIFOCPA0013;
Indirizzo: https://www.leafytechnologies.it/bibliotecnica/approfondimenti/clorazione-acqua-mare.php;

Pubblicato: 10/08/2019;
Ultima revisione: 04/06/2020;

W3C HTML: Attesa nuovo layout;
W3C CSS: Attesa nuovo layout;

Traduzione: 100%;
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
  <div class="header-title-mobile mobile-show">
    <div class="container container-padding"> <a href="#">
      <div class="header-title-mobile-content">
        <svg class="Backward_arrow" data-name="Backward arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
          <path class="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(16 16) rotate(180)" fill="#6b6d69"/>
        </svg>
        <h1>Clorazione dell'acqua di mare: misurazione del bromo in linea</h1>
      </div>
      </a> </div>
  </div>
  <div class="header-title lg-screen-show">
    <div class="container container-padding">
      <div class="header-title-content">
        <h1>Clorazione dell'acqua di mare: misurazione del bromo in linea</h1>
      </div>
    </div>
  </div>
  
  <!-- breadcrumbs -->
  <section class="lg-screen-show">
    <div class="container container-padding">
      <div class="breadcrumbs-wrap">
        <div class="breadcrumbs">
          <ul>
            <li><a href="<?php echo $root; ?>">Home</a></li>
            <li><a href="<?php echo $root; ?>bibliotecnica/">Bibliotecnica</a></li>
            <li><a href="<?php echo $root; ?>bibliotecnica/approfondimenti/">Approfondimenti</a></li>
          </ul>
        </div>
        <div class="crumb-now">
          <div> <span><a href="<?php echo $root; ?>bibliotecnica/approfondimenti/clorazione-acqua-mare.php">Clorazione acqua mare</a></span> </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumbs ens--> 
  
  <!-- paragraph center -->
  <section class="wrapper-a">
    <div class="container container-padding">
      <article class="center-page-article images-article">
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/nota-tecnica-clorazione-acqua-mare.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/nota-tecnica-clorazione-acqua-mare.jpg" alt="Nota tecnica sulla clorazione dell'acqua di mare."/> </picture>
          <figcaption> Nota tecnica: <br>
            <a href="<?php echo $root; ?>docs/note-tecniche/clorazione-acqua-di-mare.pdf">"Clorazione dell'acqua di mare"</a> </figcaption>
        </figure>
        <p> L'articolo descrive alcune caratteristiche particolari della clorazione dell'acqua di mare: la formazione del bromo. Vi è anche una nota tecnica scaricabile in PDF sulla <a href="<?php echo $root; ?>docs/note-tecniche/clorazione-acqua-di-mare.pdf">clorazione dell'acqua di mare</a>. </p>
        <p> Quando si parla di <strong>clorazione dell'acqua di mare</strong> bisogna tener presente due punti fondamentali: </p>
        <ul>
          <li> quando si dosa il cloro nell'acqua di mare è <strong>il bromo</strong> a fare la disinfezione; </li>
          <li> il test DPD n. 1 misura il cloro libero o il bromo totale ma <strong>non il bromo libero</strong>. </li>
        </ul>
        <p> La chimica della clorazione dell'acqua di mare è più complessa di quanto molti pensino e, sebbene la misura dei residui di cloro sia possibile nell'acqua di mare, una piena comprensione è necessaria per ottenere i risultati sperati. <br/>
        </p>
        <h2 style="clear: both;">Cloro o bromo?</h2>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/sensore-di-cloro.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/sensore-di-cloro.jpg" alt="Sensore di cloro amperometrico"/> </picture>
          <figcaption> Sensore di cloro <br/>
            amperometrico </figcaption>
        </figure>
        <p> L'acqua di mare contiene circa 70 ppm di bromuri disciolti la maggior parte dei quali sono nella forma di bromuro di sodio. Quando si immette del cloro in acqua, questo, in quanto più reattivo, sposta  il bromo dal bromuro e lo converte in un cloruro. </p>
        <p> Quindi, quando si misurano fino a circa 70 ppm di cloro totale dosato nell'acqua, ciò che effettivamente si ottiene sono <strong>bromo libero e bromo combinato</strong> e non cloro libero e combinato, pertanto, è il bromo totale che effettivamente  <strong>fa la disinfezione </strong><sup><a href="#ref1">[1]</a></sup>. Quindi perché si parla generalmente di "clorazione" quando tecnicamente è bromurazione? Di fatto perché sono in pochi a conoscere questo interessante capitolo della chimica! </p>
        <p> Generalmente  conoscere  questa  parte  teorica  non  fa  molta  differenza  poiché  il  bromo  è  un  disinfettante efficace. Può comunque verificarsi molta confusione quando si tratta di <strong>monitorare i residui e controllare il dosaggio</strong>. La scelta del sensore corretto per controllare il dosaggio è fondamentale, così come lo è la scelta del test DPD corretto per effettuare la calibrazione. </p>
        <p> La <i lang="en">Leafy Technologies</i> offre una linea di analizzatori e sensori specifici per la clorazione dell'acqua di mare, ma per scegliere lo strumento giusto è necessario comprendere la chimica. </p>
        <h2>Cloro libero e bromo totale</h2>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/analizzatore-crius.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/analizzatore-crius.jpg" alt="Analizzatore CRIUS"/> </picture>
          <figcaption> Analizzatore CRIUS<sup>®</sup> </figcaption>
        </figure>
        <p> A  causa  della  confusione  esistente  su  questo  argomento  e  su  ciò  che  viene  realmente  misurato,  può  capitare che un ingegnere indichi <strong>lo strumento sbagliato</strong> e/o  lo  calibri  in  modo  errato.  Ad  esempio,  è  possibile  che  si  specifichi  un  sensore  di  cloro libero per il controllo della clorazione dell’acqua di mare che, come si vedrà in seguito, è una pratica errata. </p>
        <p> La maggior parte, ma non tutti, i sensori elettrochimici di cloro libero reagiscono al bromo libero, eppure, questa non è necessariamente la scelta migliore per il controllo della bromurazione. </p>
        <p> La maggior parte delle pubblicazioni sull'argomento concordano sul fatto che, mentre la capacità di disinfezione tra cloro libero e cloro combinato differisce, quando si tratta di <strong>bromo libero e bromo combinato</strong>, entrambe le forme  sono <strong>ugualmente efficaci</strong> nella disinfezione, di conseguenza una misura migliore è quella del bromo totale, il quale richiede un sensore di  <strong> bromo totale</strong>. </p>
        <h2>DPD e clorazione dell'acqua di mare</h2>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/fiale-dpdp.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/fiale-dpdp.jpg" alt="Fiale di DPD contenenti ossidante(acqua rossa) o non (fiala trasparente)"/> </picture>
          <figcaption> Fiale di DPD contenenti <br/>
            ossidante(acqua rossa) <br/>
            o non (fiala trasparente) </figcaption>
        </figure>
        <p> Per aumentare ulteriormente la confusione, per tracciare i residui di disinfettante nell'acqua  è necessario considerare la calibrazione dei sensori in linea e l'utilizzo di fotometri portabili. Il DPD è ampiamente utilizzato sia per misurare i residui di cloro e sia perché reagisce anche al bromo,   tuttavia, DPD n. 1 misura il  <strong>cloro libero o il bromo totale</strong>. </p>
        <p> Per questo potrebbe accadere che si disponga di un analizzatore per l'<strong>analisi in linea</strong> come il <a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-base/">CRONOS<sup>®</sup></a> o il <a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-avanzato/">CRIUS<sup>®</sup></a> (impostato con sensori di cloro libero), che misura effettivamente il bromo libero ma che è stato calibrato come se fosse un sistema per la misura del bromo totale (DPD n.1)! </p>
        <p> In genere i risultati migliori si ottengono specificando un <strong>sensore di bromo totale (cloro totale)</strong> e calibrandolo con DPD n. 1.  Ma non è tutto, quando si specifica un analizzatore, è fondamentale informare la <i lang="en">Leafy Technologies</i> che lo strumento è destinato all'uso con acqua di mare in quanto la sua composizione fisica e chimica   è molto diversa dall'acqua potabile o di processo e questo può influire su ciò che si fornisce ai clienti, ad esempio, specificando un elettrolita con una salinità diversa. <br/>
        </p>
        <h2>L'effetto della salinità sui sensori a membrana</h2>
        <p> È fondamentale sapere se il sensore sarà utilizzato in acqua di mare in modo da poter fornire un elettrolita più salato. L'acqua tende a passare da una concentrazione di soluto basso ad una concentrazione di soluto più alta attraverso una membrana semi-permeabile (<strong>osmosi</strong>). </p>
        <p> L'elettrolita nei sensori amperometrici è più salato dell'acqua potabile o di processo, pertanto, l'osmosi forza l'acqua verso l'estremità del sensore il quale è progettato per far fronte a questa situazione. Tuttavia, con l'acqua di mare, il processo viene <strong>invertito</strong> e l'acqua nell'elettrolita può essere forzata fuori dal sensore e dentro il campione di acqua che si vuole analizzare. Per risolvere il problema si fornisce un<strong> elettrolita appositamente progettato</strong> per l'acqua di mare, con una salinità più elevata. </p>
        <h2>Acque di estuario</h2>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/sensore-amperometrico-cella-di-flusso.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/sensore-amperometrico-cella-di-flusso.jpg" alt="Sensore di cloro amperometrico alloggiato all'interno della cella di flusso"/> </picture>
          <figcaption> Cella di flusso </figcaption>
        </figure>
        <p> Molte applicazioni di clorazione dell'acqua di mare sono in prossimità di un estuario quindi in parte acqua di mare ed in parte acqua dolce in questo caso è il <strong>grado di diluizione</strong> a determinare quale sensore e quale elettrolita utilizzare. L'acqua di mare ha circa 70 ppm di bromuri e quindi fino a 70 ppm di cloro la sostituzione sarà del 100%, ma se l'acqua di mare è al 50% acqua dolce, allora fino a 35 ppm di cloro si otterrà uno spostamento di specie del 100% . </p>
        <p> Se si osservasse, ad esempio, un residuo di 2 ppm, l'acqua potrebbe essere solo il 3% di acqua di mare e il 97% di acqua dolce, si dovrebbe comunque misurare il bromo, di conseguenza sarebbe appropriato un sensore di bromo totale calibrato con DPD n. 1. </p>
        <p> Generalmente per qualsiasi acqua contaminata con acqua di mare è molto probabile che <strong>l'elettrolita per acqua di mare</strong> sia il più appropriato. </p>
        <h2>La soluzione</h2>
        <p> Se tutto questo è troppo da comprendere e ricordare, l'approccio migliore è <a href="<?php echo $root; ?>azienda/contatti.php">discutere con un consulente</a> e fornire quanti più dati possibili sull'applicazione. In questo modo sarà possibile offrire e specificare la soluzione più idonea. </p>
        <h2>Referenze</h2>
        <p lang="en"> <a id="ref1">[1]</a> White's Handbook of Chlorination and Alternative Disinfectants, 5th Edition, Wiley - pag. 874, pagine 122-129. </p>
      </article>
    </div>
  </section>
  <!-- paragraph center end --> 
  
</main>

<!-- FOOTER -->
<?php
include( '../../includes/footer.php' );
?>
<!-- FOOTER END -->
</body>
</html>