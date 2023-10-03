<?php
include( '../../includes/bootstrap.php' );

$title = "Misurazione del potenziale redox per monitorare la rimozione del cloro residuo utilizzando il bisolfito di sodio";
$metadescription = "L'articolo descrive la misurazione del potenziale redox per monitorare la rimozione del cloro residuo utilizzando il bisolfito di sodio.";

include( '../../includes/header.php' );

?>
<!--

Numero doc.: PIFOCPA0015;
Indirizzo: https://www.leafytechnologies.it/bibliotecnica/approfondimenti/misura-redox-rimozione-cloro-bisolfito-sodio.php;

Pubblicato: 10/08/2019;
Ultima revisione: 07/06/2020;

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
        <h1>Misurazione del potenziale redox per monitorare la rimozione del cloro residuo utilizzando il bisolfito di sodio</h1>
      </div>
      </a> </div>
  </div>
  <div class="header-title lg-screen-show">
    <div class="container container-padding">
      <div class="header-title-content">
        <h1>Misurazione del potenziale redox per monitorare la rimozione del cloro residuo utilizzando il bisolfito di sodio</h1>
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
          <div> <span><a href="<?php echo $root; ?>bibliotecnica/approfondimenti/misura-redox-rimozione-cloro-bisolfito-sodio.php">Misurazione del potenziale redox per monitorare la rimozione del cloro residuo utilizzando il bisolfito di sodio</a></span> </div>
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
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/sensore-di-cloro.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/sensore-di-cloro.jpg" alt="Sensore di cloro amperometrico"/> </picture>
          <figcaption><a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">Sensore di cloro <br/>
            amperometrico HaloSense</a></figcaption>
        </figure>
        <p>Il cloro può essere rimosso da un processo di trattamento per una serie di motivi,  ad esempio, il <strong>cloro potrebbe danneggiare una membrana di osmosi inversa </strong> oppure entrare in contatto col cibo quando non previsto e rovinarlo. La rimozione del cloro presenta diverse problematiche per i produttori e gli ingegneri della strumentazione, per questo è importante sapere che:</p>
        <ul>
          <li>la misurazione del redox può essere utilizzata per controllare efficacemente <strong>il dosaggio del bisolfito di sodio</strong> usato per la rimozione del cloro;</li>
          <li>la misurazione del redox può limitare il sovradosaggio del bisolfito di sodio che altrimenti potrebbe portare a problemi più avanti nel processo;</li>
          <li>il redox è molto sensibile ai cambiamenti del cloro <strong>a livelli molto bassi</strong>.</li>
        </ul>
        <h2>Controllare la rimozione del cloro</h2>
        <p>In questo tipo di applicazione sembrerebbe perfettamente ragionevole utilizzare un <a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">sensore di cloro</a> e dosare un <strong>agente riducente</strong> come il bisolfito di sodio fino a quando la sonda non raggiunga lo zero. Nel caso in cui partendo dal valore zero,  la lettura della sonda aumentasse, sarebbe necessario somministrare una quantità maggiore di agente riducente.</p>
        <p>Sfortunatamente, a causa delle proprietà elettrochimiche intrinseche nei sensori di cloro, questa soluzione apparentemente logica, <strong>non funzionerà</strong>.</p>
        <h3>Sonde amperometriche ed assenza di cloro: i limiti</h3>
        <p>Le sonde amperometriche per la misura del cloro richiedono la presenza di un po' di cloro per funzionare correttamente. Questo fenomeno è  chiamato <strong>polarizzazione</strong> e più a lungo un sensore di cloro è stato in acqua senza cloro, più tempo ci vorrà affinché  il cloro venga misurato una volta reintrodotto nel sistema. Ciò non è dovuto né alla qualità della produzione dei sensori né alla progettazione, ma è una <strong>proprietà elettrochimica fondamentale</strong> difficile da aggirare.</p>
        <p>Alcune sonde amperometriche sono più resistenti a questo effetto rispetto ad altre e sono adatte per applicazioni in cui il cloro può raggiungere <strong>intermittentemente lo zero</strong> o dove la sonda può essere periodicamente ripristinata in acqua clorata, generalmente acqua potabile. Un esempio di ciò è il sistema <strong><a href="misurare-assenza-zero-cloro.php">Zero Cloro</a></strong> concepito pensando esattamente a questo.</p>
        <p>Questo sensore amperometrico per Zero Cloro viene utilizzato con successo nelle applicazioni per la <strong>protezione di membrane di osmosi inversa</strong> ed in molti altri processi dove vi è un basso livello di cloro.</p>
        <h3>Una soluzione elegante: redox</h3>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/sensore-redox-numero-tre.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/sensore-redox-numero-tre.jpg" alt="Sensore Redox"/> </picture>
          <figcaption>Sensore redox </figcaption>
        </figure>
        <p>Tuttavia, in applicazioni in cui vengono utilizzati agenti riducenti per rimuovere il cloro, una soluzione più accurata è l'utilizzo di un sensore di redox. Un sensore redox, infatti, misura il potenziale di ossido-riduzione e la reazione tra cloro e l'agente riducente è una <strong>reazione di ossidoriduzione (redox)</strong>.</p>
        <p>Ciò significa che il redox <strong>può essere utilizzato</strong> per controllare questo processo, garantire la rimozione del cloro ed  impedire contemporaneamente il sovradosaggio dell'agente riducente.</p>
        <p>Di seguito è riportato un esempio semplificato della reazione tra HOCl (acido ipoclorito, ossia parte del cloro libero) e NaHSO<sub>3</sub> (bisolfito di sodio).</p>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/sensore-redox-numero-due.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/sensore-redox-numero-due.jpg" alt="Sensore Redox Due"/> </picture>
          <figcaption>Sensore redox due </figcaption>
        </figure>
        <p>2NAHSO<sub>3</sub> + 2HOCl → H<sub>2</sub>SO<sub>4</sub> + 2HCl + Na<sub>2</sub>SO<sub>4</sub> </p>
        <p>Quando il cloro libero è in eccesso, il valore del redox aumenta e quando il bisolfito di sodio è in eccesso, il valore del redox diminuisce.</p>
        <p>A livelli bassi, un cambiamento molto limitato nella concentrazione del cloro si tradurrà in una grande variazione del potenziale redox. Questo perché la relazione tra redox e la concentrazione di ossidanti ed agenti riducenti è <strong>logaritmica</strong>. Lo stesso vale anche per la concentrazione dell'agente riducente, tipo il bisolfito, una volta raggiunto un eccesso.</p>
        <h3>I sensori di redox ORPSense</h3>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/grafico-stilizzato-aggiunta-bisolfito.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/grafico-stilizzato-aggiunta-bisolfito.jpg" alt="Grafico stilizzato reazione cloro aggiunta bisolfito"/> </picture>
          <figcaption>Grafico stilizzato </figcaption>
        </figure>
        <p>Gli analizzatori ed i <a href="<?php echo $root; ?>prodotti/misuratore-redox/">sensori di potenziale redox ORPSense</a> possono essere usati per controllare la rimozione del cloro. Una <strong>curva di titolazione redox</strong> è necessaria per scegliere il valore obiettivo per il redox.</p>
        <p>Il grafico mostra una tipica curva di titolazione redox, anche se i valori esatti saranno diversi per ogni processo. È importante <strong>testare ogni nuova installazione</strong> e regolare di conseguenza il valore obiettivo per il redox, una volta determinata questa curva di titolazione, non vi è necessità di ricalibrare il sensore  continuamente.</p>
        <h3>Conclusione</h3>
        <p>Vale la pena  sapere che il potenziale redox nell'acqua di processo può essere influenzato da molte altre variabili, come la conduttività, il pH o la temperatura e che questo metodo di controllo non sarà adatto a tutti i processi.</p>
        <p>I <a href="<?php echo $root; ?>prodotti/misuratore-redox/">sensori redox</a> installati su uno dei <a href="<?php echo $root; ?>prodotti/analizzatori-multiparametrici-multicanale/">due analizzatori ( CRONOS<sup>®</sup>  o CRIUS<sup>®</sup> )</a>, potrebbero  essere installati insieme ad altri sensori come il sensore di <a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">Zero Cloro HaloSense</a>, quello di pH e di conduttività per fornire un quadro più completo del processo.</p>
        <p>Nel caso in cui sia necessario controllare un processo in cui il cloro venga rimosso o con sostanze chimiche, o con un filtro a carbone o con i raggi UV, la <i lang="en">Leafy Technologies</i> può aiutare fornendo <strong>strumentazione e competenze</strong> che trovano le loro radici in una conoscenza completa. Per discutere del proprio processo specifico <a href="<?php echo $root; ?>azienda/contatti.php">contattare un consulente</a>. </p>
        <p>NB. Questo Approfondimento riguarda la rimozione del cloro, tuttavia, molti principi in questo Approfondimento possono essere applicati ad altri ossidanti come il biossido di cloro. </p>
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