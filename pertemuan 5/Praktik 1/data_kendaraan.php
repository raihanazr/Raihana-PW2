<?php

    require_once 'class_kendaraan.php';

    //Object
    $motor = new Motor('Motor', 'Bensin', 2);
    $submarine = new Submarine('Submarine', 'Solar', 1000);


    // echo Motor
    echo 'Info Motor:<br>';
    $motor->getInfoMotor();
    echo '<br>';

    // echo Submarine
    echo 'Info Kapal Selam:<br>';
    $submarine->getInfoSubmarine();
    echo '<br>';

    
?>