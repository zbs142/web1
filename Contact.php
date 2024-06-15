<?php
include("header.php")
?>





 <!-- Teaser start -->
 <section style="background: #AF1414;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12 pull-right">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides start -->
              <div class="carousel-inner">
                <div class="item active">
                  <h1 class="title" style="text-align: center;
    color: #fff;
    padding-bottom: 12px;
    font-weight: 900;">Contact Us</h1>

                      
                  </div>
                  
                  </div>
                  <!-- Wrapper for slides end -->

                </div>
              </div>
          

            </div>
          </div>
        </section>




        <!-- Contact start -->
        <section id="contact" class="container wow bounceInUp" data-wow-offset="50">
          <div class="row">
            <!-- <div class="col-md-12">
              <h2>Contact Us</h2>
            </div> -->
           
            <div class="col-md-12 col-xs-12 pull-left">
              <p class="contact-info">Avez-vous des questions ou avez-vous besoin d'informations supplémentaires ? <br>
               
                <form action="#" method="post" id="contact-form" name="contact-form">
                    <input type="hidden" name="action" value="send_contact_form"/>
                    <input type="text" class="website_hp" name="website_hp"/>

                  <div class="alert hidden" id="contact-form-msg"></div>

                  <div class="form-group">
                    <input type="text" class="form-control Prénom text-field" name="Prénom" placeholder="Prénom:">
                    <input type="text" class="form-control Nom de famille text-field" name="Nom de famille" placeholder="Nom de famille:">
                    <div class="clearfix"></div>
                  </div>

                  <div class="form-group">
                    <input type="tel" class="form-control Téléphone text-field" name="Téléphone" placeholder="Téléphone:">
                  </div>

                  <div class="form-group">
                    <input type="email" class="form-control email text-field" name="email" placeholder="Email:">
                  </div>

                  <div class="form-group">
                    <textarea class="form-control message" name="message" placeholder="Message:"></textarea>
                  </div>

                  <p style="text-align: center;"><a href="loading.php" type="submit" class="submit" name="submit" style="text-align: center; background: #af1414; color: #fff; padding: 10px; font-weight: 900;">Soumettre</a></p>
                


                </form>
              </div>

            </div>
            <br><br><br>
          </section>
          <!-- Contact end -->








<?php
include("footer.php")
?>