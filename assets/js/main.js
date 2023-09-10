document.addEventListener("DOMContentLoaded", function() {

  var swiper = new Swiper(".testimonials-slider", {
    pagination: {
      el: ".swiper-pagination",
    },
    autoplay: {
      delay: 4500,
      disableOnInteraction: true,
      loop: true,
    },  
  });

  // Mobile hamburger animations
  const navIcons = document.querySelector('.nav-icon1,.nav-icon2,.nav-icon3,.nav-icon4')
  navIcons.addEventListener("click", function(){
    navIcons.classList.toggle("open");
  });
  
  // Show and hide mobile menu when hamburger is clicked on
  const navBurg = document.querySelector('.navigation-burger');
  navBurg.addEventListener("click", function () { 
    const mobileNav = document.querySelector(".mobile-navigation__routes");
    if (mobileNav.style.display === "block") {
      mobileNav.style.display = "none";
    } else {
      mobileNav.style.display = "block";
    }
  }, false);

  let accordion = document.getElementsByClassName("accordion__question");
  let accordionIndex;
  
  for (accordionIndex = 0; accordionIndex < accordion.length; accordionIndex++) {
    accordion[accordionIndex].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }  
});


