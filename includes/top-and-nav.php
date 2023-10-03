<!-- GOOGLE ANALYTICS --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139722445-1"></script> 
<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}

			gtag('js', new Date());

			gtag('config', 'UA-139722445-1');
		</script> 
    
    
<!-- TOP NAVIGATION -->
    
<!-- NAV -->
<div class="header-nav-wrapper">
<header class="nav-wrapper container">
  <div class="logo"> 
      <a href="<?php echo $root; ?>">
      <picture>
        <source type="image/webp" media="(max-width:991px)" srcset="<?php echo $root; ?>images/mobile/logo-white-207x30.webp">
        <source type="image/webp" media="(min-width:992px)" srcset="<?php echo $root; ?>images/desktop/logo-color-207x30.webp">
        <source type="image/png" media="(max-width:991px)" srcset="<?php echo $root; ?>images/mobile/logo-white-207x30.png">
        <source type="image/png" media="(min-width:992px)" srcset="<?php echo $root; ?>images/desktop/logo-color-207x30.png">
        <img src="<?php echo $root; ?>images/mobile/logo-white-207x30.png" alt="Leafy Technologies Strumentazione per l’ambiente"> </picture>
      </a>
  </div>
  <nav>
    <div class="hamburguer-wrap">
      <input type="checkbox" class="toggler">
      <div class="hamburguer-menu">
        <div class="hamburguer"></div>
      </div>
    </div>
    <ul class="top-level-links">
      <li class="menu-btn"><a href="<?php echo $root; ?>"><span class="title-reference menu-link">Home</span></a> </li>
      <li class="menu-btn dropdown" data-id="products-dropdown"> <span class="title-reference menu-link with-arrow">Prodotti</span>
        <ul class="products-dropdown">
          <li class="mobile-title">Prodotti</li>
          <li class="menu-btn-2 products active dropdown" data-id="analizatori"> <span class="title-reference with-arrow ">Analizzatori e Sistemi</span>
            <ul class="list" id="analizzatori">
              <li class="mobile-title">Analizzatori e Sistemi</li>
              <li class="fade-link-p"><a href="<?php echo $root; ?>prodotti/analizzatori-multiparametrici-multicanale/">Introduzione ai due analizzatori in linea</a></li>
              <li class="fade-link-p"><a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-base/">Analizzatore base - CRONOS<sup>®</sup></a></li>
              <li class="fade-link-p"><a href="<?php echo $root; ?>prodotti/analizzatore-multiparametrico-avanzato/">Analizzatore avanzato - CRIUS<sup>®</sup></a></li>
              <li class="fade-link-p"><a href="<?php echo $root; ?>prodotti/sistema-controllo-coagulazione/">Sistema per il controllo della coagulazione</a></li>
              <li class="fade-link-p"><a href="<?php echo $root; ?>prodotti/sistema-di-autopulizia/">Sistema di autopulizia dei sensori</a></li>
              <li class="fade-link-p"><a href="<?php echo $root; ?>prodotti/centralina-per-piscina/">Centralina per piscine</a></li>
              <li class="fade-link-p"><a href="<?php echo $root; ?>prodotti/accesso-remoto/">Sistema di accesso remoto</a></li>
            </ul>
            <ul class="list-image" id="analizatori">
              <li class="fade-link-2-p"> <img src="<?php echo $root; ?>images/desktop/products/analizzatore-multiparametrico-avanzato180x121.png" alt="analizzatore multiparametrico avanzato">
                <p>CRIUS<sup>®</sup></p>
              </li>
            </ul>
          </li>
          <li class="menu-btn-2 products dropdown"> <span class="title-reference with-arrow">Sensori in linea</span>
            <ul class="list">
              <li class="mobile-title">Sensori in linea</li>
              <li><a href="<?php echo $root; ?>prodotti/sensori-in-linea/">Tutti i sensori</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">Cloro</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-biossido-di-cloro/">Biossido di cloro</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-ozono/">Ozono</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-acido-peracetico/">Acido peracetico</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-perossido-idrogeno/">Perossido di idrogeno</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-fluoro/">Fluoro</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-ph/">pH</a></li>
              <li><a href="<?php echo $root; ?>prodotti/misuratore-redox/">Redox</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-conducibilita/">Conducibilità</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-ossigeno-disciolto/">Ossigeno disciolto</a></li>
              <li><a href="<?php echo $root; ?>prodotti/turbidimetro-in-linea/">Torbidità</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-solidi-sospesi/">Solidi sospesi</a></li>
              <li><a href="<?php echo $root; ?>prodotti/contatore-di-particelle/">Contatori di particelle</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-uv254/">Carica organica (UV254)</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-corrente-fluente-coagulazione/">Corrente fluente (SCM)</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-biofilm/">Biofilm</a></li>
              <li class="last-link"><a href="<?php echo $root; ?>prodotti/sensori-in-linea/">Tutti i sensori</a></li>
            </ul>
            <ul class="list-image" id="hide-mobile">
              <li class="hide-mobile"> <img src="<?php echo $root; ?>images/desktop/products/turbidimetro-in-linea180x121.png" alt="turbidimetro in linea">
                <p>TurbSense<sup>®</sup></p>
              </li>
            </ul>
          </li>
          <li class="menu-btn-2 products dropdown"> <span class="title-reference with-arrow">Parametri</span>
            <ul class="list">

              <li class="mobile-title">Parametri</li>
              <li><a href="<?php echo $root; ?>parametri/">Tutti i parametri</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-cloro/">Cloro</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-biossido-di-cloro/">Biossido di cloro</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-ozono/">Ozono</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-acido-peracetico/">Acido peracetico</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-perossido-idrogeno/">Perossido di idrogeno</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-fluoro/">Fluoro</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-ph/">pH</a></li>
              <li><a href="<?php echo $root; ?>prodotti/misuratore-redox/">Redox</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-conducibilita/">Conducibilità</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-ossigeno-disciolto/">Ossigeno disciolto</a></li>
              <li><a href="<?php echo $root; ?>prodotti/turbidimetro-in-linea/">Torbidità</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-solidi-sospesi/">Solidi sospesi</a></li>
              <li><a href="<?php echo $root; ?>prodotti/contatore-di-particelle/">Contatori di particelle</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-uv254/">Carica organica (UV254)</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-corrente-fluente-coagulazione/">Corrente fluente (SCM)</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-di-biofilm/">Biofilm</a></li>
              <li class="last-link"><a href="<?php echo $root; ?>parametri/">Tutti i parametri</a></li>
            </ul>
            <ul class="list-image">
              <li> <img src="<?php echo $root; ?>images/desktop/products/analizzatore-uv254180x121.png" alt="analizzatore uv254">
                <p>UV254Sense</p>
              </li>
            </ul>
          </li>
          <li class="menu-btn-2 products dropdown"> <span class="title-reference with-arrow">Strumenti da laboratorio</span>
            <ul class="list">
              <li class="mobile-title">Strumenti da laboratorio</li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-elettrocinetico-laboratorio/">LabSense</a></li>
              <li><a href="<?php echo $root; ?>prodotti/analizzatore-elettrocinetico-laboratorio-cartiere/">ChargeSense</a></li>
<!--              <li class="last-link"><a href="parametri/">Tutti i parametri</a></li>
-->            </ul>
            <ul class="list-image">
              <li> <img src="<?php echo $root; ?>images/desktop/products/analizzatore-elettrocinetico-laboratorio-cartiere180x121.png" alt="analizzatore elettrocinetico laboratorio cartiere">
                <p>ChargeSense</p>
              </li>
            </ul>
          </li> 
          <li class="menu-btn-2 products dropdown"> <span class="title-reference with-arrow">Analizzatori portatili</span>
            <ul class="list">
              <li class="mobile-title">Analizzatori portatili</li>
              <li><a href="<?php echo $root; ?>prodotti/kemio/">Kemio</a></li>
              <li><a href="<?php echo $root; ?>prodotti/fotometri/">Fotometri</a></li>
              <li><a href="<?php echo $root; ?>prodotti/wagtech/">Wagtech</a></li>
              <li><a href="<?php echo $root; ?>prodotti/wagtech/">SirenBW</a></li>
              <li><a href="<?php echo $root; ?>prodotti/visual/">Visual</a></li>
              <!-- <li><a href="prodotti/visual/">Macro</a></li> -- DOCUMENTO WORD F001 DA CERCARE -->
              <li><a href="<?php echo $root; ?>prodotti/kit-analisi-suolo/">Kit analisi suolo</a></li>
<!--              <li class="last-link"><a href="parametri/">Tutti i parametri</a></li>
-->            </ul>
            <ul class="list-image">
              <li> <img src="<?php echo $root; ?>images/palintest/Ammonia-in-hand-scaled-180x154.png" alt="Lumiso ammonia">
                <p>Lumiso ammonia</p>
              </li>
            </ul>
          </li> 

          <li class="menu-btn-2 products dropdown"> <span class="title-reference"><a style="padding-left: 0;" href="<?php echo $root; ?>prodotti/">Vedi tutti i prodotti</a></span></li>
          </ul>
      </li>
        
        
        
        
    <li class="menu-btn"> <a href="<?php echo $root; ?>bibliotecnica/"><span class="title-reference menu-link">Bibliotecnica</span></a></li>      
      <li class="menu-btn"> <a href="<?php echo $root; ?>applicazioni/"><span class="title-reference menu-link">Applicazioni</span></a></li>      
      <li class="menu-btn"> <a href="<?php echo $root; ?>azienda/"><span class="title-reference menu-link">Azienda</span></a></li>
      <li class="menu-btn"><a href="<?php echo $root; ?>azienda/contatti.php"><span class="title-reference menu-link">Contatti</span></a> </li>
    </ul>
  </nav>
  <ul class="user-nav">
      <li><a href="<?php echo $root; ?>prodotti/">
        <svg xmlns="http://www.w3.org/2000/svg" width="15.9" height="15.9" viewBox="0 0 15.9 15.9">
          <path id="search-icon" data-name="Search Icon" d="M15.9,14.5l-3.3-3.3A6.847,6.847,0,0,0,14,7,6.957,6.957,0,0,0,7,0,6.957,6.957,0,0,0,0,7a6.957,6.957,0,0,0,7,7,6.847,6.847,0,0,0,4.2-1.4l3.3,3.3ZM2,7A4.951,4.951,0,0,1,7,2a4.951,4.951,0,0,1,5,5,4.951,4.951,0,0,1-5,5A4.951,4.951,0,0,1,2,7Z" fill="#000"/>
        </svg>
        </a></li>
      <li><a href="mailto:info@leafytechnologies.com">
        <svg xmlns="http://www.w3.org/2000/svg" width="21.66" height="13.475" viewBox="0 0 21.66 13.475">
          <g id="g2742" transform="translate(0.5 0.5)">
            <rect id="envelope-icon" width="20.659" height="12.42" transform="translate(0.001 0.028)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
            <path id="path2668" d="M764.967-2035.172l-20.66-.035,10.3,8.115Z" transform="translate(-744.307 2035.207)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
            <path id="path2671" d="M751.3-1981.92l-6.99,6.237,20.66-.04-7.021-6.2-3.342,2.949Z" transform="translate(-744.307 1988.158)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
          </g>
        </svg>
        </a></li>
      <li><a href="<?php echo $root; ?>azienda/contatti.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16.56" height="16.756" viewBox="0 0 16.56 16.756">
          <path id="phone-icon" data-name="Phone Icon" d="M9.335,13.256a13.938,13.938,0,0,0,6.063,6.13l2.024-2.053a.915.915,0,0,1,.934-.228,10.361,10.361,0,0,0,3.284.531.922.922,0,0,1,.92.931v3.258a.922.922,0,0,1-.92.931A15.732,15.732,0,0,1,6,6.931.925.925,0,0,1,6.92,6h3.22a.922.922,0,0,1,.92.931,10.711,10.711,0,0,0,.524,3.323.942.942,0,0,1-.225.945Z" transform="translate(-6 -6)" fill="#000" />
        </svg>
        </a></li>
      <li><a href="<?php echo $root; ?>news/">News</a></li>
      <li style="display: none;"><a class="cookies-opt" href="#">Gestione Cookies</a></li>
    </ul>
</header>
</div>
<!-- NAV END -->