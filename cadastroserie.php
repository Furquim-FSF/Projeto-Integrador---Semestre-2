
<body>

<?php

$opcaoserie= (isset ($_POST ['opcaoserie'])) ? $_POST ['opcaoserie'] : '  ';

$file = fopen('cadastroserie.txt', 'a+');

$contadorLinha = '0';

$date = '0';
$h = "5";
$hm = $h * 60;
$ms = $hm * 60;

if ($opcaoserie == ''):
    echo 'Informar Série!';
else:

            $file = fopen('cadastroserie.txt', 'a+');
                while(!feof($file)):
                    $linha = fgets($file, 1024);
                    $contadorLinha++;
                    $date = date("Y-m-d H:i:s", time()-($ms));
                endwhile;
                fclose($file);                        
                $file = fopen('cadastroserie.txt', 'a+' );
                    fwrite($file, ' | ');
                    fwrite($file, str_pad($contadorLinha, 6, 0, STR_PAD_LEFT) . ' - ' . date("y"));
                    fwrite($file, ' | ' );
                    fwrite($file, $opcaoserie );
                    fwrite($file, ' | ' );
                    fwrite($file, $date );
                    fwrite($file, ' | ' . PHP_EOL );
                    fclose($file);

endif;

include 'votarserie.php';
?>

</body>