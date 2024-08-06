<?php
// 1. Defines a spell string with a mixture of uppercase and lowercase letters,  `"   ABRACADABRA   "`.
$spell = "   ABRACADABRA   ";
// 2. Trims any extra spaces from the beginning and end.
$trimmed = trim($spell);
// 3. Converts the trimmed spell to lowercase.
$lower = strtolower($trimmed);
// 4. Compare the cleaned-up spell with the correct spell `"abracadabra"`.
if ($lower == "abracadabra") {
    // 5. Print a message indicating if the spell is correct or if the wizarding world is still at risk!
    echo "Spell is correct";
} else {
    echo "wizarding world is still at risk!";
}
