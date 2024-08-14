<?php
require __DIR__ . '/../src/core.php';
$passwordFromPost = $_POST['password'] ?? false;
$emailFromPost = $_POST['email'] ?? false;
$authResult = false;
$formAction = false;
if ($emailFromPost || $passwordFromPost) {
    if ($emailFromPost !== '' || $passwordFromPost !== '') {
        require __DIR__ . '/../src/data/users.php';
        require __DIR__ . '/../src/data/passwords.php';
        $formAction = true;
        $key = array_search($emailFromPost, $users);
        if ($passwords[$key] === $passwordFromPost) {
            $authResult = true;
        }
    }
}
includeTemplate('layouts/header.php', ['title' => 'Авторизация']);
if ($authResult && $formAction) {
    includeTemplate('messages/success_message.php', ['message' => 'Вы успешно авторизовались']);
} else {
    if (!$authResult && $formAction) {
        includeTemplate('messages/error_message.php', ['message' => 'Неверный email или пароль']);
    }
    includeTemplate('layouts/authForm.php', ['email' => $emailFromPost, 'password' => $passwordFromPost]);
}
includeTemplate('layouts/footer.php');
