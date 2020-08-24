<?php
$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$idade = (isset($_POST['idade'])) ? $_POST['idade'] : '';
$cidade = (isset($_POST['cidade'])) ? $_POST['cidade'] : '';
$comentario = (isset($_POST['comentario'])) ? $_POST['comentario'] : '';
$msgErro = '';

if ($nome == '' || $email == '' || $idade == '' || $cidade == '' || $comentario == ''):
    $msgErro = 'Todos os campos são obrigatórios';
    echo $msgErro;
endif;

if (strpos($email, '@') === false):
    $msgErro = 'E-mail inválido <br>';
endif;

if ($msgErro == ''):
    $contadorLinha = 0;
    if (file_exists('cadastrocontato.txt')):
        $file = fopen('cadastrocontato.txt', 'r');
        while(!feof($file)):
            $temp = fgets($file, 1024);
            $contadorLinha++;
        endwhile;
        fclose($file);
        $contadorLinha--;
    endif;
                                                            
    $file = fopen('cadastrocontato.txt', 'a+');
    if ($contadorLinha == 0):
        fwrite($file, 'CODIGO | NOME | EMAIL | IDADE | CIDADE | COMENTARIO' . PHP_EOL);
        $contadorLinha++;
    endif;
    $codigo = str_pad($contadorLinha, 6, '0', STR_PAD_LEFT);
    $linha = "$codigo | $nome | $email | $idade | $cidade | $comentario" . PHP_EOL;
    fwrite($file, $linha);
    fclose($file);

    echo 'Gravado com sucesso !<br>';
else:
endif;
?>