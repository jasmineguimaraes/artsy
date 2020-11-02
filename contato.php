<?php
require('connection.php')
?>

<!-- form post -->

<?php
require('form-post.php')
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <!--- Bootstrap CDN --->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- My fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rozha+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <!-- My Styles-->
    <link rel="stylesheet" href="css/style.css">
    <!--Icons-->
    <script src="https://kit.fontawesome.com/a4877d7eee.js" crossorigin="anonymous"></script>


    <!--FAVICON-->
    <link rel=" icon" type="image/png" href="img/favicon.png">

    <title>ARTsy</title>
</head>

<body>
    <!--- NAVBAR-->
    <?php
    require('navbar.html')
    ?>


    <section class="central-de-atendimento">
        <div class="container-fluid d-flex flex-wrap justify-content-center">


            <div class="col-xs-12 col-sm-10 col-md-8">
                <h2> Central de Atendimento</h2>
                <br>
                <form method="post" action=''>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="emailField">E-mail</label>
                                <input type="text" class="form-control" name="emailField" id="emailField"
                                    aria-describedby="emailHelp" placeholder="Digite seu e-mail">
                                <small id="emailHelp" class="form-text text-muted">Digite o mesmo e-mail de login que
                                    você
                                    usa na ARTsy
                                </small>

                            </div>
                            <div class="col">
                                <label for="nomeCompletoField">Nome completo</label>
                                <input type="text-area" class="form-control" name="nomeCompletoField"
                                    id="nomeCompletoField" placeholder="Nome completo">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mensagemField">Como podemos te ajudar?</label>
                        <textarea class="form-control" name="mensagemField" id="mensagemField" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-dark">Enviar</button>
                </form>

            </div>




        </div>

    </section>

    <footer class="artsy-footer">



        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6 col-md-4 col-lg-3">
                <ul>
                    <h2>Sobre a Artsy</h2>
                </ul>
                <li>
                    <p>Somos apaixonados por arte e estamos comprometidos com todos que querem fazer arte.</p>
                </li>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-6 col-md-4 col-lg-3">
                <ul>
                    <h2>Segue a gente</h2>
                </ul>
                <li><i class="fab fa-twitter"></i> @ARTsy</li>
                <li><i class="fab fa-instagram-square"></i> @ARTsy</li>
                <li><i class="fab fa-facebook"></i> Loja ARTsy</li>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-6 col-md-4 col-lg-3">
                <ul>
                    <h2>Ajuda</h2>
                </ul>
                <li>Reembolso</li>
                <li>Troca ou Devolução</li>
                <li>Como comprar no site</li>
                <li>Prazo de entrega</li>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-6 col-md-4 col-lg-3">
                <ul>
                    <h2>Contato</h2>
                </ul>
                <li><i class="fas fa-envelope-open-text"></i> atendimento@artsy.com</li>
                <li>Central de Atendimento</li>

            </div>


        </div>





    </footer>




</body>

</html>