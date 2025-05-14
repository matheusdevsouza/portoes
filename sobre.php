<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conheça a história da nossa empresa de portões automáticos. Nossa missão, valores e compromisso com a qualidade.">
    <title>Sobre Nós - Portões Automáticos</title>
    
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
    <section class="page-hero">
        <div class="page-hero__content">
            <h1 class="page-hero__title">Sobre Nós</h1>
            <p class="page-hero__subtitle">Conheça nossa história e valores</p>
        </div>
    </section>

    <!-- History Section -->
    <section class="history">
        <div class="container">
            <div class="history__grid">
                <div class="history__content">
                    <h2 class="section-title">Nossa História</h2>
                    <p>Fundada em 2010, nossa empresa nasceu do sonho de oferecer soluções de qualidade em automação de portões. Ao longo dos anos, construímos uma reputação sólida baseada em excelência técnica e atendimento personalizado.</p>
                    <p>Hoje, somos referência no mercado de portões automáticos, atendendo centenas de clientes residenciais e comerciais com o mesmo compromisso com a qualidade que nos move desde o início.</p>
                </div>
                <div class="history__image">
                    <img src="/portoes/assets/images/About.svg" alt="Nossa história" class="reveal-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values -->
    <section class="mission-values">
        <div class="container">
            <div class="mission-values__grid">
                <div class="mission-card">
                    <i class="fas fa-bullseye"></i>
                    <h3>Missão</h3>
                    <p>Fornecer soluções em automação de portões com excelência técnica, segurança e confiabilidade, garantindo a satisfação total dos nossos clientes.</p>
                </div>
                <div class="mission-card">
                    <i class="fas fa-eye"></i>
                    <h3>Visão</h3>
                    <p>Ser reconhecida como a empresa líder em soluções de automação de portões, referência em qualidade e inovação no mercado.</p>
                </div>
                <div class="mission-card">
                    <i class="fas fa-heart"></i>
                    <h3>Valores</h3>
                    <ul>
                        <li>Excelência técnica</li>
                        <li>Compromisso com o cliente</li>
                        <li>Inovação constante</li>
                        <li>Ética e transparência</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team">
        <div class="container">
            <h2 class="section-title">Nossa Equipe</h2>
            <div class="team__grid">
                <div class="team-member">
                    <div class="team-member__image">
                        <img src="/portoes/assets/images/joão-silva.jpg" alt="Membro da equipe">
                    </div>
                    <h3>João Silva</h3>
                    <p>Diretor Técnico</p>
                </div>
                <div class="team-member">
                    <div class="team-member__image">
                        <img src="assets/images/marina-santos.jpeg" alt="Membro da equipe">
                    </div>
                    <h3>Maria Santos</h3>
                    <p>Gerente de Projetos</p>
                </div>
                <div class="team-member">
                    <div class="team-member__image">
                        <img src="/portoes/assets/images/pedro-oliveira.jpeg" alt="Membro da equipe">
                    </div>
                    <h3>Pedro Oliveira</h3>
                    <p>Técnico Especialista</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/smooth-scroll.js"></script>	
    <script>
        // GSAP Animations for About Page
        gsap.registerPlugin(ScrollTrigger);

        // History Section Animation
        gsap.from('.history__content', {
            scrollTrigger: {
                trigger: '.history',
                start: 'top center+=100',
                toggleActions: 'play none none reverse'
            },
            duration: 1,
            x: -50,
            opacity: 0,
            ease: 'power3.out'
        });

        gsap.from('.history__image', {
            scrollTrigger: {
                trigger: '.history',
                start: 'top center+=100',
                toggleActions: 'play none none reverse'
            },
            duration: 1,
            x: 50,
            opacity: 0,
            ease: 'power3.out'
        });

        // Mission & Values Cards Animation
        gsap.utils.toArray('.mission-card').forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top bottom-=100',
                    toggleActions: 'play none none reverse'
                },
                duration: 0.8,
                y: 50,
                opacity: 0,
                delay: i * 0.2,
                ease: 'power3.out'
            });
        });

        // Team Members Animation
        gsap.utils.toArray('.team-member').forEach((member, i) => {
            gsap.from(member, {
                scrollTrigger: {
                    trigger: member,
                    start: 'top bottom-=100',
                    toggleActions: 'play none none reverse'
                },
                duration: 0.8,
                y: 50,
                opacity: 0,
                delay: i * 0.2,
                ease: 'power3.out'
            });
        });
    </script>
</body>
</html> 