<?php
require_once __DIR__ . '/includes/config.php';

// recoller e validar datos
$nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

if (!$nome || !$email) {
    header('Location: index.php?erro=Datos%20inv%C3%A1lidos');
    exit;
}

try {
    $sql = 'INSERT INTO users (nome, email) VALUES (:nome, :email)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
    ]);
    header('Location: index.php?mensaxe=Usuario%20creado%20correctamente');
    exit;
} catch (PDOException $e) {
    header('Location: index.php?erro=' . urlencode('Erro ao gardar: ' . $e->getMessage()));
    exit;
}
