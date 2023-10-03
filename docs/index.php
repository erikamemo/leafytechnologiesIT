<?php
include ('../includes/bootstrap.php');

$title = "Tutta la documentazione della Leafy Technologies";
$metadescription = "Tutte le presentazioni, schede prodotto, note tecniche, articoli e documenti vari.";

include ('../includes/header.php');
?>
<!--

Numero doc.: LTSP0011;
Indirizzo: https://www.leafytechnologies.it/docs/;

Pubblicato: 14/06/2019;
Ultima revisione: 22/06/2020;

W3C HTML: Attesa nuovo layout;
W3C CSS: Attesa nuovo layout;

Traduzione: 100% ;
Grammatica: 100%;

Da fare:
-->
<body>
<!-- NAV -->
<?php
    
    include('../../includes/top-and-nav.php');
    
    ?>

<!-- NAV END -->


<main>
    
<div class="header-title-mobile mobile-show">
<div class="container container-padding">
    <a href="<?php echo $root; ?>bibliotecnica/">
    <div class="header-title-mobile-content">
    <svg class="Backward_arrow" data-name="Backward arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
        <path class="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(16 16) rotate(180)" fill="#6b6d69"/>
    </svg>
    <h1>Documenti</h1> </div>
    </a>  
</div>
</div>
    
<!-- header x-slim -->
<header class="header-xslim bg-azure lg-screen-show" style="background-image: url('<?php echo $root; ?>images/desktop/headers/biblio-1920x224.jpg'), url('<?php echo $root; ?>images/desktop/headers/biblio-1920x224.webp'); background-repeat: no-repeat;">
<div class="container container-padding">
    <h1>Documenti</h1>
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
        <div> <span><a href="<?php echo $root; ?>docs/">Documenti</a></span> </div>
    </div>
    </div>
</div>
</section>
<!-- breadcrumbs ens--> 
    
<section class="wrapper-a">
    <div class="container container-padding">
	<article>
		<p>
			"Approfondimenti" è una serie di articoli diffusi via e-mail che affrontano una serie di tematiche tecniche riguardanti il trattamento dell'acqua e la misura in linea. Gli articoli, originariamente pubblicati dalla <i lang="en">Process Instruments (UK) Ltd.</i>, sono tradotti, ed in alcuni casi ampliati, dalla <i lang="en">Leafy Technologies</i>. Di seguito una la lista aggiornata completa.
		</p>
    </article>
    </div>
</section>
<!-- list link -->
<section class="wrapper-a">
    <div class="container container-padding">
        <div class="linked-list-wrapper">
		<h2>Articoli</h2>
        <ul class="linked-list">
            <li><a href="<?php echo $root; ?>docs/articoli/misura-della-conducibilita-in-acqua.pdf">Misurazione della conducibilità</a></li>
            <li><a href="<?php echo $root; ?>docs/articoli/test-ossigeno-disciolto-irlanda.pdf">Risultati di uno studio sul campo sui sensori di ossigeno disciolto </a></li>
            <li><a href="<?php echo $root; ?>docs/articoli/calibrazione-turbidimetro-in-linea.pdf">Calibrazione del turbidimetro in linea TurbSense®</a></li>
            <li><a href="<?php echo $root; ?>docs/articoli/test-turbidimetro-stati-uniti.pdf">Risultati di uno studio sul TurbSense® </a></li>
            <li><a href="<?php echo $root; ?>docs/articoli/centralina-per-piscine.pdf">Analizzatore AquaSense e costi energetici nelle piscine </a></li>
        </ul>
		<h2>Note tescniche</h2>
        <ul class="linked-list">
            <li><a href="<?php echo $root; ?>docs/note-tecniche/accesso-remoto-analizzatori.pdf">Funzionalità di accesso remoto nell’analizzatore CRIUS®</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/acqua-4.0-industria-4.0.pdf">Industria 4.0, Acqua 4.0, Internet delle Cose, SMART, DIGITAL</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/benefici-testare-uvt-sul-campo.pdf">Misurare la trasmittanza UV in loco</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/bolle-nella-misura-torbidita.pdf">Bolle e torbidità</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/clorazione-acqua-di-mare.pdf">Clorazione dell’acqua di mare</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/compressore-per-pulizia-automatica-sensori.pdf">Sistema AirFlush</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/confronto-sensori-redox-sensori-amperometrici.pdf">Sensori redox e sensori di cloro amperometrici</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/controllo-coagulazione-con-streaming-current.pdf">Controllo automatico della coagulazionei</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/controllo-pid-analizzatori-acqua.pdf">Il controllo PID negli analizzatori in linea dell’acqua</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/correlare-uv254-parametri-organici.pdf">Correlazione tra UV254 e TOC, COD e BOD</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/effetti-variazione-ph-sensore-cloro.pdf">Effetti della variazione del pH sui sensori amperometrici di cloro</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/istruzioni-centralina-per-piscina.pdf">Istruzioni d’uso per la centralina per piscina AquaSense</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/le-parole-della-misura.pdf">Le parole della misura</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/lista-controllo-DPD.pdf">Lista di controllo per il metodo DPD</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/manutenzione-sensore-cloro-libero.pdf">Manutenzione del sensore di cloro libero</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/manutenzione-sensore-cloro-totale.pdf">Manutenzione del sensore di cloro totale</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/manutenzione-sensore-di-ph.pdf">Manutenzione del sensore di pH</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/misura-dei-solidi-sospesi.pdf">Misurazione dei solidi sospesi</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/misura-in-linea-acido-peracetico.pdf">Monitoraggio in linea ed in continuo dell’acido peracetico</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/misura-ossigeno-disciolto-controllo-aerazione.pdf">Misura dell’ossigeno disciolto nelle vasche di aerazione</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/misura-uvt-controllo-disinfezione-uv.pdf">Trasmittanza UV e disinfezione con luce ultravioletta</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/opzioni-installazione-misuratore-solidi-sospesi.pdf">Opzioni di installazione del sensore SoliSense®</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/questionario-coagulazione-corrente-fluente.pdf">Questionario preinstallazione per il sistema StreamerSense (Questionario)</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/questionario-sistema-controllo-coagulazione.pdf">Questionario preinstallazione per il sistema CoagSense (Questionario)</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/questionario-sistema-corrente-fluente-laboratorio.pdf">Questionario per acquisto sistema LabSense/ChargeSense (Questionario)</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/rele-e-pompe.pdf">Pompe e relè</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/rumore-e-zero-in-turbidimetri.pdf">Rumore e zero nei turbidimetri</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/sensore-di-cloro-libero.pdf">Sensore di cloro libero residuo</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/sensore-misura-zero-assenza-cloro.pdf">Misurare l’assenza di cloro</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/sistema-filtrazione-uv254.pdf">Unità di filtrazione per l’UV254Sense</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/sistemi-pulizia-sensori.pdf">Sistemi di pulizia automatica dei sensori per l’analisi in linea</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/specificare-analizzatori-multiparametrici-acqua.pdf">Configurazione di un analizzatore multiparametrico</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/strumenti-portabili-e-da-laboratorio.pdf">Analizzatori da laboratorio e portatili</a></li>
            <li><a href="<?php echo $root; ?>docs/note-tecniche/tipi-controllo-analizzatori-acqua.pdf">Tipi di controllo negli analizzatori multiparametrici</a></li>
        </ul>
		<h2>Schede prodotto</h2>
        <ul class="linked-list">
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/centralina-multiparametrica-avanzata.pdf">Analizzatore multiparametrico avanzato - CRIUS®</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/centralina-multiparametrica-di-base.pdf">Analizzatore multiparametrico base - CRONOS®</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/sistema-di-pulizia-automatica-dei-sensori.pdf">Sistema AutoFlush</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-streaming-current.pdf">Analizzatore di corrente fluente - StreamerSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-acido-peracetico.pdf">Analizzatore di acido peracetico - PeraSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-biossido-di-cloro.pdf">Analizzatore di biossdido di cloro - DioSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-cloro.pdf">Analizzatore di cloro - HaloSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-conducibilita.pdf">Analizzatore di conducibilità - ConductiSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-fluoro.pdf">Analizzatore di fluoro - FluoriSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-ossigeno-disciolto.pdf">Analizzatore di ossigeno disciolto - OxySense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-ozono.pdf">Analizzatore di ozono - OzoSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-ph.pdf">Analizzatore di pH - pHSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-solidi-sospesi.pdf">Analizzatore di solidi sospesi - SoliSense®</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/analizzatore-di-carica-colloidale.pdf">Analizzatore di carica elettrocinetica - ChargeSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/misuratore-di-perossido-di-idrogeno.pdf">Analizzatore di perossido di idrogeno - PeroxiSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/analizzatore-di-uv254.pdf">Analizzatore di UV254 - UV254Sense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/centralina-per-piscina.pdf">Centralina per piscina - AquaSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/contatori-di-particelle.pdf">Contatori di particelle - Linea Sense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/analizzatore-redox.pdf">Misuratore di redox - ORPSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/sistema-controllo-automatico-coagulazione.pdf">Sistema controllo automatico della coagulazione - CoagSense</a></li>
            <li><a href="<?php echo $root; ?>docs/schede-prodotto/analizzatore-di-carica-colloidale-laboratorio.pdf">Analizzatore di domanda di coagulante - LabSense</a></li>
        </ul>
		<h2>Presentazioni</h2>
        <ul class="linked-list">
            <li><a href="<?php echo $root; ?>docs/presentazioni/analizzatore-di-coagulazione.pptx">StreamerSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/analizzatore-uv254.pptx">UV254Sense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/analizzatore-per-piscina.pptx">AquaSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/contatori-di-particelle-acqua.pptx">Contatori di particelle</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/ottimizzazione-coagulazione-acqua.pptx">CoagSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensore-di-torbidita.pptx">TurbSense®</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensore-solidi-sospesi.pptx">SoliSense®</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-acido-peracetico.pptx">PeraSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-conducibilita-acqua.pptx">ConductiSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-di-biossido-di-cloro.pptx">DioSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-di-cloro-amperometrici.pptx">HaloSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-di-fluoro.pptx">FluoroSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-di-ph.pptx">pHSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-ossigeno-disciolto.pptx">OxySense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-ozono-in-acqua.pptx">OzoSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-perossido-idrogeno.pptx">ORPSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sensori-redox.pptx">PeroxiSense</a></li>
            <li><a href="<?php echo $root; ?>docs/presentazioni/sistema-sostituitivo-flocculatore-da-banco.pptx">LabSense</a></li>
        </ul>
        </div>
    </div>
</section>
<!-- list link end -->
</main>
<?php
include ('../../includes/footer.php');
?>
</body>
</html>