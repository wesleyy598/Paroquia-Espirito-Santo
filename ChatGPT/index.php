<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paróquia Espírito Santo</title>

    <!-- Inclua os arquivos do Bootstrap -->
    <link rel="stylesheet" href="/styles.css">

    <!-- Inclua os arquivos do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Inclua os arquivos do Font Awesome 
    <script src="https://kit.fontawesome.com/SE></script> -->

    <!-- Inclua os arquivos do script -->
    <script src="/script.js"></script>
</head>
<header>
    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Paróquia Espírito Santo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        A Paróquia
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Nossa História</a>
                        <a class="dropdown-item" href="#">Comunidades</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Atividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notícias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item ml-auto">
                    <!-- Botão para abrir o modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Entrar
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">
                                        Entrar em Paróquia Espírito Santo
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    E-mail e senha
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        Registrar-se
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        Entrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com/paroquiaespiritosanto_ssa/"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.youtube.com/channel/UCLb4dTSNJSYO_sWLr1YnWgg"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/paroquiaes/?locale=pt_BR"><i class="fab fa-facebook"></i></a>
                </li>
            </ul>-->
        </div>
    </nav> 
</header>
<body>
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">

            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">

            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">

            </li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://wowslider.com/sliders/demo-77/data1/images/idaho239691_1920.jpg" alt="Primeiro slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://wowslider.com/sliders/demo-77/data1/images/idaho239691_1920.jpg" alt="Segundo slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://wowslider.com/sliders/demo-77/data1/images/idaho239691_1920.jpg" alt="Terceiro slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">

            </span>
            <span class="sr-only">
                Anterior
            </span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true">

            </span>
            <span class="sr-only">
                Próximo
            </span>
        </a>
    </div>

    <!-- Banner -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Bem-vindo à Minha Igreja Católica</h1>
            <p>Encontre a paz e a felicidade em nossa comunidade</p>
        </div>
    </div>

    <!-- Conteúdo principal -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Sobre Nós</h2>
                <p>Nossa igreja foi fundada há mais de 100 anos e tem uma rica história. Somos uma comunidade vibrante e acolhedora que acolhe pessoas de todas as idades e origens.</p>
            </div>
            <div class="col-md-4">
                <h2>Horários das Missas</h2>
                <p>Segunda a sexta: 8h, 12h e 18h</p>
                <p>Sábado: 8h, 12h e 16h</p>
                <p>Domingo: 8h, 10h, 12h e 18h</p>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Título do modal</h4>
            <<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Corpo do modal
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar mudanças</button>
          </div>
        </div>
      </div>
    </div>
</body>
    
<!-- Rodapé -->
<footer class="bg-dark text-center text-white">
    <div class="container">
        <!--<p>Paróquia Espiríto Santo</p>-->
        <p>© 2023 - Paróquia Espiríto Santo. Todos os direitos reservados.</p>
    </div>
</footer>