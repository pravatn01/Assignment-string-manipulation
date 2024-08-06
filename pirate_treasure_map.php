<?php
// 1. Defines a clue string, `"find the hidden treasure at the golden island"`.
$clue = "find the hidden treasure at the golden island";
// 2. Replaces `"golden"` with `"mystic"`.
$replace = str_replace("golden", "mystic", $clue);
// 3. Converts the modified clue to uppercase.
$upper = strtoupper($replace);
// 4. Prints the final clue in uppercase.
echo $upper;
