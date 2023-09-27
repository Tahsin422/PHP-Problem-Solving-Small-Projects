<?php
function generatePassword($length) {
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;

    $totalChars = strlen($allChars);

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $totalChars - 1);
        $randomChar = $allChars[$randomIndex];

        $password .= $randomChar;
    }

    return $password;
}

$generatedPassword = generatePassword(12);

echo "Generated Password: $generatedPassword";
?>
