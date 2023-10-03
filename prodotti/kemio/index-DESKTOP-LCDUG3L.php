<?php
include ('../../includes/bootstrap.php');

$ishomepage = TRUE;
$title = "Strumentazione per l'analisi e la misura dell'acqua";
$metadescription = "La Leafy Technologies è una azienda specializzata nella vendita di strumentazione  e soluzioni per l'analisi dell'acqua in continuo ed in linea.";
$additional_style = '';

include ('../../includes/header.php');

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
    
<?php
    
    include('../../includes/top-and-nav.php');
    
    ?>

<!-- NAV END -->
    
<main>

<div class="container container-padding mobile-show" style="margin-top: 15px; display: flex; flex-direction: row; justify-content: space-between;"> <a href="<?php echo $root; ?>prodotti/analizzatori/" class="btn btn-primary">Analizzatori</a><a href="<?php echo $root; ?>prodotti/sensori-in-linea/" class="btn btn-primary">Sensori</a><a href="<?php echo $root; ?>prodotti/" class="btn btn-primary">Tutti</a> </div>
    
<!-- breadcrumbs -->
<section class="lg-screen-show">
  <div class="container container-padding">
    <div class="breadcrumbs-wrap">
      <div class="breadcrumbs">
        <ul>
          <li><a href="<?php echo $root; ?>">Home</a></li>
<li><a href="<?php echo $root; ?>prodotti/">Prodotti</a></li></ul>
      </div>
      <div class="crumb-now">
        <div> <span><a href="#">Kemio</a></span> </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumbs ens--> 
    

<!-- filter  
<div class="container container-padding lg-screen-show wrapper-a">
    <div style="display: flex; justify-content: center; align-items: center;">
   <span style="color: rgb(38, 95, 170); padding-top: 20px; margin-right: 38px;">Lista:</span>
      <?php /* include( '../../includes/snippets/filter-parametri-list.php' ); */ ?>
    </div>
</div> -->
<!-- filter end -->


<!-- sensori list -->
<section class="wrapper-a">
  <div class="container container-padding">
    <div class="grid-2-columns">
      <?php include( '../../includes/snippets/kemio-disinfection-snippet.php' ); ?>
      <?php include( '../../includes/snippets/kemio-heavy-metals-snippet.php' ); ?>
      <?php /* include( '../../includes/snippets/kemio-multi-snippet.php' );*/ ?>
    </div>
  </div>
</section>
<!-- sensori list end --> 
    
<!-- contact form slim --> 

<!-- contact form slim END --> 
    

</main>

<!-- FOOTER -->
<?php
include ('../../includes/footer.php');
?>

<!-- FOOTER END --> 
    

<script src="<?php echo $root; ?>js/scroll-x.js"></script>
<script src="<?php echo $root; ?>js/carousel.js"></script>
    
<!-- form contatti -->    
<?php
include( '../../includes/call-back-form-scripts.php' );
?>
</body>
</html>
