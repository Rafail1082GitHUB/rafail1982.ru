<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPTV - Ваш портал к безграничным возможностям телевидения</title>
    
    <!-- Open Graph meta tags -->
    <meta property="og:title" content="IPTV - Добро пожаловать в IPTV Плейлист">
    <meta property="og:description" content="Ваш портал к безграничным возможностям телевидения">
    <meta property="og:image" content="https://images.cdn-files-a.com/ready_uploads/media/5802599/800_5f04b5166092c.jpg">
    <meta property="og:url" content="/">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IPTV - Добро пожаловать в IPTV Плейлист">
    <meta name="twitter:description" content="Ваш портал к безграничным возможностям телевидения">
    <meta name="twitter:image" content="https://images.cdn-files-a.com/ready_uploads/media/5802599/800_5f04b5166092c.jpg">
    
    <!-- Оптимизации для быстрой загрузки -->
    <link rel="preconnect" href="https://images.cdn-files-a.com">
    <link rel="preconnect" href="https://rafail1982.uz">
    <link rel="dns-prefetch" href="https://images.cdn-files-a.com">
    <link rel="dns-prefetch" href="https://rafail1982.uz">
    <link rel="preload" href="https://images.cdn-files-a.com/ready_uploads/media/5802599/2000_5f04b5166092c.jpg" as="image">
    
    <style type="text/css">
        /* Все существующие стили остаются БЕЗ ИЗМЕНЕНИЙ */
        :root {
            --primary-color: #f46530;
            --primary-dark: #d35400;
            --dark-bg: #121212;
            --dark-card: #1e1e1e;
            --dark-text: #e0e0e0;
            --dark-border: #333;
            --accent-color: #ffdb4d;
            --success-color: #28a745;
            --success-dark: #1e7e34;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            margin: 0;
            padding: 0;
            background-color: var(--dark-bg);
            color: var(--dark-text);
            font-family: 'Caladea', Arial, sans-serif;
            line-height: 1.6;
            padding-bottom: 60px; /* Добавляем отступ для радио-панели */
        }
        
        a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        a:hover {
            color: var(--accent-color);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Стили для навигации */
        header {
            background-color: rgba(30, 30, 30, 0.95);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary-color);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 25px;
        }
        
        .nav-links a {
            color: var(--dark-text);
            font-weight: 500;
        }
        
        .nav-links a:hover {
            color: var(--primary-color);
        }
        
        .controls {
            display: flex;
            justify-content: center;
            margin: 20px 0;
            flex-wrap: wrap;
            gap: 10px;
            width: 100%;
        }
        
        /* Стили для кнопок */
        .btn {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        
        .btn:hover {
            background-color: var(--primary-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(244, 101, 48, 0.4);
        }
        
        .btn:active {
            transform: translateY(0);
        }
        
        .btn-success {
            background-color: var(--success-color);
        }
        
        .btn-success:hover {
            background-color: var(--success-dark);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.4);
        }
        
        .btn-pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(40, 167, 69, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(40, 167, 69, 0);
            }
        }
        
        /* Стили для героя-секции */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://images.cdn-files-a.com/ready_uploads/media/5802599/2000_5f04b5166092c.jpg') no-repeat center center;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            text-align: center;
            padding-top: 80px;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            width: 100%;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            color: #f0f0f0;
        }
        
        /* Стили для секции "О нас" */
        .about {
            padding: 100px 0;
            background-color: var(--dark-card);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: var(--primary-color);
        }
        
        .section-title hr {
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
            border: none;
            margin: 0 auto;
        }
        
        .about-content {
            display: flex;
            align-items: center;
            gap: 40px;
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }
        
        .about-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        /* Стили для секции услуг */
        .services {
            padding: 100px 0;
            background-color: var(--dark-bg);
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background-color: var(--dark-card);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .service-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background-color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
        }
        
        .service-card h3 {
            margin-bottom: 15px;
            color: var(--primary-color);
        }
        
        /* Стили для секции отзывов */
        .testimonials {
            padding: 100px 0;
            background-color: var(--dark-card);
        }
        
        .testimonial-slider {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }
        
        .testimonial-item {
            background-color: var(--dark-bg);
            border-radius: 10px;
            padding: 30px;
            margin: 0 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .testimonial-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
            border: 3px solid var(--primary-color);
        }
        
        .testimonial-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
        }
        
        .testimonial-text:before, .testimonial-text:after {
            content: '"';
            font-size: 2rem;
            color: var(--primary-color);
            position: absolute;
        }
        
        .testimonial-text:before {
            top: -10px;
            left: -10px;
        }
        
        .testimonial-text:after {
            bottom: -10px;
            right: -10px;
        }
        
        .testimonial-author {
            font-weight: bold;
            color: var(--primary-color);
        }
        
        .testimonial-role {
            font-size: 0.9rem;
            color: #aaa;
        }
        
        /* Стили для секции контактов */
        .contact {
            padding: 100px 0;
            background-color: var(--dark-bg);
        }
        
        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }
        
        .contact-form {
            background-color: var(--dark-card);
            padding: 30px;
            border-radius: 10px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            background-color: #2a2a2a;
            border: 1px solid #444;
            border-radius: 5px;
            color: var(--dark-text);
            font-size: 1rem;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
        }
        
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }
        
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .contact-icon {
            width: 40px;
            height: 40px;
            background-color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        
        /* Стили для карточек IPTV */
        .iptv-cards {
            padding: 80px 0;
            background-color: var(--dark-card);
        }
        
        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .card {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: var(--dark-bg);
            height: 200px;
            transition: transform 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }
        
        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .card:hover img {
            transform: scale(1.1);
        }
        
        /* Стили для футера */
        footer {
            background-color: #0a0a0a;
            padding: 60px 0 30px;
            color: #aaa;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .footer-links h3 {
            color: var(--dark-text);
            margin-bottom: 20px;
            font-size: 1.2rem;
        }
        
        .footer-links ul {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #333;
        }
        
        /* Адаптивность */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .contact-content {
                grid-template-columns: 1fr;
            }
            
            .nav-links {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
        }
        
        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .card {
                height: 150px;
            }
        }
        
        /* Стили для кнопки поддержки */
        .support-container {
            position: fixed;
            top: 10px;
            right: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            z-index: 1000;
        }
        
        .support-button {
            width: 120px;
            padding: 12px;
            background: linear-gradient(135deg, var(--accent-color), #ffcc00);
            border: none;
            border-radius: 25px;
            cursor: pointer;
            color: #000;
            font-size: 14px;
            text-align: center;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        .support-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 14px rgba(255, 219, 77, 0.4);
            background: linear-gradient(135deg, #ffcc00, var(--accent-color));
        }
        
        .support-button:active {
            transform: translateY(-1px);
        }
        
        .support-button::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(-100%);
            transition: transform 0.4s ease;
        }
        
        .support-button:hover::after {
            transform: translateX(100%);
        }
        
        /* Статус сообщение для обновления плейлистов */
        .status-message {
            display: none;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            text-align: center;
            font-weight: bold;
        }

        /* Стили для радио-панели */
        .radio-panel {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(30, 30, 30, 0.95);
            border-top: 1px solid var(--dark-border);
            padding: 8px 15px;
            z-index: 999;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.3);
        }

        .radio-controls {
            display: flex;
            align-items: center;
            gap: 10px;
            flex: 1;
            max-width: 600px;
        }

        .radio-station-info {
            flex: 1;
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 0 10px;
        }

        .radio-play-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .radio-play-btn:hover {
            background-color: var(--primary-dark);
            transform: scale(1.05);
        }

        .radio-stations-select {
            background-color: #2a2a2a;
            color: var(--dark-text);
            border: 1px solid var(--dark-border);
            border-radius: 4px;
            padding: 6px 10px;
            font-size: 14px;
            min-width: 150px;
            max-width: 200px;
        }

        .radio-volume-control {
            width: 80px;
            -webkit-appearance: none;
            height: 4px;
            border-radius: 2px;
            background: #444;
            outline: none;
        }

        .radio-volume-control::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: var(--primary-color);
            cursor: pointer;
        }

        .radio-volume-control::-moz-range-thumb {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: var(--primary-color);
            cursor: pointer;
            border: none;
        }

        .radio-volume-btn {
            background: none;
            border: none;
            color: var(--dark-text);
            cursor: pointer;
            font-size: 16px;
            padding: 5px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .radio-volume-btn:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        @media (max-width: 768px) {
            .radio-controls {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .radio-station-info {
                order: -1;
                width: 100%;
                text-align: center;
                margin-bottom: 5px;
            }
            
            .radio-stations-select {
                max-width: 150px;
            }
        }
    </style>
</head>
<body>
    <!-- Кнопка поддержки -->
    <div class="support-container">
        <a href="https://yoomoney.ru/to/410014276601106" target="_blank" rel="noopener">
            <button class="support-button">Поддержать проект</button>
        </a>
    </div>
    
    <!-- Шапка сайта -->
    <header>
        <div class="container">
            <nav class="navbar">
                <div class="logo">IPTV</div>
                <ul class="nav-links">
                    <li><a href="#home">Главная</a></li>
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#services">Услуги</a></li>
                    <li><a href="#testimonials">Отзывы</a></li>
                    <li><a href="#iptv">IPTV Плейлисты</a></li>
                    <li><a href="#contact">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Герой-секция -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Добро пожаловать в IPTV Плейлист</h1>
                <p>Ваш портал к безграничным возможностям телевидения</p>
                <a href="#iptv" class="btn">Получить плейлист</a>
                
                <div class="controls">
                    <button class="btn btn-success btn-pulse" id="updateAllBtn">Обновить все плейлисты</button>
                </div>
                
                <!-- Сообщение о статусе обновления -->
                <div id="statusMessage" class="status-message"></div>
            </div>
        </div>
    </section>
    
    <!-- Секция "О нас" -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>О Нас</h2>
                <hr>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Мы предоставляем современные и актуальные IPTV-плейлисты</h3>
                    <p>Откройте для себя мир интерактивного телевидения с превосходным качеством и удобством использования. Наша команда работает над тем, чтобы вы получили доступ к самым современным и актуальным каналам со всего мира.</p>
                    <p>С нами ваше телевидение становится по-настоящему персонализированным - вы сами выбираете, что смотреть и когда.</p>
                </div>
                <div class="about-image">
                    <img src="https://images.cdn-files-a.com/ready_uploads/media/34406/2000_5cde70d64f84d.jpg" alt="О нас" loading="lazy">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Секция услуг -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>Услуги</h2>
                <hr>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">📺</div>
                    <h3>Актуальные плейлисты</h3>
                    <p>Мы обновляем наши плейлисты регулярно для обеспечения доступа к новейшим каналам и контенту.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔧</div>
                    <h3>Простота использования</h3>
                    <p>Наши интерфейсы интуитивно понятны, что делает ваши развлечения непрерывными.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">⭐</div>
                    <h3>Высококачественный контент</h3>
                    <p>Мы гарантируем отличное качество изображений и звука для вашего максимального удовольствия.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Секция IPTV карточек -->
    <section id="iptv" class="iptv-cards">
        <div class="container">
            <div class="section-title">
                <h2>IPTV Плейлисты</h2>
                <hr>
            </div>
            <div class="cards-container">
                <div class="card">
                    <a href="https://rafail1982.uz/radio/RADIO_003.php">
                        <img alt="Radio" src="https://rafail1982.uz/logo/radio.png" loading="lazy">
                    </a>
                </div>
                <div class="card">
                    <a href="https://rafail1982.uz/LINKS/">
                        <img alt="Links" src="/link.png" loading="lazy">
                    </a>
                </div>
                <div class="card">
                    <a href="https://m3u.su/page/6">
                        <img alt="Axenov IPTV" src="/logo/axenov.png" loading="lazy">
                    </a>
                </div>
                <div class="card">
                    <a href="http://rafail1982.uz/playlists/">
                        <img alt="M3U_PL" src="../favicon.png" loading="lazy">
                    </a>
                </div>
                <div class="card">
                    <a href="http://tv.rafail1982.uz/">
                        <img alt="TV" src="/img1.jpg" loading="lazy">
                    </a>
                </div>
                <div class="card">
                    <a href="https://t.me/M3U_IPTV_PLAYLIST_bot?start=r_1918142">
                        <img alt="Telegram Bot" src="/bot.png" loading="lazy">
                    </a>
                </div>
                <div class="card">
                    <a href="https://rafail1982.uz/store/">
                        <img alt="Store" src="/img3.jpg" loading="lazy">
                    </a>
                </div>
                <div class="card">
                    <a href="//rafail1982.uz/myweb.php">
                        <img alt="My Web" src="/img4.jpg" loading="lazy">
                    </a>
                </div>
                <div class="card">
                    <a href="https://rafail1982.uz/store/app-pages/app17.html">
                        <img alt="App 17" src="https://img.utdstc.com/icon/187/a3d/187a3d1ce61f599a18cc1d5a76b73d156f7439a71d6559376aa1c1dbc5ba7e05:100" loading="lazy">
                    </a>
                </div>
                <div class="card">
                    <a href="https://rafail1982.uz/store/app-pages/app18.html">
                        <img alt="App 18" src="https://img.utdstc.com/icon/c40/b09/c40b099c862c3526ac64cdf017dce53d5d15b989d2b02e34dd580c54f6af31aa:100" loading="lazy">
                    </a>
                </div>
                <div class="card">
                    <a href="https://m3u-ip.tv/browser/player/index.html">
                        <img alt="M3U Player" src="http://msx.rafail1982.uz/icon-512-512.png" loading="lazy">
                    </a>
                </div>
                <div class="card">
                    <a href="http://onlinetv.rafail1982.uz/tv/Online.php">
                        <img alt="Online TV" src="/logo/Первый канал.png" loading="lazy">
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Секция отзывов -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Отзывы</h2>
                <hr>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial-item">
                    <div class="testimonial-avatar">
                        <img src="https://images.cdn-files-a.com/ready_uploads/media/1724/400_5cc99b93d041b.jpg" alt="Анна Романовна" loading="lazy">
                    </div>
                    <p class="testimonial-text">Это самый удобный сервис, который я использовала, рекомендую!</p>
                    <div class="testimonial-author">Анна Романовна</div>
                    <div class="testimonial-role">Довольный пользователь</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Секция контактов -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Контакты</h2>
                <hr>
            </div>
            <div class="contact-content">
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Полное Имя" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Телефон">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Адрес электронной почты" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Сообщение" required></textarea>
                        </div>
                        <button type="submit" class="btn">Свяжитесь с нами</button>
                    </form>
                </div>
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div>
                            <h3>Адрес</h3>
                            <p>Tashkent, Узбекистан</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div>
                            <h3>Телефон</h3>
                            <p><a href="https://t.me/+998994039782" target="_blank" rel="noopener">+998-994039782 (Telegram)</a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div>
                            <h3>Email</h3>
                            <p><a href="mailto:rafa.nurabad@gmail.com">rafa.nurabad@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">⏰</div>
                        <div>
                            <h3>Время работы</h3>
                            <p>Пн-Пт - 08:00-19:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Футер -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <div class="footer-logo">IPTV</div>
                    <p>Ваш портал к безграничным возможностям телевидения. Мы предоставляем современные и актуальные IPTV-плейлисты.</p>
                </div>
                <div class="footer-links">
                    <h3>Быстрые ссылки</h3>
                    <ul>
                        <li><a href="#home">Главная</a></li>
                        <li><a href="#about">О нас</a></li>
                        <li><a href="#services">Услуги</a></li>
                        <li><a href="#iptv">IPTV Плейлисты</a></li>
                        <li><a href="#contact">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Полезные ссылки</h3>
                    <ul>
                        <li><a href="https://rafail1982.uz" target="_blank" rel="noopener">Наш сайт</a></li>
                        <li><a href="https://t.me/M3U_IPTV_PLAYLIST_bot" target="_blank" rel="noopener">Telegram бот</a></li>
                        <li><a href="https://yoomoney.ru/to/410014276601106" target="_blank" rel="noopener">Поддержать проект</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Авторские права © 2025 Все права защищены. Создано на базе <a href="https://rafail1982.uz" target="_blank" rel="noopener">https://rafail1982.uz</a></p>
            </div>
        </div>
    </footer>

    <!-- Радио-панель -->
    <div class="radio-panel">
        <div class="radio-controls">
            <button class="radio-play-btn" id="radioPlayBtn">▶</button>
            <select class="radio-stations-select" id="radioStationsSelect">
                <option value="">Загрузка...</option>
            </select>
            <div class="radio-station-info" id="radioStationInfo">Выберите радиостанцию</div>
            <button class="radio-volume-btn" id="radioVolumeDown">-</button>
            <input type="range" class="radio-volume-control" id="radioVolumeControl" min="0" max="100" value="50" step="1">
            <button class="radio-volume-btn" id="radioVolumeUp">+</button>
        </div>
    </div>

    <!-- Скрытый аудио элемент -->
    <audio id="radioPlayer" preload="none" crossorigin="anonymous" style="display: none;"></audio>
    
    <script>
        // Оптимизация: отложенная загрузка некритичных скриптов
        window.addEventListener('DOMContentLoaded', function() {
            // Загрузка некритичных скриптов после загрузки основного контента
            const scripts = [
                '/service-worker.js',
                '/$off.js',
                '../sw.js'
            ];
            
            scripts.forEach(src => {
                const script = document.createElement('script');
                script.src = src;
                script.async = true;
                document.body.appendChild(script);
            });
            
            // Инициализация основного функционала
            initMainFunctionality();
        });

        // Основная функция инициализации
        function initMainFunctionality() {
            // Плавная прокрутка к якорям
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Оптимизация: throttle для события scroll
            let ticking = false;
            window.addEventListener('scroll', function() {
                if (!ticking) {
                    requestAnimationFrame(function() {
                        const header = document.querySelector('header');
                        if (window.scrollY > 50) {
                            header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.5)';
                        } else {
                            header.style.boxShadow = 'none';
                        }
                        ticking = false;
                    });
                    ticking = true;
                }
            });
            
            // Инициализация радио-панели
            initRadioPlayer();
            
            // Инициализация обновления плейлистов
            initPlaylistUpdater();
            
            // Загрузка счетчика после основного контента
            loadCounter();
        }

        // Функция загрузки счетчика
        function loadCounter() {
            var KUPI_COUNTER_ID = 2882195,
                sc = document.getElementsByTagName("script")[0],
                script = document.createElement("script"),
                date = new Date();
            script.type = "text/javascript";
            script.src = (document.location.protocol == "https:" ? "https:" : "http:") + "//counter.kupiprodai.ru/js/counter.js?"+date.getFullYear()+date.getMonth()+date.getDate();
            script.async = true;
            sc.parentNode.insertBefore(script, sc);
        }

        // Код для радио-панели (оптимизированный)
        function initRadioPlayer() {
            // Основные элементы DOM
            const audio = document.getElementById('radioPlayer');
            const radioStations = document.getElementById('radioStationsSelect');
            const volumeControl = document.getElementById('radioVolumeControl');
            const playButton = document.getElementById('radioPlayBtn');
            const stationInfo = document.getElementById('radioStationInfo');
            const volumeDownBtn = document.getElementById('radioVolumeDown');
            const volumeUpBtn = document.getElementById('radioVolumeUp');
            
            let isPlaying = false;
            let currentStationIndex = 0;
            let radioStationsData = [];

            // Инициализация плеера
            async function initPlayer() {
                setupAudioElement();
                await loadPlaylist();
                loadSavedSettings();
                setupEventListeners();
            }

            // Загрузка плейлиста из M3U файла с кэшированием
            async function loadPlaylist() {
                try {
                    const response = await fetch('../radio/radio.m3u', {
                        cache: 'force-cache',
                        headers: {
                            'Cache-Control': 'max-age=300' // Кэш на 5 минут
                        }
                    });
                    if (!response.ok) {
                        throw new Error(`Ошибка HTTP: ${response.status}`);
                    }
                    
                    const m3uContent = await response.text();
                    parseM3UPlaylist(m3uContent);
                    
                } catch (error) {
                    console.error('Ошибка загрузки плейлиста:', error);
                    loadFallbackStations();
                }
            }

            // Парсинг M3U плейлиста (без изменений)
            function parseM3UPlaylist(m3uContent) {
                radioStationsData = [];
                const lines = m3uContent.split('\n');
                let currentStation = {};

                for (let i = 0; i < lines.length; i++) {
                    const line = lines[i].trim();
                    
                    if (line.startsWith('#EXTINF:')) {
                        const match = line.match(/#EXTINF:.*?,(.*)/);
                        if (match && match[1]) {
                            currentStation.text = match[1].trim();
                        }
                    } else if (line.startsWith('http')) {
                        currentStation.value = line;
                        if (currentStation.text && currentStation.value) {
                            radioStationsData.push({...currentStation});
                            currentStation = {};
                        }
                    }
                }

                populateStationsList();
            }

            // Резервный список станций (без изменений)
            function loadFallbackStations() {
                radioStationsData = [
                    { "value": "http://tabassum.uz:9000/alo_low", "text": "A'lo FM" },
                    { "value": "http://truckfm.rafail1982.uz:8000/64", "text": "TRUCK FM" },
                    { "value": "https://live.hitfm.uz/hitfmuz", "text": "Hit.FM" },
                    { "value": "https://stream-175.zeno.fm/y8gdyaatxhhvv", "text": "MARS FM" },
                    { "value": "https://stream-165.zeno.fm/64ox9cg1w0quv", "text": "TECHNORADIO" },
                    { "value": "https://tempradio-live.uz/streamaac", "text": "TEMP_FM" },
                    { "value": "http://dono.rafail1982.uz:8000/fm", "text": "Oriat FM" },
                    { "value": "http://live.qalbimnavosi.uz/qalbimnavosi", "text": "QALBIM NAVOSI" },
                    { "value": "http://mediamarkaz.com:8000/radiomarkaz", "text": "MARKAZ FM" },
                    { "value": "http://dono.rafail1982.uz:8000/dono", "text": "ORIAT DONO" }
                ];
                populateStationsList();
            }

            // Заполнение списка станций (без изменений)
            function populateStationsList() {
                radioStations.innerHTML = '';
                
                if (radioStationsData.length === 0) {
                    const option = document.createElement('option');
                    option.value = '';
                    option.textContent = 'Нет доступных станций';
                    radioStations.appendChild(option);
                    return;
                }

                radioStationsData.forEach((station, index) => {
                    const option = document.createElement('option');
                    option.value = station.value;
                    option.textContent = station.text;
                    option.dataset.index = index;
                    radioStations.appendChild(option);
                });

                stationInfo.textContent = 'Выберите станцию';
            }

            // Настройка аудио элемента (без изменений)
            function setupAudioElement() {
                audio.volume = 0.5;
                audio.preload = 'none';
                
                audio.addEventListener('playing', () => {
                    isPlaying = true;
                    updatePlayButton();
                    stationInfo.textContent = '▶ ' + radioStations.options[radioStations.selectedIndex].text;
                });

                audio.addEventListener('pause', () => {
                    isPlaying = false;
                    updatePlayButton();
                    stationInfo.textContent = '❚❚ ' + radioStations.options[radioStations.selectedIndex].text;
                });

                audio.addEventListener('error', (e) => {
                    console.error('Ошибка воспроизведения:', e);
                    stationInfo.textContent = 'Ошибка подключения к станции';
                    isPlaying = false;
                    updatePlayButton();
                });

                audio.addEventListener('waiting', () => {
                    stationInfo.textContent = 'Буферизация...';
                });
            }

            // Загрузка сохраненных настроек (без изменений)
            function loadSavedSettings() {
                const savedStationIndex = localStorage.getItem('selectedStation');
                const savedVolume = localStorage.getItem('volume');
                
                if (savedStationIndex !== null && radioStationsData.length > 0) {
                    const index = parseInt(savedStationIndex);
                    if (index >= 0 && index < radioStationsData.length) {
                        radioStations.selectedIndex = index;
                        currentStationIndex = index;
                    }
                }
                
                if (savedVolume !== null) {
                    volumeControl.value = savedVolume * 100;
                    audio.volume = parseFloat(savedVolume);
                }
            }

            // Настройка обработчиков событий (без изменений)
            function setupEventListeners() {
                audio.addEventListener('ended', () => {
                    if (isPlaying) {
                        setTimeout(() => playStation(), 2000);
                    }
                });
            }

            // Воспроизведение станции (без изменений)
            function playStation() {
                if (radioStationsData.length === 0) {
                    stationInfo.textContent = 'Нет доступных станций';
                    return;
                }

                const selectedOption = radioStations.options[radioStations.selectedIndex];
                const streamUrl = selectedOption.value;
                
                if (!streamUrl) {
                    stationInfo.textContent = 'Неверный URL станции';
                    return;
                }

                audio.pause();
                audio.src = streamUrl;
                
                audio.play().catch(error => {
                    console.error('Ошибка воспроизведения:', error);
                    stationInfo.textContent = 'Ошибка загрузки станции';
                });

                currentStationIndex = radioStations.selectedIndex;
                localStorage.setItem('selectedStation', currentStationIndex);
                
                stationInfo.textContent = 'Подключение...';
            }

            // Управление громкостью (без изменений)
            function changeVolume(amount) {
                let newVolume = parseFloat(volumeControl.value) + amount;
                newVolume = Math.max(0, Math.min(100, newVolume));
                volumeControl.value = newVolume;
                setVolume();
            }

            function setVolume() {
                const newVolume = parseFloat(volumeControl.value) / 100;
                audio.volume = newVolume;
                localStorage.setItem('volume', newVolume);
            }

            // Управление воспроизведением (без изменений)
            function togglePlayPause() {
                if (radioStationsData.length === 0) {
                    stationInfo.textContent = 'Нет доступных станций';
                    return;
                }

                if (isPlaying) {
                    audio.pause();
                } else {
                    if (audio.src) {
                        audio.play();
                    } else {
                        playStation();
                    }
                }
            }

            function updatePlayButton() {
                playButton.textContent = isPlaying ? '❚❚' : '▶';
            }

            // Смена станции через select (без изменений)
            function changeStationFromList() {
                playStation();
            }

            // Назначение обработчиков событий (без изменений)
            playButton.addEventListener('click', togglePlayPause);
            radioStations.addEventListener('change', changeStationFromList);
            volumeControl.addEventListener('input', setVolume);
            volumeDownBtn.addEventListener('click', () => changeVolume(-1));
            volumeUpBtn.addEventListener('click', () => changeVolume(1));

            // Инициализация
            initPlayer();
        }

        // Код для обновления плейлистов (оптимизированный)
        function initPlaylistUpdater() {
            const API_URL = 'save_playlist.php';
            const DATA_URL = 'playlist_data.php';
            
            let playlists = [];
            const statusMessage = document.getElementById('statusMessage');
            const updateAllBtn = document.getElementById('updateAllBtn');
            
            // Показать сообщение о статусе (без изменений)
            function showStatus(message, type = 'success') {
                statusMessage.textContent = message;
                statusMessage.style.display = 'block';
                statusMessage.style.backgroundColor = type === 'success' ? '#d4edda' : 
                                                    type === 'error' ? '#f8d7da' : '#fff3cd';
                statusMessage.style.color = type === 'success' ? '#155724' : 
                                           type === 'error' ? '#721c24' : '#856404';
                statusMessage.style.border = type === 'success' ? '1px solid #c3e6cb' : 
                                            type === 'error' ? '1px solid #f5c6cb' : '1px solid #ffeaa7';
                
                setTimeout(() => {
                    statusMessage.style.display = 'none';
                }, 5000);
            }
            
            // Загрузка данных плейлистов с сервера с кэшированием
            async function loadPlaylistsFromServer() {
                try {
                    const response = await fetch(DATA_URL + '?action=load&t=' + Date.now(), {
                        cache: 'no-cache'
                    });
                    const result = await response.json();
                    
                    if (!response.ok) {
                        throw new Error(result.error || 'Server error');
                    }
                    
                    return result.playlists || [];
                } catch (error) {
                    console.error('Error loading playlists:', error);
                    return [];
                }
            }
            
            // Отправить запрос на сохранение плейлиста (без изменений)
            async function savePlaylistToServer(playlist) {
                try {
                    const response = await fetch(API_URL, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            url: playlist.url,
                            filename: playlist.fileName
                        })
                    });
                    
                    const result = await response.json();
                    
                    if (!response.ok) {
                        throw new Error(result.error || 'Server error');
                    }
                    
                    return result;
                } catch (error) {
                    console.error('Error saving playlist:', error);
                    throw error;
                }
            }
            
            // Обновить плейлист (без изменений)
            async function updatePlaylist(index) {
                const playlist = playlists[index];
                
                try {
                    showStatus(`Обновление плейлиста "${playlist.name}"...`, 'info');
                    
                    const result = await savePlaylistToServer(playlist);
                    
                    const now = new Date();
                    playlists[index].lastUpdate = now.toISOString();
                    playlists[index].lastSize = result.file_size;
                    
                    showStatus(`Плейлист "${playlist.name}" успешно обновлен! Размер: ${formatFileSize(result.file_size)}`, 'success');
                    
                } catch (error) {
                    console.error('Error updating playlist:', error);
                    showStatus(`Ошибка при обновлении "${playlist.name}": ${error.message}`, 'error');
                }
            }
            
            // Обновить все плейлисты (без изменений)
            async function updateAllPlaylists() {
                if (playlists.length === 0) {
                    showStatus('Нет плейлистов для обновления', 'warning');
                    return;
                }
                
                updateAllBtn.innerHTML = 'Обновление...';
                updateAllBtn.classList.remove('btn-pulse');
                
                try {
                    showStatus('Начинается обновление всех плейлистов...', 'info');
                    
                    for (let i = 0; i < playlists.length; i++) {
                        await updatePlaylist(i);
                        await new Promise(resolve => setTimeout(resolve, 1000));
                    }
                    
                    showStatus('Все плейлисты успешно обновлены!', 'success');
                    
                } catch (error) {
                    console.error('Error updating all playlists:', error);
                    showStatus(`Ошибка при обновлении плейлистов: ${error.message}`, 'error');
                } finally {
                    setTimeout(() => {
                        updateAllBtn.innerHTML = 'Обновить все плейлисты';
                        updateAllBtn.classList.add('btn-pulse');
                    }, 2000);
                }
            }
            
            function formatFileSize(bytes) {
                if (!bytes) return '';
                if (bytes < 1024) return bytes + ' B';
                if (bytes < 1048576) return (bytes / 1024).toFixed(2) + ' KB';
                return (bytes / 1048576).toFixed(2) + ' MB';
            }
            
            // Загрузить данные с сервера (без изменений)
            async function loadFromServer() {
                playlists = await loadPlaylistsFromServer();
                
                if (playlists.length > 0) {
                    console.log(`Загружено ${playlists.length} плейлистов`);
                    showStatus(`Загружено ${playlists.length} плейлистов для обновления`, 'success');
                }
            }
            
            // Обработчик для кнопки обновления всех плейлистов (без изменений)
            updateAllBtn.addEventListener('click', updateAllPlaylists);
            
            // Инициализация данных
            loadFromServer();
        }
    </script>
    
    <!-- Пиксель отслеживания -->
    <img src="https://iplogger.com/14M6X4.png" width="1" height="1" alt="tracking pixel" style="display:none;" loading="lazy">
</body>
</html>
