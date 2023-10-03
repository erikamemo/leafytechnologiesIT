<?php
include ('../includes/bootstrap.php');

$ishomepage = TRUE;
$title = "Tutte le novità e le news della Leafy Technologies in Italia";
$metadescription = "In queste pagine sono riportatate le notizie più recenti riguardanti la Leafy Technologies, le attività e le tecnologie introdotte sul mercato italiano.";
$additional_style = '';

include ('../includes/header.php');

?>

<!--

Numero doc.: LTSP0007;
Indirizzo: https://www.leafytechnologies.it/news/;

Pubblicato: 01/08/2019;
Ultima revisione: 01/06/2020;

W3C HTML: Attesa nuovo layout;
W3C CSS: Attesa nuovo layout;

Traduzione: 100% ;
Grammatica: 100%;

Da fare:
-->

<body>
    
<?php
    
    include('../includes/top-and-nav.php');
    
    ?>

<!-- NAV END -->

<main>
<!-- header x-slim -->
<header class="header-xslim bg-azure lg-screen-show">
  <div class="container container-padding">
    <h1>Ultime News</h1>
  </div>
</header>
<!-- header x-slim end -->

<div class="header-title mobile-show">
  <div class="container container-padding">
    <div class="header-title-content">
      <h1>Ultime News</h1>
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
        <div> <span><a href="<?php echo $root; ?>news/">News</a></span> </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumbs ens--> 

<!-- paragraph center -->
<section class="wrapper-a">
  <div class="container container-padding">
    <div class="blog-grid">
    <div class="post-thumb"> <a href="<?php echo $root; ?>news/article-blog.php">
        <div class="post-thumb-content">
          <div class="post-thumb-content-top">
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/backgrounds/coagsense-thumbnail-news.webp">
            <img src="<?php echo $root; ?>images/desktop/backgrounds/coagsense-thumbnail-news.jpg" alt="Controllo della coagulazione">    
          </picture>  
          </div>
          <div class="post-thumb-content-bottom"> <span class="date">8 Gennaio 2021</span>
            <h2>Controllo della coagulazione</h2>
            <p>Il sistema per il controllo e l'ottimizzazione della coagulazione CoagSense ideato dalla Process Instruments, consiste di un analizzatore integrato multiparametrico e modulare che può essere adattato a diversi impianti e situazioni, con l'aggiunta di vari sensori come ad esempio quello per il pH, il flusso, la temperatura, l'UV254, la torbidità ed il misuratore di corrente fluente (<i>streaming current</i>).</p>
          </div>
        </div>
        </a> </div>
      <div class="post-thumb"> <a href="<?php echo $root; ?>news/article-blog.php">
        <div class="post-thumb-content">
          <div class="post-thumb-content-top">
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/backgrounds/news-new-website.webp">
            <img src="<?php echo $root; ?>images/desktop/backgrounds/news-new-website.jpg" alt="Nuovo sito!">    
          </picture>  
          </div>
          <div class="post-thumb-content-bottom"> <span class="date">1 Marzo, 2021</span>
            <h2>Nuovo sito!</h2>
            <p>Dopo mesi e mesi di lavoro siamo finalmente on-line con il nuovo sito, più ricco di informazioni, idee ed offerte per i professionisti del settore dell'acqua. </p>
          </div>
        </div>
        </a> </div>
      <div class="post-thumb"> <a href="#">
        <div class="post-thumb-content">
          <div class="post-thumb-content-top">
          <picture>
          <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/backgrounds/accesso-remoto-news-thumbnail.webp">
          <img src="<?php echo $root; ?>images/desktop/backgrounds/accesso-remoto-news-thumbnail.jpg" alt="CRIUS e MQTT">    
          </picture>   
          </div>
          <div class="post-thumb-content-bottom"> <span class="date">Febbraio, 2021</span>
            <h2>CRIUS e MQTT</h2>
            <p>La Process Instruments ha finalmente rilasciato la nuova versione del sistema CRIUS che, opzionalmente, supporta accesso remoto via internet ma anche vari protocolli tra i quali MQTT per l'Internet delle Cose. Questo risulta particolarmente interessante per applicazioni industriali dove si vogoliono sfruttare le opportunità offerte dall'Industria 4.0 </p>
          </div>
        </div>
        </a> </div>
      <div class="post-thumb"> <a href="#">
        <div class="post-thumb-content">
          <div class="post-thumb-content-top">
          <picture>
            <source type="image/webp" srcset="<?php echo $root; ?>images/desktop/backgrounds/particlesense-news-thumbnail.webp">
          <img src="<?php echo $root; ?>images/desktop/backgrounds/particlesense-news-thumbnail.jpg" alt="Contatori di particelle">    
          </picture>             </div>
          <div class="post-thumb-content-bottom"> <span class="date">Ottobre 2020</span>
            <h2>Contatori di particelle</h2>
            <p>Per tutti i processi dove sia necessario contare le particelle in linea, siamo lieti di introdurre la nuova versione dei contatori di particelle in acqua ed in linea della Process Instruments.</p>
          </div>
        </div>
        </a> </div>
    </div>
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
