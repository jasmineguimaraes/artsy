<?php
require('connection.php');
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


    <!--- CAROUSEL
    <div class="container">
        <section class="artsy-main">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/img1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/img2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/img3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
    </div> -->

    <!--PRODUCTS-->



    <section class="products">

        <!---gerador de categorias --->

        <?php


    require('gera-categoria-checkbox.php')
    ?>

        <!--container maior -->
        <div class="container-fluid d-flex flex-wrap justify-content-center">

            <!-- GERADOR DE PRODUTOS -->

            <?php
$palavra_chave = $_POST['FILTRO'];
$opcao = isset($palavra_chave) ? $palavra_chave : false;

if ($opcao)
{

    $sql = "SELECT * FROM produtos WHERE categoria = '$palavra_chave'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while ($rows = $result->fetch_assoc())
        {
?>

            <div class="product-container col-xs-12 col-sm-6 col-md-5 col-lg-3 col-xl-2">
                <div class=" container-fluid d-flex flex-wrap product-wrapper">
                    <div class="product-wrapper">
                        <img class="picture-tag img-fluid img-thumbnail" src="<?php echo $rows["imagem"] ?>"
                            alt="<?php echo $rows["descricao"] ?>">
                        <button type="button" class="btn btn-outline-dark btn-artsy">Comprar</button>
                        <p class="product-tag"><?php echo $rows["descricao"] ?></p>
                        <hr>
                        <p class="pricing"> <?php echo $rows["preco"] ?> </p>
                        <p class="current-pricing"> <?php echo $rows["precofinal"] ?> </p>

                    </div>
                </div>
            </div>

            <?php
        }
    }
    else
    {
        echo "Nenhum produto cadastrado";
    }
?>

            <?php
}
else
{

    $sql = "SELECT * FROM produtos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while ($rows = $result->fetch_assoc())
        {
?>

            <div class="product-container col-xs-12 col-sm-6 col-md-5 col-lg-3 col-xl-2">
                <div class=" container-fluid d-flex flex-wrap product-wrapper">
                    <div class="product-wrapper">
                        <img class="picture-tag img-fluid img-thumbnail" src="<?php echo $rows["imagem"] ?>"
                            alt="<?php echo $rows["descricao"] ?>">
                        <button type="button" class="btn btn-outline-dark btn-artsy">Comprar</button>
                        <p class="product-tag"><?php echo $rows["descricao"] ?></p>
                        <hr>
                        <p class="pricing"> <?php echo $rows["preco"] ?> </p>
                        <p class="current-pricing"> <?php echo $rows["precofinal"] ?> </p>

                    </div>
                </div>
            </div>

            <?php
        }
    }
    else
    {
        echo "Nenhum produto cadastrado";
    }

}

if (mysqli_query($conn, $sql))
{
    $resultado = mysqli_query($conn, $sql);
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


                            ?>







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