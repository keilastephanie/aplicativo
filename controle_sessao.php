<?php
session_start();
if($_SESSION && isset($_SESSION['usuarioSistemaID']) && isset($_SESSION['usuarioSistemaNome']) && isset($_SESSION['usuarioSistemaLogin']))
{
    $usuarioLogadoID = $_SESSION['usuarioSistemaID'];
    $usuarioLogadoLogin = $_SESSION['usuarioSistemaLogin'];
    $usuarioLogadoNome = $_SESSION['usuarioSistemaNome'];   

}
else
{
    header("Location:index.php");
}
    
    
?>