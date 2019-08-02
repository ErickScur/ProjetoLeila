<!DOCTYPE html>
<html lang="pt">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Controle de Usuarios</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <?php
                require 'config.php';
        ?>
</head>
<body>

<div class="container">
<table class="table table-striped table-hover table-bordered">
<?php
       
       
        echo  '<th>Nome</th>';
        echo '<th>Email</th>';
        echo '<th>Saldo</th>';
        echo '<th>Endereço</th>';
        echo '<th>CPF</th>';
        echo '<th>Ações</th>';
        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->query($sql);
        if($sql->rowCount()> 0 ){
                foreach($sql->fetchAll() as $usuario){
                        echo '<tr>';
                        echo '<td>'.$usuario['nome'].' </td>';
                        echo '<td>'.$usuario['email'].' </td>';
                        echo '<td>'.$usuario['saldo'].' </td>';
                        echo '<td>'.$usuario['endereco'].' </td>';

                        echo '<td>'.$usuario['cpf'].' </td>';

                        echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
                        echo '</tr>';

                }
        }
       
        
         echo '<a href="adicionar.php" class="btn btn-primary">Adicionar novo Usuario</a>';
         echo '<a href="index.html" class="btn btn-primary">Voltar ao index</a>';


        
         ?>
          </table>
</div> 
</body>
</html>


