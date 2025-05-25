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

    <!-- Why Choose Us Section -->
    <section class="why-us" id="diferenciais">
        <div class="container">
            <h2 class="section-title">Por Que Nos Escolher?</h2>
            <div class="why-us__grid">
                <div class="why-us__item">
                    <div class="why-us__icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Atendimento Rápido</h3>
                    <p>Resposta imediata e atendimento em até 24 horas para emergências.</p>
                </div>

                <div class="why-us__item">
                    <div class="why-us__icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Equipe Qualificada</h3>
                    <p>Técnicos certificados e treinados nas principais marcas do mercado.</p>
                </div>

                <div class="why-us__item">
                    <div class="why-us__icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Garantia nos Serviços</h3>
                    <p>90 dias de garantia em todos os serviços realizados.</p>
                </div>

                <div class="why-us__item">
                    <div class="why-us__icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3>Preço Justo</h3>
                    <p>Orçamentos transparentes e sem cobranças extras.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="depoimentos">
        <div class="container">
            <h2 class="section-title2">O Que Nossos Clientes Dizem</h2>
            <div class="testimonials__grid">
                <div class="testimonial-card">
                    <div class="testimonial-card__content">
                        <i class="fas fa-quote-left"></i>
                        <p>Excelente serviço! O técnico foi muito profissional e resolveu o problema do meu portão rapidamente. Recomendo!</p>
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="testimonial-card__author">
                        <img src="assets/images/maria-silva.jpg" alt="Cliente" class="testimonial-card__avatar">
                        <div class="testimonial-card__info">
                            <h4>Maria Silva</h4>
                            <p>Residencial</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-card__content">
                        <i class="fas fa-quote-left"></i>
                        <p>Manutenção preventiva feita com qualidade. O portão está funcionando perfeitamente há meses. Muito satisfeito!</p>
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="testimonial-card__author">
                        <img src="assets/images/joão-santos.jpeg" alt="Cliente" class="testimonial-card__avatar">
                        <div class="testimonial-card__info">
                            <h4>João Santos</h4>
                            <p>Comercial</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-card__content">
                        <i class="fas fa-quote-left"></i>
                        <p>Atendimento rápido e eficiente. Instalaram um novo motor no meu portão e ficou perfeito. </p>
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="testimonial-card__author">
                        <img src="assets/images/ana-oliveira.jpeg" alt="Cliente" class="testimonial-card__avatar">
                        <div class="testimonial-card__info">
                            <h4>Ana Oliveira</h4>
                            <p>Residencial</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- FAQ Section -->
<section class="faq" id="faq">
        <div class="container">
            <h2 class="section-title2">Perguntas Frequentes</h2>
            <div class="faq__grid">
                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Quais tipos de portões vocês atendem?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Atendemos portões automáticos residenciais e comerciais, incluindo portões basculantes, deslizantes e pivotantes de diversas marcas e modelos.</p>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Quanto tempo leva para realizar uma manutenção?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>O tempo varia conforme o serviço, mas manutenções preventivas geralmente levam de 1 a 2 horas, enquanto reparos podem levar mais tempo dependendo da complexidade.</p>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Vocês oferecem garantia nos serviços?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Sim, oferecemos 90 dias de garantia em todos os serviços realizados, assegurando a qualidade e durabilidade do nosso trabalho.</p>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Como posso solicitar um orçamento?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Você pode solicitar um orçamento através do nosso formulário de contato, WhatsApp ou ligando diretamente para nossa equipe. Respondemos rapidamente!</p>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Vocês instalam sistemas de automação em portões manuais?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Sim, realizamos a instalação de sistemas de automação em portões manuais, adaptando-os para funcionamento automático com motores de alta qualidade.</p>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Quais marcas de motores vocês utilizam?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Trabalhamos com marcas reconhecidas no mercado, como PPA, Garen e Peccinin, garantindo confiabilidade e desempenho para seu portão.</p>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Vocês realizam manutenção emergencial?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Sim, oferecemos serviços de manutenção emergencial 24/7 para situações urgentes, como portões travados ou com falhas no sistema automático.</p>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__question">
                        <h3>É possível personalizar o design do portão?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>Sim, oferecemos opções de personalização de portões, incluindo materiais, cores e acabamentos, para atender às preferências estéticas e funcionais do cliente.</p>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__question">
                        <h3>Como funciona a manutenção preventiva?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq__answer">
                        <p>A manutenção preventiva inclui inspeção completa do portão, lubrificação de componentes, ajustes no motor e verificação de segurança, prolongando a vida útil do sistema.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="contact-cta" id="contato">
    <div class="container-cta">
        <div class="contact-cta__content">
            <h2>Precisa de Ajuda com seu Portão?</h2>
            <p>Entre em contato agora mesmo e solicite um orçamento sem compromisso!</p>
            <div class="contact-cta__buttons">
                <a href="https://wa.me/5511976353922" class="btn btn--whatsapp">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/smooth-scroll.js"></script>
    <script src="assets/js/faq.js"></script>
</body>
</html>