<?php

require_once 'class_hewan.php';

//Object
$kucing = new Kucing("Molly", "Abu-Abu", "4 Tahun", "Daging");
$domba = new Domba("Lily", "Putih", "2 tahun","Tumbuhan");

// Echo Kucing
echo 'Info Kucing <br>';
$kucing->getInfoKucing();
echo '<br>';

// Echo Domba
echo 'Info Domba <br>';
$domba->getInfoDomba();
echo '<br>';

?>