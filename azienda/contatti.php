<?php
include ('../includes/bootstrap.php');

$ishomepage = TRUE;
$title = "La Leafy Technologies: Contatti";
$metadescription = "La LT è un'azienda specializzata nella distribuzione di tecnologie innovative per il settore dell'acqua e dell'ambientale.";
$additional_style = '';

include ('../includes/header.php');

?>

<!--Numero doc.: LTSP0002;Indirizzo: https://www.leafytechnologies.it/lazienda/contatti.php;Pubblicato: 01/08/2019;Ultima revisione: 01/06/2020;W3C HTML: Attesa nuovo layout;W3C CSS: Attesa nuovo layout;Traduzione: 100% ;Grammatica: 100%;Da fare: -->

<body>
<!-- NAV -->
<?php
    
    include('../includes/top-and-nav.php');
    
    ?>

<!-- NAV END -->
    
<main>

<!-- header -->
<header class="header-xslim-contact lg-screen-show" style="background-image: url('<?php echo $root; ?>images/desktop/headers/coffee-1920x224.jpg');
    background-repeat: no-repeat;">
  <div>
    <h1 style="color: white;">Come possiamo aiutarvi?</h1>
  </div>
</header>
<!-- header end --> 

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
        <div> <span><a href="<?php echo $root; ?>azienda/contatti.php">Contatti</a></span> </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumbs ens--> 

<!-- la visione -->
<section class="wrapper-a">
  <div class="container container-padding contact">
    <div class="box-a">
      <div>
          
          
        <form id="contactForm" class="main-contact-form" data-toggle="validator">
            
          <input type="text" id="name" placeholder="Nome" required data-error="Inserire il proprio nome">
            
          <input type="text" id="msg_subject" placeholder="Oggetto" required data-error="Inserire il titolo dell'email" >
            
          <input type="text" id="email" placeholder="Email" required data-error="Inserire la propria email">
            
          <textarea name="message" id="message" cols="30" rows="10" placeholder="Scrivi messaggio" required data-error="Messaggio"></textarea>
            
          <button type="submit" id="submit" class="btn btn-third">Invia</button>
          <div id="msgSubmit" class="h3 text-center hidden" style="margin-top: 15px;"></div>

        </form>  
</div>
    </div>
    <div class="box-b">
      <div>
        <h2>Orario d'apertura</h2>
        <table id="time-table">
          <tr>
            <td>Lunedì</td>
            <td>9.00 - 13.00</td>
            <td>14.00 - 18.00</td>
          </tr>
          <tr>
            <td>Martedì</td>
            <td>9.00 - 13.00</td>
            <td>14.00 - 18.00</td>
          </tr>
          <tr>
            <td>Mercoledì</td>
            <td>9.00 - 13.00</td>
            <td>14.00 - 18.00</td>
          </tr>
          <tr>
            <td>Giovedì</td>
            <td>9.00 - 13.00</td>
            <td>14.00 - 18.00</td>
          </tr>
          <tr>
            <td>Venerdì</td>
            <td>9.00 - 13.00</td>
            <td>14.00 - 18.00</td>
          </tr>
          <tr>
            <td>Sabato</td>
            <td>Chiuso</td>
          </tr>
          <tr>
            <td>Domenica</td>
            <td>Chiuso</td>
          </tr>
        </table>
        <!-- table -->
        <h2>Recapiti</h2>
        <ul style="list-style: none;">
          <li>Protocollo: <a href="mailto:info@leafytechnologies.com">info@leafytechnologies.com</a></li>
    <li>Tecnico: <a href="mailto:tecnico@leafytechnologies.com">tecnico@leafytechnologies.com</a></li>
          <li>Assistenza: +39 371 438 8849</li>
        </ul>
        <h2>Privacy e GDPR</h2>
        <p>Contattando la Leafy Technologies si dichiara di aver  letto l'informativa sulla privacy e di acconsentire al trattamento dei dati personali ai sensi del ex GDPR 2016/679.</p>
      </div>
    </div>
  </div>
</section>
<!-- la visione end --> 
    
</main>

<!-- FOOTER -->
<?php
include ('../includes/footer.php');
?>
<!-- FOOTER END --> 

<!-- form contatti -->    
<script src="<?php echo $root; ?>js/contact-page/email-decode.min.js"></script>
<script src="<?php echo $root; ?>js/contact-page/jquery341.min.js"></script>
<script src="<?php echo $root; ?>js/contact-page/form-validator.min.js"></script>
<script src="<?php echo $root; ?>js/contact-page/contact-form-script.js"></script>

</body>
</html>
