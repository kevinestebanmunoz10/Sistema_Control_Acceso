<?php
$page_title       = "SCAPE — Control de Acceso Inteligente";
$page_description = "Software de control de acceso de personal y equipos para instituciones educativas.";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>" />
    <title><?= htmlspecialchars($page_title) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<!-- BODY -->
<body>

    <!-- NAVBAR -->
    <nav class="navbar" id="navbar">
        <div class="navbar-inner">
            <a href="index.php" class="navbar-logo">
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

            <ul class="navbar-links">
                <li><a href="#inicio" class="active">Inicio</a></li>
                <li><a href="#caracteristicas">Características</a></li>
                <li><a href="#nosotros">Acerca de nosotros</a></li>
                <li><a href="#contacto">Contáctenos</a></li>
            </ul>

            <div class="navbar-actions">
                <a href="login.php" class="btn btn-primary">
                    <svg width="16" height="16" fill="none" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2M12 11a4 4 0 100-8 4 4 0 000 8z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    Iniciar sesión
                </a>
            </div>

            <button class="hamburger" id="hamburger" aria-label="Menú">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>


    <!-- HERO -->
    <section class="hero" id="inicio">
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    Control total <br />
                    <span class="highlight"> de acceso e inventario en</span><br />
                    tu institución
                </h1>
                <p class="hero-desc">
                    SCAPE centraliza el registro de personal, equipos y visitantes en una sola plataforma.
                    Pensado para colegios que necesitan seguridad real sin complicaciones.
                </p>
                <div class="hero-actions">
                    <a href="#caracteristicas" class="btn btn-primary btn-lg">
                        Conocer características
                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a href="#nosotros" class="btn btn-ghost btn-lg">Acerca de nosotros</a>
                </div>
            </div>
        </div>
    </section>


    <!-- STATS -->
    <section class="section-stats">
        <div class="container">
            <div class="stats-row">
                <div class="stat-block reveal">
                    <div class="stat-block-value" data-count="500">0</div>
                    <div class="stat-block-label">Instituciones registradas</div>
                </div>
                <div class="stat-block reveal reveal-delay-1">
                    <div class="stat-block-value">99.9%</div>
                    <div class="stat-block-label">Tiempo de actividad</div>
                </div>
                <div class="stat-block reveal reveal-delay-2">
                    <div class="stat-block-value" data-count="2">0</div>
                    <div class="stat-block-label">Millones de accesos/día</div>
                </div>
                <div class="stat-block reveal reveal-delay-3">
                    <div class="stat-block-value">24/7</div>
                    <div class="stat-block-label">Soporte técnico</div>
                </div>
            </div>
        </div>
    </section>


    <!-- FEATURES -->
    <section class="section-features" id="caracteristicas">
        <div class="container">
            <div class="section-header reveal">
                <div class="section-tag">Características</div>
                <h2 class="section-title">Todo lo que tu institución<br /><span class="highlight">necesita en un solo
                        lugar</span></h2>
                <p class="section-desc">Módulos diseñados para el flujo real de un colegio, sin sobrecomplicar.</p>
            </div>
            <div class="features-grid">

                <div class="feature-card featured reveal">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Registro de personal</h3>
                    <p class="feature-desc">Empleados, docentes, estudiantes y visitantes en un solo directorio. Control
                        de ingreso manual o mediante QR desde el carnet.</p>
                </div>

                <div class="feature-card reveal reveal-delay-1">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="2" y="3" width="20" height="14" rx="2" />
                            <path d="M8 21h8M12 17v4" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Inventario de equipos</h3>
                    <p class="feature-desc">Portátiles y material de informática con trazabilidad completa. Registro de
                        entradas, salidas y préstamos con asignación automática.</p>
                </div>

                <div class="feature-card reveal reveal-delay-2">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Control de visitantes</h3>
                    <p class="feature-desc">Pre-registro de externos, autorización de entrada y tiempo máximo de
                        permanencia. Notificación automática al responsable.</p>
                </div>

                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Gestión de roles</h3>
                    <p class="feature-desc">Administrador, vigilante, coordinador y rector, cada uno con contraseña y
                        privilegios diferenciados sobre el sistema.</p>
                </div>

                <div class="feature-card reveal reveal-delay-1">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                            <path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Reportes y exportación</h3>
                    <p class="feature-desc">Historial de accesos por persona o equipo. Exportación en PDF y Excel para
                        uso administrativo con un clic.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- ACERCA DE NOSOTROS -->
    <section class="section-about" id="nosotros">
        <div class="container">
            <div class="about-grid">
                <div class="about-left reveal">
                    <div class="section-tag">Acerca de nosotros</div>
                    <h2 class="section-title">Construido por personas<br /><span class="highlight">que entienden la
                            educación</span></h2>
                    <p class="about-desc">SCAPE nació de la necesidad real de una institución educativa en Ibagué que no
                        encontraba una herramienta de control de acceso adaptada a su contexto. Somos un equipo joven,
                        comprometido con la tecnología aplicada a la seguridad escolar.</p>
                    <p class="about-desc">Nuestro objetivo es simple: que cada rector, coordinador y vigilante tenga
                        visibilidad total de quién entra, quién sale y qué equipos se mueven, sin necesidad de
                        conocimientos técnicos avanzados.</p>
                    <div class="about-values">
                        <div class="about-value">
                            <div class="about-value-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="20"
                                    height="20">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                </svg>
                            </div>
                            <div>
                                <strong>Seguridad primero</strong>
                                <span>Cada decisión de diseño parte de proteger a la comunidad educativa.</span>
                            </div>
                        </div>
                        <div class="about-value">
                            <div class="about-value-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="20"
                                    height="20">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M12 6v6l4 2" />
                                </svg>
                            </div>
                            <div>
                                <strong>Simple y rápido</strong>
                                <span>Interfaz pensada para que cualquier persona pueda operarla desde el primer
                                    día.</span>
                            </div>
                        </div>
                        <div class="about-value">
                            <div class="about-value-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="20"
                                    height="20">
                                    <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" />
                                </svg>
                            </div>
                            <div>
                                <strong>Hecho en Colombia</strong>
                                <span>Desarrollado en Ibagué, entendiendo el contexto de las instituciones
                                    locales.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-right reveal reveal-delay-2">
                    <div class="team-card">
                        <div class="team-header">
                            <div class="section-tag" style="margin-bottom:12px;">Nuestro equipo</div>
                            <p style="font-size:14px;color:var(--text-muted);line-height:1.6;">Estudiantes de desarrollo
                                de software con una visión clara: tecnología útil, simple y segura para la educación
                                colombiana.</p>
                        </div>
                        <div class="team-members">
                            <?php
            $team = [
              ["initials"=>"DE1","role"=>"Desarrollador Backend","skill"=>"PHP · MySQL"],
              ["initials"=>"DE2","role"=>"Desarrollador Frontend","skill"=>"HTML · CSS · JS"],
              ["initials"=>"DE3","role"=>"Diseño & Base de datos","skill"=>"UX · SQL · ERD"],
            ];
            foreach($team as $m): ?>
                            <div class="team-member">
                                <div class="team-avatar"><?= $m['initials'] ?></div>
                                <div class="team-info">
                                    <strong><?= $m['role'] ?></strong>
                                    <span><?= $m['skill'] ?></span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="team-footer">
                            <div class="tech-badges">
                                <span class="tech-badge">PHP</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">HTML</span>
                                <span class="tech-badge">CSS</span>
                                <span class="tech-badge">XAMPP</span>
                                <span class="tech-badge">Git</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer class="footer" id="contacto">
        <div class="container">
            <div class="footer-grid">

                <div class="footer-brand">
                    <a href="index.php" class="navbar-logo" style="display:inline-flex;">
                        <div class="logo-img-wrap" style="width:36px;height:36px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                style="position:relative;z-index:1;">
                                <path d="M12 2L3 7v5c0 5.25 3.75 10.15 9 11.35C17.25 22.15 21 17.25 21 12V7L12 2z"
                                    fill="none" stroke="#00C6FF" stroke-width="1.8" />
                                <circle cx="12" cy="12" r="3" fill="#1E6FFF" />
                            </svg>
                        </div>
                        <div class="logo-text">
                            <strong>SCAPE</strong>
                            <span>Control de Acceso</span>
                        </div>
                    </a>
                    <p>Software de control de acceso inteligente para instituciones educativas que priorizan la
                        seguridad.</p>
                    <div class="footer-contact-info">
                        <div class="footer-contact-item">
                            <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                <path d="M22 6l-10 7L2 6" />
                            </svg>
                            contacto@scape.edu.co
                        </div>
                        <div class="footer-contact-item">
                            <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                            Ibagué, Tolima — Colombia
                        </div>
                    </div>
                </div>

                <div class="footer-col">
                    <h5>Navegación</h5>
                    <ul>
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#caracteristicas">Características</a></li>
                        <li><a href="#nosotros">Acerca de nosotros</a></li>
                        <li><a href="#contacto">Contáctenos</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h5>Módulos</h5>
                    <ul>
                        <li><a href="#caracteristicas">Control de personas</a></li>
                        <li><a href="#caracteristicas">Gestión de equipos</a></li>
                        <li><a href="#caracteristicas">Visitantes</a></li>
                        <li><a href="#caracteristicas">Reportes</a></li>
                    </ul>
                </div>

            </div>

            <div class="footer-bottom">
                <p>©<?= date('Y') ?> SCAPE Software. Todos los derechos reservados.</p>
                <div class="footer-legal">
                    <a href="#">Política de privacidad</a>
                    <a href="#">Términos de uso</a>
                </div>
            </div>
        </div>
    </footer>


    <script>
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 20);
    });

    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-links a');
    new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(a => a.classList.remove('active'));
                const active = document.querySelector(`.navbar-links a[href="#${entry.target.id}"]`);
                if (active) active.classList.add('active');
            }
        });
    }, {
        threshold: 0.4
    }).observe && sections.forEach(s =>
        new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(a => a.classList.remove('active'));
                    const active = document.querySelector(
                        `.navbar-links a[href="#${entry.target.id}"]`);
                    if (active) active.classList.add('active');
                }
            });
        }, {
            threshold: 0.4
        }).observe(s)
    );

    const revealObs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObs.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });
    document.querySelectorAll('.reveal').forEach(el => revealObs.observe(el));

    const countObs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target,
                    end = parseInt(el.dataset.count, 10);
                const isM = el.closest('.stat-block')?.querySelector('.stat-block-label')?.textContent
                    .includes('Millones');
                let cur = 0;
                const t = setInterval(() => {
                    cur += Math.ceil(end / 60);
                    if (cur >= end) {
                        cur = end;
                        clearInterval(t);
                    }
                    el.textContent = isM ? `+${cur}M` : `+${cur}`;
                }, 25);
                countObs.unobserve(el);
            }
        });
    }, {
        threshold: 0.5
    });
    document.querySelectorAll('[data-count]').forEach(c => countObs.observe(c));

    const hamburger = document.getElementById('hamburger');
    const navbarLinks = document.querySelector('.navbar-links');
    hamburger.addEventListener('click', () => {
        const open = navbarLinks.style.display === 'flex';
        navbarLinks.style.cssText = open ? '' :
            'display:flex;flex-direction:column;position:absolute;top:70px;left:0;right:0;background:rgba(8,12,20,0.98);backdrop-filter:blur(20px);padding:20px;border-bottom:1px solid #1A2540;gap:4px;';
    });

    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', e => {
            const t = document.querySelector(a.getAttribute('href'));
            if (t) {
                e.preventDefault();
                t.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    </script>
</body>

</html>