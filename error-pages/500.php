<?php
include ('../includes/bootstrap.php');

$ishomepage = TRUE;
$title = "Pagina 500 - Errore interno del server";
$metadescription = "Pagina 500 - Errore interno del server";
$additional_style = '';

include ('../includes/header.php');

?>

<body>
    
<!-- NAV -->
<?php
    
    include('../includes/top-and-nav.php');
    
    ?>

<!-- NAV END -->

<main>
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
        <div> <span><a href="#">Errore interno del server</a></span> </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumbs ens--> 

<section class="wrapper-a">
    <div class="container container-padding">
	<article class="center-page-article images-article">
		<h1>Pagina 500 - Errore interno del server</h1>
		<p>
			Si è verificato un errore interno del server è la richiesta non è stata completata. Contattare l'amministratore del sito per riportare il problema, grazie.
		</p>
	</article>
    </div>
</section>
</main>
<?php
include ('../includes/footer.php');
?>
</body>
</html>
