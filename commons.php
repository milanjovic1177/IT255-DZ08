<?php

// echo $dbConnection -> error;

// DB:
define("DB_HOST", "localhost");
define("DB_USERNAME", "it255_dz08_un");
define("DB_PASSWORD", "kjvdsjufew732nuouvc8923nve89");
define("DB_NAME", "it255_dz08");

// ==== General utility methods: ===================================================

/**
 * Sets the response code and reason
 *
 * @param int $code
 * @param string $reason
 */
function setResponseCode($code, $reason = null, $echo = null)
{
    $code = intval($code);

    if (version_compare(phpversion(), '5.4', '>') && is_null($reason)) {
        http_response_code($code);
    } else {
        header(trim("HTTP/1.0 $code $reason"));
    }

    if ($echo != null) {
        echo $echo;
    } else if ($reason != null) {
        echo $reason;
    }
}

function isLoggedIn()
{
    return $_SESSION['isLoggedInToMetHostel'] == true;
}

function areCredentialsOk($email, $password)
{
    $ret = false;
    
    $dbConnection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $dbConnection->set_charset('utf8');
    
    $sql = "SELECT _id FROM users WHERE email = ? AND password = ?";
    $stmt = $dbConnection->prepare($sql);

    $stmt->bind_param('ss', $email, $password);
    if ($stmt->execute() && $stmt->store_result() && $stmt->bind_result($_id) && $stmt->num_rows == 1) {
        $ret = true;
    }
    $stmt->close();

    mysqli_close($dbConnection);
    return $ret;
}

function userExist($email)
{
    $ret = false;
    
    $dbConnection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $dbConnection->set_charset('utf8');
    
    $sql = "SELECT _id FROM users WHERE email = ?";
    $stmt = $dbConnection->prepare($sql);
    $stmt->bind_param('s', $email);
    if ($stmt->execute() && $stmt->store_result() && $stmt->bind_result($_id) && $stmt->num_rows == 1) {
        $ret = true;
    }
    $stmt->close();
    
    mysqli_close($dbConnection);
    
    return $ret;
}

function createAccount($email, $password)
{
    if(userExist($email)){
        mysqli_close($dbConnection);
        return false;
    }
    
    $dbConnection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $dbConnection->set_charset('utf8');
    
    $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
    $stmt = $dbConnection->prepare($sql);
//    echo $dbConnection -> error;
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $inserted_id = $dbConnection->insert_id;
    $stmt->close();

    mysqli_close($dbConnection);
    
    return true;
}

?>
