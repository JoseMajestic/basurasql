<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Crear novo usuario';
require_once __DIR__ . '/includes/head.php';
?>
<section class="card">
    <h2>Crear usuario</h2>
    <p style="color:#475569;margin-top:0;">Completa o formulario para engadir unha nova persoa.</p>
    <form action="/gardar_usuario.php" method="post">
        <label for="nome">Nome completo</label>
        <input type="text" name="nome" id="nome" required maxlength="150">

        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="email" required maxlength="190">

        <div style="display:flex;gap:0.75rem;">
            <button class="btn btn-primary" type="submit">Gardar</button>
            <a class="btn btn-outline" href="/index.php">Cancelar</a>
        </div>
    </form>
</section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
