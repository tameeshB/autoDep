<?php
/**
 * This script is the landing POST request handler for the github webhook payload.
 */

 $_POST = json_decode(file_get_contents('php://input'), true);


 print_r($_POST);
 ?>