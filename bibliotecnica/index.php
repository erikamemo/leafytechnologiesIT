<?php
include ('../includes/bootstrap.php');

$ishomepage = TRUE;
$title = "Bibliotecnica della Leafy Technologies";
$metadescription = "Una collezione di articoli, informazioni e libri sul trattamento dell'acqua.";
$additional_style = '';

include ('../includes/header.php');

?>
<!--

Numero doc.: LTSP0006;
Indirizzo: https://www.leafytechnologies.it/bibliotecnica/;

Pubblicato: 10/08/2019;
Ultima revisione: 01/06/2020;

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
    
<!-- header x-slim -->
<header class="header-xslim bg-azure lg-screen-show" style="background-image: url('<?php echo $root; ?>images/desktop/headers/biblio-1920x224.jpg'), url('<?php echo $root; ?>images/desktop/headers/biblio-1920x224.webp'); background-repeat: no-repeat;">
  <div class="container container-padding">
    <h1>Bibliotecnica</h1>
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
        <div> <span><a href="<?php echo $root; ?>bibliotecnica/">Bibliotecnica</a></span> </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumbs ens--> 

<!-- bibliotecnica grid menu -->
<section class="wrapper-a">
  <div class="container container-padding">
    <div class="bibliotecnica-grid">
      <div class="bibliotecnica-grid-item"><a href="<?php echo $root; ?>bibliotecnica/note-tecniche/">
        <div>
          <p>Note tecniche</p>
        </div>
        </a></div>
      <div class="bibliotecnica-grid-item"><a href="<?php echo $root; ?>bibliotecnica/presentazioni/">
        <div>
          <p>presentazioni</p>
        </div>
        </a></div>
      <div class="bibliotecnica-grid-item"><a href="<?php echo $root; ?>bibliotecnica/articoli/">
        <div>
          <p>articoli</p>
        </div>
        </a></div>
      <div class="bibliotecnica-grid-item"><a href="<?php echo $root; ?>bibliotecnica/approfondimenti/">
        <div>
          <p>approfondimenti</p>
        </div>
        </a></div>
      <div class="bibliotecnica-grid-item"><a href="<?php echo $root; ?>bibliotecnica/schede-prodotti/">
        <div>
          <p>schede prodotto</p>
        </div>
        </a></div>
    </div>
  </div>
</section>
<!-- bibliotecnica grid menu end --> 
    
</main>

<!-- FOOTER -->
<?php
include ('../includes/footer.php');
?>
<!-- FOOTER END --> 
</body>
</html>
