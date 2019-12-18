<?php


function print_data($data, $exit = true){
    echo "<pre>";
    print_r($data);
    echo "<pre>";
    
    if ($exit) exit;
}


function ajax_response($type = 'success',  $title = '', $message = '', $data = array()){
    $response = array(
        'type' => $type,
        'message' => $message,
        'title' => $title,
        'returnData' => $data
    );

    echo json_encode($response);
    exit;
}

function validate_required_fields($data, $required = array()){
    $errors = array();

    foreach ($data as $key => $value) {
        if (empty($value) && in_array($key, $required)) {
            $errors[$key] = 'This field is required';
        }
    }

    return $errors;
}