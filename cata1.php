<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2025 Collection</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #fff;
        }

        .hero-section {
            text-align: center;
            padding: 50px 20px;
            background-color: #f9f9f9;
            animation: fadeIn 1s ease-in-out;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .hero-section .tagline {
            font-size: 1.1rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }

        .catalogue-section {
            position: relative;
            max-width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeIn 2s ease-in-out;
        }

        .catalogue-image {
            width: 100%;
            height: auto;
            object-fit: cover;
            animation: fadeIn 2s ease-in-out;
        }

        .catalogue-content {
            position: absolute;
            background-color: rgba(255, 255, 255, 0.9); /* White background with transparency */
            padding: 20px;
            max-width: 450px;
            right: 50px;
            top: 50px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            animation: fadeIn 3s ease-in-out;
        }

        .catalogue-content h2 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .catalogue-content p {
            margin-bottom: 20px;
            font-size: 1rem;
            color: #333;
            line-height: 1.5;
        }

        .catalogue-btn {
            padding: 12px 24px;
            background-color: #000;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
            animation: fadeIn 3.5s ease-in-out;
        }

        .catalogue-btn:hover {
            background-color: #444;
        }

        /* Keyframes for the fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Media Query for Mobile View */
        @media (max-width: 768px) {
            .catalogue-content {
                position: relative;
                background-color: rgba(255, 255, 255, 0.95); /* More opacity on mobile */
                right: auto;
                left: auto;
                top: auto;
                padding: 15px;
                text-align: center;
                max-width: 90%; /* Reduce width on mobile */
                margin-top: -50px; /* Pull it up slightly */
                margin-bottom: 20px;
                box-shadow: none; /* Remove shadow for a cleaner mobile look */
            }

            .catalogue-section {
                flex-direction: column;
                text-align: center;
                padding: 0 20px;
            }

            .catalogue-image {
                width: 100%;
            }

            .catalogue-content h2 {
                font-size: 1.5rem; /* Reduce font size */
                margin-bottom: 15px;
            }

            .catalogue-content p {
                font-size: 0.9rem;
                margin-bottom: 15px;
            }

            .catalogue-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <section class="hero-section">
        <h1>2025 Collection</h1>
        <p class="tagline">Fuel your creativity with our newest catalogues, crafted to help you find the perfect lighting solutions for your own projects or to inspire your next client collaboration.</p>
    </section>

    <section class="catalogue-section">
        <img src="https://catalogue.lightmakers.com.sg/Crystal%20Gemstones.png" alt="Quartz Light" class="catalogue-image">
        <div class="catalogue-content">
            <h2>Power of Quartz: Where Nature Meets Light</h2>
            <p>Experience the unmatched beauty of lighting crafted with real gemstones, meticulously sourced by Light Makers from all over the globe. Each piece in our newest collection embodies the raw elegance of nature’s rarest treasures, transforming your home into a masterpiece of light and luxury.</p>
            <button class="catalogue-btn">View Catalogue</button>
        </div>
    </section>
</body>
</html>
