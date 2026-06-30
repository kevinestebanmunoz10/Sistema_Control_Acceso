<?php
// login.php — SCAPE
session_start();

// Si ya hay sesión activa redirigir al dashboard
if (isset($_SESSION['usuario'])) {
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $documento   = trim($_POST['documento']   ?? '');
    $contrasena  = trim($_POST['contrasena']  ?? '');
    $rol         = trim($_POST['rol']         ?? '');

    if (empty($documento) || empty($contrasena) || empty($rol)) {
        $error = 'Por favor completa todos los campos.';
    } else {
        // TODO: conectar con base de datos y validar credenciales
        // Ejemplo base de la lógica de autenticación:
        /*
        require_once 'config/db.php';
        $stmt = $pdo->prepare("
            SELECT u.*, r.rol AS nombre_rol
            FROM Usuario u
            JOIN Rol r ON u.id_rol = r.id_rol
            WHERE u.Documento = ? AND r.rol = ?
        ");
        $stmt->execute([$documento, $rol]);
        $usuario = $stmt->fetch();

        if ($usuario && password_verify($contrasena, $usuario['Contraseña'])) {
            $_SESSION['usuario']   = $usuario['Documento'];
            $_SESSION['nombre']    = $usuario['Nom_usua'];
            $_SESSION['rol']       = $usuario['nombre_rol'];
            header('Location: dashboard.php');
            exit;
        } else {
            $error = 'Documento, contraseña o rol incorrecto.';
        }
        */

        // Bloque temporal para desarrollo (quitar en producción)
        $error = 'Credenciales incorrectas. Conecta la base de datos para continuar.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar sesión — SCAPE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>

    <div class="login-page">

        <!-- ══ PANEL IZQUIERDO ══ -->
        <aside class="login-left">
            <div class="orb orb-1"></div>
            <div class="orb orb-2"></div>

            <!-- Logo -->
            <a href="index.php" class="left-logo">
                <div class="logo-img-wrap">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" style="position:relative;z-index:1;">
                        <path d="M12 2L3 7v5c0 5.25 3.75 10.15 9 11.35C17.25 22.15 21 17.25 21 12V7L12 2z" fill="none"
                            stroke="#00C6FF" stroke-width="1.8" stroke-linejoin="round" />
                        <circle cx="12" cy="12" r="3" fill="#1E6FFF" />
                        <path d="M12 9v3l2 2" stroke="#00C6FF" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="logo-text">
                    <strong>SCAPE</strong>
                    <span>Control de Acceso</span>
                </div>
            </a>

            <!-- Cuerpo -->
            <div class="left-body">
                <div class="left-tag">Bienvenido de vuelta</div>
                <h2 class="left-title">
                    Accede a tu<br />
                    <span class="highlight">panel de control</span>
                </h2>
                <p class="left-desc">Gestiona el acceso de personas y equipos de tu institución desde un solo lugar.</p>

                <div class="left-features">
                    <div class="left-feature">
                        <div class="lf-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" />
                            </svg>
                        </div>
                        <div class="lf-text">
                            <strong>Control de personas</strong>
                            Docentes, estudiantes y visitantes
                        </div>
                    </div>
                    <div class="left-feature">
                        <div class="lf-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <rect x="2" y="3" width="20" height="14" rx="2" />
                                <path d="M8 21h8M12 17v4" />
                            </svg>
                        </div>
                        <div class="lf-text">
                            <strong>Inventario de equipos</strong>
                            Préstamos y trazabilidad en tiempo real
                        </div>
                    </div>
                    <div class="left-feature">
                        <div class="lf-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                <path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" />
                            </svg>
                        </div>
                        <div class="lf-text">
                            <strong>Reportes y exportación</strong>
                            Historial en PDF y Excel
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="left-footer">
                ©<?= date('Y') ?> SCAPE · <a href="index.php">Volver al inicio</a>
            </div>
        </aside>


        <!-- ══ PANEL DERECHO (formulario) ══ -->
        <main class="login-right">
            <div class="login-box" id="loginBox">

                <div class="login-box-header">
                    <h2>Iniciar sesión</h2>
                </div>

                <!-- Alerta de error PHP -->
                <?php if ($error): ?>
                <div class="alert alert-error show">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M12 8v4M12 16h.01" />
                    </svg>
                    <?= htmlspecialchars($error) ?>
                </div>
                <?php endif; ?>

                <!-- Alerta JS dinámica -->
                <div class="alert alert-error" id="jsAlert">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M12 8v4M12 16h.01" />
                    </svg>
                    <span id="jsAlertMsg"></span>
                </div>

                <!-- Formulario -->
                <form method="POST" action="login.php" id="loginForm" novalidate>
                    <input type="hidden" name="rol" id="rolInput" value="" />

                    <!-- Documento -->
                    <div class="form-group">
                        <label class="form-label" for="documento">Número de documento</label>
                        <div class="input-wrap">
                            <span class="input-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <rect x="3" y="4" width="18" height="16" rx="2" />
                                    <path d="M8 9h8M8 13h5" />
                                </svg>
                            </span>
                            <input type="text" id="documento" name="documento" class="form-input"
                                placeholder="Ej: 1234567890" value="<?= htmlspecialchars($_POST['documento'] ?? '') ?>"
                                autocomplete="username" inputmode="numeric" />
                        </div>
                        <div class="form-error" id="errDocumento">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="12"
                                height="12">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 8v4M12 16h.01" />
                            </svg>
                            Ingresa tu número de documento
                        </div>
                    </div>

                    <!-- Contraseña -->
                    <div class="form-group">
                        <label class="form-label" for="contrasena">Contraseña</label>
                        <div class="input-wrap">
                            <span class="input-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <rect x="3" y="11" width="18" height="11" rx="2" />
                                    <path d="M7 11V7a5 5 0 0110 0v4" />
                                </svg>
                            </span>
                            <input type="password" id="contrasena" name="contrasena" class="form-input"
                                placeholder="Tu contraseña" autocomplete="current-password" />
                            <button type="button" class="input-eye" id="eyeBtn" aria-label="Mostrar contraseña">
                                <svg id="eyeIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </button>
                        </div>
                        <div class="form-error" id="errContrasena">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="12"
                                height="12">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 8v4M12 16h.01" />
                            </svg>
                            Ingresa tu contraseña
                        </div>
                    </div>

                    <!-- Opciones -->
                    <div class="form-options">
                        <label class="remember-wrap">
                            <input type="checkbox" name="recordar" id="recordar" />
                            <span class="remember-label">Recordarme</span>
                        </label>
                        <a href="#" class="forgot-link">¿Olvidaste tu contraseña?</a>
                    </div>

                    <!-- Botón submit -->
                    <button type="submit" class="btn-submit" id="submitBtn">
                        <span class="btn-text">
                            Ingresar al sistema
                            <svg width="16" height="16" fill="none" viewBox="0 0 24 24"
                                style="display:inline-block;vertical-align:middle;margin-left:4px">
                                <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="spinner"></span>
                    </button>
                </form>

                <div class="form-divider"><span>o</span></div>

                <a href="index.php" class="back-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 12H5M12 19l-7-7 7-7" />
                    </svg>
                    Volver al inicio
                </a>

            </div>
        </main>

    </div><!-- /login-page -->


    <script>
    // ── Mostrar / ocultar contraseña ───────────
    const eyeBtn = document.getElementById('eyeBtn');
    const passInput = document.getElementById('contrasena');

    eyeBtn.addEventListener('click', () => {
        const visible = passInput.type === 'text';
        passInput.type = visible ? 'password' : 'text';
        eyeBtn.innerHTML = visible ?
            `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="17" height="17"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>` :
            `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="17" height="17"><path d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19M1 1l22 22"/></svg>`;
    });

    // ── Validación cliente ─────────────────────
    const form = document.getElementById('loginForm');
    const loginBox = document.getElementById('loginBox');
    const jsAlert = document.getElementById('jsAlert');
    const jsAlertMsg = document.getElementById('jsAlertMsg');
    const submitBtn = document.getElementById('submitBtn');

    function showError(id, show) {
        const el = document.getElementById(id);
        if (show) {
            el.classList.add('show');
        } else {
            el.classList.remove('show');
        }
    }

    function setInputError(inputId, hasError) {
        const input = document.getElementById(inputId);
        hasError ? input.classList.add('error') : input.classList.remove('error');
    }

    function showAlert(msg) {
        jsAlertMsg.textContent = msg;
        jsAlert.classList.add('show');
    }

    function hideAlert() {
        jsAlert.classList.remove('show');
    }

    form.addEventListener('submit', (e) => {
        const doc = document.getElementById('documento').value.trim();
        const pass = document.getElementById('contrasena').value.trim();
        let valid = true;
        hideAlert();

        if (!doc) {
            showError('errDocumento', true);
            setInputError('documento', true);
            valid = false;
        } else {
            showError('errDocumento', false);
            setInputError('documento', false);
        }

        if (!pass) {
            showError('errContrasena', true);
            setInputError('contrasena', true);
            valid = false;
        } else {
            showError('errContrasena', false);
            setInputError('contrasena', false);
        }

        if (!valid) {
            e.preventDefault();
            loginBox.classList.remove('shake');
            void loginBox.offsetWidth; // reflow para reiniciar animación
            loginBox.classList.add('shake');
            return;
        }

        // Loading state
        submitBtn.classList.add('loading');
        submitBtn.disabled = true;
    });

    // Limpiar error al escribir
    document.getElementById('documento').addEventListener('input', () => {
        showError('errDocumento', false);
        setInputError('documento', false);
        hideAlert();
    });
    document.getElementById('contrasena').addEventListener('input', () => {
        showError('errContrasena', false);
        setInputError('contrasena', false);
        hideAlert();
    });

    // Mostrar shake si hay error PHP
    <?php if ($error): ?>
    loginBox.classList.add('shake');
    <?php endif; ?>
    </script>

</body>

</html>