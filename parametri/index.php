<?php
include( '../includes/bootstrap.php' );

$ishomepage = TRUE;
$title = "Strumentazione per l'analisi e la misura dell'acqua";
$metadescription = "La Leafy Technologies è una azienda specializzata nella vendita di strumentazione  e soluzioni per l'analisi dell'acqua in continuo ed in linea.";
$additional_style = '';

include( '../includes/header.php' );

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

include( '../includes/top-and-nav.php' );

?>

<!-- NAV END -->

<main> 
  
  <!-- header x-slim -->
  <header class="header-xslim lg-screen-show" style="background-image: url('<?php echo $root; ?>images/desktop/headers/parametri-hd.jpg'), url('<?php echo $root; ?>images/desktop/headers/parametri-hd.webp'); background-repeat: no-repeat;
">
    <div class="container container-padding">
      <h1 style="color: white;">Parametri</h1>
    </div>
  </header>
  <!-- header x-slim end --> 
  
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
          <div> <span><a href="<?php echo $root; ?>parametri/">Parametri</a></span> </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumbs ens--> 
  
  <!-- parameters -->
  <?php
include( '../includes/snippets/parametri-list-snippet.php' );
?>
  <!-- parameters --> 
  
</main>

<!-- FOOTER -->
<?php
include( '../includes/footer.php' );
?>
<!-- FOOTER END -->
</body>
</html>