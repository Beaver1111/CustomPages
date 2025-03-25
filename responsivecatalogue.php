<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ignite Portfolio</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #fff; /* White background */
            color: #000; /* Black text for contrast */
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            padding: 30px;
            text-align: center;
            position: relative;
        }

        /* Hero Section */
        .hero {
            background: url('https://catalogue.lightmakers.com.sg/Crystal%20Gemstones.png') no-repeat center center/cover;
            height: 100vh; /* Full viewport height */
            width: 100vw; /* Full viewport width */
            background-size: cover; /* Ensures the image covers the entire area */
            background-position: center center;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .hero h2 {
            font-size: 40px;
            z-index: 1;
            position: relative;
            color: #fff; /* White text for contrast */
            background-color: rgba(0, 0, 0, 0.4); /* Slight background overlay */
            padding: 10px 20px; /* Adds padding around the text */
            border-radius: 8px; /* Optional: Adds rounded corners to the text block */
        }

        /* Project Section */
        .projects {
            padding: 60px 0;
            text-align: center;
        }

        .projects h3 {
            font-size: 30px;
            margin-bottom: 40px;
            color: #000; /* Black text for contrast */
        }

        /* Grid Layout */
        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-auto-rows: auto;
            grid-gap: 40px;
        }

        .grid-item {
            background-color: #f1f1f1; /* Light gray for contrast */
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s ease, opacity 0.3s ease; /* Smooth transition for both transform and opacity */
            opacity: 0; /* Initially hidden */
            transform: translateY(50px); /* Initially moved down */
        }

        /* Fade-in and Fade-out animation */
        .fade-in {
            opacity: 1;
            transform: translateY(0);
        }

        .grid-item img {
            width: 100%;
            height: auto;
            display: block;
        }

        .grid-item h4, .grid-item p {
            position: absolute;
            color: #fff;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 4px;
        }

        .grid-item h4 {
            bottom: 40px;
            left: 10px;
            font-size: 20px;
            font-weight: 700;
        }

        .grid-item p {
            bottom: 10px;
            left: 10px;
            font-size: 14px;
        }

        .grid-item:hover {
            transform: scale(1.05);
        }

        /* Alternating Grid Layout */
        .grid-item:nth-child(odd) {
            grid-column: 1; /* Left column */
        }

        .grid-item:nth-child(even) {
            grid-column: 2; /* Right column */
        }

        /* Footer */
        footer {
            background-color: #111;
            text-align: center;
            padding: 20px;
        }

        footer p {
            font-size: 14px;
            color: #777;
        }

    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="hero">
            <h2>Crystal Gemstones etc.. Test 123</h2>
        </div>
    </header>

    <!-- Projects Section -->
    <section class="projects">
        <div class="container">
            <div class="grid">
                <!-- Grid Item 1 (Left) -->
                <div class="grid-item">
                    <img src="https://catalogue.lightmakers.com.sg/Aisilan.jpg" alt="Project Image 1">
                    <h4>Fullscreen Countdown</h4>
                    <p>HTML5 Video</p>
                </div>

                <!-- Line Break to Add Vertical Space -->
                <br><br><br><br>
                
                <!-- Grid Item 2 (Right) -->
                <div class="grid-item">
                    <img src="https://catalogue.lightmakers.com.sg/DLSS.jpg" alt="Project Image 2">
                    <h4>Split Portfolio</h4>
                    <p>and Slider</p>
                </div>


                <!-- Grid Item 3 (Left) -->
                <div class="grid-item">
                    <img src="https://catalogue.lightmakers.com.sg/Sharedon.jpg" alt="Project Image 3">
                    <h4>Fullscreen Agency</h4>
                    <p>and Single Image</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    

    <!-- JavaScript for Intersection Observer -->
    <script>
        // Create an Intersection Observer to observe when grid items come into and leave view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in'); // Add the 'fade-in' class when in view
                } else {
                    entry.target.classList.remove('fade-in'); // Remove the 'fade-in' class when out of view
                }
            });
        }, {
            threshold: 0.1 // Trigger when 10% of the element is visible
        });

        // Target all grid items
        const gridItems = document.querySelectorAll('.grid-item');

        // Observe each grid item
        gridItems.forEach(item => {
            observer.observe(item);
        });
    </script>
</body>
</html>
