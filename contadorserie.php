<?php
$contadorGameofThrones = '0';
$contadorDark = '0';
$contadorBrooklinNineNine = '0';
$contadorTheBigBang = '0';
$contadorBeterCall = '0';
$contadorPeakyBlinders = '0';
$series;

$file = fopen('cadastroserie.txt', 'a+');
while(!feof($file)):
    $linha = fgets($file, 1024);
    $arrayStr = explode('|', $linha);
    if($linha === false) break;
    if (trim($arrayStr[2]) === 'GameofThrones'):
        $contadorGameofThrones++;
    endif;
    if (trim($arrayStr[2]) === 'Dark'):
        $contadorDark++;
    endif;
    if (trim($arrayStr[2]) === 'PeakyBlinders'):
        $contadorPeakyBlinders++;
    endif;
    if (trim($arrayStr[2]) === 'TheBigBang'):
        $contadorTheBigBang++;
    endif;
    if (trim($arrayStr[2]) === 'BrooklinNineNine'):
        $contadorBrooklinNineNine++;
    endif;
    if (trim($arrayStr[2]) === 'BetterCallSaul'):
        $contadorBeterCall++;
    endif;
endwhile;

$series = array("Game of Thrones" => $contadorGameofThrones , "Dark" => $contadorDark , "Brooklin Nine Nine" => $contadorBrooklinNineNine , "The Big Bang" => $contadorTheBigBang , "Beter Call" =>$contadorBeterCall , "Peaky Blinders" => $contadorPeakyBlinders);

$seriemaiornumerodevotos  = max($series);
$seriemaisvotada = array_search ($seriemaiornumerodevotos,$series);


$mseries = array("GameofThrones.jpg" => $contadorGameofThrones , "Dark.jpg" => $contadorDark , "BrooklinNineNine.jpg" => $contadorBrooklinNineNine , "bigbang.jpg" => $contadorTheBigBang , "bcsaul.jpg" =>$contadorBeterCall , "PeakyBlinders.jpg" => $contadorPeakyBlinders);

$mseriemaiornumerodevotos  = max($mseries);
$mseriemaisvotada = array_search ($mseriemaiornumerodevotos,$mseries);

fclose($file);

?>