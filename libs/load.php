<?php

include_once 'includes/Mic.class.php';
include_once 'includes/Database.class.php';
include_once 'includes/User.class.php';
include_once 'includes/Session.class.php';

global $site_config;
$__site_config =file_get_contents($_SERVER['DOCUMENT_ROOT'].'/../photogramconfig.json');

Session::start();

function get_config($key,$default=null) {
    global $__site_config;
    $array = json_decode($__site_config,true);
    if(isset($array[$key])){
        return $array[$key];
    }else{
        return $default;
    }
}

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/web/_templates/$name.php";
}


function validated_credentials($username, $password)
{
    if ($username=="ragu@gmail.com" and $password == "rkdevil") {
        return true;
    } else {
        return false;
    }
}

// function signup($user, $pass, $email, $phone)
// {
//     $conn = Database::getConnection();
//     $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
//     VALUES ('$user', '$pass', '$email', '$phone', '0', '1');";
//     $error = false;

//     if ($conn->query($sql) === true) {
//         $error = false;
//     } else {
//         // echo "Error: ". $sql. "<br>" . $conn->error;
//         $error = $conn->error;
//     }

//     $conn->close();
//     return $error;
// }
