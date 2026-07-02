<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCAPE - Control de Acceso Inteligente</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@700;800&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold fs-3" href="#">
               <!-- REEMPLAZA LA LÍNEA DEL LOGO POR ESTA: -->
<img src="imagenes/favicon.png" alt="Logo SCAPE" width="55" height="55" class="rounded-circle d-inline-block align-text-top my-1" style="object-fit: cover;">SCAPE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link px-3" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#caracteristicas">Características</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#nosotros">Acerca de nosotros</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#contacto">Contáctanos</a></li>
                </ul>
                <a href="admin/login.php" class="btn btn-outline-light rounded-pill px-4">Iniciar sesión</a>
            </div>
        </div>
    </nav>

    <header id="inicio" class="hero-section text-center text-white">
        <div class="container">
            <h1 class="titulo-impacto">
                Control total <span>de acceso e inventario</span><br>en tu institución
            </h1>
            <p class="lead w-75 mx-auto text-light opacity-75 mb-5">
                SCAPE centraliza el registro de personal, equipos y visitantes en una sola plataforma. 
                Pensado para instituciones que necesitan seguridad real sin complicaciones.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#caracteristicas" class="btn btn-primary-custom">Conocer características</a>
                <a href="#nosotros" class="btn btn-outline-light btn-lg rounded-pill px-4">Acerca de nosotros</a>
            </div>
        </div>
    </header>

    <section class="container mb-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 card-custom text-center">
                    <p class="text-secondary-custom mb-1 small">Accesos hoy</p>
                    <h2 class="display-4 fw-bold text-white">847</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 card-custom text-center">
                    <p class="text-secondary-custom mb-1 small">Puertas activas</p>
                    <h2 class="display-4 fw-bold text-info">24/24</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 card-custom text-center">
                    <p class="text-secondary-custom mb-1 small">Alarmas</p>
                    <h2 class="display-4 fw-bold text-danger">3</h2>
                </div>
            </div>
        </div>
    </section>

    <section id="caracteristicas" class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold h1 text-white">Funcionalidades Principales</h2>
            <div class="linea-decorativa"></div>
        </div>
        
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="p-4 card-func">
                    <div class="icon-box"><i class="bi bi-people-fill"></i></div>
                    <h5 class="text-white">Registro de personal</h5>
                    <p class="text-secondary-custom small m-0">Empleados, docentes y visitantes en un solo directorio. Control mediante QR del carnet.</p>
                </div>
            </div>
            <div class="col">
                <div class="p-4 card-func">
                    <div class="icon-box"><i class="bi bi-laptop"></i></div>
                    <h5 class="text-white">Inventario de equipos</h5>
                    <p class="text-secondary-custom small m-0">Trazabilidad completa de portátiles y material de informática. Registro de entradas y salidas.</p>
                </div>
            </div>
            <div class="col">
                <div class="p-4 card-func">
                    <div class="icon-box"><i class="bi bi-shield-check"></i></div>
                    <h5 class="text-white">Control de visitantes</h5>
                    <p class="text-secondary-custom small m-0">Pre-registro de externos y autorización de entrada. Notificación automática al responsable.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="nosotros" class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <span class="text-cyan text-uppercase fw-bold tracking-wider small mb-3">Acerca de nosotros</span>
                <h2 class="titulo-nosotros-bold mb-4">
                    Construido por personas <br>
                    <span class="text-gradient-cyan">que entienden la educación</span>
                </h2>
                
                <p class="text-secondary-custom mb-4">
                    SCAPE nació de la necesidad real de una institución educativa en Ibagué que no encontraba una herramienta de control de acceso adaptada a su contexto. Somos un equipo joven, comprometido con la tecnología aplicada a la seguridad escolar.
                </p>
                <p class="text-secondary-custom">
                    Nuestro objetivo es simple: que cada rector, coordinador y vigilante tenga visibilidad total de quién entra, quién sale y qué equipos se mueven, sin necesidad de conocimientos técnicos avanzados.
                </p>
            </div>
            
            <div class="col-lg-6">
                <div class="card-equipo-container p-4">
                    <span class="text-cyan-light text-uppercase fw-bold small mb-3 d-block">Nuestro Equipo</span>
                    <p class="text-secondary-custom small mb-4">
                        Estudiantes de desarrollo de software con una visión clara: tecnología útil, simple y segura para la educación colombiana.
                    </p>
                    
                    <div class="d-flex flex-column gap-3 mb-4">
                        <div class="role-card p-3 d-flex align-items-center gap-3">
                            <div class="avatar-box">DE1</div>
                            <div>
                                <h6 class="text-white fw-bold mb-0">Desarrollador Backend</h6>
                                <span class="text-secondary-custom text-xs">PHP · MySQL</span>
                            </div>
                        </div>
                        
                        <div class="role-card p-3 d-flex align-items-center gap-3">
                            <div class="avatar-box">DE2</div>
                            <div>
                                <h6 class="text-white fw-bold mb-0">Desarrollador Frontend</h6>
                                <span class="text-secondary-custom text-xs">HTML · CSS · JS</span>
                            </div>
                        </div>
                        
                        <div class="role-card p-3 d-flex align-items-center gap-3">
                            <div class="avatar-box">DE3</div>
                            <div>
                                <h6 class="text-white fw-bold mb-0">Diseño & Base de datos</h6>
                                <span class="text-secondary-custom text-xs">UX · SQL · ERD</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-wrap gap-2 pt-3 border-top border-dark-custom">
                        <span class="badge-tech">PHP</span>
                        <span class="badge-tech">MySQL</span>
                        <span class="badge-tech">HTML</span>
                        <span class="badge-tech">CSS</span>
                        <span class="badge-tech">XAMPP</span>
                        <span class="badge-tech">Git</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto" class="container py-5">
        <div class="card card-custom p-5">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="fw-bold h1 text-white mb-4">Contáctanos</h2>
                    <p class="text-secondary-custom mb-4">¿Tienes dudas o necesitas una demostración personalizada? Nuestro equipo de soporte técnico 24/7 está listo para ayudarte.</p>
                    <ul class="list-unstyled mt-4 contact-list">
                        <li class="mb-3 text-secondary-custom"><i class="bi bi-envelope-fill text-accent-custom me-2"></i> soporte@scape.com</li>
                        <li class="mb-3 text-secondary-custom"><i class="bi bi-telephone-fill text-accent-custom me-2"></i> +57 (601) 123 4567</li>
                        <li class="text-secondary-custom"><i class="bi bi-geo-alt-fill text-accent-custom me-2"></i> Ibagué, Tolima</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Tu nombre">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Tu correo electrónico">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="¿En qué podemos ayudarte?"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary-custom w-100">Enviar mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-scape-custom pt-5 pb-4 mt-5">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-5">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="imagenes/favicon.png" alt="Logo SCAPE" width="48" height="48" class="rounded-circle" style="object-fit: cover; border: 1px solid rgba(255, 255, 255, 0.1);">
                        <div>
                            <span class="footer-brand-title">SCAPE</span>
                            <span class="footer-brand-subtitle d-block">CONTROL DE ACCESO</span>
                        </div>
                    </div>
                    <p class="text-secondary-custom small pe-lg-4 mb-4">
                        Software de control de acceso inteligente para instituciones educativas que priorizan la seguridad.
                    </p>
                    <div class="d-flex flex-column gap-2">
                        <span class="small text-secondary-custom"><i class="bi bi-envelope text-cyan me-2"></i> angel.montesanta@gmail.com</span>
                        <span class="small text-secondary-custom"><i class="bi bi-geo-alt text-cyan me-2"></i> Ibagué, Tolima — Colombia</span>
                    </div>
                </div>
                
                <div class="col-6 col-lg-3 offset-lg-1">
                    <h6 class="footer-section-title text-white fw-bold mb-3">NAVEGACIÓN</h6>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="#inicio" class="footer-link">Inicio</a></li>
                        <li><a href="#caracteristicas" class="footer-link">Características</a></li>
                        <li><a href="#nosotros" class="footer-link">Acerca de nosotros</a></li>
                        <li><a href="#contacto" class="footer-link">Contáctenos</a></li>
                    </ul>
                </div>
                
                <div class="col-6 col-lg-3">
                    <h6 class="footer-section-title text-white fw-bold mb-3">MÓDULOS</h6>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="#" class="footer-link">Control de personas</a></li>
                        <li><a href="#" class="footer-link">Gestión de equipos</a></li>
                        <li><a href="#" class="footer-link">Visitantes</a></li>
                        <li><a href="#" class="footer-link">Reportes</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="row pt-4 border-top border-dark-custom align-items-center text-center text-md-start">
                <div class="col-md-6">
                    <p class="text-secondary-custom small mb-md-0">&copy;2026 SCAPE Software. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="footer-link small me-3">Política de privacidad</a>
                    <a href="#" class="footer-link small">Términos de uso</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>