<?php
session_start();

$check = isset($_SESSION['admin']);
?>

<!-- Header  -->
<header class="header-navbar">    
    <nav id="navbar">        
        <a href="/"><img src="/assets/img/Logo.svg" alt="Logo" id="nav-logo"></a>
        <div class="mobile-menu">            
            <div class="line1"></div>            
            <div class="line2"></div>            
            <div class="line3"></div>        
        </div>

        <ul class="nav-list">            
            <li class="nav-item">                
                <a href="/">Home</a>            
            </li>   
            <li class="nav-item">                
                <a href="/src/pages/allNews.php">Notícias</a>            
            </li>   
            <li class="nav-item">                
                <a href="/#newsletter">Newsletter</a>            
            </li>            
            <li class="nav-item">                
                <a href="/#map">Nos Encontre</a>            
            </li>            
            <li class="nav-item">                
                <a href="/#footer-section">Serviços</a>            
            </li>        
            <?php if ($check): ?>
                <li class="nav-item">                
                <a href="/src/pages/newsAdmin.php">Admin</a>            
            </li>        
            <?php endif; ?>
        </ul>    
    </nav>
</header>

<script src="/assets/js/mobile-navbar.js"></script>