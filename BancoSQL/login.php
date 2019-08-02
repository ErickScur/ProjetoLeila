<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/form.css" />
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
</head>

<body>
<?php
        if(isset($_POST['email']) && empty($_POST['email']) == false){
            $email=addslashes($_POST['email']);
            $senha=addslashes($_POST['senha']);

            $dsn = "mysql:dbname=blog;host=localhost";
            $dbuser = "root";
            $dbpass = "";

            try {
                 $db = new PDO($dsn,  $dbuser,  $dbpass);
                 $sql = $db->query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha' ");

                 if($sql->rowCount() > 0){
                    $dado = $sql->fetch();
                    header("Location: usuario.php?id=".$dado['id']);

                 }else{
                    echo "<script type=\"text/javascript\">alert('Usuario ou senha incorretos');</script>";
                }

            } catch(PDOException $e)  {

	             echo "Conexão com o banco falhou: ".$e->getMessage();
            }
        }

?>    


    
    
    <div class="container-fluid h-100">

        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">

                <center>
                    <h1>Login</h1>
                </center>
                <form action="" method="POST">

                    <div class="form-group">
                        <input _ngcontent-c0="" class="form-control form-control-lg" name="email" placeholder="Email" type="text">
                    </div>


                    <div class="form-group">
                        <input class="form-control form-control-lg" name="senha"placeholder="Senha" type="password">
                    </div>
                    <div class="form-group">
                        <input  class="btn btn-info btn-lg btn-block" type="submit" value="Login">

                    </div>
                    <a href="cadastrar.php">Não possui uma conta?</a>

                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>

</html>