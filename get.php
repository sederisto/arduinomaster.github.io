<?php
echo "http://giovaniussd.ddns-intelbras.com.br:8080/arduinomaster/arduino.php?" . http_build_query($_GET);
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://giovaniussd.ddns-intelbras.com.br:8080/arduinomaster/arduino.php?" . http_build_query($_GET));
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 400);
    $head = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
	
	echo $head;	
?>