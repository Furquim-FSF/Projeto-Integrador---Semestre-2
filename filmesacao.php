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
                    <img src="image/filmesacao_lg.jpg" class="figure-img img-fluid rounded" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                    <figcaption class="figure-caption text-right"></figcaption>
                </figure>
            </div>
        </div>

        <div class="container marketing">                    
                    <h2 class="featurette-heading">Filmes de Ação</h2>
        </div>

        <div class="album py-5 bg-light">
            <div class="container-xl">

                <div class="row">
                    <div class="col-md-4">
                        <div class="container-fluid">
                            <div class="row">
                                <figure class="figure">
                                    <img src="image/johnwick3.jpg" class="figure-img img-fluid rounded" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <figcaption class="figure-caption text-right"></figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">John Wick: Parabellum.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#johnwick3">Sinopse</button>
                                    <div class="modal fade" id="johnwick3" tabindex="-1" role="dialog" aria-labelledby="Titulojohnwick3" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Titulojohnwick3">John Wick: Parabellum.</h5>
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
                                <small class="text-muted">Votos: <?=$contadorJohnWick3?></small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="container-fluid">
                            <div class="row">
                                <figure class="figure">
                                    <img src="image/furia.jpg" class="figure-img img-fluid rounded" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <figcaption class="figure-caption text-right"></figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Furia.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#furia">Sinopse</button>
                                    <div class="modal fade" id="furia" tabindex="-1" role="dialog" aria-labelledby="Titulofuria" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Titulofuria">Furia</h5>
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
                                <small class="text-muted">Votos: <?=$contadorFuria?></small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="container-fluid">
                            <div class="row">
                                <figure class="figure">
                                    <img src="image/aorigem.jpg" class="figure-img img-fluid rounded" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                                    <figcaption class="figure-caption text-right"></figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">A Origem.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#aorigem">Sinopse</button>
                                    <div class="modal fade" id="aorigem" tabindex="-1" role="dialog" aria-labelledby="Tituloaorigem" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Tituloaorigem">A Origem.</h5>
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
                                <small class="text-muted">Votos: <?=$contadorAOrigem?></small>
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
