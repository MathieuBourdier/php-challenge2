<?php
$message1 = "0@sn9sirppa@#?ia’jgtvryko1";
$key = strlen($message1) /2;
$message1 = substr($message1, 5, $key);
$message1 = str_replace("@", " ", $message1);
$message1 = str_replace("#", " ", $message1);
$message1 = str_replace("?", " ", $message1);
$message1 = strrev($message1);
echo $message1 . " ";
/* Decodage 1er message */

$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$key = strlen($message2) /2;
$message2 = substr($message2, 5, $key);
$message2 = str_replace("@", " ", $message2);
$message2 = str_replace("#", " ", $message2);
$message2 = str_replace("?", " ", $message2);
$message2 = strrev($message2);
echo $message2 . " ";
/* Decodage 2eme message */

$message3 = "aopi?sgnirts@#?sedhtg+p9l!";
$key = strlen($message3) /2;
$message3 = substr($message3, 5, $key);
$message3 = str_replace("@", " ", $message3);
$message3 = str_replace("#", " ", $message3);
$message3 = str_replace("?", " ", $message3);
$message3 = strrev($message3);
echo $message3 . " ";

/* Decodegae 3eme messages */
