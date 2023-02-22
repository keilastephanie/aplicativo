
    
    <?php
		//print_r($_POST);
	//	exit;
     include_once("conexao.php");

	 
    
        $nome_usuario=$_POST['txtNome'];
		$login_usuario=$_POST['txtEmail'];
		$senha_usuario=$_POST['txtSenha'];
        

		try
		{
            $sql = $conn->prepare(
			"insert into usuario
			(nome_usuario,
			login_usuario,
			senha_usuario
           
            )
            values
            (
			:nome_usuario,
		    :login_usuario,
			:senha_usuario
           
            )");

            $sql->execute(array(
                ':nome_usuario'=>$nome_usuario,
			  	':login_usuario'=>$login_usuario,
				':senha_usuario'=>$senha_usuario
                
            ));
			if($sql->rowCount() == 1)
			{
				echo "<p>Dados cadastrados com sucesso</p>";
				echo "<p style='display:none' id='IDGerado'>".$conn->lastInsertId()."</p>";
			}
			else
			{
				echo "<p>Erro ao realizar o cadastro</p>";
			}
		}
		catch (PDOException $ex)
		{
			echo $ex->getMessage();
		}
		
		
		?>
