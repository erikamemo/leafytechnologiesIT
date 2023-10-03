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
    
    include('../includes/top-and-nav.php');
    
    ?>

<!-- NAV END -->
    
<main>

<div class="header-title lg-screen-show">
  <div class="container container-padding">
    <div class="header-title-content">
      <h1>Applicazioni</h1>
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
        </ul>
      </div>
      <div class="crumb-now">
        <div> <span><a href="<?php echo $root; ?>applicazioni/">Applicazioni</a></span> </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumbs ens-->

<section class="wrapper-a">
  <div class="container container-padding">
    <div class="grid-2-columns">
      <div class="card-lg card-gradient-blue"> <a href="<?php echo $root; ?>applicazioni/impianti-di-depurazione/">
        <div class="card-lg-left">
          <div class="card-lg-icon"> 
            <div class="img-wrap">
          <picture> 
   <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/icons/water-hand.webp">
            <img src="<?php echo $root; ?>images/desktop/icons/water-hand.png" alt="icona del depuratore">
          </picture>
            </div>
          </div>
        </div>
        <div class="card-lg-right">
          <h2>Impianti di depurazione</h2>
          <p class="lg-screen-show">Ossigeno disciolto, torbidità, solidi sospesi e pH sono solo alcuni dei parametri che è fondamentale misurare in linea per assicurare il corretto funzionamento dei depuratori e degli impianti di trattamento delle acque reflue, sia municipali che industriali.</p>
          <span class="btn btn-secondary">Scopri di più</span> </div>
        </a></div>
      <div class="card-lg card-gradient-blue"> <a href="<?php echo $root; ?>applicazioni/impianti-di-potabilizzazione/">
        <div class="card-lg-left">
          <div class="card-lg-icon"> 
            <div class="img-wrap">
          <picture> 
   <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/icons/potabile.webp">
            <img src="<?php echo $root; ?>images/desktop/icons/potabile.png" alt="icona dell'acqua potabile">
          </picture>
            </div> 
          </div>
        </div>
        <div class="card-lg-right">
          <h2>Impianti di potabilizzazione</h2>
          <p class="lg-screen-show">Fondamentale è la misura in linea di parametri come il cloro libero ed il pH ma sempre più impianti stanno utilizzando sistemi automatici per il controllo della coagulazione o contatori di particelle per verificare il corretto funzionamento dei filtri.</p>
          <span class="btn btn-secondary">Scopri di più</span> </div>
        </a></div>
        <div class="card-lg card-gradient-blue"> <a href="<?php echo $root; ?>applicazioni/settore-alimentare/">
        <div class="card-lg-left">
          <div class="card-lg-icon"> 
          <picture> 
   <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/icons/pizza.webp">
            <img src="<?php echo $root; ?>images/desktop/icons/pizza.png" alt="icona del Settore alimentare">
          </picture>
          </div>
        </div>
        <div class="card-lg-right">
          <h2>Settore alimentare</h2>
          <p class="lg-screen-show">I processi di disinfezione in questo settore sono estremamente importanti per assicurare il rispetto delle norme vigenti.</p>
          <span class="btn btn-secondary">Scopri di più</span> </div>
        </a></div>
        <div class="card-lg card-gradient-blue"> <a href="<?php echo $root; ?>applicazioni/trattamento-acque-industriali/">
        <div class="card-lg-left">
          <div class="card-lg-icon"> 
          <picture> 
  <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/icons/acque-processo.webp">
            <img src="<?php echo $root; ?>images/desktop/icons/acque-processo.png" alt="icona del Settore alimentare">
          </picture>
          </div>
        </div>
        <div class="card-lg-right">
          <h2>Trattamento acque industriali</h2>
          <p class="lg-screen-show">Caldaie, membrane a osmosi inversa, acque di raffreddamento, lavaggio di precisione sono solo alcune delle applicazioni che necessitano di strumentazione per il monitoraggio in linea.</p>
          <span class="btn btn-secondary">Scopri di più</span> </div>
        </a></div>
      
    </div>
  </div>
</section>
    
</main>

<!-- FOOTER -->
<?php
include ('../includes/footer.php');
?>
<!-- FOOTER END --> 
</body>
</html>
