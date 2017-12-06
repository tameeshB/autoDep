<?php
/**
 * This script is the landing POST request handler for the github webhook payload.
 */
ini_set('display_errors', '1');     # don't show any errors....

 echo print_r($_POST['payload']['commits']);
 $_POST = json_decode(file_get_contents('php://input'), true);

var_dump($_POST);
 echo print_r($_POST);
 ?>