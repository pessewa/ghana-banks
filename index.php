<?php
    $banks = file_get_contents('banks.json');

    header('Content-Type: application/json; charset=utf-8');
    echo $banks;
    exit();