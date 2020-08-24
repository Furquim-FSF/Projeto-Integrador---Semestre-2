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
        include "contadorfilme.php";
        ?>

    </header>

    <main role="main">

        <div class="container">
        </div>
        <div class="container-fluid">
            <div class="row">
                <figure class="figure">
                    <img src="image/filmesherois_lg.jpg" class="figure-img img-fluid rounded" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                    <figcaption class="figure-caption text-right"></figcaption>
                </figure>
            </div>
        </div>

        <div class="container marketing">                    
                    <h2 class="featurette-heading">Filmes de Heróis</h2>
        </div>

        <div class="album py-5 bg-light">
            <div class="container-xl">

                <div class="row">
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
                            <p class="card-text">Batman vs Superman: A Origem da Justiça.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#batmanvssuperman">Sinopse</button>
                                    <div class="modal fade" id="batmanvssuperman" tabindex="-1" role="dialog" aria-labelledby="Titulobatmanvssuperman" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Titulobatmanvssuperman">Batman vs Superman: A Origem da Justiça.</h5>
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
                                <small class="text-muted">Votos: <?=$contadorBatmanVSSuperman?></small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="container-fluid">
                            <div class="row">
                                <figure class="figure">
                                    <img src="image/batmanbegins.jpg" class="figure-img img-fluid rounded" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <figcaption class="figure-caption text-right"></figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Batman Begins.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#batmanbegins">Sinopse</button>
                                    <div class="modal fade" id="batmanbegins" tabindex="-1" role="dialog" aria-labelledby="Titulobatmanbegins" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Titulobatmanbegins">Batman Begins.</h5>
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
                                <small class="text-muted">Votos: <?=$contadorBatmanBegins?></small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="container-fluid">
                            <div class="row">
                                <figure class="figure">
                                    <img src="image/homemaranhaespetacular.jpg" class="figure-img img-fluid rounded" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <figcaption class="figure-caption text-right"></figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">O Espetacular Homem-Aranha.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#homemaranhaespetacular">Sinopse</button>
                                    <div class="modal fade" id="homemaranhaespetacular" tabindex="-1" role="dialog" aria-labelledby="Titulohomemaranhaespetacular" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Titulohomemaranhaespetacular">O Espetacular Homem-Aranha.</h5>
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
                                <small class="text-muted">Votos: <?=$contadorHomemAranhaEspetacular?></small>
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
