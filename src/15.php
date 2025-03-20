<?php
function generateRandomCode() {
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeLength = 8;
    $randomCode = "";
    for ($i = 0; $i < $codeLength; $i++) {
        $randomCode .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomCode;
}
?>
