<?php
$contadorJohnWick3 = '0';
$contadorFuria = '0';
$contadorAOrigem = '0';
$contadorBatmanVSSuperman = '0';
$contadorBatmanBegins = '0';
$contadorHomemAranhaEspetacular = '0';
$filmes;

$file = fopen('cadastrofilme.txt', 'a+');
while(!feof($file)):
    $linha = fgets($file, 1024);
    $arrayStr = explode('|', $linha);
    if($linha === false) break;
    if (trim($arrayStr[2]) === 'JohnWick3'):
        $contadorJohnWick3++;
    endif;
    if (trim($arrayStr[2]) === 'Furia'):
        $contadorFuria++;
    endif;
    if (trim($arrayStr[2]) === 'AOrigem'):
        $contadorAOrigem++;
    endif;
    if (trim($arrayStr[2]) === 'BatmanVsSuperman'):
        $contadorBatmanVSSuperman++;
    endif;
    if (trim($arrayStr[2]) === 'BatmanBegins'):
        $contadorBatmanBegins++;
    endif;
    if (trim($arrayStr[2]) === 'HomemarAnhaespEtacular'):
        $contadorHomemAranhaEspetacular++;
    endif;
endwhile;

$filmes = array("John Wick 3" => $contadorJohnWick3 , "Furia" => $contadorFuria , "Batman VS Superman" => $contadorBatmanVSSuperman , "Batman Begins" => $contadorBatmanBegins, "Homema rAnha Espetacular" =>$contadorHomemAranhaEspetacular , "A Origem" => $contadorAOrigem);

$filmemaiornumerodevotos  = max($filmes);
$filmemaisvotado = array_search ($filmemaiornumerodevotos,$filmes);


$mfilmes = array("johnwick3.jpg" => $contadorJohnWick3 , "furia.jpg" => $contadorFuria , "batmanvssuperman.jpg" => $contadorBatmanVSSuperman , "batmanbegins.jpg" => $contadorBatmanBegins, "homemeranhaespetacular.jpg" =>$contadorHomemAranhaEspetacular , "aorigem.jpg" => $contadorAOrigem);

$mfilmemaiornumerodevotos = max($mfilmes);
$mfilmemaisvotado = array_search ($mfilmemaiornumerodevotos,$mfilmes);

fclose($file);