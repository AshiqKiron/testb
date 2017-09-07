<?php 

$access_token = "EAAEtRfZBUlZAEBAN0xMvxRNbniUL5XOIK9pfZAbUIwB4HovMk2YR8blbQYVvpL3PiKheXhNtbegt7ZAdJW54M3IQxQqZCiEu2dlZCcpTZAYgcZA16OL3JjIyOK76PZAbfr83zPHDcem95dyRNScJhX4ZCyJ6iuG1s4yvdO1PHqHGCv7Cp7ZA1fvc0Jv";
$verify_token = "my_token";
$hub_verify_token = null;

if(isset($_REQUEST['hub_challenge'])){ 
  $challenge = $_REQUEST['hub_challenge'];
  $hub_verify_token = $_REQUEST['hub_verify_token'];
}

  if ($hub_verify_token === $verify_token) {
    echo $challenge;
 }
