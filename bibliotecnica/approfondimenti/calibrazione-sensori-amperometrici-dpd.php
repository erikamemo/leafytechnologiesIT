<?php
include( '../../includes/bootstrap.php' );

$title = "Calibrazione dei sensori amperometrici ed il metodo DPD";
$metadescription = "Si affronta la tematica della calibrazione dei sensori amperometrici per la misura in continuo nell'acqua ed il metodo DPD colorimetrico.";

include( '../../includes/header.php' );
?>
<!--

Numero doc.: PIFOCPA0001;
Indirizzo: https://www.leafytechnologies.it/bibliotecnica/approfondimenti/calibrazione-sensori-amperometrici-dpd.php;

Pubblicato: 10/08/2019;
Ultima revisione: 03/06/2020;

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
        <h1>Calibrazione dei sensori amperometrici ed il metodo DPD colorimetrico</h1>
      </div>
      </a> </div>
  </div>
  <div class="header-title lg-screen-show">
    <div class="container container-padding">
      <div class="header-title-content">
        <h1>Analizzatore di cloro | HaloSense</h1>
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
          <div> <span><a href="<?php echo $root; ?>bibliotecnica/approfondimenti/calibrazione-sensori-amperometrici-dpd.php">Calibrazione dei sensori amperometrici ed il metodo DPD colorimetrico</a></span> </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumbs ens--> 
  
  <!-- paragraph center -->
  <section class="wrapper-a">
    <div class="container container-padding">
      <article class="center-page-article images-article">
        <p> L'articolo affronta il tema della calibrazione dei sensori amperometrici con l'utilizzo del metodo <dfn><abbr title="Nome completo:N.N-dietil-p-fenilendiammina">DPD</abbr></dfn> colorimetrico spiegando eventuali problemi e la metodologia da seguire per ottenere dei risultati ottimali. </p>
        <p> Probabilmente se si sta consultando questo articolo, si è già sentito parlare di <strong>sensori amperometrici</strong> e di analizzatori come quelli di <a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">cloro</a>, <a href="<?php echo $root; ?>prodotti/analizzatore-di-ozono/">ozono</a>, <a href="<?php echo $root; ?>prodotti/analizzatore-di-biossido-di-cloro/">biossido di cloro</a> e <a href="<?php echo $root; ?>prodotti/analizzatore-di-acido-peracetico/">acido peracetico</a> (per nominarne alcuni), tutti sistemi che vengono calibrati utilizzando dei kit DPD manuali. </p>
        <p> Nonostante la sua diffusione il metodo DPD non è ben compreso, infatti: </p>
        <ul>
          <li> il test DPD <strong>non può determinare l'assenza di residui</strong>; </li>
          <li> gli errori sulle misure del DPD possono arrivare fino a ±100%; </li>
          <li> una parte significativa delle chiamate di assistenza tecnica che riceviamo sono correlate a problemi derivanti da una calibrazione scadente. </li>
        </ul>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/fiale-dpdp.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/fiale-dpdp.jpg" alt="Fiale di DPD contenenti ossidante(acqua rossa) o non (fiala trasparente)"/> </picture>
          <figcaption> Fiale di DPD contenenti <br/>
            con ossidante (acqua rossa) <br/>
            e senza (trasparente) </figcaption>
        </figure>
        <p> Il <dfn>DPD</dfn> (ossia la N.N-dietil-p-fenilendiammina) è una sostanza chimica che, se miscelata con acqua contenente un ossidante, cambia colore a seconda della concentrazione dell'ossidante presente. Un colorimetro portabile è uno strumento che misura la luce che passa attraverso la soluzione colorata e <strong>misurando l'assorbimento</strong> di questa luce da parte del liquido dà un valore di concentrazione. <br/>
          Di solito è usato per controllare la concentrazione del cloro libero, cloro totale, ozono, biossido di cloro e così dicendo in acqua. </p>
        <p> Quando il kit DPD dà un valore, questo valore è spesso utilizzato direttamente - senza farsi troppe domande - per calibrare strumenti per la misurazione in continuo. In questo passaggio fondamentale entra in gioco l'esperienza:  la qualità della misurazione e del controllo che è possibile offrire attraverso uno strumento per l'analisi in continuo è <strong> direttamente proporzionale</strong> alla bontà della calibrazione, o anche: "L'esattezza di una analizzatore in linea dipende dall'esattezza della calibrazione". </p>
        <p> In questo approfondimento si affrontano i seguenti punti: </p>
        <ul>
          <li> i <strong>limiti del metodo DPD</strong>: torbidità, assenza di ossidante, decoloramento, pH ed interferenti; </li>
          <li> come ridurre al minimo l'errore della misurazione DPD: campionamento, allineamento e pulizia; </li>
          <li> fattori a cui prestare attenzione: basse concentrazioni, colore rosa, presenza di <strong>macchie sul vetro</strong> delle fiale; </li>
          <li> una chimica poco conosciuta: misurazione del bromo e del clorito invece del biossido di cloro; </li>
          <li> risciacquare e ripetere: vale davvero la pena ripetere il test DPD? </li>
        </ul>
        <h2>Le limitazioni del metodo DPD</h2>
        <h3>Il DPD non misura bene lo zero</h3>
        <p> L'assenza di ossidante (lo zero) presenta alcuni problemi particolari per il sistema DPD. Il DPD, infatti, funziona utilizzando l'assorbimento della luce, quindi, la torbidità presente nel campione fornirà una lettura positiva (un <strong>falso positivo</strong>). Ciò significa che se non vi è ossidante nel campione, qualsiasi livello di torbidità introdotto nel campione dopo aver effettuato lo zero (come, ad esempio, una compressa o una polvere non ben dissolta) farà sì che il kit per il test DPD dia una lettura positiva, sebbene minima. </p>
        <h3>Il DPD non misura al di sotto di circa 0.05 ppm (mg/l)</h3>
        <p> Se si pensa che nel campione vi sia assenza di ossidanti, ma il test DPD sta fornendo una lettura positiva, allora conviene porre la fiala su di una superficie bianca. Se non si riesce a vedere alcuna traccia di colore rosa, è molto probabile che la lettura che si sta ricevendo provenga da delle pasticche/polveri di DPD che <strong>non hanno reagito</strong> con l'acqua e che stanno generando livelli rilevabili di torbidità. </p>
        <h3>Il DPD non misura il cloro libero oltre ai 6 ppm </h3>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/fiale-dpd-due.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/fiale-dpd-due.jpg" alt="Due fiale di DPD contenenti una acqua senza ossidante l'altra acqua con livelli bassissimi"/> </picture>
          <figcaption> Fiale di DPD contenenti <br/>
            tracce di ossidante(destra) <br/>
            o non (sinistra) </figcaption>
        </figure>
        <p> Quando vi sono problemi/errori della lettura, non sempre il kit DPD utilizzato fornirà questa informazione. </p>
        <p> Spesso si ignora il fatto che, oltre ad un certo livello di ossidante, il metodo DPD non produrrà più il suo caratteristico colore rosa, ma sarà soggetto ad una reazione particolare che porta alla formazione di una soluzione chiara (decoloramento o <i lang="en">bleaching</i>). Questo può far pensare che vi sia un livello di ossidante tendente allo zero nella propria acqua, quando in realtà ce n'è abbastanza da <strong>decolorare il DPD</strong>. </p>
        <p> Se si ha il dubbio che stia avvenendo questo durante un test DPD, bisogna far attenzione ad osservare se vi è un “lampo rosa" quando si aggiunge la pasticca o la polvere. Infine, se nella propria applicazione vi è spesso la necessità di misurare livelli oltre ai 6 ppm, esistono dei kit e reagenti specifici per effettuare la misurazione oltre ai 6 ppm. </p>
        <h3>Il DPD non può misurare in condizioni estreme di alcalinità o pH.</h3>
        <p> Le compresse  e le gocce DPD contengono tamponi chimici che modificano il pH della soluzione per facilitare la reazione del DPD con l'ossidante. La polvere o le compresse hanno una <strong>capacità di bufferizzazione</strong> molto elevata e, se il campione presenta un pH o un'alcalinità estremi, ciò potrebbe influire sulla lettura della concentrazione del misuratore DPD portatile. </p>
        <h3>Il DPD non è in grado di differenziare tra ossidanti </h3>
        <p> Il DPD non differenzia tra cloro, biossido di cloro, clorito, ozono, organocloruri, bromo e altro. Questo significa che gli interferenti possono essere un grosso problema e bisogna essere coscienti di questa limitazione. </p>
        <p> Generalmente parlando, il DPD è una sostanza chimica fantastica, in quanto è molto versatile come colorante: dà all'ossidante il colore che misuriamo. Questa versatilità, tuttavia, ha un prezzo: il <strong>DPD non è specifico</strong> come strumento di analisi, quindi, se nel campione vi sono presenti altre sostanze chimiche queste possono interferire con la lettura, fornendo un risultato impreciso. Gli interferenti più comuni includono il biossido di cloro (per la misurazione del cloro e viceversa), il clorito di sodio, l'ozono, le organocloramine ed i perossidi per citarne alcuni. </p>
        <h3>Il DPD non distingue tra colore e torbidità.</h3>
        <p> Qualsiasi solido non disciolto, inclusa parte della stessa compressa di DPD che non ha reagito, influirà sulla lettura. La <strong>torbidità del campione</strong> deve essere considerata durante la misura dello zero. Se durante la misura dello zero vi è un'elevata torbidità, ciò influenzerà la sensibilità del colorimetro: il fattore di correzione sarà maggiore (per tenere conto dell'assorbimento dei solidi non disciolti) introducendo potenziali distorsioni nel settaggio dello zero. Il modo migliore per risolvere questo inconveniente è permettere ai solidi presenti nel campione alcuni secondi per stabilizzarsi dopo la miscelazione. </p>
        <h2>Come ridurre al minimo l'errore di misura DPD</h2>
        <p> Scaricare la <a href="<?php echo $root; ?>docs/note-tecniche/lista-controllo-DPD.pdf">lista di controllo per la misurazione DPD</a> in modo tale da poterla utilizzare durante la calibrazione dei sensori amperometrici. </p>
        <h2>Altri punti da tener in mente</h2>
        <h3>Data dell'ultima calibrazione</h3>
        <p> Quando è stata l'ultima volta che il dispositivo DPD portabile è stato calibrato? </p>
        <p> Come tutti i dispositivi di misurazione, i colorimetri DPD portatili, nel tempo possono essere <strong>soggetti a sfasamento e deriva</strong> e devono essere ricalibrati. Il primo passo da effettuare è controllare il manuale del proprio dispositivo per sapere quanto spesso dovrebbe essere calibrato. Ovviamente, se non ci si ricorda dell'ultima volta che lo strumento è stato calibrato, è molto probabile che convenga ricalibrarlo! </p>
        <h3>Macchie e colorazione delle fiale</h3>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/fiale-dpd-tre.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/fiale-dpd-tre.jpg" alt="Due fiale di DPD una col vetro pulito una col vetro macchiato"/> </picture>
          <figcaption> Fiale di DPD <br/>
            macchiata (a sinistra) <br/>
            o non (destra) </figcaption>
        </figure>
        <p> La soluzione di color rosa che si forma con i test DPD può lasciare un residuo sul vetro che, se non rimosso, influirà sulla prossima lettura del DPD. Questo residuo può essere facilmente rimosso utilizzando gli strumenti che si trovano all'interno del kit DPD stesso. </p>
        <h3>Acqua di rubinetto</h3>
        <p> Se per lavare i flaconcini si utilizza acqua di rubinetto normale, le gocce lasciate all'interno delle fiale possono influenzare la lettura a causa del cloro residuo nell'acqua potabile. È preferibile (ma non sempre pratico) usare <strong>acqua deionizzata</strong> per lavare le fiale, ma se questo non è possibile (l'acqua deionizzata può essere acquistata da qualsiasi fornitore di ricambi per auto, infatti è spesso usata per le batterie), è possibile utilizzare acqua di rubinetto che sia stata bollita e lasciata raffreddare, poiché attraverso l'ebollizione si elimina qualsiasi residuo di cloro. In caso contrario, bisogna assicurarsi che le fiale siano perfettamente asciutte prima dell'utilizzo. </p>
        <h2>Una chimica poco conosciuta</h2>
        <p> Il DPD è soggetto ad interferenze da molti composti chimici, questo significa che problemi ricorrenti possono essere causati dalla stessa composizione chimica del campione. Ad esempio, il clorito (ClO<sub>2</sub><sup>-</sup>) ed il biossido di cloro <strong>influiscono entrambi</strong> sul metodo DPD, che viene usato per calibrare i sensori amperometrici. </p>
        <p> Un sensore amperometrico di biossido di cloro misurerà <strong>solo il biossido</strong> e non il clorito. Questo ovviamente può generare problemi quando si calibra un sensore di biossido di cloro utilizzando una lettura di un DPD che ha reagito sia al biossido che al clorito. </p>
        <p> Inoltre, il metodo DPD può essere utilizzato anche per tracciare il bromo, ma le compresse DPD n. 1 misurano il <strong>cloro libero o il bromo totale</strong>. Poiché il bromo combinato è un disinfettante altrettanto efficace quanto il bromo libero, questo non rappresenta in genere un problema, tuttavia, alcuni sensori amperometrici misurano il bromo libero e non possono essere calibrati utilizzando compresse di DPD n 1. Per ulteriori informazioni sulla misurazione del bromo o del cloro nell'acqua di mare, consultare la <a href="<?php echo $root; ?>docs/note-tecniche/clorazione-acqua-di-mare.pdf">nota tecnica sulla clorazione dell'acqua di mare</a>. </p>
        <h2>Risciacquare e ripetere</h2>
        <h3>Quanto è importante ripetere la misura del DPD? É una perdita di tempo?</h3>
        <p> L'esattezza della calibrazione è fondamentale: maggiore la precisione nella calibrazione maggiore sarà l'accuratezza della misura in linea effettuata dal sensore. Se è necessario utilizzare la lettura del sensore per un controllo preciso del processo, ad esempio, in una piscina o per controllare una pompa di dosaggio, allora è essenziale <strong>ripetere il test DPD almeno due volte </strong>o meglio tre. </p>
        <p> É importante ripetere il test  sia per diminuire la componente di errore associata all'esecuzione da parte dell'operatore, sia per smussare eventuali variazioni nelle compresse DPD o leggeri picchi di concentrazione che potrebbero essere capitati durante il campionamento.  Con ogni ripetizione queste variabili vengono smussate divenendo sempre meno probabili e dando <strong>più fiducia</strong> nel valore che si utilizza per calibrare l'analizzatore. </p>
        <p> Si raccomanda di seguire la seguente routine per ottenere una <strong>buona calibrazione</strong>. </p>
        <ol>
          <li> Eseguire un test DPD e comparare la lettura data dallo strumento portabile con quella data dal proprio analizzatore. </li>
          <li> Se lo scostamento della lettura tra analizzatore in linea e portatile è inferiore al 10% allora non vi è bisogno di far niente. </li>
          <li> Se la lettura invece presenta uno scostamento maggiore del 10%, allora bisogna ripetere il test DPD. </li>
          <li> Se il secondo test ha un valore entro il +/- 10% del primo test allora è possibile calibrare il proprio strumento utilizzando questo valore. Altrimenti, in caso contrario, continuare a ripetere i test DPD fino a quando 2 test consecutivi diano letture che sono entro il +/- 10% l'una rispetto all'altra, e quindi calibrare lo strumento utilizzando questo. <br/>
          </li>
        </ol>
        <p> Seguendo questi consigli e conoscendo i concetti illustrati in questo approfondimento, è possibile evitare errori comuni ed ottenere calibrazioni il più esatte possibile. </p>
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