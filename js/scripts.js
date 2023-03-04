/*!
* Start Bootstrap - Grayscale v7.0.5 (https://startbootstrap.com/theme/grayscale)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-grayscale/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});


//our code for js//

document.getElementById("input-orgName").addEventListener("change", function(){
    var org = document.getElementById("input-orgName").value;
    console.log(org);
    var email = "";
    switch(org){
        case "ASHRAE":
            email = "Lynch.Scott@ptcollege.edu";
            break;
        case "Anime":
            email = "Cottrell.Lee@ptcollege.edu";
            break;
        case "ASTA":
            email = "Bellemare.Mark@ptcollege.edu";
            break;
        case "ASME":
            email = "Otteni.Nicholas@ptcollege.edu";
            break;
        case "Creative Writing Club":
            email = "Dimperio.Cristina@ptcollege.edu";
            break;
        case "Criminal Justice Club":
            email = "Wintruba.Shannon@ptcollege.edu";
            break;
        case "CyberSecurity Club":
            email = "Russell.Michael@ptcollege.edu";
            break;
        case "Culinary Club":
            email = "Russo.Dave@ptcollege.edu";
            break;
        case "DECA":
            email = "Brady.Tracie@ptcollege.edu";
            break;
        case "Drama Club":
            email = "Monigold.Amber@ptcollege.edu";
            break;
        case "Film Club":
            email = "Zito.Lauren@ptcollege.edu";
            break;
        case "Dungeons and Dragons":
            email = "Cottrell.Lee@ptcollege.edu";
            break;
        case "Gaming Club":
            email = "Hertz.David@ptcollege.edu";
            break;
        case "Gay Straight Alliance (GSA)":
            email = "McGarvey.Shane@ptcollege.edu";
            break;
        case "Magic Club (The Gathering)":
            email = "Hertz.David@ptcollege.edu";
            break;
        case "IT Research Certification Club":
            email = "Mutale.Wilfred@ptcollege.edu";
            break;
        case "Recharge":
            email = "McDermott.Tom@ptcollege.edu";
            break;
        case "Software Development Club":
            email = "Hertz.David@ptcollege.edu";
            break;
        case "Women in STEAM":
            email = "Eltringham.Charles@ptcollege.edu";
            break;

    }
    document.getElementById("input-email").value = email;
});