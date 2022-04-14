<?php
// KLASOR ICINDEKI TUM DOSYALARI BURAYA DAHIL EDELIM
$_dosyalar=scandir(dirname(__FILE__));
foreach ($_dosyalar as $dosya){
    if(strpos($dosya,'.php') && $dosya!="load_lang.php"){
        require_once(dirname(__FILE__).'/'.$dosya);
    }
}