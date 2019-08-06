
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <title>Adicionar Usuario</title>

</head>
<body>
<?php
    require 'config.php';
    $id = 0;
    if(isset($_GET['id']) && empty($_GET['id']) == false){
        $id = addslashes($_GET['id']);
    }
    if(isset($_POST['nome']) && empty($_POST['nome']) == false){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $saldo = addslashes($_POST['saldo']);
        $cpf = addslashes($_POST['cpf']);
        $endereco = addslashes($_POST['endereco']);


      
        $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', saldo='$saldo',
        cpf = '$cpf',endereco = '$endereco' WHERE id = '$id'  ";
        $pdo->query($sql);

        header("Location: admin.php");
    }

   

        $sql = "SELECT * FROM usuarios WHERE id = '$id'";
        $sql = $pdo->query($sql);
        if($sql->rowCount()>0){
            $dado=$sql->fetch();
        }else{
            header("Location: admin.php");

        }

    
?>
    <div class="container">
    <h2>Editar usuario</h2>
        <form action="" method="post">
            Nome:<input type="text" name="nome" class="form-control" value="<?php echo $dado['nome']; ?>" /> 

            Email:<input type="text" name="email" class="form-control" value="<?php echo $dado['email']; ?>"/> 
            Endereço:<input type="text" name="endereco" class="form-control" value="<?php echo $dado['endereco']; ?>"/> 

            CPF:<input type="text" name="cpf" class="form-control" value="<?php echo $dado['cpf']; ?>"/> 


            Saldo:<input type="text" name="saldo" class="form-control" value="<?php echo $dado['saldo']; ?>"/> 

            
            <input type="submit" value="Atualizar dados">

        </form><br><br>
    </div>
</body>
</html>







 
