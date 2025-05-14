<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conheça nossos projetos de portões automáticos residenciais, comerciais e industriais. Galeria de fotos com exemplos de nossa qualidade.">
    <title>Galeria - Portões Automáticos</title>
    
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
    
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
    
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
            <h1 class="page-hero__title">Nossa Galeria</h1>
            <p class="page-hero__subtitle">Conheça nossos projetos realizados</p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery">
        <div class="container">
            <!-- Gallery Filters -->
            <div class="gallery-filters">
                <button class="filter-btn active" data-filter="all">Todos</button>
                <button class="filter-btn" data-filter="residencial">Residencial</button>
                <button class="filter-btn" data-filter="comercial">Comercial</button>
                <button class="filter-btn" data-filter="industrial">Industrial</button>
            </div>

            <!-- Gallery Grid -->
            <div class="gallery-grid">
                <!-- Residencial -->
                <div class="gallery-item" data-category="residencial">
                    <a href="assets/images/gallery/residencial-1.png" data-lightbox="gallery" data-title="Portão Residencial Moderno">
                        <img src="assets/images/gallery/residencial-1.png" alt="Portão Residencial Moderno">
                        <div class="gallery-item__overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </a>
                </div>
                <div class="gallery-item" data-category="residencial">
                    <a href="assets/images/gallery/residencial-2.jpg" data-lightbox="gallery" data-title="Portão Residencial Clássico">
                        <img src="assets/images/gallery/residencial-2.jpg" alt="Portão Residencial Clássico">
                        <div class="gallery-item__overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </a>
                </div>

                <!-- Comercial -->
                <div class="gallery-item" data-category="comercial">
                    <a href="assets/images/gallery/comercial-1.jpg" data-lightbox="gallery" data-title="Portão Comercial Moderno">
                        <img src="assets/images/gallery/comercial-1.jpg" alt="Portão Comercial Moderno">
                        <div class="gallery-item__overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </a>
                </div>
                <div class="gallery-item" data-category="comercial">
                    <a href="assets/images/gallery/comercial-2.jpg" data-lightbox="gallery" data-title="Portão Comercial Industrial">
                        <img src="assets/images/gallery/comercial-2.jpg" alt="Portão Comercial Industrial">
                        <div class="gallery-item__overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </a>
                </div>

                <!-- Industrial -->
                <div class="gallery-item" data-category="industrial">
                    <a href="assets/images/gallery/industrial-1.jpg" data-lightbox="gallery" data-title="Portão Industrial Pesado">
                        <img src="assets/images/gallery/industrial-1.jpg" alt="Portão Industrial Pesado">
                        <div class="gallery-item__overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </a>
                </div>
                <div class="gallery-item" data-category="industrial">
                    <a href="assets/images/gallery/industrial-2.jpg" data-lightbox="gallery" data-title="Portão Industrial Automatizado">
                        <img src="assets/images/gallery/industrial-2.jpg" alt="Portão Industrial Automatizado">
                        <div class="gallery-item__overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
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

        // Gallery Filter and Sort Functionality
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active button
                document.querySelector('.filter-btn.active').classList.remove('active');
                btn.classList.add('active');

                const filter = btn.dataset.filter;
                const galleryGrid = document.querySelector('.gallery-grid');
                const items = Array.from(document.querySelectorAll('.gallery-item'));

                // Define category order for "all" filter
                const categoryOrder = ['residencial', 'comercial', 'industrial'];

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
                        // Clear grid and append sorted items
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

        // Lightbox Configuration
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'albumLabel': 'Imagem %1 de %2'
        });
    </script>
</body>
</html>