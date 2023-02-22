<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/bootstrap.css.map">
 
 
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>
 <body class="w3-light-grey w3-content " style="max-width:1600px">

<div id="row">
<div class="col-sm-12">
  <div class="type-js headline p-4">
    <h4>Galeria dos Cães Para Adoção</h4>
    <div class="w3-row" >
    <div class=" w3-col s4">
   <?php
    
    include_once("conexao.php");
        try
        {
            $sql=$conn->query("select * from animal");

            if($sql->rowCount()>0)
                {
                  foreach($sql as $linha)
                    {
                        $id_animal=$linha['id_animal'];
                        $nome_animal=$linha['nome_animal'];
                        $sexo_animal=$linha['sexo_animal'];
                        $pelagem_animal=$linha['pelagem_animal'];
                        $porte_animal=$linha['porte_animal'];
                        $datacadastro_animal=$linha['datacadastro_animal'];
                        $idade_animal=$linha['idade_animal'];
                        $sinais_animal=$linha['sinais_animal'];
                        $chip_animal=$linha['chip_animal'];
                        $vacina_animal=$linha['vacina_animal'];
                        $castracao_animal=$linha['castracao_animal'];
                        $coleiraidentificacao_animal =$linha['coleiraidentificacao_animal'];
                        $img_animal=$linha['img_animal'];
                        $obs_animal=$linha['obs_animal'];
                        $status_animal=$linha['status_animal'];


                        echo '
                        <div class="col-lg-4 menu-item">
                            <a href=> <img src="'.$img_animal.'" class="menu-img img-fluid"   alt=""></a>
                            <h4>'.$nome_animal.'</h4>
                            <h4>'.$sexo_animal.'</h4>
                            <h4>'.$pelagem_animal.'</h4>
                            <h4>'.$porte_animal.'</h4>
                            <h4>'.$datacadastro_animal.'</h4>
                            <h4>'.$idade_animal.'</h4>
                            <h4>'.$sinais_animal.'</h4>
                            <h4>'.$chip_animal.'</h4>
                            <h4>'.$vacina_animal.'</h4>
                            <h4>'.$castracao_animal.'</h4>
                            <h4>'.$coleiraidentificacao_animal.'</h4> 
                            <h4>'.$obs_animal.'</h4>
                            <h4>'.$status_animal.'</h4>
                            
                      
                           
                    
                        </div>';

                    }
                }
            else
            {
                echo "nao existe animal";
            }

        }
        catch(PDOException $ex)
         { 
            echo ("erro:".$ex->getMessage());
   
         }
 
?>  
</div>
             </div>
    </div>
    </div>
    
    </div>
    <?php include_once("rodape.php");?> 
  

<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery-3.6.0.js"></script>
<<script>
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

    
