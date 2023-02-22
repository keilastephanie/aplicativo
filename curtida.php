 <?php
 include_once("conexao.php");
 
    try
    {
        $sql= $conn->query("select * from curtida= $curtida");
         if($sql->rowCount()==+1)
           {
                 foreach($sql as $linha)
                {
                    $numero_curtida['curtida'];
                        
                }



            }

 }
 catch(PDOException $ex)
 {
     echo "erro".$ex->getMessage();
 }

 function curtir($conexao, $curtida) {

    $query = "update curtida set curtidas = curtidas + 1";

    return mysqli_query($conexao, $query);
  }
 ?>