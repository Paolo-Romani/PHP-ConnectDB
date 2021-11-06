<?php
    include_once __DIR__ .'/config/confing.php';
    include_once __DIR__ .'/function/ConnDB.php';
    
    echo "<h3>COMMESSIONE AL DATABSE</h3>";
    echo "url: ".$db["url"]."<br> username: ".$db["username"]."<br> psw: ".$db["password"]."<br>dbname: ".$db["dbname"];
    $conn = connectDB($db["url"],$db["username"],$db["password"],$db["dbname"]);
    if ($conn->connect_error) {
        /* Use your preferred error logging method here */
        error_log('Connection error: ' . $conn->connect_error);
    }else{
        echo $conn->host_info . "\n";
        $conn->close();
    }
?>