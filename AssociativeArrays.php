// create an associative array for a person's details
// (name, age, email) and print each detail.

<?php
$person = [
    "name" => "Alice",
    "age" => 25,
    "email" => "alice@example.com"
];

foreach ($person as $key => $value) {
    echo "$key: $value\n";
}
?>