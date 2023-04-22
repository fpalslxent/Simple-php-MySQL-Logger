<?php
    // 클라우드플레어 사용시 HTTP_CF_CONECTING_IP 대신 REMOTE_ADDR 를 사용
    $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
    $ua = $_SERVER['HTTP_USER_AGENT'];
    $time = date("Y-m-d H:i:s");

    $conn = mysqli_connect('localhost', 'db_user', 'db_password', 'db_name');
    $sql = "INSERT INTO `log` (`idx`, `ip`, `useragent`, `time`) VALUES (NULL, '$ip', '$ua', '$time');";
    if ($conn->query($sql) === TRUE) {
        // 완료 처리는 따로 표시 하지 않는다
    }
?>
