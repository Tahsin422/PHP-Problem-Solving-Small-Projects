<?php
function modifyText($text) {
    // Convert the string to all lowercase
    $lowercaseText = strtolower($text);

    // Replace "brown" with "red" in the string
    $modifiedText = str_replace("brown", "red", $lowercaseText);

    // Print the modified text
    echo $modifiedText;
}

// Define the initial text
$text = "The quick brown fox jumps over the lazy dog.";

// Call the function with the initial text
modifyText($text);
?>
