
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
<?php

include_once("conexao.php");

//print_r($_POST);
//exit;

$nome_contato=$_POST['txtNome'];
$email_contato=$_POST['txtEmail'];
$obs_contato=$_POST['txtObs'];

try
{
    $sql=$conn->prepare(" insert into contato
    (
       nome_contato,
 
       email_contato,

       obs_contato
       )
       values
       (
        :nome_contato,
        
        :email_contato,
      
        :obs_contato
        
      )"
    );
    $sql->execute( array(
        ':nome_contato'=>$nome_contato,
       
        ':email_contato'=>$email_contato,
    
        ':obs_contato'=>$obs_contato
    ));
    if($sql->rowCount()==1)
    {
        echo "<p> contato realizado com sucesso </p>";
        echo "<p id='IDGerado'>".$conn->lastInsertId()."</p>";
    }
    else
    {
        echo" erro ao realizar o cadastro";
    }
   

}
catch(PDOException $ex)
{
  echo $ex->getMessage();
}

?>


</body>
</html>
