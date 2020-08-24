<?php
?>
<!doctype html>
<html lang="pt-BR">

<?php
include 'php/head.php';
?>

<body>
    <header>
        <?php
        include 'php/menu.php';
        include 'contadorfilme.php';
        ?>
    </header>

    <main role="main">

        <section class="jumbotron text-center">

            <div class="container marketing">

                <div class="row featurette">

                    <hr class="featurette-divider">

                    <div class="container marketing">
                    
                    <h2 class="featurette-heading">Escolha aqui seu filme favorito</h2>

                        <hr class="featurette-divider">

                        <div class="row featurette">

                            <form action="cadastrofilme.php" method="POST">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <figure class="figure">
                                                    <img src="image/johnwick3.jpg" class="figure-img img-fluid rounded" alt="John Wick de Terno.">
                                                    <figcaption class="figure-caption text-right"></figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><input type="radio" name="opcaofilme" value="JohnWick3" />John Wick 3.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <figure class="figure">
                                                    <img src="image/batmanvssuperman.jpg" class="figure-img img-fluid rounded" alt="Batman e Superman.">
                                                    <figcaption class="figure-caption text-right"></figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><input type="radio" name="opcaofilme" value="BatmanVsSuperman" />Batman VS Superman.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <figure class="figure">
                                                    <img src="image/furia.jpg" class="figure-img img-fluid rounded" alt="Equipe de soldaos em cima de um tamque de guerra.">
                                                    <figcaption class="figure-caption text-right"></figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><input type="radio" name="opcaofilme" value="Furia" />Furia.</p>
                                        </div>
                                    </div>

                                <hr class="featurette-divider">

                                    <div class="col-md-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <figure class="figure">
                                                    <img src="image/batmanbegins.jpg" class="figure-img img-fluid rounded" alt="Batman rodeado por morcegos.">
                                                    <figcaption class="figure-caption text-right"></figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><input type="radio" name="opcaofilme" value="BatmanBegins" />Batman Begins.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <figure class="figure">
                                                    <img src="image/aorigem.jpg" class="figure-img img-fluid rounded" alt="Pessoas na rua de uma cidade cheia de prédios.">
                                                    <figcaption class="figure-caption text-right"></figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><input type="radio" name="opcaofilme" value="AOrigem" />A Origem.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <figure class="figure">
                                                    <img src="image/homemaranhaespetacular.jpg" class="figure-img img-fluid rounded" alt="Batman rodeado por morcegos.">
                                                    <figcaption class="figure-caption text-right"></figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><input type="radio" name="opcaofilme" value="HomemarAnhaespEtacular" />O Espetacular Homem Aranha.</p>
                                        </div>
                                    </div>
                                </div>

                            <hr class="featurette-divider">

                            <button class="btn btn-sm btn-outline-secondary">Enviar voto</button>
                            
                        </div>

                    </div>

        </section>

    </main>

<?php
include 'php/footer.php';
?>

</body>

</html>
