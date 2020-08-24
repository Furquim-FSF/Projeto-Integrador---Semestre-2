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
        include "contadorserie.php";
    ?>
    </header>

    <main role="main">

        <div class="container">
        </div>
        <div class="container-fluid">
            <div class="row">
                <figure class="figure">
                    <img src="image/seriesacao_lg.jpg" class="figure-img img-fluid rounded" alt="Amigos do The Big Bang, reunidos com seus pares.">
                    <figcaption class="figure-caption text-right"></figcaption>
                </figure>
            </div>
        </div>

        <div class="container marketing">                    
                    <h2 class="featurette-heading">Séries de Ação</h2>
        </div>

        <div class="album py-5 bg-light">
            <div class="container-xl">

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
                            <p class="card-text">Game of Thrones.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#got">Sinopse</button>
                                    <div class="modal fade" id="got" tabindex="-1" role="dialog" aria-labelledby="Titulogot" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Titulogot">Game of Thrones.</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut turpis et leo consequat imperdiet ut eget ex. Integer facilisis id tortor quis scelerisque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam lacinia sollicitudin risus, a egestas tellus cursus ut. Nulla hendrerit, urna sed sollicitudin sollicitudin, lacus nisl eleifend ipsum, a tincidunt odio nulla sit amet nulla. Proin augue ex, venenatis nec accumsan id, dictum et ante. Nam id leo non quam ullamcorper tincidunt. Curabitur consequat turpis felis, a tempor nulla sollicitudin at. Quisque risus nibh, posuere in maximus non, sagittis sed felis. Vestibulum a porttitor dui, eu condimentum neque. Donec et tortor nisi. Vivamus sed ultricies leo. Curabitur consequat sem quis augue vestibulum, vel vulputate dolor molestie.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <small class="text-muted">Votos: <?=$contadorGameofThrones?></small>
                            </div>
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
                            <p class="card-text">Dark.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#dark">Sinopse</button>
                                    <div class="modal fade" id="dark" tabindex="-1" role="dialog" aria-labelledby="Titulodark" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Titulodark">Dark</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut turpis et leo consequat imperdiet ut eget ex. Integer facilisis id tortor quis scelerisque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam lacinia sollicitudin risus, a egestas tellus cursus ut. Nulla hendrerit, urna sed sollicitudin sollicitudin, lacus nisl eleifend ipsum, a tincidunt odio nulla sit amet nulla. Proin augue ex, venenatis nec accumsan id, dictum et ante. Nam id leo non quam ullamcorper tincidunt. Curabitur consequat turpis felis, a tempor nulla sollicitudin at. Quisque risus nibh, posuere in maximus non, sagittis sed felis. Vestibulum a porttitor dui, eu condimentum neque. Donec et tortor nisi. Vivamus sed ultricies leo. Curabitur consequat sem quis augue vestibulum, vel vulputate dolor molestie.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <small class="text-muted">Votos: <?=$contadorDark?></small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="container-fluid">
                            <div class="row">
                                <figure class="figure">
                                    <img src="image/peakyblinders.jpg" class="figure-img img-fluid rounded" alt="Familia Peaky Blinders reunida">
                                    <figcaption class="figure-caption text-right"></figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Peaky Blinders: Sangue, Apostas e Navalhas.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#peakyblinders">Sinopse</button>
                                    <div class="modal fade" id="peakyblinders" tabindex="-1" role="dialog" aria-labelledby="Titulopeakyblinders" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Titulopeakyblinders">Peaky Blinders: Sangue, Apostas e Navalhas.</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut turpis et leo consequat imperdiet ut eget ex. Integer facilisis id tortor quis scelerisque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam lacinia sollicitudin risus, a egestas tellus cursus ut. Nulla hendrerit, urna sed sollicitudin sollicitudin, lacus nisl eleifend ipsum, a tincidunt odio nulla sit amet nulla. Proin augue ex, venenatis nec accumsan id, dictum et ante. Nam id leo non quam ullamcorper tincidunt. Curabitur consequat turpis felis, a tempor nulla sollicitudin at. Quisque risus nibh, posuere in maximus non, sagittis sed felis. Vestibulum a porttitor dui, eu condimentum neque. Donec et tortor nisi. Vivamus sed ultricies leo. Curabitur consequat sem quis augue vestibulum, vel vulputate dolor molestie.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                <small class="text-muted">Votos: <?=$contadorPeakyBlinders?></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>

<?php
include 'php/footer.php';
?>

</body>

</html>
