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
        ?>
    </header>

    <main role="main">

        <section class="jumbotron text-center">

            <div class="container marketing">

                <div class="row featurette">

                    <hr class="featurette-divider">

                    <div class="container marketing">

                    <h2 class="featurette-heading">Contato</h2>

                        <hr class="featurette-divider">

                        <div class="row featurette">

                            <div class="col-md-12">

                                <form action="" method="POST">

                                    <input type="text" name="nome" placeholder="Nome"> <br><br>
                                    <input type="text" name="email" placeholder="E-mail"> <br><br>
                                    <input type="text" name="idade" placeholder="Idade"> <br><br>
                                    <input type="text" name="cidade" placeholder="Cidade"> <br><br>
                                    <textarea  type="text" name="comentario"></textarea><br><br>

                                    <button  class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#cadastro">Enviar</button>

                                                <div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="Titulocadastro" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="Titulocadastro">Cadastro.</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                            <?php
                                                            include 'cadastrocontato.php'
                                                            ?>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>

                            <hr class="featurette-divider">

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
