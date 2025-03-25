<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2025 Collection & Contact</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Style -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }

        h1, h2 {
            font-family: 'Poppins', sans-serif;
            color: #222;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            font-size: 16px;
            color: #555;
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Staggered fade-in Animation */
        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                transform: translateX(50px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .fade-in-left {
            opacity: 0;
            animation: fadeInLeft 1.5s forwards;
        }

        .fade-in-right {
            opacity: 0;
            animation: fadeInRight 1.5s forwards;
        }

        /* Collection Section */
        .collection-section {
            background-color: #fff;
            padding: 40px 20px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .collection-section h1 {
            font-size: 28px;
        }

        .collection-section p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .image-container {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }

        .image-container img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }

        .image-container:hover img {
            transform: scale(1.05);
        }

        .image-container .hover-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 6px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .image-container:hover .hover-text {
            opacity: 1;
        }

        /* Image Gallery Section */
        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .image-gallery .image-item {
            width: 100%;
            overflow: hidden;
            border-radius: 12px;
            margin-bottom: 20px;
            position: relative;
            opacity: 0;
        }

        .image-gallery img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .image-item:hover img {
            transform: scale(1.05);
        }

        .image-item .hover-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            font-size: 16px;
            padding: 10px;
            border-radius: 6px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .image-item:hover .hover-text {
            opacity: 1;
        }

        /* Contact Section */
        .contact-section {
            background-color: #fff;
            padding: 40px 20px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
            text-align: center;
        }

        .contact-info h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .contact-info ul {
            list-style: none;
            padding: 0;
            font-size: 16px;
        }

        .contact-info ul li {
            margin: 10px 0;
            color: #555;
        }

        .contact-info ul li i {
            margin-right: 8px;
            color: #FF6347;
        }

        .contact-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .contact-buttons .btn {
            background: #FF6347;
            color: white;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-buttons .btn:hover {
            background: #FF4500;
        }

        /* Responsive Design */
        @media (min-width: 768px) {
            .image-gallery .image-item {
                width: calc(50% - 10px);
            }

            .collection-section h1 {
                font-size: 36px;
            }

            .collection-section p {
                font-size: 18px;
            }

            .contact-buttons .btn {
                font-size: 18px;
                padding: 14px 28px;
            }
        }

        @media (min-width: 1024px) {
            .image-gallery .image-item {
                width: calc(33.333% - 15px);
            }
        }
    </style>
</head>

<body>

    <!-- Collection Section -->
    <section class="collection-section">
        <h1>2025 Collection</h1>
        <p>Explore our curated collection of designs that will transform your space with elegance and style.</p>
        <a href="https://catalogue.lightmakers.com.sg/catalogue/crystal.php" target="_blank">
            <div class="image-container">
                <img src="https://img.myshopline.com/image/store/1691984092211/surya.webp?w=798&h=798" alt="Interior Design Example">
                <div class="hover-text">Shining Elegance</div>
            </div>
        </a>
    </section>

    <!-- Image Gallery Section -->
    <section class="image-gallery">
        <a href="https://catalogue.lightmakers.com.sg/catalogue/dlss.php" target="_blank">
            <div class="image-item fade-in-left" style="animation-delay: 0.2s;">
                <img src="https://catalogue.lightmakers.com.sg/stock%20images/pic (1).jpg" alt="Gallery Image 1">
                <div class="hover-text">Glowing Masterpieces</div>
            </div>
        </a>
        <a href="https://catalogue.lightmakers.com.sg/catalogue/aisilan.php" target="_blank">
            <div class="image-item fade-in-right" style="animation-delay: 0.4s;">
                <img src="https://img.myshopline.com/image/store/1691984092211/modern.jpg?w=3000&h=2000" alt="Gallery Image 2">
                <div class="hover-text">Form and Function</div>
            </div>
        </a>
        <a href="https://catalogue.lightmakers.com.sg/catalogue/sharedon.php" target="_blank">
            <div class="image-item fade-in-left" style="animation-delay: 0.6s;">
                <img src="https://img.myshopline.com/image/store/1691984092211/pic-(3).jpg?w=3584&h=5376" alt="Gallery Image 3">
                <div class="hover-text">Luminous Icons</div>
            </div>
        </a>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-info">
            <h2>Get in Touch</h2>
            <ul>
                <li><i class="fas fa-phone"></i> (65) 6392 5665</li>
                <li><i class="fab fa-whatsapp"></i> (65) 8815 7805</li>
                <li><i class="fas fa-envelope"></i> sales@lightmakers.com.sg</li>
                <li><i class="fas fa-map-marker-alt"></i> 318 Jalan Besar, Singapore 208976</li>
            </ul>
        </div>
        <div class="contact-buttons">
            <button class="btn">Get a Quote</button>
            <button class="btn">Customisation</button>
            <button class="btn">Partner With Us</button>
        </div>
    </section>

</body>

</html>
