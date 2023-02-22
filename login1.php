<?php

 include_once("conexao.php");
   $usuarioLogado = "";
   $tentouEntrar = 0;

   if($_POST)
   {
    $tentouEntrar = 1;
    $login=$_POST['txtLogin'];
    $senha =$_POST ['txtSenha'];
    
    $sql = $conn->query("select * from usuario
         where
          login_usuario ='".$login."' and
          senha_usuario ='".$senha."'");

    if($sql->rowCount()==1)
    {
        foreach($sql as $linha)
        {
            $usuarioLogado = $linha['login_usuario'];

            session_start();

            $_SESSION ['usuarioSistemaID']= $linha ['id_usuario'];
            $_SESSION ['usuarioSistemaLogin'] = $linha ['login_usuario'];
            $_SESSION['usuarioSistemaNome'] =$linha ['nome_usuario'];
            
        }
    }
    
    if($usuarioLogado == "" && $tentouEntrar == 1)
     {
    echo "Usuário ou senha inválido";
     
    
    }else if($usuarioLogado != "" && $tentouEntrar == 1){
    echo "Usuário seja bem vindo";
    header("Location:teste.php");
     }
    else
    {
        echo" usuario ou senha Inválido";
    }
    
   }
?>