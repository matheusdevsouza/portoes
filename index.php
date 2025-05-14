<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Especialistas em manutenção de portões automáticos. Serviços profissionais com qualidade e confiança.">
    <title>Portões Automáticos - Manutenção Profissional</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</head>
<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero__content">
            <h1 class="hero__title">Manutenção de Portões com Qualidade e Confiança</h1>
            <p class="hero__subtitle">Especialistas em portões automáticos residenciais e comerciais</p>
            <a href="contato.php" class="btn btn--primary">Solicitar Orçamento</a>
        </div>
        <div class="hero__overlay"></div>
    </section>

    <!-- Services Section -->
    <section class="services" id="servicos">
        <div class="container">
            <h2 class="section-title">Nossos Serviços</h2>
            <div class="services__grid">
                <div class="service-card">
                    <div class="service-card__icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Manutenção Preventiva</h3>
                    <p>Inspeção regular para garantir o funcionamento perfeito do seu portão.</p>
                </div>
                <div class="service-card">
                    <div class="service-card__icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3>Reparos</h3>
                    <p>Correção rápida e eficiente de qualquer problema em seu portão.</p>
                </div>
                <div class="service-card">
                    <div class="service-card__icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Instalação de Motores</h3>
                    <p>Instalação profissional de novos motores e automações.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="sobre">
        <div class="container">
            <div class="about__content">
                <h2 class="section-title">Sobre Nós</h2>
                <p>Somos especialistas em manutenção de portões automáticos, com anos de experiência no mercado. Nossa missão é garantir a segurança e conforto dos nossos clientes através de serviços de alta qualidade.</p>
                <div class="about__stats">
                    <div class="stat-item">
                        <span class="stat-number"><i class="fas fa-calendar-alt"></i> 10+</span>
                        <span class="stat-label">Anos de Experiência</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number"><i class="fas fa-users"></i> 1000+</span>
                        <span class="stat-label">Clientes Satisfeitos</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contato">
        <div class="container">
            <h2 class="section-title">Entre em Contato</h2>
            <div class="contact__grid">
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <input type="text" id="name" name="name" required>
                        <label for="name">Nome</label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" required>
                        <label for="email">E-mail</label>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="phone" name="phone" required>
                        <label for="phone">Telefone</label>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" required></textarea>
                        <label for="message">Mensagem</label>
                    </div>
                    <button type="submit" class="btn btn--primary">Enviar Mensagem</button>
                </form>
                <div class="contact__info">
                    <div class="contact__item">
                        <i class="fas fa-phone"></i>
                        <p>(11) 99999-9999</p>
                    </div>
                    <div class="contact__item">
                        <i class="fas fa-envelope"></i>
                        <p>contato@portoes.com</p>
                    </div>
                    <div class="contact__item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>São Paulo, SP</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/smooth-scroll.js"></script>	
</body>
</html> 