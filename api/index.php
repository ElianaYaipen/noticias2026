<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eliana Yaipen Flores | Blog Personal & Portafolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <style>
    /* PALETA DE COLORES (CLARO Y OSCURO) */
    :root {
      --bg: #faf9f6;
      --surface: #ffffff;
      --text: #1c1917;
      --text-muted: #57534e;
      --border: #e7e5e4;
      --accent: #6d28d9;         /* Violeta elegante */
      --accent-2: #db2777;       /* Rosa acento */
      --accent-soft: #f3e8ff;
      --radius: 20px;
      --shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    [data-theme="dark"] {
      --bg: #0f0f12;
      --surface: #18181d;
      --text: #f4f4f5;
      --text-muted: #a1a1aa;
      --border: #27272a;
      --accent: #a78bfa;
      --accent-2: #f472b6;
      --accent-soft: rgba(167, 139, 250, 0.15);
      --shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
      background-color: var(--bg);
      color: var(--text);
      line-height: 1.65;
      transition: background-color 0.3s, color 0.3s;
    }

    .container {
      max-width: 1080px;
      margin: 0 auto;
      padding: 0 22px;
    }

    h1, h2, h3 {
      line-height: 1.25;
    }

    h1, h2 {
      font-family: 'Playfair Display', Georgia, serif;
    }

    /* NAVBAR */
    .navbar {
      position: sticky;
      top: 0;
      z-index: 50;
      background: color-mix(in srgb, var(--bg) 82%, transparent);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid var(--border);
    }

    .nav-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 70px;
    }

    .logo {
      font-size: 1.3rem;
      font-weight: 700;
      text-decoration: none;
      color: var(--text);
      letter-spacing: -0.5px;
    }

    .logo span {
      color: var(--accent);
    }

    .nav-links {
      display: flex;
      gap: 26px;
    }

    .nav-links a {
      text-decoration: none;
      color: var(--text-muted);
      font-weight: 500;
      font-size: 0.94rem;
      transition: color 0.2s;
    }

    .nav-links a:hover {
      color: var(--accent);
    }

    .nav-actions {
      display: flex;
      gap: 10px;
    }

    .icon-btn {
      background: var(--surface);
      border: 1px solid var(--border);
      color: var(--text);
      width: 38px;
      height: 38px;
      border-radius: 10px;
      cursor: pointer;
      font-size: 1rem;
      display: grid;
      place-items: center;
    }

    .mobile-only {
      display: none;
    }

    /* HERO */
    .hero {
      display: grid;
      grid-template-columns: 1.2fr 0.85fr;
      gap: 48px;
      align-items: center;
      padding: 64px 22px 40px;
    }

    .badge {
      display: inline-block;
      background: var(--accent-soft);
      color: var(--accent);
      font-size: 0.82rem;
      font-weight: 600;
      padding: 6px 14px;
      border-radius: 999px;
      margin-bottom: 18px;
    }

    .hero h1 {
      font-size: 3.1rem;
      margin-bottom: 16px;
    }

    .gradient-text {
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .hero-subtitle {
      font-size: 1.06rem;
      color: var(--text-muted);
      margin-bottom: 28px;
      max-width: 540px;
    }

    .hero-buttons {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
      margin-bottom: 34px;
    }

    .btn-primary, .btn-secondary {
      text-decoration: none;
      padding: 12px 22px;
      border-radius: 12px;
      font-weight: 600;
      font-size: 0.95rem;
      transition: transform 0.2s, opacity 0.2s;
      display: inline-block;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
      color: #fff;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      opacity: 0.92;
    }

    .btn-secondary {
      background: var(--surface);
      color: var(--text);
      border: 1px solid var(--border);
    }

    .btn-secondary:hover {
      border-color: var(--accent);
    }

    .hero-stats {
      display: flex;
      gap: 32px;
      border-top: 1px solid var(--border);
      padding-top: 20px;
    }

    .hero-stats strong {
      display: block;
      font-size: 1.05rem;
    }

    .hero-stats span {
      font-size: 0.82rem;
      color: var(--text-muted);
    }

    .hero-image-wrapper {
      position: relative;
    }

    .hero-img {
      width: 100%;
      aspect-ratio: 4 / 5;
      object-fit: cover;
      border-radius: 26px;
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
    }

    .floating-card {
      position: absolute;
      bottom: 18px;
      left: -18px;
      background: var(--surface);
      border: 1px solid var(--border);
      padding: 12px 16px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      gap: 12px;
      box-shadow: var(--shadow);
    }

    .floating-card span {
      font-size: 1.5rem;
    }

    .floating-card strong {
      display: block;
      font-size: 0.88rem;
    }

    .floating-card small {
      color: var(--text-muted);
      font-size: 0.76rem;
    }

    /* SECCIONES */
    .section {
      padding: 72px 22px 20px;
    }

    .section-header {
      margin-bottom: 32px;
    }

    .section-tag {
      color: var(--accent);
      font-weight: 700;
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      display: block;
      margin-bottom: 6px;
    }

    .section-header h2 {
      font-size: 2.2rem;
      margin-bottom: 6px;
    }

    .section-header p {
      color: var(--text-muted);
    }

    .card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 26px;
      box-shadow: var(--shadow);
    }

    /* BENTO SOBRE MÍ */
    .bento-about {
      display: grid;
      grid-template-columns: 1.4fr 1fr;
      gap: 20px;
    }

    .about-bio p {
      color: var(--text-muted);
      margin-top: 12px;
    }

    .about-photo-card {
      padding: 12px;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .about-photo-card img {
      width: 100%;
      height: 230px;
      object-fit: cover;
      border-radius: 14px;
    }

    .photo-caption {
      font-size: 0.85rem;
      color: var(--text-muted);
      text-align: center;
    }

    .skills-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-top: 14px;
    }

    .skill-pill {
      background: var(--accent-soft);
      color: var(--accent);
      padding: 6px 12px;
      border-radius: 999px;
      font-size: 0.84rem;
      font-weight: 600;
    }

    .about-facts ul {
      list-style: none;
      margin-top: 14px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      color: var(--text-muted);
    }

    /* PROYECTOS */
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 22px;
    }

    .project-card {
      padding: 0;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: transform 0.2s;
    }

    .project-card:hover {
      transform: translateY(-4px);
    }

    .project-img-box img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      display: block;
    }

    .project-body {
      padding: 22px;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .project-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      margin-bottom: 10px;
    }

    .project-tags span {
      font-size: 0.75rem;
      background: var(--bg);
      border: 1px solid var(--border);
      padding: 3px 9px;
      border-radius: 999px;
      color: var(--text-muted);
    }

    .project-tags .tag-winner {
      background: var(--accent-soft);
      color: var(--accent);
      border-color: var(--accent);
      font-weight: 700;
    }

    .project-body h3 {
      font-size: 1.25rem;
      margin-bottom: 8px;
    }

    .project-body p {
      color: var(--text-muted);
      font-size: 0.94rem;
      margin-bottom: 16px;
      flex-grow: 1;
    }

    .link-arrow {
      text-decoration: none;
      color: var(--accent);
      font-weight: 600;
      font-size: 0.9rem;
    }

    /* TRAYECTORIA */
    .timeline {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .timeline-date {
      display: inline-block;
      font-size: 0.8rem;
      font-weight: 700;
      color: var(--accent);
      margin-bottom: 6px;
    }

    .timeline-item p {
      color: var(--text-muted);
      margin-top: 6px;
    }

    /* Tarjeta destacada con foto compacta en Trayectoria */
    .timeline-featured {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 24px;
      border-color: var(--accent);
    }

    .timeline-text {
      flex: 1;
    }

    .timeline-img-box {
      flex-shrink: 0;
    }

    .timeline-img {
      width: 240px;
      height: 150px;
      object-fit: cover;
      object-position: center 20%;
      border-radius: 14px;
      border: 1px solid var(--border);
      display: block;
    }

    /* BLOG */
    .blog-filters {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      margin-bottom: 24px;
    }

    .filter-btn {
      background: var(--surface);
      border: 1px solid var(--border);
      color: var(--text-muted);
      padding: 8px 16px;
      border-radius: 999px;
      cursor: pointer;
      font-weight: 600;
      font-size: 0.86rem;
      transition: all 0.2s;
    }

    .filter-btn.active, .filter-btn:hover {
      background: var(--accent);
      color: #fff;
      border-color: var(--accent);
    }

    .blog-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .post-card {
      padding: 0;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .post-card.hidden {
      display: none;
    }

    .post-img {
      width: 100%;
      height: 170px;
      object-fit: cover;
    }

    .post-body {
      padding: 20px;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .post-meta {
      display: flex;
      justify-content: space-between;
      font-size: 0.8rem;
      color: var(--text-muted);
      margin-bottom: 10px;
    }

    .post-cat {
      color: var(--accent);
      font-weight: 700;
    }

    .post-body h3 {
      font-size: 1.12rem;
      margin-bottom: 8px;
    }

    .post-body p {
      color: var(--text-muted);
      font-size: 0.9rem;
      margin-bottom: 16px;
      flex-grow: 1;
    }

    .read-btn {
      background: none;
      border: none;
      color: var(--accent);
      font-weight: 700;
      cursor: pointer;
      text-align: left;
      font-size: 0.9rem;
      padding: 0;
    }

    /* CONTACTO */
    .contact-box {
      text-align: center;
      padding: 48px 28px;
      background: linear-gradient(135deg, var(--accent-soft), var(--surface));
    }

    .contact-box p {
      max-width: 540px;
      margin: 12px auto 26px;
      color: var(--text-muted);
    }

    .contact-links {
      display: flex;
      justify-content: center;
      gap: 12px;
      flex-wrap: wrap;
    }

    /* FOOTER */
    .footer {
      margin-top: 72px;
      border-top: 1px solid var(--border);
      padding: 28px 0;
      color: var(--text-muted);
      font-size: 0.88rem;
    }

    .footer-content {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 12px;
    }

    .footer a {
      color: var(--text-muted);
      text-decoration: none;
    }

    /* MODAL */
    .modal {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(4px);
      display: none;
      place-items: center;
      padding: 20px;
      z-index: 100;
    }

    .modal.open {
      display: grid;
    }

    .modal-content {
      max-width: 650px;
      width: 100%;
      max-height: 85vh;
      overflow-y: auto;
      position: relative;
    }

    .close-btn {
      position: absolute;
      top: 18px;
      right: 18px;
      background: var(--bg);
      border: 1px solid var(--border);
      color: var(--text);
      width: 34px;
      height: 34px;
      border-radius: 50%;
      cursor: pointer;
    }

    .modal-content h2 {
      margin: 8px 0 6px;
      font-size: 1.7rem;
    }

    .modal-content time {
      font-size: 0.85rem;
      color: var(--text-muted);
      display: block;
      margin-bottom: 18px;
    }

    .modal-body p {
      margin-bottom: 14px;
      color: var(--text-muted);
    }

    /* RESPONSIVE */
    @media (max-width: 860px) {
      .hero, .bento-about, .projects-grid, .blog-grid {
        grid-template-columns: 1fr;
      }
      .hero h1 {
        font-size: 2.3rem;
      }
      .floating-card {
        left: 12px;
      }
      .timeline-featured {
        flex-direction: column;
        align-items: flex-start;
      }
      .timeline-img {
        width: 100%;
        height: 180px;
      }
      .mobile-only {
        display: grid;
      }
      .nav-links {
        display: none;
        position: absolute;
        top: 70px;
        left: 0;
        right: 0;
        background: var(--surface);
        border-bottom: 1px solid var(--border);
        flex-direction: column;
        padding: 20px;
        gap: 16px;
      }
      .nav-links.open {
        display: flex;
      }
    }
  </style>
</head>
<body>

  <!-- NAVEGACIÓN FIJA -->
  <header class="navbar">
    <div class="container nav-content">
      <a href="#inicio" class="logo">eliana<span>.dev</span></a>
      
      <nav class="nav-links" id="navLinks">
        <a href="#inicio">Inicio</a>
        <a href="#sobre-mi">Sobre mí</a>
        <a href="#proyectos">Proyectos</a>
        <a href="#trayectoria">Trayectoria</a>
        <a href="#blog">Blog</a>
        <a href="#contacto">Contacto</a>
      </nav>

      <div class="nav-actions">
        <button id="themeToggle" class="icon-btn" aria-label="Cambiar tema" title="Modo oscuro/claro">🌙</button>
        <button id="menuToggle" class="icon-btn mobile-only" aria-label="Abrir menú">☰</button>
      </div>
    </div>
  </header>

  <main>

    <!-- 1. INICIO (HERO) -->
    <section id="inicio" class="hero container">
      <div class="hero-text">
        <span class="badge">✨ Disponible para oportunidades en Datos & Tech</span>
        <h1>Hola, soy <span class="gradient-text">Eliana Yaipen Flores</span>.</h1>
        <p class="hero-subtitle">
          Estudiante de <strong>Ingeniería de Sistemas (UNS)</strong> enfocada en el
          <strong>Análisis de Datos</strong>, desarrollo de software y soluciones con impacto real.
          Aquí comparto mis proyectos, aprendizajes y un poco de mi mundo creativo.
        </p>
        <div class="hero-buttons">
          <a href="#proyectos" class="btn-primary">Ver mis proyectos</a>
          <a href="#blog" class="btn-secondary">Leer mi blog</a>
        </div>
        <div class="hero-stats">
          <div><strong>+4</strong><span>Proyectos Tech</span></div>
          <div><strong>ITIL & Datos</strong><span>Enfoque analítico</span></div>
          <div><strong>Nuevo Chimbote</strong><span>Áncash, Perú</span></div>
        </div>
      </div>

      <div class="hero-image-wrapper">
        <img 
          src="img/perfil.jpeg" 
          alt="Foto de perfil de Eliana Yaipén" 
          class="hero-img"
          onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80'"
        />
        <div class="floating-card">
          <span>📊</span>
          <div>
            <strong>Futura Data Analyst</strong>
            <small>Transformando datos en decisiones</small>
          </div>
        </div>
      </div>
    </section>

    <!-- 2. SOBRE MÍ (BENTO GRID) -->
    <section id="sobre-mi" class="section container">
      <div class="section-header">
        <span class="section-tag">Conóceme</span>
        <h2>Sobre mí</h2>
      </div>

      <div class="bento-about">
        <div class="card about-bio">
          <h3>Ingeniería, datos y un toque de arte</h3>
          <p>
            Soy <strong>Eliana Daniela Yaipén Flores</strong>, estudiante de Ingeniería de Sistemas en la
            Universidad Nacional del Santa. Me apasiona conectar la tecnología con la resolución de problemas
            reales: desde plataformas web y apps móviles hasta dashboards analíticos.
          </p>
          <p>
            Mi meta es consolidarme como <strong>Analista de Datos Junior</strong> y crecer hacia roles de
            liderazgo tecnológico. Fuera de la pantalla, me encanta <strong>pintar</strong>, dibujar y estar con los que amo.
          </p>
        </div>

        <div class="card about-photo-card">
          <img 
            src="img/sobre-mi.jpg" 
            alt="Eliana en un momento personal o viaje"
            onerror="this.src='https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&fit=crop&w=600&q=80'"
          />
          <span class="photo-caption">Creatividad, código y viajes ✨</span>
        </div>

        <div class="card about-skills">
          <h3>Stack & Herramientas</h3>
          <div class="skills-grid">
            <span class="skill-pill">Power BI</span>
            <span class="skill-pill">SQL & PostgreSQL</span>
            <span class="skill-pill">Java</span>
            <span class="skill-pill">Kotlin (Android)</span>
            <span class="skill-pill">Laravel & Next.js</span>
            <span class="skill-pill">Firebase</span>
            <span class="skill-pill">Git & GitHub</span>
            <span class="skill-pill">Figma</span>
            <span class="skill-pill">ITIL & Scrum</span>
          </div>
        </div>

        <div class="card about-facts">
          <h3>Datos rápidos</h3>
          <ul>
            <li>📍 <strong>Ubicación:</strong> Nuevo Chimbote, Perú</li>
            <li>🎓 <strong>Carrera:</strong> Ing. de Sistemas — UNS</li>
            <li>🎨 <strong>Hobby:</strong> Pintura y diseño visual</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- 3. PROYECTOS -->
    <section id="proyectos" class="section container">
      <div class="section-header">
        <span class="section-tag">Portafolio</span>
        <h2>Proyectos destacados</h2>
        <p>Algunas de las soluciones tecnológicas que he diseñado y desarrollado.</p>
      </div>

      <div class="projects-grid">
        <!-- Proyecto 1 -->
        <article class="card project-card">
          <div class="project-img-box">
            <img 
              src="img/agrocloud.jpg" 
              alt="AgroCloud AI"
              onerror="this.src='https://images.unsplash.com/photo-1523348837708-15d4a09cfac2?auto=format&fit=crop&w=600&q=80'"
            />
          </div>
          <div class="project-body">
            <div class="project-tags">
              <span>Laravel</span><span>Next.js</span><span>Visión por Computadora</span>
            </div>
            <h3>AgroCloud AI</h3>
            <p>
              Plataforma web multi-tenant para gestionar la trazabilidad de lotes de palta,
              muestreo de calidad y detección automatizada de plagas antes del empaque.
            </p>
            <a href="https://github.com" target="_blank" class="link-arrow">Ver detalles en GitHub →</a>
          </div>
        </article>

        <!-- Proyecto 2 -->
        <article class="card project-card">
          <div class="project-img-box">
            <img 
              src="img/petpoint.jpg" 
              alt="PetPoint App"
              onerror="this.src='https://images.unsplash.com/photo-1548199973-03cce0bbc87b?auto=format&fit=crop&w=600&q=80'"
            />
          </div>
          <div class="project-body">
            <div class="project-tags">
              <span class="tag-winner">🏆 Ganador Incuba UNS</span>
              <span>Kotlin</span><span>Firebase</span><span>YOLOv8</span><span>Maps SDK</span>
            </div>
            <h3>PetPoint</h3>
            <p>
              Aplicación móvil nativa en Android con arquitectura MVVM e inteligencia artificial
              para reportar y localizar mascotas perdidas en Chimbote y Nuevo Chimbote.
            </p>
            <a href="https://github.com" target="_blank" class="link-arrow">Ver detalles en GitHub →</a>
          </div>
        </article>

        <!-- Proyecto 3 -->
        <article class="card project-card">
          <div class="project-img-box">
            <img 
              src="img/inkamedic.jpg" 
              alt="InkaMedic CRM"
              onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80'"
            />
          </div>
          <div class="project-body">
            <div class="project-tags">
              <span>Spring Boot</span><span>PostgreSQL</span><span>Power BI</span>
            </div>
            <h3>InkaMedic CRM & Analytics</h3>
            <p>
              Sistema web de gestión para farmacia y clínica integrado con dashboards
              interactivos en Power BI para el seguimiento de ventas e inventario.
            </p>
            <a href="https://github.com" target="_blank" class="link-arrow">Ver detalles en GitHub →</a>
          </div>
        </article>

        <!-- Proyecto 4 -->
        <article class="card project-card">
          <div class="project-img-box">
            <img 
              src="img/eventify.jpg" 
              alt="Eventify UNS"
              onerror="this.src='https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=600&q=80'"
            />
          </div>
          <div class="project-body">
            <div class="project-tags">
              <span>Kotlin</span><span>Firestore</span><span>Google Maps</span>
            </div>
            <h3>Eventify UNS</h3>
            <p>
              App móvil nativa con marcadores personalizados en mapa en tiempo real para
              descubrir y gestionar eventos del Centro Cultural de la UNS.
            </p>
            <a href="https://github.com" target="_blank" class="link-arrow">Ver detalles en GitHub →</a>
          </div>
        </article>
      </div>
    </section>

    <!-- 4. TRAYECTORIA Y LOGROS -->
    <section id="trayectoria" class="section container">
      <div class="section-header">
        <span class="section-tag">Experiencia & Certificaciones</span>
        <h2>Mi trayectoria</h2>
      </div>

      <div class="timeline">
        <!-- Logro Incuba UNS con foto compacta -->
        <div class="timeline-item card timeline-featured">
          <div class="timeline-text">
            <span class="timeline-date">2026 • 🏆 Logro Destacado</span>
            <h3>Ganadora en Incuba UNS con el proyecto PetPoint</h3>
            <p>
              Obtuvimos el reconocimiento en la incubadora de emprendimientos <strong>Incuba UNS</strong>
              con <strong>PetPoint</strong>, nuestra app móvil con inteligencia artificial y geolocalización
              para ayudar a localizar mascotas perdidas en Chimbote y Nuevo Chimbote.
            </p>
          </div>
          <div class="timeline-img-box">
            <img 
              src="img/incuba-petpoint.jpg" 
              alt="Equipo ganador en Incuba UNS con PetPoint"
              class="timeline-img"
              onerror="this.src='https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80'"
            />
          </div>
        </div>

        <div class="timeline-item card">
          <span class="timeline-date">2026</span>
          <h3>Pasantía Académica en Arequipa & Soporte TI en EsSalud</h3>
          <p>
            Completé una pasantía académica de 25 días en Arequipa y mis prácticas preprofesionales
            en Soporte Informático en el Hospital Base III EsSalud Chimbote, aplicando buenas
            prácticas de <strong>ITIL</strong> en la gestión de incidentes, además del desarrollo en el sistema del hospital.
          </p>
        </div>

        <div class="timeline-item card">
          <span class="timeline-date">2026</span>
          <h3>Hackatón Nacional Transformagob & Certificaciones IA</h3>
          <p>
            Participé con el equipo <em>Brain Master</em> desarrollando la propuesta de seguridad
            ciudadana <em>BarraCero</em>. Además, obtuve acreditaciones en <strong>AI Agent Fundamentals
            (Databricks)</strong>, <strong>Microsoft AI Skills Fest</strong> y <strong>Scrum Fundamentals</strong>.
          </p>
        </div>

        <div class="timeline-item card">
          <span class="timeline-date">2025 – 2026</span>
          <h3>Control de Inventarios en Botica Inkamedic & Viaje de Estudios a Europa</h3>
          <p>
            Experiencia laboral como Asistente de Control de Inventarios y viaje académico internacional
            a Tenerife (España) en la Universidad de La Laguna.
          </p>
        </div>
      </div>
    </section>

    <!-- 5. BLOG PERSONAL -->
    <section id="blog" class="section container">
      <div class="section-header">
        <span class="section-tag">Bitácora</span>
        <h2>Mi Blog Personal</h2>
        <p>Artículos sobre tecnología, análisis de datos, viajes y aprendizajes.</p>
      </div>

      <!-- Filtros -->
      <div class="blog-filters">
        <button class="filter-btn active" data-filter="todos">Todos</button>
        <button class="filter-btn" data-filter="tecnologia">Tecnología</button>
        <button class="filter-btn" data-filter="viajes">Viajes</button>
        <button class="filter-btn" data-filter="personal">Personal</button>
      </div>

      <div class="blog-grid">
        <!-- Post 1 -->
        <article class="card post-card" data-category="tecnologia">
          <img 
            src="img/post-tech.jpg" 
            alt="Desarrollo y datos" 
            class="post-img"
            onerror="this.src='https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=600&q=80'"
          />
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat">Tecnología</span>
              <time>18 Nov 2026</time>
            </div>
            <h3>De estudiante de Sistemas a futura Analista de Datos</h3>
            <p>Cómo estoy combinando desarrollo backend, bases de datos y Power BI para construir mi perfil profesional.</p>
            <button class="read-btn" data-post="0">Leer artículo completo →</button>
          </div>
        </article>

        <!-- Post 2 -->
        <article class="card post-card" data-category="viajes">
          <img 
            src="img/post-viaje.jpeg" 
            alt="Arequipa y el Colca" 
            class="post-img"
            onerror="this.src='https://images.unsplash.com/photo-1589394815804-964ed0be2eb5?auto=format&fit=crop&w=600&q=80'"
          />
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat">Viajes</span>
              <time>28 Oct 2026</time>
            </div>
            <h3>25 días en Arequipa: pasantía y aprendizajes</h3>
            <p>Lo que me dejó vivir una experiencia académica fuera de casa, participar en CiteSoft y en el IV Congreso Nacional de Semilleros de Investigación (CONASEIN 2026).</p>
            <button class="read-btn" data-post="1">Leer artículo completo →</button>
          </div>
        </article>

        <!-- Post 3 -->
        <article class="card post-card" data-category="personal">
          <img 
            src="img/post-arte.jpg" 
            alt="Pintura y creatividad" 
            class="post-img"
            onerror="this.src='https://images.unsplash.com/photo-1460661419201-fd4cecdf8a8b?auto=format&fit=crop&w=600&q=80'"
          />
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat">Personal</span>
              <time>05 Oct 2026</time>
            </div>
            <h3>Pintura: mi fórmula para mantener el equilibrio</h3>
            <p>Por qué cultivar hobbies creativos me ayudan a pensar mejor.</p>
            <button class="read-btn" data-post="2">Leer artículo completo →</button>
          </div>
        </article>
      </div>
    </section>

    <!-- 6. CONTACTO -->
    <section id="contacto" class="section container">
      <div class="card contact-box">
        <div class="contact-info">
          <span class="section-tag">Hablemos</span>
          <h2>¿Trabajamos juntos?</h2>
          <p>
            Si buscas una persona comprometida para prácticas, proyectos de análisis de datos
            o desarrollo de software, escríbeme. ¡Me encantará conectar!
          </p>
          <div class="contact-links">
            <a href="mailto:tu.correo@ejemplo.com" class="btn-primary">✉️ Enviarme un correo</a>
            <a href="https://linkedin.com" target="_blank" class="btn-secondary">LinkedIn ↗</a>
            <a href="https://github.com" target="_blank" class="btn-secondary">GitHub ↗</a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container footer-content">
      <p>© <?php echo date('Y'); ?> Eliana Daniela Yaipén Flores. Diseñado con cariño desde Nuevo Chimbote.</p>
      <a href="#inicio">Volver arriba ↑</a>
    </div>
  </footer>

  <!-- MODAL PARA LEER ARTÍCULOS COMPLETOS -->
  <div id="postModal" class="modal" aria-hidden="true">
    <div class="modal-content card">
      <button id="closeModal" class="close-btn" aria-label="Cerrar">✕</button>
      <span id="modalCategory" class="post-cat"></span>
      <h2 id="modalTitle"></h2>
      <time id="modalDate"></time>
      <div id="modalBody" class="modal-body"></div>
    </div>
  </div>

  <script>
    // 1. MODO OSCURO / CLARO
    const themeToggle = document.getElementById('themeToggle');
    const savedTheme = localStorage.getItem('theme');

    if (savedTheme === 'dark') {
      document.documentElement.setAttribute('data-theme', 'dark');
      themeToggle.textContent = '☀️';
    }

    themeToggle.addEventListener('click', () => {
      const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
      if (isDark) {
        document.documentElement.removeAttribute('data-theme');
        localStorage.setItem('theme', 'light');
        themeToggle.textContent = '🌙';
      } else {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
        themeToggle.textContent = '☀️';
      }
    });

    // 2. MENÚ MÓVIL
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');

    menuToggle.addEventListener('click', () => {
      navLinks.classList.toggle('open');
    });

    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => navLinks.classList.remove('open'));
    });

    // 3. FILTROS DEL BLOG
    const filterBtns = document.querySelectorAll('.filter-btn');
    const posts = document.querySelectorAll('.post-card');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filter = btn.dataset.filter;

        posts.forEach(post => {
          if (filter === 'todos' || post.dataset.category === filter) {
            post.classList.remove('hidden');
          } else {
            post.classList.add('hidden');
          }
        });
      });
    });

    // 4. ARTÍCULOS COMPLETOS (MODAL)
    const articles = [
      {
        category: 'Tecnología',
        date: '18 Nov 2026',
        title: 'De estudiante de Sistemas a futura Analista de Datos',
        body: `
          <p>Estudiar Ingeniería de Sistemas me dio una base sólida en programación, bases de datos y arquitectura de software. Sin embargo, al trabajar en proyectos como InkaMedic y analizar procesos reales, descubrí que lo que más me apasiona es transformar datos en decisiones claras.</p>
          <p>Actualmente combino mis conocimientos en SQL, Power BI y desarrollo backend para entender el ciclo completo del dato: desde cómo se captura en una aplicación hasta cómo se visualiza para la gerencia.</p>
          <p>Mi siguiente paso es seguir construyendo proyectos con datasets reales y fortalecer mi perfil hacia roles de liderazgo en tecnología.</p>
        `
      },
      {
        category: 'Viajes',
        date: '28 Oct 2026',
        title: '25 días en Arequipa: pasantía y aprendizajes',
        body: `
          <p>Pasar casi un mes en Arequipa por mi pasantía académica fue una de las experiencias más enriquecedoras de mi etapa universitaria. Participar en CiteSoft y en el IV Congreso Nacional de Semilleros de Investigación (CONASEIN 2026) me permitió compartir ideas, aprender de otros equipos y crecer profesionalmente.</p>
          <p>Además, conocer nuevos lugares y culturas fuera de casa me recordó lo importante que es salir de la zona de confort para seguir creciendo.</p>
        `
      },
      {
        category: 'Personal',
        date: '05 Oct 2026',
        title: 'Pintura: mi fórmula para mantener el equilibrio',
        body: `
          <p>En carreras tecnológicas es muy fácil pasar todo el día frente a una pantalla. Para mí, pintar y dibujar son indispensables para despejar la mente y conectar con mi lado más creativo.</p>
          <p>La pintura entrena mi ojo visual —algo que luego aplico cuando diseño interfaces en Figma—, ayudándome a pensar con más claridad cuando vuelvo al código y a los datos.</p>
        `
      }
    ];

    const modal = document.getElementById('postModal');
    const closeModal = document.getElementById('closeModal');

    document.querySelectorAll('.read-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const post = articles[btn.dataset.post];
        document.getElementById('modalCategory').textContent = post.category;
        document.getElementById('modalTitle').textContent = post.title;
        document.getElementById('modalDate').textContent = post.date;
        document.getElementById('modalBody').innerHTML = post.body;
        modal.classList.add('open');
      });
    });

    closeModal.addEventListener('click', () => modal.classList.remove('open'));
    modal.addEventListener('click', (e) => {
      if (e.target === modal) modal.classList.remove('open');
    });
  </script>
</body>
</html>
