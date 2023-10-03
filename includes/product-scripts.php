<script src="<?php echo $root; ?>js/scroll-x.js"></script>
<script src="<?php echo $root; ?>js/carousel.js"></script>
<!-- tab top -->


<script>
// TabSystem
function openTab(evt, tabNumber) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabNumber).style.display = "block";
  evt.currentTarget.className += " active";
}
    
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script> 
<script>
// FAQ definition list accordion
(function () {
  var accordions, contents, i;
  
  // Make sure the browser supports what we are about to do.
  
  var supports = !!document.querySelector && !!window.addEventListener;

  
  if ( !supports ) {
    return;
  } else {
    // Using a function helps isolate each accordion from the others
    function makeAccordion(accordion) {
      var targets, currentTarget, i;

      targets = accordion.querySelectorAll('.accordion dt');
      contents = accordion.querySelectorAll('.accordion dd');

      for(i = 0; i < contents.length; i++) {
        if(!(contents[i].getAttribute('aria-expanded') === 'true')){
          contents[i].setAttribute('aria-expanded','false');
        }
      }
      
      
      for(i = 0; i < targets.length; i++) {
        if(targets[i].nextElementSibling.getAttribute('aria-expanded') === 'true'){
          targets[i].style.borderBottomLeftRadius = 0;
          targets[i].style.borderBottomRightRadius = 0;
        }  
        
        targets[i].addEventListener('click', function () {


          if(this.nextElementSibling.getAttribute('aria-expanded') === 'true'){
            this.nextElementSibling.setAttribute('aria-expanded','false');
            this.style.backgroundColor = "transparent";            
          } else {  
            this.nextElementSibling.setAttribute('aria-expanded','true');
           this.style.backgroundColor = "#e5e9f4";
          }  
        }, false);
      }

      accordion.classList.add('js');
    }

    // Find all the accordions to enable
    accordions = document.querySelectorAll('.accordion');
    for(i = 0; i < accordions.length; i++) {
      makeAccordion(accordions[i]);
    }
  }   
  
})();    
</script> 
<script>
    // youtube
    !function(){for(var t=document.getElementsByClassName("onq-youtube-player"),e=0;e<t.length;e++)t[e].onclick=function(){var t=document.createElement("iframe"),e="true"==this.dataset.ssv?"1":"0",s="true"==this.dataset.spc?"1":"0",i="true"==this.dataset.sta?"1":"0",a="true"==this.dataset.dkc?"1":"0",r="true"==this.dataset.ecc?"1":"0",o="true"==this.dataset.eap?"1":"0";for(t.setAttribute("src","https://www.youtube.com/embed/"+this.dataset.id+"?rel="+e+"&controls="+s+"&showinfo="+i+"&disablekb="+a+"&cc_load_policy="+r+"&autoplay="+o),t.setAttribute("frameborder","0"),t.setAttribute("id","youtube-iframe"),t.setAttribute("style","width: 100%; height: 100%; position: absolute; top: 0; left: 0;"),"true"==this.dataset.afs&&t.setAttribute("allowfullscreen","");this.firstChild;)this.removeChild(this.firstChild);this.appendChild(t)}}();
    </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    
$(document).ready(function(){    

    var targetWidth = 768;
if ( $(window).width() >= targetWidth) {     
  //Add your javascript for screens wider than or equal to 768 here
    $(".tablinks").on("click", function() {
    $("html, body").animate({scrollTop:850},500); // 200
}) 
    
}
else {
  //Add your javascript for screens smaller than 768 here
    $(".tablinks").on("click", function() {
    $("html, body").animate({scrollTop:700},500);
}) 
    
}

});
</script>
