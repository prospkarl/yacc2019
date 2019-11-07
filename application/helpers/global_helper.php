<?php


function print_data($data, $exit = true){
    echo "<pre>";
    print_r($data);
    echo "<pre>";
    
    if ($exit) exit;
}
