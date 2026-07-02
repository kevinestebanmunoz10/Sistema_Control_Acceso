<?php
// ============================================================
// admin/dashboard.php — Página protegida tras iniciar sesión
// ============================================================

session_start();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// solo los admin con sesion abierta pueden entrar 
if (!isset($_SESSION['documento']) || intval($_SESSION['id_rol'] ?? 0) !== 1) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scape - Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/styles_login.css">
</head>
<body class="d-flex align-items-center justify-content-center" style="min-height:100vh;">

    <button type="button" class="btn-login" style="max-width:220px;" onclick="window.location.href='../logout.php'">
        Cerrar sesión
    </button>

</body>
</html>
