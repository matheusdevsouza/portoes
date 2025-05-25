<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conheça nossos projetos de hidráulica, elétrica, portão automático e desentupimento. Galeria de fotos com exemplos de nossa qualidade.">
    <title>Galeria - Soluções Residenciais</title>
    
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

    <!-- Inline CSS for Gallery and Modal -->
    <style>
        .gallery {
            padding: var(--spacing-xl) 0;
            background: var(--background-dark);
        }

        .gallery-filters {
            display: flex;
            justify-content: center;
            gap: var(--spacing-md);
            margin-bottom: var(--spacing-xl);
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.75rem 1.5rem;
            border: 2px solid var(--primary-color);
            border-radius: var(--radius-md);
            background: transparent;
            color: var(--text-color);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition-normal);
            position: relative;
            overflow: hidden;
        }

        .filter-btn::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--primary-color);
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease;
        }

        .filter-btn:hover::after,
        .filter-btn.active::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--primary-color);
            color: var(--white);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: var(--spacing-lg);
        }

        .gallery-item {
            position: relative;
            border-radius: var(--radius-lg);
            overflow: hidden;
            aspect-ratio: 4/3;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05) rotate(1deg);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gallery-item__overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-item__overlay {
            opacity: 1;
        }

        .gallery-item__overlay i {
            color: var(--white);
            font-size: 2.5rem;
            transform: scale(0.8);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-item__overlay i {
            transform: scale(1);
        }

        /* Modal Styles */
        .custom-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            padding: var(--spacing-md);
        }

        .custom-modal__content {
            position: relative;
            max-width: 800px;
            width: 90%;
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .custom-modal__image {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
        }

        .custom-modal__info {
            padding: var(--spacing-md);
            text-align: center;
        }

        .custom-modal__title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1a2849;
            margin-bottom: var(--spacing-sm);
        }

        .custom-modal__description {
            font-size: 1rem;
            color: #2e457c;
            margin-bottom: var(--spacing-md);
        }

        .custom-modal__nav {
            display: flex;
            justify-content: space-between;
            padding: 0 var(--spacing-md);
            margin-bottom: var(--spacing-md);
        }

        .custom-modal__nav-btn {
            background: var(--primary-color);
            color: var(--white);
            border: none;
            padding: 0.5rem 1rem;
            border-radius: var(--radius-md);
            cursor: pointer;
            transition: var(--transition-normal);
        }

        .custom-modal__nav-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .custom-modal__close {
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--primary-color);
            color: var(--white);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition-normal);
        }

        .custom-modal__close:hover {
            background: var(--primary-dark);
            transform: rotate(90deg);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: var(--spacing-md);
            }

            .filter-btn {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }

            .custom-modal__content {
                width: 95%;
            }

            .custom-modal__image {
                max-height: 300px;
            }

            .custom-modal__title {
                font-size: 1.2rem;
            }

            .custom-modal__description {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .gallery-grid {
                grid-template-columns: 1fr;
                gap: var(--spacing-sm);
            }

            .custom-modal__image {
                max-height: 200px;
            }

            .custom-modal__title {
                font-size: 1rem;
            }

            .custom-modal__description {
                font-size: 0.8rem;
            }

            .custom-modal__nav-btn {
                padding: 0.4rem 0.8rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="page-hero">
        <div class="page-hero__content">
            <h1 class="page-hero__title">Nossa Galeria</h1>
            <p class="page-hero__subtitle">Conheça nossos projetos de hidráulica, elétrica, portão automático e desentupimento</p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery">
        <div class="container">
            <!-- Gallery Filters -->
            <div class="gallery-filters">
                <button class="filter-btn active" data-filter="all">Todos</button>
                <button class="filter-btn" data-filter="hidraulica">Hidráulica</button>
                <button class="filter-btn" data-filter="eletrica">Elétrica</button>
                <button class="filter-btn" data-filter="portao-automatico">Portão Automático</button>
                <button class="filter-btn" data-filter="desentupimento">Desentupimento</button>
            </div>

            <!-- Gallery Grid -->
            <div class="gallery-grid">
                <!-- Hidráulica -->
                <div class="gallery-item" data-category="hidraulica" data-image="assets/images/gallery/hidraulica-1.png" data-title="Reparo de Vazamento" data-description="Reparo profissional de vazamento em tubulação residencial.">
                    <img src="assets/images/gallery/hidraulica-1.png" alt="Reparo de Vazamento">
                    <div class="gallery-item__overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item" data-category="hidraulica" data-image="assets/images/gallery/hidraulica-2.png" data-title="Instalação de Tubulação" data-description="Instalação de sistema hidráulico completo para residência.">
                    <img src="assets/images/gallery/hidraulica-2.png" alt="Instalação de Tubulação">
                    <div class="gallery-item__overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>

                <!-- Elétrica -->
                <div class="gallery-item" data-category="eletrica" data-image="assets/images/gallery/eletrica-1.png" data-title="Instalação Elétrica" data-description="Instalação de circuito elétrico para ambiente comercial.">
                    <img src="assets/images/gallery/eletrica-1.png" alt="Instalação Elétrica">
                    <div class="gallery-item__overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item" data-category="eletrica" data-image="assets/images/gallery/eletrica-2.png" data-title="Manutenção de Quadro Elétrico" data-description="Manutenção e modernização de quadro elétrico residencial.">
                    <img src="assets/images/gallery/eletrica-2.png" alt="Manutenção de Quadro Elétrico">
                    <div class="gallery-item__overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>

                <!-- Portão Automático -->
                <div class="gallery-item" data-category="portao-automatico" data-image="assets/images/gallery/residencial-1.png" data-title="Portão Automático Residencial" data-description="Instalação de portão automático com motor de alta performance.">
                    <img src="assets/images/gallery/residencial-1.png" alt="Portão Automático Residencial">
                    <div class="gallery-item__overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item" data-category="portao-automatico" data-image="assets/images/gallery/portao-1.png" data-title="Manutenção de Portão" data-description="Manutenção preventiva em portão automático comercial.">
                    <img src="assets/images/gallery/portao-1.png" alt="Manutenção de Portão">
                    <div class="gallery-item__overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>

                <!-- Desentupimento -->
                <div class="gallery-item" data-category="desentupimento" data-image="assets/images/gallery/desentupimento-1.png" data-title="Desentupimento de Pia" data-description="Desentupimento rápido e eficiente de pia de cozinha residencial.">
                    <img src="assets/images/gallery/desentupimento-1.png" alt="Desentupimento de Pia">
                    <div class="gallery-item__overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item" data-category="desentupimento" data-image="assets/images/gallery/desentupimento-2.png" data-title="Desentupimento de Ralo" data-description="Desentupimento de ralo de banheiro com equipamentos modernos.">
                    <img src="assets/images/gallery/desentupimento-2.png" alt="Desentupimento de Ralo">
                    <div class="gallery-item__overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Modal -->
    <div class="custom-modal" id="customModal">
        <div class="custom-modal__content">
            <img class="custom-modal__image" src="" alt="">
            <div class="custom-modal__info">
                <h2 class="custom-modal__title"></h2>
                <p class="custom-modal__description"></p>
                <div class="custom-modal__nav">
                    <button class="custom-modal__nav-btn" id="modalPrev">Anterior</button>
                    <button class="custom-modal__nav-btn" id="modalNext">Próximo</button>
                </div>
            </div>
            <button class="custom-modal__close" id="modalClose"><i class="fas fa-times"></i></button>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/smooth-scroll.js"></script>
    <script>
        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);

        // Gallery Items Animation
        gsap.utils.toArray('.gallery-item').forEach((item, i) => {
            gsap.from(item, {
                scrollTrigger: {
                    trigger: item,
                    start: 'top bottom-=100',
                    toggleActions: 'play none none reverse'
                },
                duration: 0.8,
                y: 50,
                opacity: 0,
                delay: i * 0.1,
                ease: 'power3.out'
            });
        });

        // Gallery Filter Functionality
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active button
                document.querySelector('.filter-btn.active')?.classList.remove('active');
                btn.classList.add('active');

                const filter = btn.dataset.filter;
                const galleryGrid = document.querySelector('.gallery-grid');
                const items = Array.from(document.querySelectorAll('.gallery-item'));

                // Define category order for "all" filter
                const categoryOrder = ['hidraulica', 'eletrica', 'portao-automatico', 'desentupimento'];

                // Reset all items to initial state
                items.forEach(item => {
                    gsap.set(item, {
                        opacity: 1,
                        scale: 1,
                        display: 'block'
                    });
                });

                // Filter items
                let filteredItems = items.filter(item => 
                    filter === 'all' || item.dataset.category === filter
                );

                // Sort items for "all" filter by category order
                if (filter === 'all') {
                    filteredItems.sort((a, b) => {
                        const categoryA = a.dataset.category;
                        const categoryB = b.dataset.category;
                        return categoryOrder.indexOf(categoryA) - categoryOrder.indexOf(categoryB);
                    });
                }

                // Hide non-matching items
                const nonMatchingItems = items.filter(item => 
                    filter !== 'all' && item.dataset.category !== filter
                );

                gsap.to(nonMatchingItems, {
                    duration: 0.3,
                    opacity: 0,
                    scale: 0.8,
                    ease: 'power2.in',
                    onComplete: () => {
                        nonMatchingItems.forEach(item => {
                            item.style.display = 'none';
                        });
                    }
                });

                // Reorder and show matching items
                gsap.to(galleryGrid, {
                    duration: 0,
                    onStart: () => {
                        galleryGrid.innerHTML = '';
                        filteredItems.forEach(item => {
                            galleryGrid.appendChild(item);
                        });
                    }
                });

                // Animate matching items
                filteredItems.forEach((item, index) => {
                    gsap.fromTo(item, 
                        {
                            opacity: 0,
                            scale: 0.8,
                            y: 20
                        },
                        {
                            duration: 0.3,
                            opacity: 1,
                            scale: 1,
                            y: 0,
                            display: 'block',
                            ease: 'power2.out',
                            delay: index * 0.1
                        }
                    );
                });
            });
        });

        // Custom Modal Functionality
        const modal = document.querySelector('#customModal');
        const modalImage = document.querySelector('.custom-modal__image');
        const modalTitle = document.querySelector('.custom-modal__title');
        const modalDescription = document.querySelector('.custom-modal__description');
        const modalPrev = document.querySelector('#modalPrev');
        const modalNext = document.querySelector('#modalNext');
        const modalClose = document.querySelector('#modalClose');
        let currentItems = [];
        let currentIndex = 0;

        // Open Modal
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', () => {
                const filter = document.querySelector('.filter-btn.active').dataset.filter;
                currentItems = Array.from(document.querySelectorAll('.gallery-item')).filter(i => 
                    filter === 'all' || i.dataset.category === filter
                );
                currentIndex = currentItems.indexOf(item);

                updateModalContent();
                gsap.fromTo(modal, 
                    { opacity: 0, scale: 0.8 }, 
                    { 
                        display: 'flex', 
                        opacity: 1, 
                        scale: 1, 
                        duration: 0.4, 
                        ease: 'back.out(1.7)' 
                    }
                );
            });
        });

        // Update Modal Content
        function updateModalContent() {
            const item = currentItems[currentIndex];
            modalImage.src = item.dataset.image;
            modalImage.alt = item.dataset.title;
            modalTitle.textContent = item.dataset.title;
            modalDescription.textContent = item.dataset.description;
        }

        // Previous Image
        modalPrev.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + currentItems.length) % currentItems.length;
            gsap.to(modalImage, {
                opacity: 0,
                x: -50,
                duration: 0.2,
                onComplete: () => {
                    updateModalContent();
                    gsap.fromTo(modalImage, 
                        { opacity: 0, x: 50 }, 
                        { opacity: 1, x: 0, duration: 0.2, ease: 'power2.out' }
                    );
                }
            });
        });

        // Next Image
        modalNext.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % currentItems.length;
            gsap.to(modalImage, {
                opacity: 0,
                x: 50,
                duration: 0.2,
                onComplete: () => {
                    updateModalContent();
                    gsap.fromTo(modalImage, 
                        { opacity: 0, x: -50 }, 
                        { opacity: 1, x: 0, duration: 0.2, ease: 'power2.out' }
                    );
                }
            });
        });

        // Close Modal
        modalClose.addEventListener('click', () => {
            gsap.to(modal, {
                opacity: 0,
                scale: 0.8,
                duration: 0.3,
                ease: 'power2.in',
                onComplete: () => {
                    modal.style.display = 'none';
                }
            });
        });

        // Close Modal on Outside Click
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                gsap.to(modal, {
                    opacity: 0,
                    scale: 0.8,
                    duration: 0.3,
                    ease: 'power2.in',
                    onComplete: () => {
                        modal.style.display = 'none';
                    }
                });
            }
        });
    </script>
</body>
</html>