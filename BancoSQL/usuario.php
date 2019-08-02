<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina do usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/form.css" />
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
</head>

<body>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Minhas informações <i class='fas fa-user'></i></a>
   
  </div>
</nav>

  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

        <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-4  ">

        <center>
            <h1>Minhas informações <i class="fas fa-user"></i></h1>
        </center>
        <?php
            require 'config.php';
            $id = $_GET['id'];

            $sql = "SELECT * FROM usuarios WHERE id = '$id'";
            $sql = $pdo->query($sql);
            if($sql->rowCount()>0){
                $dado=$sql->fetch();
            
            echo'<h2><font color="white">Nome: '.$dado['nome'].'</h2>';
            echo'<h2><font color="white">E-mail: '.$dado['email'].'</h2>';
            echo'<h2><font color="white">CPF: '.$dado['cpf'].'</h2>';
            echo'<h2><font color="white">Endereço: '.$dado['endereco'].'</h2>';
            echo'<h2><font color="white">Saldo: R$'.$dado['saldo'].'</h2>';
            }
        ?>

        </div>
         </div>
    </div>
    <div class="tab-pane fade show " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

    </div>
    </div>

</div>
           
    </nav>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>

</html>