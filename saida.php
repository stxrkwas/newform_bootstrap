<?php 

require_once("index.class.php");

    $Form = new Form();
    
    $Form->setNome($_POST['Nome']);
    $Form->setTelefone($_POST['Telefone']);
    $Form->setOrigem($_POST['Origem']);
    $Form->setDatacont($_POST['Datacont']);
    $Form->setObs($_POST['Obs']);
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>BootStrap</title>

    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,td {
        text-align: center;
        padding: 10px;
        vertical-align: middle;
    }

    input,textarea {
        font-weight: normal;
    }
    </style>
</head>
<body class="bg-body-tertiary">
    <div class="container text-center bg-body-tertiary">
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>
            <div class="col bg-primary">
                <nav class= "navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportContent" aria-controls="navbarSupportContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="form.php">Cadastrar</a>
                                &nbsp;
                                <a class="nav-link" href="#">Consultar</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-1">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>
            <div class="col bg-white">
                &nbsp;
            </div>
            <div class="col-1">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>
            <div class="col bg-white d-flex justify-content-center">
                <div><br>
                    <h3 class="text-center fs-5">Consultar - Contatos Agendados</h3>
                    <table width = "50%" border="0" cellpadding="10" cellspacing="1" align="center" class="mb-3">
                        <tr bgcolor="007BFF">
                            &nbsp;
                            <th>Nome</th>
                            &nbsp;
                            <th>Telefone</th>
                            &nbsp;
                            <th>Origem</th>
                            &nbsp;
                            <th>Contato</th>
                            &nbsp;
                            <th>Observação</th>
                            &nbsp;
                        </tr>
                        <tr bgcolor="white">
                            <td><?php echo $Form->getNome();?></td>
                            <td><?php echo $Form->getTelefone();?></td>
                            <td><?php echo $Form->getOrigem();?></td>
                            <td><?php echo $Form->getDatacont();?></td>
                            <td><?php echo $Form->getObs();?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-1">
                &nbsp;
            </div>
        </div>
    </div>
    </div>
</body>
</html>
