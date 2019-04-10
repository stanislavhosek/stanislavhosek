<?php

    $to = "stanislav.hosek@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "www.studiohosek.cz, nový vzkaz.";

    $fields = array();
    $fields{"name"} = "Jméno";
    $fields{"email"} = "Email";
    $fields{"phone"} = "Mobil";
    $fields{"message"} = "Vzkaz";

    

    $body = "Zde je obsah zprávy:\r\n"; 

    foreach($fields as $a => $b){$body .= $b." : ".$_REQUEST[$a]."\r\n"; }


    $send = mail($to, $subject, $body, $headers);

?>
