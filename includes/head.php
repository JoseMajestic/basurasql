<?php
if (!isset($pageTitle)) {
    $pageTitle = 'Xestión de usuarios';
}
?>
<!DOCTYPE html>
<html lang="gl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <style>
        :root {
            --ink: #111;
            --accent: #001adf;
            --border: #bfbfbf;
            --muted: #4b5563;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Times New Roman', Georgia, serif;
            background: #fff;
            color: var(--ink);
            padding: 2rem 1rem 3rem;
        }
        header {
            max-width: 960px;
            margin: 0 auto;
            border-bottom: 1px solid var(--border);
            padding-bottom: 0.75rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: baseline;
            gap: 1.5rem;
        }
        header h1 {
            font-size: 2.1rem;
            margin: 0;
        }
        nav a {
            text-decoration: none;
            color: var(--accent);
            font-weight: bold;
            margin-right: 1rem;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            max-width: 960px;
            margin: 0 auto;
        }
        h2 {
            font-size: 2rem;
            margin-top: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 1.05rem;
        }
        th, td {
            padding: 0.6rem;
            border-bottom: 1px solid #dcdcdc;
            text-align: left;
        }
        th {
            font-size: 1rem;
            font-weight: bold;
        }
        .actions {
            display: flex;
            gap: 0.6rem;
        }
        .icon-link {
            color: var(--accent);
            text-decoration: none;
            font-size: 1.2rem;
        }
        .icon-link:hover {
            color: #0410a8;
        }
        .alert {
            border: 1px solid var(--border);
            padding: 0.75rem 1rem;
            background: #f8f8f8;
            margin: 1rem 0;
        }
        form label {
            display: block;
            font-weight: bold;
            margin-top: 0.5rem;
        }
        form input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid var(--border);
            font-family: inherit;
            font-size: 1rem;
        }
        button,
        .btn-link {
            font-family: 'Times New Roman', Georgia, serif;
            font-size: 1rem;
            padding: 0.4rem 0.9rem;
            background: var(--accent);
            color: #fff;
            border: none;
            cursor: pointer;
            margin-top: 1rem;
            text-decoration: none;
            display: inline-block;
        }
        .btn-secondary {
            background: #444;
        }
    </style>
</head>
<body>
<header>
    <h1>Usuarios rexistrados</h1>
    <nav>
        <a href="/index.php">Inicio</a>
        <a href="/crear.php">Novo rexistro</a>
    </nav>
</header>
<main>
