<?php
include( '../../includes/bootstrap.php' );

$title = "Sensori di cloro e sensori di redox: un confronto";
$metadescription = "L'articolo spiega le limitazioni dell'utilizzo di sensori di redox/ORP come surrogati per la misura del cloro in linea nell'acqua.";

include( '../../includes/header.php' );
?>
<!--

Numero doc.: PIFOCPA0012;
Indirizzo: https://www.leafytechnologies.it/bibliotecnica/approfondimenti/confronto-cloro-potenziale-redox-sensori.php;

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
        <h1>Sensori di cloro e redox: un confronto</h1>
      </div>
      </a> </div>
  </div>
  <div class="header-title lg-screen-show">
    <div class="container container-padding">
      <div class="header-title-content">
        <h1>Sensori di cloro e redox: un confronto</h1>
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
          <div> <span><a href="<?php echo $root; ?>bibliotecnica/approfondimenti/confronto-cloro-potenziale-redox-sensori.php">Sensori di cloro e redox: un confronto</a></span> </div>
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
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-approfondimenti/nota-tecnica-confronto-redox-amperometrico.webp">
            <img src="<?php echo $root; ?>images/pi-approfondimenti/nota-tecnica-confronto-redox-amperometrico.jpg" alt="Nota tecnica con un confronto tra sensori redox ed amperometrici"/> </picture>
          <figcaption> Nota tecnica: <br>
            <a href="<?php echo $root; ?>docs/note-tecniche/confronto-sensori-redox-sensori-amperometrici.pdf">"Sensori  redox  e  sensori <br>
            di  cloro  amperometrici"</a> </figcaption>
        </figure>
        <p> L'articolo descrive le limitazioni dell'utilizzo di sensori di redox/ORP come surrogati per la misurazione del cloro in linea nell'acqua. Vi è inoltre una nota tecnica scaricabile in PDF sull'argomento: <a href="<?php echo $root; ?>docs/note-tecniche/confronto-sensori-redox-sensori-amperometrici.pdf">"Sensori  redox  e  sensori  di  cloro  amperometrici"</a>. </p>
        <p> Alcuni fabbricanti/consulenti utilizzano la misura del potenziale di ossidoriduzione (redox) per controllare il dosaggio del cloro. Sebbene vi sia una logica dietro questa scelta (soprattutto economica), non è una pratica corretta e, per questo motivo, la <i lang="en">Leafy Technologies</i> suggerisce sempre di usare sempre <strong><a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">sensori di cloro amperometrici</a> </strong> che forniscono letture in ppm per misurare il cloro nell'acqua. Bisogna infatti notare che: </p>
        <ul>
          <li> la misurazione del redox oltre i 3 ppm di cloro non funziona; </li>
          <li> sebbene vi sia la tendenza nelle piscine negli Stati Uniti di usare il redox (<abbr lang="en" title="Oxidation-reduction potential">ORP</abbr>), in Europa si usano soprattutto sensori di cloro (ppm) e questa è una buona prassi; </li>
          <li> la misura del redox nell'acqua di una stessa città può avere grandi variazioni. </li>
        </ul>
        <p> Negli Stati Uniti quasi tutte le piscine ed impianti termali utilizzano sensori redox/ORP per controllare il dosaggio del cloro; al contrario, in Europa, la maggior parte dei sistemi redox/ORP è stata sostituita con sistemi che misurano la <strong>concentrazione di cloro libero</strong> nell'acqua. La <i lang="en">Leafy Technologies</i> offre entrambe le tecnologie ed in questo articolo si spiega perché conviene utilizzare sensori di cloro per misurare il cloro e non sensori redox. </p>
        <h2>Il potenziale redox</h2>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-sito/piscina.webp">
            <img src="<?php echo $root; ?>images/pi-sito/piscina.jpg" alt="Immagine di una piscina"/> </picture>
          <figcaption> Piscina </figcaption>
        </figure>
        <p> I sensori di potenziale di ossido-riduzione (ORP/redox), misurano la tendenza dell'acqua a guadagnare o perdere elettroni quando l'acqua entra in contatto con altre sostanze. Più una lettura è positiva, maggiore è la <strong>tendenza</strong> dell'acqua ad ossidare (neutralizzare) organismi o altro materiale nell'acqua uccidendo così i batteri. </p>
        <h2>Redox nelle piscine?</h2>
        <p> Negli Stati Uniti molte piscine tendono ad utilizzare elettrodi redox per misurare la capacità di disinfezione presente dell'acqua. Quando il cloro viene dosato in una piscina questo forma OCl<sup>-</sup> (ione ipoclorito) e HOCl (acido ipocloroso). La disinfezione è in gran parte eseguita dal HOCl ed il <strong> sensore redox risponde alla concentrazione di HOCl nell'acqua</strong>, il che fornisce una buona misurazione della tendenza del cloro presente nell'acqua ad eliminare i batteri. </p>
        <p> Nonostante ciò, il redox è pur sempre una <strong>misurazione secondaria o indiretta</strong> del HOCl ed è influenzata da una moltitudine di altri fattori, alcuni dei quali saranno trattati di seguito. I principali vantaggi degli elettrodi ORP/redox sono: basso costo d'acquisto, nessuna calibrazione necessaria e poca o nessuna manutenzione. </p>
        <h2>Le limitazioni del redox</h2>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/sensore-redox.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/sensore-redox.jpg" alt="Sensore standard per misura del redox"/> </picture>
          <figcaption> Sensore di redox </figcaption>
        </figure>
        <p> Sfortunatamente, gli elettrodi ed i sensori redox <strong>misurano la tendenza e non la capacità</strong>, cioè quella che si ottiene è una misura della probabilità o dell'abilità dell'acqua ad eliminare i batteri, ma non quanti batteri possono essere neutralizzati, questa è una differenza sottile ma <strong>estremamente importante</strong>. </p>
        <p> Un campione di acqua con un alto potenziale di ossido-riduzione potrebbe, ad esempio, riuscire a neutralizzare un piccolo numero di batteri molto rapidamente, ma poi non essere in grado di eliminare altri batteri <strong>in futuro</strong>. </p>
        <p> Inoltre, sebbene il cloro influenzi fortemente il potenziale redox, <strong>non è l'unica variabile</strong> coinvolta. Il pH dell'acqua influenza direttamente il potenziale di ossido-riduzione ed anche il rapporto di tra OCl<sup>-</sup>/HOCl (i principali componenti disinfettanti del cloro). Un pH più basso (maggiore acidità) causerà un aumento delle concentrazioni relative di HOCl causando un aumento del potenziale redox. </p>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/sensore-redox-numero-tre.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/sensore-redox-numero-tre.jpg" alt="Sensore redox, modello tre"/> </picture>
          <figcaption> Un altro sensore redox </figcaption>
        </figure>
        <p> Forse il più grande problema con i sensori redox è che le letture del redox in acqua senza cloro saranno <strong>diverse a seconda della provenienza dell'acqua</strong>. Ciò significa che un valore redox/ORP di 750 mV in una parte dell'Italia non equivale alla stessa concentrazione di cloro di 750 mV in un'altra parte dell'Italia (o di qualsiasi altro paese). </p>
        <p> Inoltre, la risposta del redox all'HOCl non è lineare e l'aumento del cloro residuo al di sopra di 3 ppm ha uno scarso effetto sulle letture del redox rendendo estremamente <strong>difficile il controllo al di sopra di 3 ppm</strong> . </p>
        <p> Questi problemi in genere portano a sovradosare l'acqua con il cloro, al fine di compensare questi effetti. Questo può essere visto molto chiaramente nelle piscine statunitensi che spesso hanno livelli di cloro superiori ai 2 ppm rispetto alle piscine europee che normalmente operano intorno a 0.8-1.5 ppm (l'Organizzazione Mondiale della Sanità raccomanda 1 ppm di cloro residuo). <br/>
        </p>
        <h2>Misurazione del cloro con sensori amperometrici</h2>
        <figure>
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/pi-prodotti/sensore-di-cloro.webp">
            <img src="<?php echo $root; ?>images/pi-prodotti/sensore-di-cloro.jpg" alt="Sensore di cloro amperometrico"/> </picture>
          <figcaption> Sensore di cloro <br/>
            amperometrico </figcaption>
        </figure>
        <p> I <a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">sensori di cloro amperometrici</a> utilizzano l'elettrochimica per misurare <strong>direttamente la concentrazione del cloro libero</strong>. Tendono ad essere leggermente più costosi di un sensore/elettrodo redox, ma hanno una maggiore riproducibilità e precisione, e quindi tendono ad offrire un controllo migliore riducendo i costi associati ai reagenti chimici (si evita il sovradosaggio del cloro). </p>
        <p> Sono specifici per il cloro libero e possono essere facilmente calibrati utilizzando un  test DPD. Il costo totale di gestione tende ad essere molto più basso in quanto i sensori redox vengono in genere sostituiti ogni anno, mentre i sensori di cloro durano per dieci anni o più. </p>
        <h2>Problemi con i sensori di cloro amperometrici</h2>
        <p> Un sensore di cloro misura la capacità dell'acqua di eliminare batteri ed altri organismi, l'unico problema è che non misura la velocità con cui questi vengono eliminati, una variabile che dipende principalmente dal pH. </p>
        <p> Esistono <strong>due diversi tipi</strong> di sensori di cloro. I primi sono sensori tradizionali che misurano solo l'HOCl e presentano problemi molto simili ai sensori di potenziale redox/ORP. <a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">I sensori HaloSense</a>, invece,  a un pH inferiore di pH 8.0, misurano quasi la totalità dell'HOCl che OCl<sup>-</sup>. Le due note tecniche: <a href="<?php echo $root; ?>docs/note-tecniche/sensore-di-cloro-libero.pdf">"Sensore di cloro libero residuo"</a> e <a href="<?php echo $root; ?>docs/note-tecniche/effetti-variazione-ph-sensore-cloro.pdf">"Effetti della variazione del pH sui
          sensori amperometrici di cloro"</a> offrono maggiori informazioni. </p>
        <p> La <i lang="en">Leafy Technologies</i>, per l'uso in piscine,  raccomanda solo l'utilizzo di sensori che siano indipendenti dal pH e suggerisce di usare un controllo dello stesso che sia indipendente dal dosaggio del cloro, portando ad una valutazione più precisa sia del pH che del cloro libero.   Questo significa che quello  residuo può essere controllato e ridotto in maniera più precisa con costi inferiori ed un'esperienza di balneazione più piacevole. </p>
        <h2>Conclusione</h2>
        <p>Per sintetizzare:</p>
        <table>
          <tr>
            <th style="width: 50%">Vantaggi</th>
            <th style="width: 50%">Svantaggi</th>
          </tr>
          <tr>
            <td><strong>Sensore redox/ORP</strong> <br/>
              <ul>
                <li> Semplice (non necessita calibrazione) </li>
                <li> Economico </li>
              </ul></td>
            <td><strong>Sensori redox/ORP</strong> <br/>
              <ul>
                <li> Non misura la capacità di disinfezione </li>
                <li> Influenzato più dal pH che dal cloro libero </li>
                <li> Non lineare </li>
                <li> Non riproducibile (dipende dalla località) </li>
                <li> Influenzato dal cambiamento della composizione chimica dell'acqua </li>
                <li> Influenzato da tutti gli ossidanti </li>
                <li> L'uso del controllo redox normalmente porta a livelli residui più elevati ed ad un controllo meno stabile </li>
              </ul></td>
          </tr>
          <tr>
            <td><strong>Sensore di cloro amperometrico</strong> <br/>
              <ul>
                <li> Misura direttamente il cloro libero </li>
                <li> Risultati comparabili in diverse località </li>
                <li> Risposta lineare </li>
                <li> Influenzato solamente dal cloro libero </li>
                <li> L'utilizzo di sensori di cloro porta a residui più bassi, ad un controllo più stabile ed
                  a migliori esperienze per gli utenti della piscina </li>
              </ul></td>
            <td><strong>Sensore di cloro amperometrico</strong>
              <ul>
                <li> Necessita la calibrazione </li>
                <li> Costa di più, ma non di molto </li>
                <li> Maggiore manutenzione, ma non di molto </li>
              </ul></td>
          </tr>
        </table>
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