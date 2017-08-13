<?php
$query = $_GET['query'];

// These values may have been gotten from a database.
// We'll use a simple array just to show this example.
$values = [
            'Neo', 
            'Ibiyemi',
            'Olayinka',
            'Jonathan',
            'Stephen', 
            'Fisayo', 
            'Gideon',
            'Mezie',
            'Oreoluwa', 
            'Jordan', 
            'Enkay', 
            'Michelle', 
            'Jessica', 
            ];

foreach ($values as $key => $value) {
    if ($query && strpos(strtolower($value), strtolower($query)) === false) {
        unset($values[$key]);
    }
}

echo json_encode(array_values($values));
?>
