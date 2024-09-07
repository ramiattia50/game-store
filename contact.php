<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - GamingMP</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0a0b1e;
            color: #fff;
            margin: 0;
        }
        /* Header */
        header {
            background: linear-gradient(90deg, #1c1e36, #232538);
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #02b3e4;
        }
        h1 {
            font-size: 3em;
            color: #02b3e4;
            letter-spacing: 1px;
            text-shadow: 0 0 10px #02b3e4;
        }
        /* Container */
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #13152b;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
        h2 {
            font-size: 2em;
            color: #02b3e4;
            margin-bottom: 20px;
            border-bottom: 3px solid #02b3e4;
            padding-bottom: 10px;
            text-transform: uppercase;
        }
        p {
            font-size: 1.2em;
            line-height: 1.8;
            color: #d4d4d4;
        }
        /* Contact Info */
        .contact-info {
            display: flex;
            justify-content: space-around;
            margin-bottom: 40px;
        }
        .contact-info div {
            background-color: #1f2235;
            padding: 30px;
            border-radius: 10px;
            width: 30%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }
        .contact-info div:hover {
            transform: translateY(-10px);
        }
        .contact-info i {
            font-size: 2.5em;
            color: #02b3e4;
            margin-bottom: 20px;
        }
        .contact-info a {
            text-decoration: none;
            color: #02b3e4;
            font-weight: bold;
        }
        .contact-info a:hover {
            color: #04d4ff;
        }
        /* Back Button */
        .back-btn {
            display: block;
            width: 200px;
            margin: 0 auto;
            padding: 15px;
            background: linear-gradient(90deg, #02b3e4, #04d4ff);
            color: #fff;
            border: none;
            border-radius: 50px;
            text-align: center;
            font-size: 1.2em;
            text-transform: uppercase;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        .back-btn:hover {
            background: linear-gradient(90deg, #04d4ff, #02b3e4);
        }
        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #1c1e36;
            color: #aaa;
            margin-top: 50px;
            font-size: 0.9em;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>

    <div class="container">
        <h2>Let's Get in Touch</h2>
        <p>Reach out to us through any of the following methods. Whether you want to email us, give us a call, or visit our location, we're here to assist you.</p>

        <div class="contact-info">
            <div>
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p><a href="ramiattia15@gmail.com">GamingMP@gamingmp.com</a></p>
            </div>
            <div>
                <i class="fas fa-phone"></i>
                <h3>Phone</h3>
                <p><a href="tel:+216 28592534">+216 25 888 812</a></p>
            </div>
            <div>
                <i class="fas fa-map-marker-alt"></i>
                <h3>Visit Us</h3>
                <p>32 Rue de File Tunis, Tunisia </p>
            </div>
        </div>

        <a href="home pg.php" class="back-btn">Back to Home</a>
    </div>

    <footer>
        <p>© 2024 GamingMP. All Rights Reserved.</p>
    </footer>

    <!-- FontAwesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
