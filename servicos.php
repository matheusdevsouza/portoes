<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conheça nossos serviços de manutenção, instalação e reparo de portões automáticos. Soluções completas para sua segurança.">
    <title>Serviços - Portões Automáticos</title>
    
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
            <h1 class="page-hero__title">Nossos Serviços</h1>
            <p class="page-hero__subtitle">Soluções completas em automação de portões</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-page">
        <div class="container">
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-card__icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Manutenção Preventiva</h3>
                    <p class="service-card__description">Inspeção regular para garantir o funcionamento perfeito do seu portão.</p>
                    <div class="service-card__details">
                        <ul>
                            <li>Verificação de componentes mecânicos</li>
                            <li>Teste de sensores de segurança</li>
                            <li>Lubrificação de peças móveis</li>
                            <li>Ajuste de tensão e alinhamento</li>
                        </ul>
                        <a href="#contato" class="btn btn--primary">Solicitar Serviço</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-card__icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3>Reparos</h3>
                    <p class="service-card__description">Correção rápida e eficiente de qualquer problema em seu portão.</p>
                    <div class="service-card__details">
                        <ul>
                            <li>Reparo de motores e engrenagens</li>
                            <li>Substituição de peças danificadas</li>
                            <li>Correção de problemas elétricos</li>
                            <li>Ajuste de sensores e controles</li>
                        </ul>
                        <a href="#contato" class="btn btn--primary">Solicitar Serviço</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-card__icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Instalação de Motores</h3>
                    <p class="service-card__description">Instalação profissional de novos motores e automações.</p>
                    <div class="service-card__details">
                        <ul>
                            <li>Instalação de motores novos</li>
                            <li>Configuração de controles remotos</li>
                            <li>Instalação de sensores de segurança</li>
                            <li>Testes e ajustes finais</li>
                        </ul>
                        <a href="#contato" class="btn btn--primary">Solicitar Serviço</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-card__icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Segurança</h3>
                    <p class="service-card__description">Implementação de sistemas de segurança avançados.</p>
                    <div class="service-card__details">
                        <ul>
                            <li>Instalação de câmeras</li>
                            <li>Controle de acesso</li>
                            <li>Sensores de presença</li>
                            <li>Integração com alarmes</li>
                        </ul>
                        <a href="#contato" class="btn btn--primary">Solicitar Serviço</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-card__icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Automação Residencial</h3>
                    <p class="service-card__description">Integração com sistemas de automação residencial.</p>
                    <div class="service-card__details">
                        <ul>
                            <li>Controle via smartphone</li>
                            <li>Integração com assistentes virtuais</li>
                            <li>Programação de horários</li>
                            <li>Monitoramento remoto</li>
                        </ul>
                        <a href="#contato" class="btn btn--primary">Solicitar Serviço</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-card__icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Consultoria Técnica</h3>
                    <p class="service-card__description">Assessoria especializada para seu projeto.</p>
                    <div class="service-card__details">
                        <ul>
                            <li>Avaliação técnica</li>
                            <li>Projetos personalizados</li>
                            <li>Orçamentos detalhados</li>
                            <li>Recomendações técnicas</li>
                        </ul>
                        <a href="#contato" class="btn btn--primary">Solicitar Serviço</a>
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
    <script>
    // GSAP Animations for Services Page
    document.addEventListener('DOMContentLoaded', () => {
        // Verifica se GSAP e ScrollTrigger estão carregados
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
            console.error('GSAP ou ScrollTrigger não foram carregados corretamente.');
            return;
        }

        // Registra o plugin ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // Animação dos Service Cards
        gsap.utils.toArray('.service-card').forEach((card, i) => {
            gsap.fromTo(
                card,
                {
                    y: 100,
                    opacity: 0,
                },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    ease: 'power3.out',
                    delay: i * 0.2,
                    scrollTrigger: {
                        trigger: card,
                        start: 'top 80%', // Inicia quando o topo do card está a 80% da viewport
                        end: 'bottom 20%', // Termina quando a base do card está a 20% da viewport
                        toggleActions: 'play none none reverse', // Toca na entrada, reverte na saída
                        // markers: true, // Ative para depuração (remova em produção)
                    },
                }
            );
        });

        // Efeito de hover nos Service Cards
        document.querySelectorAll('.service-card').forEach((card) => {
            const details = card.querySelector('.service-card__details');
            if (details) {
                card.addEventListener('mouseenter', () => {
                    gsap.to(details, {
                        opacity: 1,
                        y: 0,
                        duration: 0.3,
                        ease: 'power2.out',
                    });
                });

                card.addEventListener('mouseleave', () => {
                    gsap.to(details, {
                        opacity: 0,
                        y: 20,
                        duration: 0.3,
                        ease: 'power2.in',
                    });
                });
            }
        });
    });
</script>
</body>
</html> 