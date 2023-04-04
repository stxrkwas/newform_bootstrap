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
                                <a class="nav-link active" aria-current="page" href="index.class.php">Cadastrar</a>
                                &nbsp;
                                <a class="nav-link" href="form2.php">Consultar</a>
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
            <div class="col bg-white container text-center">
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            Nome
                        </div>
                        <div class="col">
                            Telefone
                        </div>
                        <div class="col">
                            Origem
                        </div>
                        <div class="col">
                            Data do contato
                        </div>
                        <div class="col">
                            Observação
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                             <?php echo $info->getNome();?>
                        </div>
                        <div class="col">
                            <?php echo $info->getTelefone();?>
                        </div>
                        <div class="col">
                            <?php echo $info->getOrigem();?>
                        </div>
                        <div class="col">
                            <?php echo $info->getDatacont();?>
                        </div>
                        <div class="col">
                            <?php echo $info->getObs();?>
                        </div>
                    </div>
                </div>











                
                    <?php
                    //Importação
                    require_once("index.class.php");

                    //Nome da classe
                    class Saida{
                    //Objeto pessoa com visibilidade privada
                    private $info;
    
                    //Iniciando o método construtor
                    public function __construct(){
                    //Objeto pessoa que recebe a classe Pessoa()
                    $info = new Form();

                    //O método getNome recebe um valor
                    $info->setNome($_POST['nome'] . "<br>");
                    //Imprimir o valor recebido pelo método getNome
                     echo $info->getNome();

                    //O método getTelefone recebe um valor
                    $info->setTelefone($_POST['telefone'] . "<br>");
                    //Imprimir o valor recebido pelo método getTelefone
                    echo $info->getTelefone();
        
                    //O método getOrigem recebe um valor
                    $info->setOrigem($_POST['origem'] . "<br>");
                    //Imprimir o valor recebido pelo método getOrigem
                     echo $info->getOrigem();
        
                    //O método getDatacont recebe um valor
                    $info->setDatacont($_POST['datacont'] . "<br>");
                    //Imprimir o valor recebido pelo método getDatacont
                    echo $info->getDatacont();
        
                    //O método getObs recebe um valor
                    $info->setObs($_POST['obs'] . "<br>");
                    //Imprimir o valor recebido pelo método getObs
                    echo $info->getObs();

                }//Finalizando o método construtor

            }new Saida();

            ?>

            </div>
            <div class="col-1">
                &nbsp;
            </div>
        </div>
    </div>
    </div>
</body>
</html>
