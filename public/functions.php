<?php 

// User-Defined Functions
// ----------

function get_public_url($path = "") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return WWW_ROOT . $path;
}

function get_path($path = "") {
    if ($path != "") {
        if($path[0] != '/') {
        $path = '/' . $path;
    }
}
    return PROJECT_ROOT . $path;
}

function redirect($path) {
    header('Location: ' . get_public_url($path) );
}

function h($str) {
    return htmlspecialchars($str);
}

function u($string) {
    return urlencode($string);
}


// Prints out human readable data wrapped in <pre> tags, for debugging
function wrap_pre($data) {
    return '<pre>' . print_r($data,true) . '</pre>';
}

// Prints out human readable data, and prevents the script from continuing
function dd($data) {
    echo wrap_pre($data);
    die();
}
