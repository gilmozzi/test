var nav = document.querySelector('nav');

window.addEventListener('scroll', function(event) { 
    event.preventDefault();

    if (window.scrollY <= 50) { 
        nav.style.backgroundColor = 'transparent';
        nav.style.boxShadow = "0 0px 0px #000000";
        
    } else {
        nav.style.backgroundColor = '#000000c0';
        nav.style.boxShadow = "0 0 30px #000000";
    }
});


// define all UI variable
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.site-navbar ul');
const navLinks = document.querySelectorAll('.site-navbar a');

// load all event listners
allEventListners();

// functions of all event listners
function allEventListners() {
  // toggler icon click event
  navToggler.addEventListener('click', togglerClick);
  // nav links click event
  navLinks.forEach( elem => elem.addEventListener('click', navLinkClick));
}

// togglerClick function
function togglerClick() {
  navToggler.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
}

// navLinkClick function
function navLinkClick() {
  if(navMenu.classList.contains('open')) {
    navToggler.click();
  }
}