<?php
include ('../includes/bootstrap.php');

$ishomepage = TRUE;
$title = "Pagina 403 - Accesso Negato";
$metadescription = "Pagina 403 - Accesso Negato";
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
        <div> <span><a href="#">Accesso Negato</a></span> </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumbs ens--> 



<section class="wrapper-a">
    <div class="container container-padding">
	<article class="center-page-article images-article">
			<h1>Pagina 403 - Accesso Negato</h1>
		<p>
			L'accesso alla seguente pagina è negato.
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