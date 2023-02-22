

<?php 

include_once("conexao.php");
 
$numero_curtida=$_POST['curtida'];
$id_curtida=$_POST[''];

 try{
    $sql=$conn->prepare(
        "insert into curtida(
            id_curtida,
            numero_curtida
            )
            values
            (:numero_curtida)"

    );
    $sql->execute(array(
        ':id_curtida'=>$id_curtida,
        ':numero curtida'=>$numero_curtida

    ));
    if($sql->rowCount()==1)
    {
        echo"curtida cadastrada";
    }
 }
 catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }






?>