<?php
// ============================================================
// admin/login.php — Login exclusivo para administradores (id_rol = 1)
// ============================================================

session_start();

require_once __DIR__ . '/../connection/archivo_conexion.php';

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Si ya hay una sesión activa de administrador, saltar directo al panel
if (isset($_SESSION['documento']) && intval($_SESSION['id_rol'] ?? 0) === 1) {
    header('Location: dashboard.php');
    exit;
}

/**
 * El Documento solo debe contener números (varchar en BD, pero es un dato numérico).
 * Se acepta entre 6 y 20 dígitos.
 */
function validarDocumento(string $documento): bool
{
    return preg_match('/^[0-9]{6,20}$/', $documento) === 1;
}

/**
 * La Contraseña puede contener letras, números y símbolos, pero debe respetar
 * el límite de la columna (varchar(255)) y no puede estar vacía.
 */
function validarContrasena(string $contrasena): bool
{
    $largo = strlen($contrasena);
    return $largo >= 4 && $largo <= 255;
}

$error = '';
$documentoPrevio = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $documento  = trim($_POST['documento'] ?? '');
    $contrasena = $_POST['contrasena'] ?? '';
    $documentoPrevio = $documento;

    if ($documento === '' || $contrasena === '') {
        $error = 'Por favor, complete todos los campos.';

    } elseif (!validarDocumento($documento)) {
        $error = 'El documento solo debe contener números (6 a 20 dígitos).';

    } elseif (!validarContrasena($contrasena)) {
        $error = 'La contraseña no es válida.';

    } else {
        try {
            $db  = new Database();
            $pdo = $db->conectar();

            // consulta para encontrar solamente a los que tengan rol admin id_rol=1
            $sql = "SELECT u.Documento, u.Nom_usua, u.Contrasena, u.id_rol
                    FROM usuario u
                    INNER JOIN rol r ON r.id_rol = u.id_rol
                    WHERE u.Documento = ? AND u.id_rol = 1
                    LIMIT 1";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([$documento]);
            $usuario = $stmt->fetch();

            $credencialesValidas = false;

            if ($usuario) {
                $hashInfo = password_get_info($usuario['Contrasena']);

                if ($hashInfo['algo'] !== null) {
                    // La contraseña está almacenada con password_hash()
                    $credencialesValidas = password_verify($contrasena, $usuario['Contrasena']);
                } else {
                    // Compatibilidad con contraseñas guardadas en texto plano
                    $credencialesValidas = hash_equals($usuario['Contrasena'], $contrasena);
                }
            }

            if ($usuario && $credencialesValidas) {
                session_regenerate_id(true);

                $_SESSION['documento']  = $usuario['Documento'];
                $_SESSION['nombre']     = $usuario['Nom_usua'];
                $_SESSION['id_rol']     = (int) $usuario['id_rol'];
                $_SESSION['login_time'] = time();

                header('Location: dashboard.php');
                exit;
            } else {
                $error = 'Documento o contraseña incorrectos, o el usuario no tiene rol de administrador.';
            }
        } catch (Exception $e) {
            error_log('Login error: ' . $e->getMessage());
            $error = 'Error al conectar con la base de datos.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scape - Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styles_login.css">
</head>
<body>

    <!-- Navbar con Logo Oficial Integrado -->
    <nav class="navbar navbar-expand-lg navbar-dark container py-3">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="../index.php">
            <img src="../imagenes/favicon.png" alt="Logo SCAPE" width="45" height="45" class="rounded-circle" style="object-fit: cover; border: 1px solid rgba(255, 255, 255, 0.1);">
            <span>SCAPE</span>
        </a>
    </nav>

    <div class="login-wrapper">
        <div class="login-box">
            <h2>Iniciar sesión</h2>
            <p class="login-subtitle">Acceso exclusivo para administradores</p>

            <?php if (!empty($error)): ?>
                <div class="alert alert-danger login-alert" role="alert">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <form action="" method="POST" novalidate>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-id-card"></i></span>
                    <input
                        type="text"
                        name="documento"
                        inputmode="numeric"
                        required
                        value="<?= htmlspecialchars($documentoPrevio) ?>"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                    >
                    <label>Documento</label>
                </div>

                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input
                        type="password"
                        name="contrasena"
                        minlength="4"
                        maxlength="255"
                        autocomplete="current-password"
                        required
                    >
                    <label>Contraseña</label>
                </div>

                <button type="submit" class="btn-login">Ingresar</button>
                <button type="button" class="btn-back" onclick="window.location.href='../index.php'">Volver al inicio</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
