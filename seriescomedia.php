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
                    <img src="image/seriescomedia_lg.jpg" class="figure-img img-fluid rounded" alt="Amigos do The Big Bang, reunidos com seus pares.">
                    <figcaption class="figure-caption text-right"></figcaption>
                </figure>
            </div>
        </div>

        <div class="container marketing">                    
                    <h2 class="featurette-heading">Séries de Comédia</h2>
        </div>

        <div class="album py-5 bg-light">
            <div class="container-xl">

                <div class="row">
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
                            <p class="card-text">Big Bang: A Teoria.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#bigbang">Sinopse</button>
                                    <div class="modal fade" id="bigbang" tabindex="-1" role="dialog" aria-labelledby="Titulobigbang" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Titulobigbang">Big Bang: A Teoria.</h5>
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
                                <small class="text-muted">Votos: <?=$contadorTheBigBang?></small>
                            </div>
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
                            <p class="card-text">Lei & Desordem (Brooklyn Nine-Nine).</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#bnn">Sinopse</button>
                                    <div class="modal fade" id="bnn" tabindex="-1" role="dialog" aria-labelledby="Titulobnn" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="bnn">Lei & Desordem (Brooklyn Nine-Nine).</h5>
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
                                <small class="text-muted">Votos: <?=$contadorBrooklinNineNine?></small>
                            </div>
                        </div>
                    </div>

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
                            <p class="card-text">Better Call Saul.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#bcsaul">Sinopse</button>
                                    <div class="modal fade" id="bcsaul" tabindex="-1" role="dialog" aria-labelledby="Titulobcsaul" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Titulobcsaul">Better Call Saul.</h5>
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
                                <small class="text-muted">Votos: <?=$contadorBeterCall?></small>
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
