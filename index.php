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
        include 'contadorfilme.php';
        ?>
    </header>

    <div class="album py-5 bg-light">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>Série mais votada</h3>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <figure class="figure">
                                    <img src="image/<?=$mseriemaisvotada?>" class="figure-img img-fluid rounded" alt="Foto da Série mais votada.">
                                    <figcaption class="figure-caption text-right"></figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5><?=$seriemaisvotada?></h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Total de Votos: <?=$seriemaiornumerodevotos?></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>Filme mais votado</h3>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <figure class="figure">
                                    <img src="image/<?=$mfilmemaisvotado?>" class="figure-img img-fluid rounded" alt="Foto do Filme mais votado.">
                                    <figcaption class="figure-caption text-right"></figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5><?=$filmemaisvotado?></h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Total de Votos: <?=$filmemaiornumerodevotos?></h5>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    <main role="main">

        <section class="jumbotron text-center">

            <div class="container marketing">

                <div class="container marketing">

                <div class="row featurette">
                    <div class="col">
                        <h2 class="featurette-heading">Indicações para seu fim de semana<span class="text-muted"></span></h2>
                    </div>
                </div>

                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col">
                            <h3 class="featurette-heading">Batman vs Superman: A Origem da Justiça<span class="text-muted"></span></h3>
                            <p class="lead">Batman vs Superman: A Origem da Justiça Online em HD Dublado e Legendado.Após sua luta contra o general Zod, Metrópolis foi arrasada e o Superman se tornou a figura mais controversa do mundo. Enquanto para muitos ele continua sendo um símbolo de esperança, um número cada vez maior de pessoas o consideram uma ameaça para a humanidade, procurando justiça para o caos que ele trouxe para a Terra. Até onde Bruce Wayne sabe, Superman é claramente perigoso para a sociedade. Ele teme pelo futuro da humanidade com um poder tão grande sem ser governado, então ele veste sua máscara e capa para corrigir os erros do Superman. A rivalidade entre eles é furiosa, alimentada por amargura e vingança e nada pode convencê-los a não travar essa guerra. No entanto, uma ameaça obscura surge na forma de um terceiro homem: um que tem poder maior do que qualquer um deles para colocar o mundo em perigo e causar destruição total.</p>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="image/batmanvssuperman_lg.jpg" class="figure-img img-fluid rounded" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                        <figcaption class="figure-caption text-right"></figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col">
                            <h3 class="featurette-heading">Game of Thrones<span class="text-muted"></span></h3>
                            <p class="lead">Em uma terra onde os verões podem durar vários anos e o inverno toda uma vida, sete nobres famílias lutam pelo controle da mítica terra de Westeros, dividida depois de uma guerra. Num cenário que lembra a Europa medieval, reis, rainhas, cavaleiros e renegados usam todos os meios possíveis em um jogo político pela disputa do Trono de Ferro, o símbolo do poder absoluto.</p>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="image/got_lg.jpg" class="figure-img img-fluid rounded" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                        <figcaption class="figure-caption text-right"></figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col">
                            <h3 class="featurette-heading">Oblivion<span class="text-muted"></span></h3>
                            <p class="lead">Um veterano designado para extrair os recursos restantes da Terra começa a questionar o que ele sabe sobre sua missão e sobre si mesmo.</p>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="image/oblivion_lg.jpg" class="figure-img img-fluid rounded" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                        <figcaption class="figure-caption text-right"></figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

        </section>

    </main>

<?php
include 'php/footer.php';
?>

</body>

</html>
