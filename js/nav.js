// JavaScript Document

let megamenu = (function() {
    let productsLI = document.querySelectorAll('.products');
    // let bibliotecnicaLI = document.querySelectorAll('.bibliotecnica');
    let fadeLIp = document.querySelectorAll('.fade-link-p');
    let fadeLI = document.querySelectorAll('.fade-link');
    let fadeLI2p = document.querySelectorAll('.fade-link-2-p');
    let fadeLI2 = document.querySelectorAll('.fade-link-2');
    let hoverOnceProducts, hoverOnceBibliotecnia;
   
        productsLI[0].addEventListener('mouseenter', function() {
            hoverOnceProducts = true;
            
            if (hoverOnceProducts === true) {
                setTimeout(function() {
                    productsLI[0].classList.remove('active');
                    Array.from(fadeLIp).forEach(li => {
                        li.classList.remove('fade-link-p');
                    });
                    Array.from(fadeLI2p).forEach(li => {
                        li.classList.remove('fade-link-2-p');
                    });
                }, 1500);
                
            }

        });

//        bibliotecnicaLI[0].addEventListener('mouseenter', function() {
//            hoverOnceBibliotecnia = true;
//            
//            if (hoverOnceBibliotecnia === true) {
//                setTimeout(function() {
//                    bibliotecnicaLI[0].classList.remove('active');
//                    Array.from(fadeLI).forEach(li => {
//                        li.classList.remove('fade-link');
//                    });
//                    Array.from(fadeLI2).forEach(li => {
//                        li.classList.remove('fade-link-2');
//                    });
//                }, 1500);
//                
//            }
//
//        });
})();

let megamenuSmall = (function() {

    let toggler = document.querySelector('.toggler');
    let topLevelLinks = document.querySelector('.top-level-links');
    let children = topLevelLinks.children;
    let productsLI = document.querySelectorAll('.products');

    let menuOpen = false;

    toggler.addEventListener('click', function() {
        if (window.innerWidth < 1000) {
            if (!menuOpen) {
                topLevelLinks.classList.remove('zero-height');
                topLevelLinks.classList.add('full-height');
				console.log(children);
                Array.from(children).forEach(child => {
                    child.classList.remove('fadeOut');
                    child.classList.add('fadeIn');
                });
                menuOpen = true;
            } else if (menuOpen) {
                topLevelLinks.classList.remove('full-height');
                topLevelLinks.classList.add('zero-height');
                Array.from(children).forEach(child => {
                    child.classList.remove('fadeIn');
                    child.classList.add('fadeOut');
                });
                menuOpen = false;
            }
        }
    });

    let firstLevelBtn = document.querySelectorAll('.menu-btn');

    Array.from(firstLevelBtn).forEach(btn => {
        btn.addEventListener('click', function() {
            let dataID = btn.dataset.id;
            let submenu = btn.children;
            Array.from(submenu).forEach(sm => {
                if (sm.className === dataID) {
                    if (window.innerWidth < 1000) {
                        sm.classList.add('moveRight');
                    }
                }
            })
        });
    });

    let secondLevelBtn = document.querySelectorAll('.menu-btn-2');

    Array.from(secondLevelBtn).forEach(btn => {
        btn.addEventListener('click', function() {
            let lastLevel = Array.from(btn.children);           

            if (window.innerWidth < 1000) {
                for (let i = 0; i < lastLevel.length; i ++) {
                    if (lastLevel[i].className === 'list' || lastLevel[i].className === 'list-image') {
                        lastLevel[i].classList.add('moveRight');
                    }
                }
            }
        });
    });

    let goBackBtn = document.querySelectorAll('.mobile-title');

    Array.from(goBackBtn).forEach(btn => {
        btn.addEventListener('click', function() {
            if (window.innerWidth < 1000) {
                let parent = Array.from(btn.parentNode.parentNode.children);
                parent.forEach(child => {
                    console.log(child);
                    if (child.className.includes('list') || child.className.includes('list-image') || child.className.includes('products-dropdown') || child.className.includes('bibliotecnica-dropdown')) {
                        child.classList.remove('moveRight');
                        child.classList.add('moveLeft');

                        let removeClass = setTimeout(function() {
                            child.classList.remove('moveLeft');
                        }, 1500);
                    }

                })



            }

        });
    });
})();

//let documentHeight = (function() {
//
//    let container = document.querySelector('.section1');
//    let container2 = document.querySelector('.section2');
//    let card1 = document.querySelector('.card1');
//
//    window.onscroll = function() {
//        //console.log(window.scrollY);
//        scrollFn();
//        
//    }
//
//    let scrollFn = () => {
//
//        if (window.scrollY > 520) {
//            container.classList.add('slowlyvisible');
//            
//        } 
//
//        if (window.scrollY > 950) {
//            container2.classList.add('slowlyvisible');
//        }
//
//        if (window.scrollY > 3500) {
//            card1.classList.add('slowlyvisible');
//        }
//    };
//    
//})();


