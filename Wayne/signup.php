<?php

$filePath = 'users.json';
$users = [];

// Check if the file exists and read the data
if (file_exists($filePath)) {
    $fileContent = file_get_contents($filePath);
    $users = json_decode($fileContent, true);
}

// Provided login credentials
$providedEmail = 'kichwakubwa@gmail.com';
$providedPassword = '12345six';

// Check if the user exists
$userExists = false;
$user = null;
foreach ($users as $u) {
    if ($u['email'] === $providedEmail) {
        $userExists = true;
        $user = $u;
        break;
    }
}

if (!$userExists) {
    // User not found
    echo 'Invalid email';
} else {
    // User found, check password
    if (password_verify($providedPassword, $user['password'])) {
        // Successful login
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header('Location: dashboard.php');
    } else {
        // Invalid password
        echo 'Invalid password';
    }
}

// Update the users file if necessary
if (!$userExists) {
    // New user, add to the list
    $newUserId = count($users) + 1;
    $hashedPassword = password_hash($providedPassword, PASSWORD_DEFAULT);

    $newUser = [
        'id' => $newUserId,
        'email' => $providedEmail,
        'password' => $hashedPassword
    ];

    array_push($users, $newUser);

    // Write the updated data to the file
    $jsonData = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents($filePath, $jsonData);
}
?>