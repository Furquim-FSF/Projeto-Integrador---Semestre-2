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
        include 'contadorserie.php';
        ?>
    </header>

    <main role="main">

        <section class="jumbotron text-center">

            <div class="container marketing">

                <div class="row featurette">

                    <hr class="featurette-divider">

                    <div class="container marketing">
                    
                    <h2 class="featurette-heading">Escolha aqui sua série favorita</h2>

                        <hr class="featurette-divider">

                        <div class="row featurette">

                            <form action="cadastroserie.php" method="POST">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <figure class="figure">
                                                    <img src="image/got.jpg" class="figure-img img-fluid rounded" alt="O rei sentrado no trono de ferro.">
                                                    <figcaption class="figure-caption text-right"></figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><input type="radio" name="opcaoserie" value="GameofThrones" />Game of Thrones.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <figure class="figure">
                                                    <img src="image/peakyblinders.jpg" class="figure-img img-fluid rounded" alt="Imagem do Saul, com um rolo de tinta na mão e tres faxas de tinta branca atravessa de um lado ao outro.">
                                                    <figcaption class="figure-caption text-right"></figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><input type="radio" name="opcaoserie" value="PeakyBlinders" />Peaky Blinders.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <figure class="figure">
                                                    <img src="image/bigbang.jpg" class="figure-img img-fluid rounded" alt="Amigos do Seriado The Big Bang, reunidos em volta de um sofá marron.">
                                                    <figcaption class="figure-caption text-right"></figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><input type="radio" name="opcaoserie" value="TheBigBang" />The Big Bang.</p>
                                        </div>
                                    </div>

                                <hr class="featurette-divider">

                                    <div class="col-md-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <figure class="figure">
                                                    <img src="image/bcsaul.jpg" class="figure-img img-fluid rounded" alt="Saul com um rolo de tinta na mão e tres faxas de tinta branca atravessa de um lado ao outro.">
                                                    <figcaption class="figure-caption text-right"></figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><input type="radio" name="opcaoserie" value="BetterCallSaul"/>Better Call Saul.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <figure class="figure">
                                                    <img src="image/bnn.jpg" class="figure-img img-fluid rounded" alt="Equipe de policia Brooklyn Nine-Nine, reunida e prestando respeito a bandeira.">
                                                    <figcaption class="figure-caption text-right"></figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><input type="radio" name="opcaoserie" value="BrooklinNineNine"/>Lei & Desordem (Brooklyn Nine-Nine).</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <figure class="figure">
                                                    <img src="image/dark.jpg" class="figure-img img-fluid rounded" alt="Menino de capa amarela entrando na caverna de pedra.">
                                                    <figcaption class="figure-caption text-right"></figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><input type="radio" name="opcaoserie" value="Dark"/>Dark.</p>
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
