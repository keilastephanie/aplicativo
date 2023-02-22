<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<body>



<form action="/action_page.php" method="post">
    <h2>Login </h2><br>
  <div class="imgcontainer">
    <img src="imagem/logo.png" alt="Avatar" class="avatar">
  </div>
 <div class="w3-container w3-padding-32 w3-dark-grey">
  <div class="container"><br>
    <label for="uname"><b>Email</b></label><br>
    <input type="text" placeholder="Digite o Email" name="txtLogin" id="txtLogin" required><br>

    <label for="psw"><b>Senha</b></label><br>
    <input type="password" placeholder="Digite a Senha" name="txtSenha"id="txtSenha" required><br>
        
    <button type="submit"style="background-color:#0d0d0d;" formaction="login1.php">Login</button><br>
    

  </div><br>

  <div class="container" style="background-color:#f1f1f1"><br>
<label><br>
    <span class="psw">Cadastre-se <a href="frmcadastro.php"> Aqui</a></span><br>
    </label><br>
  <label for=""><br>
     <span class="psw">Esqueceu a  <a href="contato1.html">Senha?</a></span><br>
     </label><br>
  </div><br>
</form>

</body>
</html>