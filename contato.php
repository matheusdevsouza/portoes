<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Entre em contato conosco para orçamentos, suporte técnico ou informações sobre nossos serviços de portões automáticos.">
    <title>Contato - Portões Automáticos</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/souza-logo.png">
    
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
            <h1 class="page-hero__title">Contato</h1>
            <p class="page-hero__subtitle">Entre em contato conosco</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-page">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    <h2>Envie sua mensagem</h2>
                    <form id="contactForm" class="contact-form" action="process_contact.php" method="POST">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Assunto</label>
                            <select id="subject" name="subject" required>
                                <option value="">Selecione um assunto</option>
                                <option value="orcamento">Orçamento</option>
                                <option value="suporte">Suporte Técnico</option>
                                <option value="informacao">Informações</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn--primary">Enviar Mensagem</button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="contact-info">
                    <h2>Informações de Contato</h2>
                    <div class="contact-info__grid">
                        <div class="contact-info__item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h3>Endereço</h3>
                                <p>Rua Exemplo, 123<br>Bairro - Cidade/UF</p>
                            </div>
                        </div>
                        <div class="contact-info__item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h3>Telefone</h3>
                                <p><a href="tel:+5511976353922">(11) 97635-3922</a></p>
                            </div>
                        </div>
                        <div class="contact-info__item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h3>E-mail</h3>
                                <p><a href="mailto:contato@exemplo.com">contato@portoes.com</a></p>
                            </div>
                        </div>
                        <div class="contact-info__item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h3>Horário de Atendimento</h3>
                                <p>Segunda a Sexta: 8h às 18h<br>Sábado: 8h às 12h</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Contact Buttons -->
                    <div class="quick-contact">
                        <a href="https://wa.me/5511976353922" class="quick-contact__btn whatsapp">
                            <i class="fab fa-whatsapp"></i>
                            <span>WhatsApp</span>
                        </a>
                        <a href="tel:+5511976353922" class="quick-contact__btn phone">
                            <i class="fas fa-phone"></i>
                            <span>Ligar</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="map-section">
                <h2>Nossa Localização</h2>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.1975844554717!2d-46.6521903!3d-23.5636393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDMzJzQ5LjEiUyA0NsKwMzknMDcuOSJX!5e0!3m2!1spt-BR!2sbr!4v1635789876543!5m2!1spt-BR!2sbr" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
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
        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);

        // Contact Form Animation
        gsap.from('.contact-form-wrapper', {
            scrollTrigger: {
                trigger: '.contact-form-wrapper',
                start: 'top bottom-=100',
                toggleActions: 'play none none reverse'
            },
            duration: 1,
            x: -50,
            opacity: 0,
            ease: 'power3.out'
        });

        gsap.from('.contact-info', {
            scrollTrigger: {
                trigger: '.contact-info',
                start: 'top bottom-=100',
                toggleActions: 'play none none reverse'
            },
            duration: 1,
            x: 50,
            opacity: 0,
            ease: 'power3.out'
        });

        // Form Validation and Submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic form validation
            const formData = new FormData(this);
            let isValid = true;
            
            formData.forEach((value, key) => {
                if (!value) {
                    isValid = false;
                    const input = document.getElementById(key);
                    input.classList.add('error');
                }
            });

            if (isValid) {
                // Show loading state
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;
                submitBtn.disabled = true;
                submitBtn.textContent = 'Enviando...';

                // Simulate form submission (replace with actual AJAX call)
                setTimeout(() => {
                    submitBtn.textContent = 'Mensagem Enviada!';
                    submitBtn.classList.add('success');
                    
                    // Reset form
                    this.reset();
                    
                    // Reset button after 3 seconds
                    setTimeout(() => {
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;
                        submitBtn.classList.remove('success');
                    }, 3000);
                }, 1500);
            }
        });

        // Remove error class on input
        document.querySelectorAll('.form-group input, .form-group textarea, .form-group select').forEach(input => {
            input.addEventListener('input', function() {
                this.classList.remove('error');
            });
        });

        // Quick Contact Buttons Animation
        document.querySelectorAll('.quick-contact__btn').forEach(btn => {
            btn.addEventListener('mouseenter', () => {
                gsap.to(btn, {
                    duration: 0.3,
                    scale: 1.05,
                    ease: 'power2.out'
                });
            });

            btn.addEventListener('mouseleave', () => {
                gsap.to(btn, {
                    duration: 0.3,
                    scale: 1,
                    ease: 'power2.in'
                });
            });
        });
    </script>
</body>
</html> 