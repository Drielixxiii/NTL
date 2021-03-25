<!-- http://localhost/NTL/ponto.php -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>NTL - Ponto Eltetrônico</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/" />
    <link href="css/minhaconta.css" rel="stylesheet" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet" />
    <link href="css/navbar.css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/favicon (1).ico " />
</head>

<body>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Entrar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="loginEmail">Email</label>
                            <input type="email" class="form-control" id="loginEmail" />
                        </div>
                        <div class="form-group">
                            <label for="loginSenha">Senha</label>
                            <input type="password" class="form-control" id="loginSenha" />
                        </div>
                        <small class="form-text text-muted">Esqueceu a senha? <a href="#">Clique aqui</a>.</small>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Fechar
                    </button>
                    <button type="button" class="btn btn-primary">Entrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="sidebar" data-color="white" data-active-color="danger" id="#sidenavegation">
            <div class="logo">
                <a href="#" class="simple-text logo-normal text-center">
                    Ponto Eletrônico
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="./perfil.html">
                            <i><img src="img/resume.png" /></i>
                            <p>Perfil</p>
                        </a>
                    </li>
                    <li>
                        <a href="./ponto.php">
                            <i><img src="img/clock.png" /></i>
                            <p>Ponto Eletrônico</p>
                        </a>
                    </li>
                    <li>
                        <a href="./dashboard.html">
                            <i><img src="img/home.png" /></i>
                            <p>Relatório</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel" style="height: 100vh">
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-black" style="background-color: black;">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenavegation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="home.html">
                            <!-- <img src="img/logo.png" style="width: 150px" /> -->
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav me-auto mb-2 ms-5 mb-md-0" style="font-family: raleway">
                            <li class="nav-item">
                                <a class="nav-link" href="home.html">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Portifolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Parcerias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contatos</a>
                            </li>
                        </ul>
                        <form>
                            <div class="input-group">
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="row">
                    <div class="col-md-12" style="background-color: #242424;">
                        <div class="card" style="background: black;">
                            <div class="card-header" style="color: white;">
                                <h5 class="card-title">Bom Dia!</h5>
                                <h6 class="card-title">
                                    Hoje é <?php
                                            setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese.utf-8');
                                            date_default_timezone_set('America/Sao_Paulo');
                                            echo utf8_encode(ucwords(strftime('%A, ')));
                                            echo utf8_encode(strftime('%d de %B de %Y.', strtotime('today')));
                                            ?>
                                </h6>
                                <h6>
                                    <script>
                                        var myVar = setInterval(myTimer, 1000);

                                        function myTimer() {
                                            var d = new Date(),
                                                displayDate;
                                            if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
                                                displayDate = d.toLocaleTimeString('pt-BR');
                                            } else {
                                                displayDate = d.toLocaleTimeString('pt-BR', {
                                                    timeZone: 'America/Sao_Paulo'
                                                });
                                            }
                                            document.getElementById("hora").innerHTML = displayDate;
                                        }
                                    </script>
                                    <div id="hora"></div>
                                </h6>
                            </div>

                            <style>
                                .botaoponto {
                                    border-radius: 5px;
                                    height: 90px;
                                    width: 200px;
                                    color: white;
                                    font-size: 16px;
                                    font-weight: bold;
                                    background: #38a3a5;
                                }

                                .botaoponto:hover {
                                    background-color: #226566;
                                }
                            </style>

                            <div class="row container" style="margin: 0 auto; ">
                                <div class="col col-sm-6">
                                    <button type="button" class="btn  btn-block botaoponto">
                                        Entrada </button>
                                    <button type="button" class="btn  btn-block botaoponto">
                                        Saida </button>
                                </div>
                            </div>

                            <div class="row container" style="margin: 0 auto;">
                                <div class="col col-sm-6">
                                    <button type="button" class="btn  btn-block botaoponto">
                                        Inicio almoço </button>
                                    <button type="button" class="btn  btn-block botaoponto">
                                        Fim almoço </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="./assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>