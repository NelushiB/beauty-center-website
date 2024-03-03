$(document).ready(function () {
   $('.navbar').click(function () {
      $('.nav').toggleClass('show');
   });

   $(window).scroll(function () {
      if ($(window).scrollTop() > 0) {
         $('.scroll-header').addClass('sticky');
      } else {
         $('.scroll-header').removeClass('sticky');
      }
   });

   $('.fade').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInUp',
      offset: 100
   });

   function goToByScroll(id) {
      $('html,body').animate({ scrollTop: $("#" + id).offset().top }, 'slow');
   }
   $('.top').click(function () {
      goToByScroll("top-header");
      return false;
   });

});

document.addEventListener('DOMContentLoaded', function() {

   let titles = document.querySelectorAll('.menu li');
   let categoryButtons = document.querySelectorAll('.category');
   let categoryCards = document.querySelectorAll('.services .col-4');
   console.log(categoryCards)


   // Inserimento classe active al li selezionato
   titles.forEach(title => {
      title.addEventListener('click', function() {
      document.querySelector('.active')?.classList.remove('active');
      title.classList.add('current');   
      });
   });

   // Filtro i servizi per categoria
   categoryButtons.forEach(button => {
      button.addEventListener('click', function () {
         const selectedCategory = button.dataset.category;
         filterPosts(selectedCategory);
         changeActivePosition(button);
      });
   })

   function filterPosts(category) {
      categoryCards.forEach(post => {
         if (category === 'all' || post.classList.contains(category)) {
            post.style.display = 'block';
         } else {
            post.style.display = 'none';
         }
      });
   }

   function changeActivePosition(activeButton) {
      categoryButtons.forEach(button => {
         button.classList.remove('active-category');
      });
      activeButton.classList.add('active-category');
  }
});

   







