<?php
include( '../../includes/bootstrap.php' );

$title = "Controllo legionella e misura in linea del biofilm nell'acqua";
$metadescription = "Grazie al monitoraggio in linea del biofilm è possibile prevenire problemi con la legionella; l'articolo affronta i dettagli tecnici.";

include( '../../includes/header.php' );

?>
<!--

Numero doc.: PIFOCPA0011;
Indirizzo: https://www.leafytechnologies.it/bibliotecnica/approfondimenti/misura-linea-biofilm.php;

Pubblicato: 10/08/2019;
Ultima revisione: 06/06/2020;

W3C HTML: Attesa nuovo layout;
W3C CSS: Attesa nuovo layout;

Traduzione: 100%;
Grammatica: 100%;

Da fare:
- Aggiornare con materiale ALVIM

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
        <h1>Controllo legionella e misura in linea del biofilm nell'acqua</h1>
      </div>
      </a> </div>
  </div>
  <div class="header-title lg-screen-show">
    <div class="container container-padding">
      <div class="header-title-content">
        <h1>Controllo legionella e misura in linea del biofilm nell'acqua</h1>
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
          <div> <span><a href="<?php echo $root; ?>bibliotecnica/approfondimenti/misura-linea-biofilm.php">Controllo legionella e misura in linea del biofilm nell'acqua</a></span> </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumbs ens--> 
  
  <!-- paragraph center -->
  <section class="wrapper-a">
    <div class="container container-padding">
      <article class="center-page-article images-article">
        <p>L'articolo illustra come poter effettuare la misura in linea del biofilm utilizzando un sistema in linea ideato dalla Pi.</p>
        <p>In qualsiasi sistema idrico il biofilm è una fonte e luogo di riparo per i batteri (spesso <strong>legionella</strong>), una causa di corrosione e uno dei motivi della perdita di calore negli scambiatori di calore, per fare un esempio.</p>
        <p>Prima di addentrarci nella questione, vogliamo mostrare attraverso un'immagine, le <strong> cinque fasi</strong> principali dello sviluppo del biofilm, in questo caso mostriamo un diagramma della microfotografia del biofilm di P.aeruginosa in via di sviluppo.</p>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/crescita-biofilm.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/crescita-biofilm.jpg" alt="Le 5 fasi di crescita del biofilm"/> </picture>
          <figcaption>Le cinque fasi di sviluppo <br/>
            del Biofilm</figcaption>
        </figure>
        <ol>
          <li><strong>Attacco iniziale</strong>: il biofilm trova un luogo all'interno del sistema dove riesce ad attaccarsi. Questo, ad esempio, può essere una parte del sistema dove il flusso è basso.</li>
          <li><strong>Attacco irreversibile</strong>: il biofilm si stabilisce in maniera permanente e , in condizioni normali, non può essere eliminato senza un intervento esterno.</li>
          <li><strong>Maturazione I</strong>: al di sotto della "parete protettiva" il biofilm inizia a crescere .</li>
          <li><strong>Maturazione II</strong>: continua la crescita del biofilm e arriva a "maturazione". A questo punto siamo già arrivati ad una fase critica ed il rischio è elevato.</li>
          <li><strong>Dispersione</strong>5. : passata la maturazione, il biofilm diventa una fonte di batteri che si disperdono nel sistema in quantità così elevate che i normali livelli di residuo non riescono a gestire. Questa è la situazione in cui il rischio di epidemie , ad esempio di legionella, sono alte.</li>
        </ol>
        <p>Ora vedremo come utilizzare il sensore di Biofilm per controllare il rischio legionella.</p>
        <h2>Introduzione</h2>
        <p>Il biofilm (melma) può crescere in qualsiasi impianto idrico, ma ha maggiori probabilità di crescere in quei sistemi che soddisfano le seguenti caratteristiche: </p>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/sensore-biofilm.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/sensore-biofilm.jpg" alt="Un sensore di biofilm con del biofilm attaccato"/> </picture>
          <figcaption>Sensore di biofilm con <br/>
            crescita</figcaption>
        </figure>
        <ul>
          <li>Presenza di acqua / Alto livello di umidità</li>
          <li>Presenza di ossigeno / Discreta aerazione</li>
          <li>Circolazione, spesso lenta, di acqua</li>
          <li>Presenza di una fonte di sostanze nutritive</li>
        </ul>
        <p>Quando vi è la crescita di un biofilm, esso può creare un ambiente molto localizzato che può presentare condizioni molto diverse rispetto al sistema idrico. Questa è la capacità dei biofilm di formare <strong>microambienti</strong>, il che significa che sono spesso associati a fenomeni di corrosione e alla formazione di incrostazioni. </p>
        <p>I biofilm sono costituiti da microrganismi fluttuanti che aderiscono debolmente su di una superficie. Se non vengono immediatamente separati dalla superficie, possono legarsi più fortemente alla superficie, permettendo ad altre specie di attaccarsi e creare una <strong>colonia batterica </strong>ossia un biofilm. Questo strato di biofilm che si sviluppa viene comunemente definito "melma" (nella letteratura inglese si utilizza il termine <span lang="en">slime</span>).</p>
        <h2>Perché monitorare il biofilm?</h2>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/problemi-legionella.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/problemi-legionella.jpg" alt="Un polmone infetto da legionella"/> </picture>
          <figcaption>Un polmone infetto da<br/>
            legionella. Nel 2011, ci sono<br/>
            stati 235 casi segnalati di <br/>
            legionellosi nel Regno Unito.</figcaption>
        </figure>
        <p>La maggior parte degli <strong>impianti idrici</strong> è generalmente sicura e non presenta livelli preoccupanti di biofilm; le operazioni settimanali e/o mensili di mantenimento intraprese dagli operatori attenuano, con successo, il rischio di sviluppo del biofilm e lo controllano mantenendolo a livelli accettabili. In questo contesto ci si può chiedere è il problema?</p>
        <p>Il problema è che mentre la stragrande maggioranza degli impianti idrici è sicura e ben gestita, sappiamo che ogni anno <strong>centinaia di persone</strong> muoiono come risultato diretto del biofilm presente in impianti idrici.</p>
        <p>In alcuni sistemi attraverso una misura positiva dell'ossidante residuo in eccesso si assume che il sistema sia sterile. Tuttavia, il biofilm, producendo un microambiente, può <strong>proteggere</strong> efficacemente i batteri dai biocidi presenti nell'acqua.</p>
        <p>Attualmente non esistono analizzatori affidabili, che funzionino in tempo reale e che siano installabili direttamente <strong>in linea</strong>. <br/>
          Non vi è un sistema in grado di verificare l'efficacia del trattamento chimico utilizzato nella prevenzione del biofilm o di verificare che le condizioni non siano cambiate da quando è stato introdotto il regime di <strong>trattamento chimico</strong>. Alcuni di questi cambiamenti potrebbero ed esempio essere:</p>
        <ul>
          <li>Un cambiamento della <strong>temperatura ambiente</strong> </li>
          <li>Un cambiamento nell'<strong>uso</strong> dell'acqua</li>
          <li>Una entrata d'aria che ha introdotto materiali indesiderati, come ossigeno o <strong>nutrienti </strong> </li>
        </ul>
        <h2>Quali sono le soluzioni attualmente in uso?</h2>
        <p>Esistono vari sistemi attualmente disponibili per misurare l'accumulo di biofilm. Probabilmente il sistema più efficace è un dispositivo con una serie di lastre di plastica; in questo sistema ogni giorno, settimana o mese una <strong>piastra</strong> può essere rimossa e controllata per verificare la presenza di biofilm.</p>
        <p>In alternativa ci sono dispositivi disponibili in commercio che misurano il tasso di perdita di calore misurato da un sensore in linea; in questo sistema tuttavia <strong>falsi positivi</strong> possono essere prodotti da una riduzione della perdita di calore causata da un accumulo di sedimenti o incrostazioni.</p>
        <h2>Qual è la soluzione?</h2>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/sensore-biofilm-alta-risoluzione.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/sensore-biofilm-alta-risoluzione.jpg" alt="Il sensore per la misura del biofilm"/> </picture>
          <figcaption>Sensore di Biofilm</figcaption>
        </figure>
        <p>La soluzione a questi problemi e alle limitazioni dei sistemi attuali, soprattutto quelli legati alla misura in linea della crescita del biofilm e/o al <strong>sovradosaggio chimico</strong> che alcuni operatori utilizzano come misura di sicurezza, è quella di monitorare il sistema in continuo. </p>
        <p>Questo è possibile attraverso un sensore di biofilm che sia facile da usare e conveniente. Un sistema di questo tipo dovrebbe avere le seguenti caratteristiche:</p>
        <ul>
          <li>Costo contenuto</li>
          <li>Semplice da utilizzare ed installare</li>
          <li>Misurare in continuo</li>
          <li>Non dare falsi positivi</li>
        </ul>
        <p>Il sensore biofilm BioSense di Pi soddisfa tutti questi criteri e il modo migliore per spiegare il funzionamento è attraverso un video. Per una descrizione più dettagliata del sistema visitare la pagina del <a href="#">sensore di biofilm.</a> </p>
        <iframe title="YouTube video player" src="https://www.youtube.com/embed/xMvRU1rUzXM?wmode=transparent&autoplay=0" width="960" height="720" allowfullscreen></iframe>
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