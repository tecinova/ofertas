<?php
$app_name = $_POST[“app”];
$sender   = $_POST[“sender”];
$message  = $_POST[“message”];

if ($app_name == “WhatsApp”) {
  if ($sender == “Bob”) {
     if ($message == “order status”) {
         $reply = array(“reply” => “Hello bob, your order is confirmed.”);
        echo json_encode($reply);
     }
  }
}
?>
