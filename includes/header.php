<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header class="header">
    <div class="container">
        <nav class="nav">
            <a href="index.php" class="nav__logo">
                <img src="/portoes/assets/images/souza-logo.png" alt="Logo Portões Automáticos">
            </a>
            
            <button class="nav__toggle" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <ul class="nav__menu">
                <li class="nav__item <?php echo $current_page === 'index.php' ? 'active' : ''; ?>">
                    <a href="index.php" class="nav__link">Home</a>
                </li>
                <li class="nav__item <?php echo $current_page === 'sobre.php' ? 'active' : ''; ?>">
                    <a href="sobre.php" class="nav__link">Sobre</a>
                </li>
                <li class="nav__item <?php echo $current_page === 'servicos.php' ? 'active' : ''; ?>">
                    <a href="servicos.php" class="nav__link">Serviços</a>
                </li>
                <li class="nav__item <?php echo $current_page === 'galeria.php' ? 'active' : ''; ?>">
                    <a href="galeria.php" class="nav__link">Galeria</a>
                </li>
                <li class="nav__item <?php echo $current_page === 'contato.php' ? 'active' : ''; ?>">
                    <a href="contato.php" class="nav__link">Contato</a>
                </li>
            </ul>

            <div class="nav__cta">
                <a href="tel:+5511999999999" class="btn btn--outline">
                    <i class="fas fa-phone"></i>
                    (11) 99999-9999
                </a>
            </div>
        </nav>
    </div>
</header> 