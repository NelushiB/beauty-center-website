<?php $page="servizi"; include('header.php'); ?>

<main>
   <div class="main-page">
      <div class="content">
         <div class="hero-page">
            <h1>Trattamento corpo</h1>
            <div class="icon-bar-flex">
               <div class="icon-bar"></div>
            </div>
            <!--icon-bar-flex-->
            <div class="breadcrumbs">
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><i class="fa fa-caret-right"></i></li>
                  <li><a href="servizi.php">Servizi</a></li>
                  <li><i class="fa fa-caret-right"></i></li>
                  <li class="current-page">Trattamento corpo</li>
               </ul>
            </div>
            <!--end breadcrumbs-->
         </div>
         <!--end hero-->
      </div>
      <!--end content-->
   </div>
   <!--end main-->
</main>

<section class="spacer">
   <div class="content contenitor fade">
      <article class="col-8">
         <div class="article">
            <div class="article-content fade">
               <img src="img/body_care.jpg" alt="Body Care">
               <div class="h2-title fade">
                  <h2>Trattamento corpo</h2>
                  <div class="h2-icon-bar-flex">
                     <div class="h2-icon-bar"></div>
                  </div>
                  <!--end h2-icon-bar-flex-->
               </div>
               <!--end h2-title-->
               <div class="text-block fade">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                     aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                     culpa qui officia deserunt mollit anim id est laborum.</p>
               </div>
               <!--end text-block-->
               <div class="text-block fade">
                  <h3>BENEFICI</h3>
                  <ul>
                     <li>Elimina tutte le impurità</li>
                     <li>Attiva la circolazione</li>
                     <li>Previene la formazione di inestetismi</li>
                  </ul>
               </div>
               <div class="img-block text-block">
                  <div class="ig-image">
                     <img src="img/bodyflower.jpeg" alt="body flowers">
                  </div>
                  <div class="ig-image">
                     <img src="img/wellness.jpeg" alt="wellness">
                  </div>
                  <div class="ig-image">
                     <img src="img/oil-treatment.jpeg" alt="oil treatment">
                  </div>
               </div>
               <!--end text-block-->
               <div class="text-block fade">
                  <h3>COME VENGONO EFFETTUATI I VARI TRATTAMENTI?</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                     aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                     culpa qui officia deserunt mollit anim id est laborum.</p>
               </div>
               <!--end text-block-->
               <div class="fade">
                  <h3>Listino prezzi</h3>
                  <div class="price-list">
                     <div class="single-service col-4">
                        <p><strong>Trattamento Anticellulite</strong></p>
                        <p>30€</p>
                        <p style="font-size: 14px;">45 min</p>
                     </div>
                     <!-- end single-service-->
                     <div class="single-service col-4">
                        <p><strong>Scrub Corpo</strong></p>
                        <p>25€</p>
                        <p style="font-size: 14px;">30 min</p>
                     </div>
                     <!-- end single-service-->
                  </div>
                  <!--end price-list-->
               </div>
            </div>
            <!--end article content-->
         </div>
         <!--end article-->
      </article>
      <aside class="col-4">
         <div class="sidebar">
            <div class="block fade">
               <h2>Cerca</h2>
               <input type="search" name="search">
            </div>
            <!--end block-->
            <div class="block fade">
               <h2>Prenota</h2>
               <div class="box">
                  <div class="sidebar-form">
                     <label>Nome e Cognome*</label>
                     <input type="text" name="nome_cognome" class="input-form">
                     <label>Email*</label>
                     <input type="email" name="email" class="input-form">
                     <label>Telefono*</label>
                     <input type="tel" name="tel" class="input-form">
                     <label>Messaggi o richieste particolari</label>
                     <textarea name="messaggio"></textarea>
                  </div>
                  <!--end side-bar form-->
                  <p><input type="checkbox" name="authorization" value="GDPR" class="checkbox"> Ho letto e accetto i
                     termini e le condizioni</p>
                  <a href="#" class="button">Prenota ora</a>
               </div>
               <!--end box-->
            </div>
            <!--end block-->
            <div class="block fade">
               <h2>Categorie</h2>
               <nav>
                  <ul class="categories">
                     <li><a href="#" title="viso">Viso</a></li>
                     <li><a href="#" title="epilazione">Epilazione</a></li>
                     <li><a href="#" title="makeup">Make-up</a></li>
                     <li><a href="#" title="massaggi">Massaggi</a></li>
                  </ul>
               </nav>
            </div>
            <!--end block-->
         </div>
         <!--end sidebar-->
      </aside>
   </div>
   <!--end content-->
</section>

<?php include('footer.php'); ?>