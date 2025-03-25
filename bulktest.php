<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulk Order - Lightmakers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        nav {
            background-color: #444;
            padding: 10px;
            display: flex;
            justify-content: space-around;
            color: #fff;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 5px 15px;
        }
        .container {
            padding: 20px;
        }
        .banner {
            background-image: url('banner-image-url.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .form-section {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Lightmakers Bulk Order Page</h1>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">Products</a>
        <a href="#">Services</a>
        <a href="#">Contact Us</a>
    </nav>
    <div class="container">
        <div class="banner"></div>
        <div class="form-section">
            <h2>Bulk Order Form</h2>
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Your Email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" placeholder="Your Phone Number">
                </div>
                <div class="form-group">
                    <label for="product-code">Product Code</label>
                    <input type="text" id="product-code" placeholder="Product Code">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity" placeholder="Quantity">
                </div>
                <div class="form-group">
                    <label for="special-requests">Special Requests</label>
                    <textarea id="special-requests" rows="4" placeholder="Any special requests..."></textarea>
                </div>
                <button type="submit">Submit Order</button>
            </form>
        </div>
    </div>
    <footer>
        <p>Contact us at info@lightmakers.com.sg | Follow us on social media</p>
    </footer>
</body>
</html>