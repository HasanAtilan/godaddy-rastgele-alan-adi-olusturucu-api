<?php
error_reporting(0);


function alanadiolusturucu($uzunluk = 10) {
    $karakterler = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $karakteruzunlugu = strlen($karakterler);
    $rastgele = '';
    for ($i = 0; $i < $uzunluk; $i++) {
        $rastgele .= $karakterler[rand(0, $karakteruzunlugu - 1)];
    }
    return $rastgele;
}
$albakayim = alanadiolusturucu();

$linkimiz = "https://find.godaddy.com/domainsapi/v1/bundles?q=$albakayim&key=dpp_search"; //adresi
$cektir = file_get_contents($linkimiz);



$veriyi = json_decode($cektir,true);
$toplam=count($veriyi);
$sonuc='<h1>Toplam : '.$toplam.'';
echo $sonuc;
foreach ($veriyi as $anahtara => $cevir)
{
echo '  <td><font  face="calibri"color="red">'.$cevir[DotTypesText].'   </font></td><td><tr>';
}
echo "</tr></table>";
           
		   


?>

