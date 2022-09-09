<?php

    $url = 'http://localhost/ssc/public/api';

    $class = '/user';
    $param = '';

    $response = file_get_contents($url.$class.$param);

    //echo $response;

    $response = json_decode($response, 1);

    var_dump($response);