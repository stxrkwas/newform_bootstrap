<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>BootStrap</title>
</head>
<body class="bg-body-secondary">
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
                                <a class="nav-link" href="saida.php">Consultar</a>
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
            <div class="col bg-white">
                <p class="text-start fs-5"><b>Cadastrar - Agenadamento de Potenciais Clientes</b></p>
                <p class="text-start fs-6">Sistema utilizado para agendamento para agendamento de serviços.</p>
                <p>
                    <form method= "POST" action= "saida.php">
                        <div class="mb-3 text-start">
                            <label for="exampleInputEmail1" class="form-label">Nome:</label>
                            <input class="form-control" id="Nome" name="Nome" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 text-start">
                            <label for="exampleInputEmail1" class="form-label">Telefone:</label>
                            <input type="tel" class="form-control" id="Telefone" name="Telefone" placeholder="(xx) xxxxx-xxxx" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 text-start">
                            <label for="exampleInputEmail1" class="form-label">Origem:</label>
                            <select class="form-select" id="Origem" name="Origem" aria-label="Default select example">
                                <option selected>Celular</option>
                                <option value="1">Whatsapp</option>
                                <option value="2">Telefone Fixo</option>
                            </select>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="exampleInputEmail1" class="form-label">Data do Contato:</label>
                            <input type="date" class="form-control" id="Datacont" name="Datacont" placeholder="dd/mm/aaaa" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 text-start">
                            <label for="exampleInputEmail1" class="form-label">Observação:</label>
                            <textarea class="form-control" placeholder="" id="Obs" name="Obs" style="height: 100px"></textarea>
                        </div>
                        <div class="mb-3 text-start">
                            <input type="submit">
                            <label class="btb btn-primary" for="btn-check"></label>
                        </div>
                    </form>
                </p>
            </div>
            <div class="col-1">
                &nbsp;
            </div>
        </div>
    </div>
    </div>
</body>
</html>
