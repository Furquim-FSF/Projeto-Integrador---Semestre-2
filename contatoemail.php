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

                        <hr class="featurette-divider">

                        <div class="row featurette">
                            <div class="col-md-12">

                                <p class="bold">CONTATO</p>
                                <div class="content-3">
                                    <div class="column-5">
                                        <p>Nome:</p>
                                        <p><input class="form-1" type="text" name="nome"></p>
                                    </div>
                                    <div class="column-5">
                                        <p>Sobrenome:</p>
                                        <p><input class="form-1" type="text" name="sobrenome"></p>
                                    </div>
                                    <div class="column-5">
                                        <p>Celular:</p>
                                        <p><input class="form-1" type="text" name="celular"></p>
                                    </div>
                                    <div class="column-5">
                                        <p>E-mail:</p>
                                        <p><input class="form-1" type="text" name="e-mail"></p>
                                    </div>
                                    <div class="column-5">
                                        <p>Comentários:</p>
                                        <p><textarea class="form-2" type="text" name="comentarios"></textarea></p>
                                    </div>
                                    <div class="column-5">
                                        <label for="opcao">Você gostou do site?</label>
                                        <input type="radio" name="Opção" value="sim" checked="checked" />Sim
                                        <input type="radio" name="Opção" value="nao" />Não
                                    </div>
                                </div>

                                <hr class="featurette-divider">
                                <div class="button">
                                    <button class="button"><a href="contatoemail.php">Enviar</a></button>
                                    <button class="button"><a href="contatoemail.php">Apagar</a></button>
                                </div>
                            </div>
                        </div>

                        <hr class="featurette-divider">

                    </div>

        </section>

    </main>

<?php
include 'php/footer.php';
?>

</body>

</html>
