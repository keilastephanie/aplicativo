
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
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 50%;

}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body class="w3-light-grey w3-content" >
<footer class="w3-container w3-padding-32 w3-dark-grey"><br>
  
  
    
  </footer>
<div class="container"><br>
    <div class="row"><br>
 <div class="form-control"><br>
  
    <form action="" method="POST" ><br>
    <h4>Cadastro</h4>
      <div class="w3-section">
        <label>Nome</label>
        <input class="w3-input w3-border" type="text" p-2 name="txtNome" id="txtNome" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="txtEmail" id="txtEmail" required>
      </div>
      <div class="w3-section">
        <label>Senha</label>
        <input class="w3-input w3-border" type="text" name="txtSenha" id="txtSenha" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom" formaction="usuario_cadastrar.php"><i class="fa fa-paper-plane w3-margin-right"></i>Enviar</button>
      
    </form>
    </div>
</div><br>
  </div><br></div>

  <br>
  <br>
  <footer class="w3-container w3-padding-32 w3-dark-grey"><br>
  
  
    
  </footer>
  <div class="w3-third">
  


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
