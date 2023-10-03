<?php
include( '../../includes/bootstrap.php' );

$title = "Correlazione tra la misura dell'UV254 ed altri parametri";
$metadescription = "L'articolo illustra la correlazione tra la misura dell'UV254 ed altri parametri come il TOC, COD e simili, utili nel trattamento dell'acqua";

include( '../../includes/header.php' );
?>
<!--

Numero doc.: PIFOCPA0019;
Indirizzo: https://www.leafytechnologies.it/bibliotecnica/approfondimenti/uv254-carico-organico-acqua-correlazione.php;

Pubblicato: 10/08/2019;
Ultima revisione: 08/06/2020;

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
        <h1>Correlazione tra la misura dell'UV254 ed altri parametri</h1>
      </div>
      </a> </div>
  </div>
  <div class="header-title lg-screen-show">
    <div class="container container-padding">
      <div class="header-title-content">
        <h1>Correlazione tra la misura dell'UV254 ed altri parametri</h1>
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
          <div> <span><a href="<?php echo $root; ?>bibliotecnica/approfondimenti/uv254-carico-organico-acqua-correlazione.php">Correlazione tra la misura dell'UV254 ed altri parametri</a></span> </div>
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
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/nota-tecnica-cod-toc-uv254-bod.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/nota-tecnica-cod-toc-uv254-bod.jpg" alt="Analizzatore UV254"/> </picture>
          <figcaption> Nota tecnica <a href="<?php echo $root; ?>docs/note-tecniche/correlare-uv254-parametri-organici.pdf">Correlazione tra UV254 <br>
            e TOC, COD e BOD</a> </figcaption>
        </figure>
        <p> L'articolo illustra la correlazione tra le letture di un analizzatore UV254 ed altri parametri dell'acqua come il TOC, COD ed altri. Vi è anche una nota tecnica <a href="<?php echo $root; ?>docs/note-tecniche/correlare-uv254-parametri-organici.pdf">"Correlazione tra UV254  e TOC, COD e BOD</a>. </p>
        <p> Prima di addentrarsi nella discussione è importante evidenziare che l'UV254 è la <strong>misura dell'assorbanza</strong> di una luce ultravioletta (emessa alla lunghezza d'onda di 254 nm) da parte di un campione d'acqua. Questa misura può essere correlata con altri parametri della qualità dell'acqua, permettendo così delle misure indirette. Alcuni punti fondamentali sono i seguenti: </p>
        <ul>
          <li> l'assorbanza può essere utilizzata come <strong>surrogato</strong> alle misure di TOC o COD in linea e questo metodo risulta essere più economico e semplice da utilizzare; </li>
          <li> il <strong>costo totale di possesso</strong> di un analizzatore UV254 risulta molto più basso rispetto ad un analizzatore TOC tradizionale; </li>
          <li> sebbene sia possibile che non vi sia alcuna correlazione tra l'assorbanza UV254 e altri parametri di qualità dell'acqua, in acque naturali e/o in acque reflue esiste solitamente una <strong>semplice relazione lineare</strong> tra UV254 e TOC. </li>
        </ul>
        <h2>Assorbanza UV254</h2>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/analizzatore-uv254.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/analizzatore-uv254.jpg" alt="Analizzatore UV254"/> </picture>
          <figcaption> Analizzatore UV254 </figcaption>
        </figure>
        <p> L'UV254 è una tecnologia ottica che utilizza la luce nell'UV ad una lunghezza d'onda di 254 nm ed è in grado di rilevare la <strong>materia organica</strong> nell'acqua. In genere, la misura viene presentata come un calcolo dell'assorbanza UV (<abbr title="Ultra-violet absorbance" lang="en">UVA</abbr>) o della trasmittanza UV (<abbr title="Ultra-violet absorbance" lang="en">UVT</abbr>). </p>
        <p> Le misurazioni dell'assorbanza sono molto comuni in laboratorio e sul campo poiché l'assorbanza a una data lunghezza d'onda è linearmente proporzionale alla concentrazione di qualsiasi sostanza nell'acqua che è nota per assorbire la luce alla lunghezza d'onda data. </p>
        <p> La luce alla lunghezza d'onda di 254 nm è facilmente assorbita dalla materia organica presente nell'acqua. Poiché il parametro dell'assorbanza UV254 è <strong>proporzionale</strong> alla concentrazione di sostanze organiche nell'acqua, determinare un <strong>fattore di correlazione</strong> lineare che colleghi la misura dell'UV254 ad altri parametri è un processo semplice. </p>
        <p> Ciò permette di correlare vari parametri che forniscono una misura della materia organica nell'acqua alla misura fornita dall'analizzatore UV254. Esistono numerosi parametri di qualità dell'acqua tra cui </p>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/uv254-correlazione-doc.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/uv254-correlazione-doc.jpg" alt="Correlazione tra UV254 e DOC"/> </picture>
          <figcaption> Correlazione tra UV254 e DOC </figcaption>
        </figure>
        <ul>
          <li> il carbonio organico totale (<abbr title="Total Organic Carbon" lang="en">TOC</abbr>) </li>
          <li> la domanda chimica di ossigeno (<abbr title="Chemical Oxygen Demand" lang="en">COD</abbr> ) </li>
          <li> la domanda biologica di ossigeno (<abbr title="Biological Oxygen Demand">BOD</abbr>) </li>
          <li> il colore (<i lang="en">Hazen</i>) </li>
        </ul>
        <p> Tutti questi parametri hanno risposte e correlazioni leggermente diverse a diversi tipi di materia organica. L'UV254 può <strong>spesso essere correlato linearmente</strong> a tutti questi parametri.<sup><a href="#nota">Nota Bene</a></sup> </p>
        <h2>Correlazione tra UV254 ed altri parametri</h2>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/uv254-correlazione-toc.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/uv254-correlazione-toc.jpg" alt="Correlazione tra UV254 e TOC"/> </picture>
          <figcaption> Correlazione tra UV254 e TOC </figcaption>
        </figure>
        <p> Il fattore di correlazione dipenderà dal parametro organico correlato e dalla <strong>matrice</strong> di sostanze organiche da misurare. Ciò significa che le correlazioni sono specifiche per ogni impianto ed applicazione e quindi il fattore di correlazione deve essere determinato sull'impianto. </p>
        <p> La maggior parte delle fonti d'acqua naturali come l'acqua grezza utilizzata per produrre acqua potabile e le acque reflue municipali hanno una buona correlazione tra, ad esempio, l'assorbimento UV254 ed il TOC, o l'assorbimento UV254 ed il COD. </p>
        <h2>La soluzione</h2>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/uv254-toc-due.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/uv254-toc-due.jpg" alt="Correlazione tra UV254 e TOC"/> </picture>
          <figcaption> Correlazione tra UV254 e TOC </figcaption>
        </figure>
        <p> L'<a href="<?php echo $root; ?>prodotti/analizzatore-uv254/">analizzatore di UV254</a> è una soluzione pratica per correlare il segnale generato dall'assorbanza UV254 ad un altro parametro come, ad esempio, il TOC. </p>
        <p> Il modo in cui, partendo dalla misura dell'assorbanza UV, si arriva a dare una lettura in linea del parametro correlato, è applicando un <strong>fattore di compensazione</strong> ed una calibrazione alla misura dell'UV254. </p>
        <p> Questo viene calcolato impostando un canale virtuale nell'analizzatore. Questo canale è quindi correlato alla misura originale dell'UV254 mediante l'equazione <em>y = ax + b</em> dove: </p>
        <ul>
          <li> <em>y</em> è il parametro dell'acqua correlato (ad esempio TOC, COD); </li>
          <li> <em>x</em> è l'assorbimento UV254; </li>
          <li> <em>a</em> è un fattore da applicare a x (cambiare la pendenza); </li>
          <li> <em>b</em> è un offset (cambiando lo zero). </li>
        </ul>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/cod-uv-correlazione.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/cod-uv-correlazione.jpg" alt="Correlazione tra COD e UV"/> </picture>
          <figcaption> Correlazione tra UV254 e COD </figcaption>
        </figure>
        <p> Per calcolare <em>a</em> e <em>b</em>, è necessario raccogliere dati sufficienti nel tempo per generare un grafico simile ai grafici sulla destra. Utilizzando un foglio di calcolo elettronico si può quindi <strong>adattare una linea retta</strong> ai dati e fornire una formula nel formato <em>y = ax + b</em> che può essere poi inserita nell'analizzatore. </p>
        <p> Il canale virtuale correlato può quindi essere utilizzato come parametro di misura per generare allarmi, gestire un controllore PID, visualizzare la lettura sullo strumento ecc. </p>
        <p> Per ottenere una correlazione tra TOC, DOC, BOD, COD e UVA, i dati dovranno essere raccolti utilizzando entrambi i parametri per un periodo di tempo. </p>
        <h2>Conclusione</h2>
        <p> Per maggiori informazioni sui sistemi di UV254 consultare i documenti riportati di seguito o <a href="<?php echo $root; ?>azienda/contatti.php"> contattare un consulente</a>. </p>
        <ul>
          <li> <a href="<?php echo $root; ?>docs/schede-prodotto/analizzatore-di-uv254.pdf">Analizzatore di UV254 - UV254Sense</a> (Scheda prodotto) </li>
          <li> <a href="<?php echo $root; ?>docs/schede-prodotto/centralina-multiparametrica-avanzata.pdf">Analizzatore multiparametrico avanzato - CRIUS<sup>®</sup></a> (Scheda prodotto) </li>
          <li> <a href="<?php echo $root; ?>docs/schede-prodotto/centralina-multiparametrica-di-base.pdf"> Analizzatore multiparametrico base - CRONOS<sup>®</sup></a> (Scheda prodotto) </li>
          <li> <a href="<?php echo $root; ?>docs/note-tecniche/sistema-filtrazione-uv254.pdf">Unità di filtrazione per
            l’UV254Sense</a> (Scheda prodotto) </li>
          <li> <a href="<?php echo $root; ?>docs/presentazioni/analizzatore-uv254.pptx">UV254Sense</a> (Presentazione PPT) </li>
          <li> <a href="<?php echo $root; ?>docs/note-tecniche/benefici-testare-uvt-sul-campo.pdf">Misurare la trasmittanza UV in loco</a> (Nota tecnica) </li>
          <li> <a href="<?php echo $root; ?>docs/note-tecniche/correlare-uv254-parametri-organici.pdf">Correlazione tra UV254 e TOC,
            COD e BOD</a> (Nota tecnica) </li>
          <li> <a href="<?php echo $root; ?>docs/note-tecniche/misura-uvt-controllo-disinfezione-uv.pdf">Trasmittanza UV e disinfezione
            con luce ultravioletta</a> (Nota tecnica) </li>
          <li> <a href="<?php echo $root; ?>docs/note-tecniche/strumenti-portabili-e-da-laboratorio.pdf">Analizzatori da laboratorio e
            portatili</a> (Nota tecnica) </li>
          <li> <a href="<?php echo $root; ?>docs/note-tecniche/controllo-coagulazione-con-streaming-current.pdf">Controllo automatico
            della coagulazione</a> (Nota tecnica) </li>
        </ul>
        <p> <strong><a id="nota">Nota Bene</a></strong>: Si noti che è possibile che non vi sia alcuna correlazione tra l'assorbanza UV254 ed altri parametri di qualità dell'acqua se tale parametro nella  fonte d'acqua specifica non contiene sostanze assorbenti la luce UV a 254 nm. Un esempio di questa situazione potrebbe essere un corpo d'acqua dove vi è un livello elevato di zucchero disciolto; lo zucchero non assorbe la luce UV a 254 nm ma avrà un elevata Domanda Chimica di ossigeno (COD). Ovviamente prima di effettuare l'acquisto si verificherà l'esistenza della correlazione. </p>
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