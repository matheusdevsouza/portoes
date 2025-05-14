<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Especialistas em manutenção de portões automáticos. Serviços profissionais com qualidade e confiança.">
    <title>Portões Automáticos - Manutenção Profissional</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/souza-logo.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/faq.css">
    
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

    <!-- FAQ Section -->
    <section class="faq" id="faq">
        <div class="container">
            <h2 class="section-title">Perguntas Frequentes</h2>
            <div class="faq__grid">
                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Quais tipos de portões vocês atendem?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Atendemos todos os tipos de portões automáticos, incluindo portões deslizantes, basculantes, pivotantes e portões de garagem. Trabalhamos com as principais marcas do mercado.</p>
                    </div>
                </div>

                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Quanto tempo leva para fazer uma manutenção?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Uma manutenção preventiva padrão leva em média 1 hora. Para reparos específicos, o tempo pode variar dependendo da complexidade do problema.</p>
                    </div>
                </div>

                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Vocês oferecem garantia nos serviços?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Sim, oferecemos garantia de 90 dias em todos os nossos serviços de manutenção e instalação. Para novos equipamentos, a garantia segue o prazo do fabricante.</p>
                    </div>
                </div>

                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Como posso agendar um serviço?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Você pode agendar um serviço através do nosso WhatsApp, telefone ou pelo formulário de contato em nossa página. Atendemos de segunda a sábado.</p>
                    </div>
                </div>

                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Com que frequência devo fazer manutenção preventiva?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Recomendamos realizar manutenção preventiva a cada 6 meses para garantir o funcionamento adequado do seu portão. Para portões de uso intenso, sugerimos manutenção trimestral.</p>
                    </div>
                </div>

                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Vocês atendem emergências?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Sim, atendemos emergências 24 horas por dia, 7 dias por semana. Em caso de problemas urgentes com seu portão, entre em contato imediatamente pelo nosso número de emergência.</p>
                    </div>
                </div>

                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Quais são as formas de pagamento aceitas?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Aceitamos pagamentos em dinheiro, cartões de crédito/débito, PIX e transferência bancária. Para serviços de maior valor, oferecemos opções de parcelamento.</p>
                    </div>
                </div>

                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Quais são os problemas mais comuns em portões automáticos?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Os problemas mais frequentes incluem: motores queimados, sensores desalinhados, problemas na placa de controle, correntes soltas ou desgastadas, e problemas com o controle remoto. A maioria desses problemas pode ser evitada com manutenção preventiva regular.</p>
                    </div>
                </div>

                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Vocês trabalham com todas as marcas de motores?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Sim, trabalhamos com todas as principais marcas do mercado, incluindo Linear, Albras, V2, Faac, Nice, e outras. Realizamos manutenção, instalação e substituição de qualquer marca de motor.</p>
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
    <script src="assets/js/faq.js"></script>
</body>
</html> 