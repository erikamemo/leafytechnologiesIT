<?php
include( '../../includes/bootstrap.php' );

$title = "Controllo PID nei processi di trattamento dell'acqua";
$metadescription = "Il controllo PID nei processi di trattamento dell'acqua permette un controllo più preciso e consente di ottimizare il dosaggio.";

include( '../../includes/header.php' );

?>
<!--

Numero doc.: PIFOCPA0003;
Indirizzo: https://www.leafytechnologies.it/bibliotecnica/approfondimenti/controllo-pid-ottimizzazione.php;

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
        <h1>Controllo PID nei processi di trattamento dell'acqua</h1>
      </div>
      </a> </div>
  </div>
  <div class="header-title lg-screen-show">
    <div class="container container-padding">
      <div class="header-title-content">
        <h1>Controllo PID nei processi di trattamento dell'acqua</h1>
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
          <div> <span><a href="<?php echo $root; ?>bibliotecnica/approfondimenti/controllo-pid-ottimizzazione.php">Controllo PID nei processi di trattamento dell'acqua</a></span> </div>
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
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/nota-tecnica-pid.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/nota-tecnica-pid.jpg" alt="Nota tecnica PID"/> </picture>
          <figcaption>Nota tecnica <a href="<?php echo $root; ?>docs/note-tecniche/controllo-pid-analizzatori-acqua.pdf"> Il controllo PID negli <br>
            analizzatori in linea dell'acqua </a> </figcaption>
        </figure>
        <p>In questo articolo si descrive come risparmiare tempo e denaro nei propri impianti grazie al controllo PID. Una nota tecnica in PDF è anche disponibile: Nota tecnica <a href="<?php echo $root; ?>docs/note-tecniche/controllo-pid-analizzatori-acqua.pdf"> "Il controllo PID negli <br>
          analizzatori in linea dell'acqua"</a>.</p>
        <p>Prima di addentrarsi nell'analisi dei sistemi di controllo <dfn><abbr> PID </abbr></dfn>(Proporzionale-Integrale-Derivativo), vale la pena evidenziare i seguenti punti: </p>
        <ul>
          <li>un controllo PID può far risparmiare offrendo un miglior <strong>controllo di processo</strong>;</li>
          <li>il PID può aiutare a mantenere un valore obiettivo, anche quando il processo è variabile;</li>
          <li>impostare un controllo PID oggigiorno è molto più semplice che in passato;</li>
          <li>è possibile <strong>personalizzare il controllo PID</strong> in base alle esigenze specifiche dell’impianto;</li>
          <li>una volta impostato, spesso, non vi è bisogno di cambiare le impostazioni.</li>
        </ul>
        <h2>Introduzione al controllo PID</h2>
        <h3>Cos'è il controllo PID?</h3>
        <p>Il PID è uno strumento matematico utilizzato dagli ingegneri ed implementato in vari analizzatori di processo. È una funzionalità che si trova spesso negli <strong>analizzatori industriali</strong> ed è disponibile come opzione negli <a href="<?php echo $root; ?>prodotti/analizzatori-multiparametrici-multicanale/">analizzatori multiparametrici</a> .</p>
        <h3>A cosa serve il PID?</h3>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-sito/nuotatore.webp">
          </picture>
          <img src="<?php echo $root; ?>images/pi-sito/nuotatore.jpg" alt="Nuotatore"/>
          <figcaption>Foto di un nuotatore </figcaption>
        </figure>
        <p>Il modo migliore per descrivere come agisce un controllo PID è utilizzando l'esempio di una piscina (il <strong>controllo PID</strong> è applicabile in molti altri processi).</p>
        <p> Quando un utente entra all'interno della piscina, crea una <strong>domanda di cloro</strong>. Questa domanda di cloro deriva del sudore, dei batteri, dalle molecole organiche e da altre sostanze che vengono introdotte nell'acqua della piscina.</p>
        <p> Il cloro reagisce con queste sostanze, le ossida e le neutralizza (disinfezione) ma allo stesso tempo si consuma e vi è quindi una caduta del livello di cloro. In questo esempio, il livello di cloro è spesso chiamato la <strong>variabile di processo o VP</strong> nel contesto del controllo PID.</p>
        <p>Al fine di mantenere un livello di cloro costante, è necessario dosare più cloro. Se si dosasse la stessa quantità di cloro per bagnante, il livello non sarebbe stabile dato che tutti i bagnanti creano una <strong>domanda di cloro diversa</strong> (ad esempio, il nuoto agonistico produce più sudore rispetto al nuoto ricreativo). </p>
        <p>Quando il dosaggio è effettuato manualmente vi è sempre il problema dell'<strong>errore umano</strong> ed anche di come gli operatori approssimano o calcolano la quantità di cloro da dosare in base ai livelli attuali. Un altro problema con il dosaggio manuale è che non è un processo continuo, il che significa che è improbabile che venga raggiunto un livello stabile.</p>
        <h2>Cosa fa il PID?</h2>
        <p>Il controllo PID prende in considerazione il livello misurato di cloro (o VP) e lo confronta con il livello desiderato o valore obiettivo. Partendo da questo confronto si valuta così il <strong>valore dell'errore</strong> che poi il modello PID interpreta ed utilizza per calcolare un valore in uscita.</p>
        <p> Il valore in uscita è un segnale elettrico (ad esempio, un’uscita analogica da 4-20 mA) che <strong>controlla il dosaggio</strong> della sostanza chimica appropriata. L'uscita può controllare i riscaldatori, le pompe dosatrici e molti altri meccanismi che possono essere utilizzati per modificare la variabile di processo (VP).</p>
        <h2> Come viene utilizzato?</h2>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/grafico-pid.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/grafico-pid.jpg" alt="Controllo PID"/> </picture>
          <figcaption>Controllo PID </figcaption>
        </figure>
        <p>Il modello PID è composto da tre componenti: proporzionale, integrale e derivativo. Capire cosa fa ogni parte aiuta gli operatori a scegliere il livello di controllo più adatto alle proprie esigenze.</p>
        <h3>Proporzionale </h3>
        <p> Questo è il termine più comunemente usato per il controllo PID e, nella maggior parte delle applicazioni, è l’unico termine che bisogna impostare. Quando si utilizza il controllo proporzionale, più il valore misurato è lontano dal valore obiettivo, <strong>maggiore sarà il segnale</strong> in uscita dall’analizzatore. Nella maggior parte dei processi questo è un livello soddisfacente di controllo ed un sistema puramente proporzionale può portare già a grandi miglioramenti.</p>
        <p>In alcuni sistemi in cui la variabile di processo viene persa all’interno del processo (ad es. cloro in una piscina, calore in una caldaia etc.), il controllo proporzionale non raggiunge mai il valore obiettivo, sebbene gli si avvicini. Questo fenomeno è noto in inglese come <i lang="en">droop</i> (abbassamento) e nel caso in cui questo fenomeno sia relativamente costante l’operatore può semplicemente impostare un valore obiettivo più alto. Tipico esempio è l’evaporazione del cloro da una piscina senza bagnanti.</p>
        <p>D’altra parte, se l’abbassamento non è costante e si modifica spesso, (ad es. cambiamenti continui nel numero dei bagnanti, della domanda di cloro), allora bisognerà impostare anche la <strong>parte integrale</strong> del PID che può essere applicata al segnale per corregge questo tipo di situazioni.</p>
        <h3>Integrale </h3>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/grafico-comparazione-pid-soglie.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/grafico-comparazione-pid-soglie.jpg" alt="PID e soglie"/> </picture>
          <figcaption>PID e soglie </figcaption>
        </figure>
        <p>Il segnale in uscita generato dal termine integrale è determinato dalla <strong>grandezza e dalla durata dell'errore</strong>. Un errore piccolo che si protrae a lungo scatenerà una risposta più ampia rispetto ad un sistema puramente proporzionale. Ciò aiuta l'eliminazione dell’abbassamento osservato nei processi con perdita continua e serve anche a raggiungere più rapidamente il valore obiettivo.</p>
        <h3>Derivativo</h3>
        <p>Il guadagno derivativo è usato raramente ed è generalmente impostato solo da ingegneri esperti. Il guadagno derivato utilizza il <strong>tasso di variazione nella variabile di processo</strong> per cercare di prevedere errori futuri. Questo tipo di controllo è particolarmente suscettibile di sovracompensazione, soprattutto se c'è anche una piccola quantità di rumore del segnale (di solito interpretato come un picco nella variabile di processo).</p>
        <p>Il guadagno derivativo è generalmente un <strong> aggiustamento</strong> utilizzato dagli ingegneri per migliorare un controllo già abbastanza preciso, e non viene quasi mai utilizzato come parte essenziale del controllo PID.</p>
        <h3>Quali sono i vantaggi del PID?</h3>
        <p>Se impostato correttamente, il controllo PID può portare ad un controllo di processo <strong>molto più preciso</strong>, che a sua volta può far risparmiare tempo e denaro. Ad esempio, il responsabile di una piscina vorrà mantenere bassi i livelli di cloro, migliorare l'esperienza di bagno degli utenti e risparmiare sui prodotti chimici. </p>
        <p>La <a href="<?php echo $root; ?>prodotti/centralina-per-piscina/">centralina per piscina</a> offre un sistema di analisi del cloro che risponde rapidamente al cambiamento nel numero dei bagnanti della piscina (ossia a variazioni della domanda di cloro). Ciò significa che gli operatori della piscina possono risparmiare denaro mantenendo la sicurezza della piscina. Il controllo PID può anche aiutare a ridurre il rischio di superamento del valore obiettivo desiderato, riducendo il rischio di sovradosaggio.</p>
        <h2> Funzioni avanzate e salvaguardie</h2>
        <p>Anche se mantenere un valore obiettivo con un controllo PID è un enorme passo in avanti rispetto all'utilizzo di relè con soglie di alto e basso livello, è ragionevole aggiungere ulteriori salvaguardie al controllo PID elencati di seguito.</p>
        <ul>
          <li><strong>Segnali in uscita dalla pompa (massimo e minimo)</strong> <br/>
            Questo è principalmente usato per impedire all’analizzatore di utilizzare un controllo troppo aggressivo, che può portare a sovradosaggio. Un'uscita minima può anche essere utilizzata in un sistema in cui il parametro misurato viene perso nel tempo, per evitare che l’analizzatore fermi il dosaggio.</li>
          <li><strong>La velocità di rampa</strong><br/>
            Questo è un controllo proporzionale che consente agli utenti di scegliere la velocità o la lentezza dell’analizzatore quando cerca di raggiungere il valore obiettivo. È particolarmente utile all'avvio e può impedire all’analizzatore di dosare troppo rapidamente.</li>
          <li> <strong>La protezione di avvolgimento </strong><br/>
            Questo è un controllo integrale che limita la durata del controllo. Ciò pone un limite a quanto l'errore precedente può essere accumulato. Senza la protezione da sovraccarico, potrebbe esserci un valore integrale molto elevato, soprattutto se il processo non raggiunge mai lo zero o anche all'avvio del processo.</li>
        </ul>
        <h2>Conclusione</h2>
        <p>Per riassumere, il controllo PID è estremamente utile quando utilizzato correttamente e può portare a risparmi importanti su elettricità, sostanze chimiche ma anche allungare la vita delle pompe e migliorare la gestione dell'impianto.</p>
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