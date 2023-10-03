<?php
include( '../../includes/bootstrap.php' );

$title = "•	Controllo automatico della coagulazione negli impianti di potabilizzazione";
$metadescription = "La coagulazione dell'acqua è una tappa fondamentale nel processo di potabilizzazione. L'articolo illustra una tecnologia per il controllo automatico.";

include( '../../includes/header.php' );
?>
<!--

Numero doc.: PIFOCPA0017;
Indirizzo: https://www.leafytechnologies.it/bibliotecnica/approfondimenti/controllo-automatico-coagulazione.php;

Pubblicato: 10/08/2019;
Ultima revisione: 05/06/2020;

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
        <h1>•	Controllo automatico della coagulazione negli impianti di potabilizzazione</h1>
      </div>
      </a> </div>
  </div>
  <div class="header-title lg-screen-show">
    <div class="container container-padding">
      <div class="header-title-content">
        <h1>•	Controllo automatico della coagulazione negli impianti di potabilizzazione</h1>
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
          <div> <span><a href="<?php echo $root; ?>bibliotecnica/approfondimenti/controllo-automatico-coagulazione.php">•	Controllo automatico della coagulazione negli impianti di potabilizzazione</a></span> </div>
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
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/nota-tecnica-coagulazione.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/nota-tecnica-coagulazione.jpg" alt="Nota tecnica sul controllo automatico della coagulazione"/> </picture>
          <figcaption> Nota tecnica sul <a href="<?php echo $root; ?>docs/note-tecniche/controllo-coagulazione-con-streaming-current.pdf">Controllo <br>
            automatico della coagulazione</a> </figcaption>
        </figure>
        <p> L'articolo affronta la tematica complessa del controllo automatico della coagulazione, dei problemi legati a questo processo e si offrono alcune soluzioni. È inoltre disponibile una nota tecnica in PDF sul <a href="<?php echo $root; ?>docs/note-tecniche/controllo-coagulazione-con-streaming-current.pdf">"Controllo automatico della coagulazione"</a>. </p>
        <h2>Introduzione</h2>
        <p> La maggior parte degli operatori nel settore del trattamento delle acque è ben conscio che raggiungere il giusto livello di dosaggio di coagulante può essere un'operazione difficile. Mantenere un <strong> dosaggio ottimale</strong> è fondamentale per mantenere standard elevati di qualità dell'acqua e ridurre la formazione di sottoprodotti della disinfezione (<abbr lang="en" title="Disinfection By-Products">DBP</abbr>) derivanti dall'interazione tra sostanze organiche e disinfettante </p>
        <p> L'operatore di un impianto può utilizzare dati storici, test con i flocculatori da banco o basarsi sulla propria esperienza per decidere il <strong>livello di coagulante da dosare</strong>. Per evitare la possibilità di sottodosaggio e l'invio nella rete di distribuzione di acqua mal trattata, molti impianti di trattamento delle acque finiscono per effettuare un sovradosaggio continuo che si traduce in:
        <ul>
          <li> uno <strong>spreco di coagulante</strong> ed altri prodotti chimici costosi; </li>
          <li> riduzione della vita utile dei filtri; </li>
          <li> rimozione non ottimizzata e/o ridotta delle <strong>sostanze organiche</strong>; </li>
          <li> sovraccarico di sali di alluminio nel sistema; </li>
          <li> un aumento generale del costo del <strong>trattamento dei fanghi</strong>. </li>
        </ul>
        <p> Inoltre, quando si parla di coagulazione, è importante ricordare che: </p>
        <ul>
          <li> <strong>non vi è un parametro unico</strong> della qualità dell'acqua che, se misurato e controllato in linea, risulti essere sempre il miglior indicatore della domanda di coagulante. Nella realtà vi sono vari fattori che possono influenzare la coagulazione, inoltre, l'importanza relativa di ogni fattore cambia da impianto a impianto ed in diverse stagioni e periodi dell'anno; </li>
          <li> alcuni di questi fattori, come la quantità di <strong>sostanze organiche</strong>, sono molto importanti per la coagulazione, ma non sono comunemente misurati in linea e quindi sono <strong>spesso trascurati</strong>; </li>
          <li> gli strumenti ideati e fabbricati dalla Pi possono monitorare <strong>più parametri contemporaneamente</strong>, tra cui la <a href="<?php echo $root; ?>prodotti/analizzatore-corrente-fluente-coagulazione/">corrente fluente</a> (<i lang="en">streaming current</i>), le <a href="<?php echo $root; ?>prodotti/analizzatore-uv254/">sostanze organiche (UV254)</a>, il <a href="<?php echo $root; ?>prodotti/analizzatore-di-ph/">pH</a>, la portata e la <a href="<?php echo $root; ?>prodotti/turbidimetro-in-linea/">torbidità</a>. In questo modo, utilizzando un sistema <a href="<?php echo $root; ?>prodotti/sistema-controllo-coagulazione">CoagSense</a>, è possibile fornire una panoramica completa delle caratteristiche dell'acqua minuto per minuto. </li>
        </ul>
        <h2>Cos'è il controllo della coagulazione</h2>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/flocculazione-coagulazione.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/flocculazione-coagulazione.jpg" alt="Processo di flocculazione"/> </picture>
          <figcaption> Processo di flocculazione </figcaption>
        </figure>
        <p> Lo scopo del trattamento delle acque è quello di rimuovere <strong>contaminanti solubili</strong> (es. le sostanze organiche) ed <strong>insolubili</strong> (es. il particolato colloidale). </p>
        <p> Questi contaminanti spesso hanno una <strong>carica anionica</strong> che li mantiene in sospensione o nella fase solubile. I coagulanti vengono aggiunti per <strong>neutralizzare</strong>  la carica di particelle colloidali e anche "complessare" molecole organiche facendole precipitare. </p>
        <p> Riducendo la carica delle particelle e facendo precipitare i composti organici, queste particelle non saranno più in grado di rimanere in una sospensione stabilizzata. Una volta rimosso il <strong>componente repulsivo</strong> della carica, questi contaminanti inizieranno naturalmente a raggrupparsi insieme a causa delle forze di attrazione chiamate forze di <i lang="nl">Van Der Waals</i>. </p>
        <p> La rimozione di questi contaminanti è aiutata dalla formazione di <strong>floc chimico </strong>(risultante dall'idrolisi del coagulante) il quale avviluppa e trascina gli agglomerati più piccoli in modo che possano essere rimossi più facilmente mediante sedimentazione o galleggiamento. </p>
        <p> Se il dosaggio del coagulante è troppo alto, il coagulante addizionale non necessario può causare una maggiore quantità di <strong>fanghi da gestire</strong>, ridurre la vita utile dei filtri, generare alluminio in eccesso nel sistema ed altri effetti collaterali indesiderati. </p>
        <p> Questa situazione è resa molto più complessa dal momento che la quantità di coagulante richiesta e l'efficacia della coagulazione possono variare notevolmente durante il giorno o anche di ora in ora a causa di cambiamenti della <strong>torbidità, pH, temperatura o livelli di materiale organico naturale (<abbr lang="en" title="Natural Organic Matter">NOM</abbr> )</strong> nell'acqua in entrata impianto. </p>
        <h2>L'effetto della pioggia sulla coagulazione</h2>
        <p> Durante eventi piovosi l'acqua in ingresso diventa più torbida e la dose di coagulante aumenta. <strong>La torbidità</strong> è un parametro misurato in linea in quasi tutti gli impianti di trattamento acque, anche in quegli impianti dove vengono effettuati test nei flocculatori. </p>
        <p> Tuttavia, la torbidità non è l'unico parametro di qualità dell'acqua che cambia durante un evento piovoso. Ci sono <strong>altri fattori</strong> che sono fondamentali per la coagulazione e che probabilmente cambieranno contemporaneamente, di seguito una disamina. </p>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/sensore-torbidita.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/sensore-torbidita.jpg" alt="Turbidimetro"/> </picture>
          <figcaption> Turbidimetro di processo </figcaption>
        </figure>
        <h3>Il pH</h3>
        <p> A seconda della natura del fiume (o della fonte dell'acqua), è possibile modificare il pH che, a sua volta, può aumentare o ridurre l'efficienza della coagulazione. Ogni coagulante ha un <strong>intervallo di pH ottimale</strong> entro il quale può raggiungere la massima efficienza in termini di torbidità e rimozione di sostanze organiche. </p>
        <p> Pertanto, le variazioni del pH possono avere un <strong>impatto considerevole</strong> sulle prestazioni della coagulazione e della filtrazione e conseguente torbidità e riduzione dei sottoprodotti della disinfezione. </p>
        <h3>L'alcalinità</h3>
        <p> L'alcalinità dell'acqua può anch'essa cambiare. Se questa scende al di sotto di circa 10 ppm, non può verificarsi una coagulazione efficace perché non può verificarsi la <strong>reazione di idrolisi</strong> essenziale per la coagulazione. Questa situazione può essere rettificata solo aumentando l'alcalinità. </p>
        <h3>Le sostanze organiche disciolte</h3>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/analizzatore-uv254.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/analizzatore-uv254.jpg" alt="Analizzatore UV254"/> </picture>
          <figcaption> Analizzatore UV254 <br/>
            per sostanze <br/>
            organiche disciolte </figcaption>
        </figure>
        <p> Il livello di sostanze organiche dissolte (NOM) può anch'esso cambiare. A meno che non siano monitorati con strumentazione appropriata (preferibilmente in linea), i cambiamenti nei <strong>livelli di sostanze organiche</strong> spesso non vengono individuati e non vengono trattati in maniera adeguata. </p>
        <p> La domanda effettiva di coagulante generata da sostanze organiche può in alcuni casi apparire prima che si osservi un aumento della torbidità e può anche rimanere elevata dopo che la <strong>torbidità</strong> sia tornata a livelli normali. </p>
        <p> La mancanza di strumentazione adeguata per monitorare i cambiamenti nei prodotti organici man mano che si verificano porta ad una riduzione dell'efficienza di rimozione dei NOM che può portare alla formazione di <strong>trialometani</strong> e ad altri <strong>sottoprodotti della disinfezione </strong>indesiderati. </p>
        <h2>Come ottimizzare e controllare la coagulazione? </h2>
        <p> Si inizia a comprendere come non vi sia un parametro unico per la qualità dell'acqua che possa fornire da solo una immagine completa del processo. Come argomentato precedentemente, vi sono <strong>molteplici fattori</strong> che devono essere presi in considerazione ed idealmente monitorati su base continua ed in linea per controllare in modo efficace la coagulazione. </p>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/sistema-controllo-coagulazione.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/sistema-controllo-coagulazione.jpg" alt="Sistema di controllo della coagulazione"/> </picture>
          <figcaption> Sistema di controllo della coagulazione </figcaption>
        </figure>
        <p> Aspettarsi che un singolo parametro sia efficace non è molto realistico perché impianti di trattamento delle acque diversi hanno <strong>acque grezze in entrata diverse</strong>, ognuna delle quali ha caratteristiche e sfide diverse da superare nel controllo del dosaggio della coagulazione. </p>
        <p> Ciò significa che, per essere efficace, qualsiasi sistema deve essere <strong>flessibile e modulare</strong>, consentendo di misurare diversi parametri in base alle caratteristiche individuali dell'acqua grezza in entrata. </p>
        <p> Anche se un impianto specifico di trattamento delle acque non ha un problema come la formazione dei <strong>sottoprodotti della disinfezione</strong> (<abbr lang="en" title="Disinfection By-Products">DBP</abbr>) a causa di livelli elevati di sostanze organiche, vi sono molte istanze in cui la qualità dell'acqua grezza può cambiare in modi imprevedibili e senza preavviso. </p>
        <p> Quindi, avere un approccio flessibile, modulare e ben gestito del controllo della coagulazione in linea, rispetto ad affidarsi sulla misurazione di un unico parametro, è la soluzione più ragionevole. </p>
        <h2>La soluzione? Un sistema personalizzato</h2>
        <p> La soluzione, quindi, consiste non un prodotto unico e monolitico ma, in un sistema modulare e personalizzabile, progettato per essere sufficientemente flessibile per tutte le applicazioni. </p>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/sistema-carica-elettrica-superficiale.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/sistema-carica-elettrica-superficiale.jpg" alt="Analizzatore di corrente fluente"/> </picture>
          <figcaption> Analizzatore di <br/>
            corrente fluente <br/>
          </figcaption>
        </figure>
        <p> Alla base di questo sistema, il <a href="<?php echo $root; ?>prodotti/sistema-controllo-coagulazione/">CoagSense</a> , vi è l'analizzatore CRIUS<sup>®</sup> della <i lang="en">Process Instruments (UK) Ltd.</i>, azienda con<strong> 20 anni</strong> di esperienza nel settore della strumentazione per l'analisi in linea delle acque. L'approccio CoagSense consiste principalmente di due fasi come si vede di seguito. </p>
        <h3>Raccolta Informazioni e selezione parametri</h3>
        <p> Il primo passo è raccogliere informazioni relative all'applicazione specifica e discutere con l'operatore le sfide e le criticità che l'impianto presenta. Durante queste discussioni verranno individuati <strong>uno o più dei seguenti parametri</strong> che è necessario monitorare: <a href="<?php echo $root; ?>prodotti/analizzatore-di-ph"> pH</a>, temperatura, <a href="<?php echo $root; ?>prodotti/analizzatore-di-conducibilita"> conducibilità</a>, <a href="<?php echo $root; ?>prodotti/analizzatore-corrente-fluente-coagulazione/"> corrente fluente</a>, <a href="<?php echo $root; ?>prodotti/analizzatore-uv254"> assorbanza/trasmittanza UV254</a> e <a href="<?php echo $root; ?>prodotti/turbidimetro-in-linea/"> torbidità</a>. </p>
        <h3>Configurazione del sistema</h3>
        <p> Il passo successivo è determinare la configurazione per quanto riguarda i protocolli di comunicazione, le opzioni di controllo di cui si ha bisogno e le caratteristiche del sistema,  ad esempio: </p>
        <ul>
          <li> numero di <strong>pompe dosatrici</strong>; </li>
          <li> allarmi o uscite analogiche/relè; </li>
          <li> come/se gestire le <strong>variazioni di portata</strong>; </li>
          <li> se il sistema funziona <strong>in continuo</strong> o solo durante alcune ore della giornata; </li>
          <li> se vi è bisogno di accesso remoto o di integrazione con i sistemi di <strong>telemetria</strong>; </li>
          <li> se un sistema <strong title="Supervisory Control and Data Acquisition" lang="en">SCADA</strong> gestirà il controllo; </li>
          <li> che protocolli di comunicazione sono necessari. </li>
        </ul>
        <p> Da questo link si può visualizzare il <a href="<?php echo $root; ?>docs/note-tecniche/questionario-sistema-controllo-coagulazione.pdf">"Questionario preinstallazione
          per il sistema CoagSense"</a>. </p>
        <p> Infine, si discute l'installazione del sistema ideale per ottenere le prestazioni più affidabili dal proprio sistema di controllo della coagulazione in linea. </p>
        <p> Una volta completato questo processo, si ottiene un sistema progettato su misura, con <strong>tutte le funzionalità necessarie </strong> per un controllo efficace e nessun extra non necessario. Inoltre, il sistema CoagSense è modulare e può essere facilmente ampliato se dovesse essere necessario, anche in un secondo momento. </p>
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