<?php
if ($argc !== 2) {
    echo "Usage: php bcrypt.php <password>\n";
    exit(1);
}

$password = $argv[1];
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

echo "Hashed Password: " . $hashedPassword . "\n";
?>