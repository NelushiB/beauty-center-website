<?php $page = "contatti";
include('header.php'); ?>

<main>
   <div class="main-page">
      <div class="content">
         <div class="hero-page">
            <h1>Contatti</h1>
            <div class="icon-bar-flex">
               <div class="icon-bar"></div>
            </div>
            <!--icon-bar-flex-->
            <div class="breadcrumbs">
               <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><i class="fa fa-caret-right"></i></li>
                  <li class="current-page">Contatti</li>
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


<section class="contact-page spacer">
   <div class="row content">
      <div class="col-8 spacer-right">
         <h2>Prenota il tuo appuntamento</h2>
         <form name="form_prenotazione" action="#" method="post">
            <div class="input-form">
               <div id="input-city">
                  <label>Scegli la città:</label>
                  <input type="radio" name="citta" value="Milano" class="radio"> Milano
                  <input type="radio" name="citta" value="Verona" class="radio"> Roma
               </div>
               <!--end input-city-->
               <div class="form-group">
                  <label>Nome e Cognome*</label>
                  <input type="text" name="nome_cognome" class="input" id="fullname">
               </div>
               <!--end rectangle-->
               <div class="form-group" style="display:flex">
                  <div class="col-6" style="padding-right: 8px">
                     <label>Email*</label>
                     <input type="email" name="email" class="input contacts">
                  </div>
                  <!--end form-contacts-->
                  <div class="col-6">
                     <label>Telefono*</label>
                     <input type="tel" name="tel" class="input contacts">
                  </div>
                  <!--end form-contacts-->
               </div>
               <div class="form-group">
                  <label>Messaggi o richieste particolari</label>
                  <textarea name="messaggio"></textarea>
               </div>
               <!--end rectangle-->
            </div>
            <!--end input-form-->
            <h4><input type="checkbox" name="authorization" value="GDPR"> Autorizzo il trattamento dei dati personali
               n.679/16 (GDPR)</h4>
            <div class="div-button">
               <input type="submit" name="invia" value="Invia" class="button">
            </div>
            <!--end button-->
            <div class="divider"></div>
            <h4>I campi contrassegnati con * sono obbligatori</h4>
         </form>
      </div>
      <!--end col-8-->

      <div class="info col-6">
         <div class="info-box">
            <h2>Orari</h2>
            <div class="row-line">
               <div class="day col-6">
                  <p>Dom-Lun:</p>
               </div>
               <div class="hour col-6">
                  <p>Chiuso</p>
               </div>

            </div>
            <!--end row-line-->
            <div class="row-line">
               <div class="day col-6">
                  <p>Mar-Ven:</p>
               </div>
               <div class="hour col-6">
                  <p>10.00 - 13.00<br>
                     14.30 - 17.00</p>
               </div>
            </div>
            <!--end row-line-->
            <div class="row-line">
               <div class="day col-6">
                  <p>Sab:</p>
               </div>
               <div class="hour col-6">
                  <p>9.00 - 13.00</p>
               </div>
            </div>
            <!--end row-line-->
         </div>
         <!--end box-->

         <div class="info-box">
            <h2>Contatti</h2>
            <div class="address">
               <h3>Milano</h3>
               <ul>
                  <li>Via Corso Lodi, 9 - 20150 Milano (MI)</li>
                  <li><a href="tel:+3902593820586" title="n. di telefono">02-593820586</a></li>
                  <li><a href="mailto:bioluxemi@gmail.com" title="email">bioluxemi@gmail.com</a></li>
               </ul>
            </div>
            <!--end address-->
            <div class="address">
               <h3>Roma</h3>
               <ul>
                  <li>Via F. Sforza, 35 - 00042 Roma (RM)</li>
                  <li><a href="tel:+3906586921753" title="n. di telefono">06-586921753</a></li>
                  <li><a href="mailto:bioluxero@gmail.com" title="email">bioluxero@gmail.com</a></li>
               </ul>
            </div>
         </div>
         <!--end box-->
      </div>
      <!--end col-6-->
   </div>
   <!--end content-->
</section>

<?php include('footer.php'); ?>