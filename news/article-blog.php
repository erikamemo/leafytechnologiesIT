<?php
include ('../includes/bootstrap.php');

$ishomepage = TRUE;
$title = "Strumentazione per l'analisi e la misura dell'acqua";
$metadescription = "La Leafy Technologies è una azienda specializzata nella vendita di strumentazione  e soluzioni per l'analisi dell'acqua in continuo ed in linea.";
$additional_style = '';

include ('../includes/header.php');

?>
<!--

Numero doc.: xxx;
Indirizzo: https://www.leafytechnologies.it/;

Pubblicato: xxx;
Ultima revisione: xxx;

W3C HTML: Attesa nuovo layout;
W3C CSS: Attesa nuovo layout;

Traduzione: 100% ;
Grammatica: 100%;

Da fare: 
-->

<body>
<!-- NAV -->
<?php
    
    include('includes/top-and-nav.php');
    
    ?>

<!-- NAV END -->
    
<main>
    
<div class="header-title lg-screen-show">
  <div class="container container-padding">
    <div class="header-title-content">
      <h1>Article Title</h1>
    </div>
  </div>
</div>
    
<div class="header-title-mobile mobile-show">
  <div class="container container-padding">
    <a href="<?php echo $root; ?>news/">
    <div class="header-title-mobile-content">
      <svg class="Backward_arrow" data-name="Backward arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
        <path class="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(16 16) rotate(180)" fill="#6b6d69"/>
      </svg>
      <h1>Article Title</h1> </div>
    </a>  
  </div>
</div>

<!-- breadcrumbs -->
<section class="lg-screen-show">
  <div class="container container-padding">
    <div class="breadcrumbs-wrap">
      <div class="breadcrumbs">
        <ul>
          <li><a href="<?php echo $root; ?>">home</a></li>
          <li><a href="<?php echo $root; ?>news/">blog</a></li>
        </ul>
      </div>
      <div class="crumb-now">
        <div> <span><a href="<?php echo $root; ?>news/article-blog.php">article title</a></span> </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumbs ens-->
    
<!-- paragraph center -->
<section class="wrapper-a">
   <div class="container container-padding">
      <article class="center-page-article">
        <p>L'articolo affronta il tema della calibrazione dei sensori amperometrici con l'utilizzo del metodo DPD colorimetrico spiegando eventuali problemi e la metodologia da seguire per ottenere dei risultati ottimali. <br><br>
            
Probabilmente se si sta consultando questo articolo, si è già sentito parlare di sensori amperometrici e di analizzatori come quelli di cloro, ozono, biossido di cloro e acido peracetico (per nominarne alcuni), tutti sistemi che vengono calibrati utilizzando dei kit DPD manuali. <br><br>
            
Nonostante la sua diffusione il metodo DPD non è ben compreso, infatti:</p>

          <ul>
    <li>il test DPD non può determinare l'assenza di residui; </li>
    <li>gli errori sulle misure del DPD possono arrivare fino a ±100%;</li>
    <li>una parte significativa delle chiamate di assistenza tecnica che riceviamo sono correlate a problemi derivanti da una calibrazione scadente.</li>
    </ul>

<p>
Fiale di DPD contenenti ossidante(acqua rossa) o non (fiala trasparente)
Fiale di DPD contenenti con ossidante (acqua rossa) e senza (trasparente) <br><br>

Il DPD (ossia la N.N-dietil-p-fenilendiammina) è una sostanza chimica che, se miscelata con acqua contenente un ossidante, cambia colore a seconda della concentrazione dell'ossidante presente. Un colorimetro portabile è uno strumento che misura la luce che passa attraverso la soluzione colorata e misurando l'assorbimento di questa luce da parte del liquido dà un valore di concentrazione.
Di solito è usato per controllare la concentrazione del cloro libero, cloro totale, ozono, biossido di cloro e così dicendo in acqua. <br><br>

Quando il kit DPD dà un valore, questo valore è spesso utilizzato direttamente - senza farsi troppe domande - per calibrare strumenti per la misurazione in continuo. In questo passaggio fondamentale entra in gioco l'esperienza: la qualità della misurazione e del controllo che è possibile offrire attraverso uno strumento per l'analisi in continuo è direttamente proporzionale alla bontà della calibrazione, o anche: "L'esattezza di una analizzatore in linea dipende dall'esattezza della calibrazione". <br><br>

In questo approfondimento si affrontano i seguenti punti:

    i limiti del metodo DPD: torbidità, assenza di ossidante, decoloramento, pH ed interferenti;
    come ridurre al minimo l'errore della misurazione DPD: campionamento, allineamento e pulizia;
    fattori a cui prestare attenzione: basse concentrazioni, colore rosa, presenza di macchie sul vetro delle fiale;
    una chimica poco conosciuta: misurazione del bromo e del clorito invece del biossido di cloro;
    risciacquare e ripetere: vale davvero la pena ripetere il test DPD?
</p> 
      </article> 
   </div>
</section>
<!-- paragraph center end -->
    </main>
    
<!-- FOOTER -->
<?php
include ('../includes/footer.php');
?>
<!-- FOOTER END --> 
</body>
</html>
