<!DOCTYPE html>
<html>
<head>
<title>home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">




  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Entre em contato</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>contato@Buscapets.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Av.Brigadeiro Faria Lima, 889 - Jardim Cocaia, Guarulhos - SP, 07130-000</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>(11) 99429-9088</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="txtNome" id="txtNome" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="txtEmail" id="txtEmail" required>
      </div>
      <div class="w3-section">
        <label>Messagem</label>
        <input class="w3-input w3-border" type="text" name="txtObs" id="txtObs" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom" formaction=""><i class="fa fa-paper-plane w3-margin-right"></i>Enviar</button>
      
    </form>
    
  </div>
  <div class="w3-third">
            <h2>Mapa</h2>
            <div class="form-control">
            <iframe style="border: 2px; width: 99%; height: 200px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14640.459544164687!2d-46.515212953381344!3d-23.45632007766274!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef536a90e8bed%3A0x7bbdcab06e2906b4!2sAv.Brigadeiro%20Faria%20Lima%2C%20889%20-%20Jardim%20Cocaia%2C%20Guarulhos%20-%20SP%2C%2007130-000!5e0!3m2!1spt-BR!2sbr!4v1659549230784!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen></iframe>
          </div>
          </div>
            </div>
  <!-- Footer -->
   <?php include_once("rodape.php");?>

<!-- End page content -->
</div>
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
