
<body>

<?php

$opcaofilme= (isset ($_POST ['opcaofilme'])) ? $_POST ['opcaofilme'] : '  ';

$file = fopen('cadastrofilme.txt', 'a+');

$contadorLinha = '0';

$date = '0';
$h = "5";
$hm = $h * 60;
$ms = $hm * 60;

if ($opcaofilme == ''):
    echo 'Informar Filme!';
else:
    $file = fopen('cadastrofilme.txt', 'a+');
        while(!feof($file)):
            $linha = fgets($file, 1024);
            $contadorLinha++;
            $date = date("Y-m-d H:i:s", time()-($ms));
        endwhile;
        fclose($file);                        
        $file = fopen('cadastrofilme.txt', 'a+' );
            fwrite($file, ' | ');
            fwrite($file, str_pad($contadorLinha, 6, 0, STR_PAD_LEFT) . ' - ' . date("y"));
            fwrite($file, ' | ' );
            fwrite($file, $opcaofilme );
            fwrite($file, ' | ' );
            fwrite($file, $date );
            fwrite($file, ' | ' . PHP_EOL );
            fclose($file);
endif;

include 'votarfilme.php';
?>

</body>