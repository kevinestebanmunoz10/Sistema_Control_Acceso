<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCAPE — Control de acceso inteligente</title>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- NAV -->
  <nav>
    <a href="#" class="nav-logo">
      <div class="nav-logo-icon">🔒</div>
      SCAPE
    </a>
    <ul class="nav-links">
      <li><a href="#">Inicio</a></li>
      <li><a href="#features">Características</a></li>
      <li><a href="#testimonials">Clientes</a></li>
      <li><a href="#">Costos / Contratación</a></li>
      <li><a href="#">Contáctenos</a></li>
    </ul>
    <button class="btn-demo">Solicitar demo</button>
  </nav>

  <!-- HERO -->
  <section class="hero">
    <span class="hero-badge">Control de acceso inteligente</span>
    <h1>Gestiona el acceso a tus instalaciones con Scape</h1>
    <p>El sistema de control de acceso de personal y equipos SCAPE sirve para controlar, monitorear y auditar los accesos a tus instalaciones en tiempo real</p>
    <div class="hero-btns">
      <button class="btn-primary">Comenzar gratis</button>
      <button class="btn-outline">Ver demo en vivo</button>
    </div>
    <div class="hero-dashboard">
      <div class="stat-card">
        <div class="stat-label"><span class="dot dot-blue"></span>Accesos hoy</div>
        <div class="stat-value">847</div>
        <div class="stat-bar"><div class="stat-bar-fill fill-blue"></div></div>
        <span class="stat-badge badge-green">▲ +52%</span>
      </div>
      <div class="stat-card">
        <div class="stat-label"><span class="dot dot-teal"></span>Puertas activas</div>
        <div class="stat-value">24/24</div>
        <div class="stat-bar"><div class="stat-bar-fill fill-teal"></div></div>
        <span class="stat-badge badge-on">ON</span>
      </div>
      <div class="stat-card">
        <div class="stat-label"><span class="dot dot-amber"></span>Alarmas</div>
        <div class="stat-value">3</div>
        <div class="stat-bar"><div class="stat-bar-fill fill-amber"></div></div>
        <span class="stat-badge badge-orange">PRO ACT</span>
      </div>
    </div>
    <div class="scroll-hint">
      <div class="scroll-arrow">↓</div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="features" id="features">
    <p class="section-label">Funcionalidades</p>
    <h2 class="section-title">Todo lo que necesitas para<br>gestionar accesos</h2>
    <p class="section-sub">Una plataforma completa con todas las herramientas para controlar quién entra y sale de tus instalaciones.</p>
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon icon-amber">🚪</div>
        <h3>Control de puertas y zonas</h3>
        <p>Administra múltiples puntos de acceso desde un solo lugar. Compatible con lectores RFID, biométricos y PIN.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon icon-teal">📋</div>
        <h3>Reportes y auditoría en tiempo real</h3>
        <p>Registros detallados de cada acceso con historial exportable. Alertas automáticas y dashboards configurables.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon icon-purple">👥</div>
        <h3>Gestión de usuarios y roles</h3>
        <p>Define permisos granulares por empleado. Asigna horarios de integración con Active Directory y SSO.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon icon-amber">📱</div>
        <h3>App móvil para administradores</h3>
        <p>Monitorea accesos en vivo desde tu móvil. Notificaciones push para eventos críticos.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon icon-teal">⚡</div>
        <h3>Integraciones a API</h3>
        <p>Conecta tu app con tu ERP o PMO de sistema de nómina mediante API REST documentada.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon icon-purple">☁️</div>
        <h3>Nube o instalación local</h3>
        <p>Despliega en nuestra infraestructura o bajo tus servidores. Backup automático y alta disponibilidad.</p>
      </div>
    </div>
  </section>

  <!-- METRICS -->
  <section class="metrics">
    <div class="metrics-grid">
      <div class="metric-card">
        <div class="metric-value">+500</div>
        <div class="metric-label">Empresas clientes</div>
      </div>
      <div class="metric-card">
        <div class="metric-value">99.9%</div>
        <div class="metric-label">Tiempo de actividad</div>
      </div>
      <div class="metric-card">
        <div class="metric-value">+2M</div>
        <div class="metric-label">Accesos procesados/día</div>
      </div>
      <div class="metric-card">
        <div class="metric-value">24/7</div>
        <div class="metric-label">Soporte técnico</div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="testimonials" id="testimonials">
    <p class="section-label">Clientes</p>
    <h2 class="section-title" style="margin-bottom: 40px;">Lo que dicen nuestros clientes</h2>
    <div class="testimonials-grid">
      <div class="testi-card">
        <div class="testi-header">
          <div class="testi-avatar">PC</div>
          <div>
            <div class="testi-name">ProCargo S.A.S</div>
            <div class="testi-location">Bogotá, Algeria</div>
          </div>
        </div>
        <div class="testi-stars">★★★★★</div>
        <p class="testi-text">"Desde hace 7 años no contamos con un proveedor más confiable y comprometido. Su servicio es excepcional y la implementación fue rápida sin complicaciones."</p>
      </div>
      <div class="testi-card">
        <div class="testi-header">
          <div class="testi-avatar">MH</div>
          <div>
            <div class="testi-name">MediHogar Clinics</div>
            <div class="testi-location">Cali, Medellín</div>
          </div>
        </div>
        <div class="testi-stars">★★★★★</div>
        <p class="testi-text">"El servicio de zonas ha mejorado la seguridad de nuestra clínica. Ahora tenemos visibilidad completa y los reportes se sintetizan de manera clara."</p>
      </div>
      <div class="testi-card">
        <div class="testi-header">
          <div class="testi-avatar">TP</div>
          <div>
            <div class="testi-name">TechPark Centro</div>
            <div class="testi-location">Yonaima, Cali</div>
          </div>
        </div>
        <div class="testi-stars">★★★★★</div>
        <p class="testi-text">"Qué decisión más acertada. Sus plataformas llegaron con nuestros sistemas de registros y los tiempos de respuesta mejoraron notablemente."</p>
      </div>
      <div class="testi-card">
        <div class="testi-header">
          <div class="testi-avatar">EF</div>
          <div>
            <div class="testi-name">EdaFuturo IED</div>
            <div class="testi-location">Situación, Bogotá</div>
          </div>
        </div>
        <div class="testi-stars">★★★★★</div>
        <p class="testi-text">"Mucho mejor de lo que esperábamos. Los padres tienen más tranquilidad y no vemos más problemas con el control de acceso."</p>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="footer-logo">
          <div class="footer-logo-icon">🔒</div>
          Scape
        </div>
        <p>Software de control de acceso inteligente para organizaciones que priorizan la seguridad y el crecimiento</p>
      </div>
      <div class="footer-col">
        <h4>Producto</h4>
        <ul>
          <li><a href="#">Características</a></li>
          <li><a href="#">Integraciones</a></li>
          <li><a href="#">Precios</a></li>
          <li><a href="#">Novedades</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Empresa</h4>
        <ul>
          <li><a href="#">Acerca de</a></li>
          <li><a href="#">Clientes</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Trabaja con nosotros</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Soporte</h4>
        <ul>
          <li><a href="#">Documentación</a></li>
          <li><a href="#">Centro de ayuda</a></li>
          <li><a href="#">Contáctanos</a></li>
          <li><a href="#">Estado del sistema</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>©2025 Scape Software. Todos los derechos reservados.</span>
      <div class="footer-bottom-links">
        <a href="#">Política de privacidad</a>
        <a href="#">Términos de uso</a>
      </div>
    </div>
  </footer>

</body>
</html>