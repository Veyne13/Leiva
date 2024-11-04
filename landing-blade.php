<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LeivaDoc - Next-Gen Document Creation & Automation SaaS</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
        /* Base Styling */
        body {
            background-color: #f3f4f6;
            color: #333;
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(to right, rgba(0, 123, 255, 0.85), rgba(123, 31, 162, 0.85)), url('https://example.com/hero-bg.jpg') no-repeat center center;
            background-size: cover;
            color: #ffffff;
            padding: 3rem 2rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 60vh;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .hero h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
        }

        .hero p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            font-weight: 400;
            max-width: 600px;
            line-height: 1.6;
        }

        /* Hero Content Box */
        .hero-content-box {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 0.5rem;
            padding: 2rem;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-top: 1.5rem;
            text-align: left;
        }

        .hero-content-box img {
            width: 150px;
            height: auto;
            border-radius: 0.5rem;
            object-fit: cover;
        }

        .hero-content-box-text {
            font-size: 1rem;
            color: #333;
            line-height: 1.6;
        }

        /* Subscription Button */
        .subscribe-button {
            background: linear-gradient(to right, #007bff, #7b1fa2);
            color: #ffffff;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 0.5rem;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            display: inline-block;
            margin-top: 1rem;
        }

        .subscribe-button:hover {
            background: linear-gradient(to right, #0056b3, #5a1483);
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        /* Key Features Section */
        .features-section {
            padding: 3rem 2rem;
            background-color: #ffffff;
            text-align: center;
        }

        .features-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 2rem;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature {
            background: #f9f9f9;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            text-align: left;
        }

        .feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        .feature img {
            max-width: 80px;
            margin-bottom: 1rem;
            filter: grayscale(100%);
            transition: all 0.3s ease;
        }

        .feature:hover img {
            filter: none;
        }

        .feature h3 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .feature p {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Welcome to LeivaDoc</h1>
        <p>Your go-to solution for AI Document Generation & Automation - Create 30 pages documents from scratch & make your workflow faster and smarter.</p>
        
        <!-- Content Box with Image and Text -->
        <div class="hero-content-box">
            <img src="img/landingdesign.jpg" alt="LeivaDoc preview">
            <div class="hero-content-box-text">
                <p>Create beautiful ebooks from scratch, with a prompt. 
                    Unlock powerful tools for creating, automating, and monetizing your documents such as commercial proposals, contracts, presentations, all in one platform.</p>
                <a href="https://k06d07lvz3p.typeform.com/to/wYJPeJvS" target="_blank" class="subscribe-button">Get Early Access</a>
            </div>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="features-section">
        <h2>Core Features in Development</h2>
        <div class="features">
            <div class="feature">
                <img src="img/Generation.webp" alt="Document Generation">
                <h3>Document Generation</h3>
                <p>Create up to 30-page documents in seconds, tailored to your needs and industry standards.</p>
            </div>
            <div class="feature">
                <img src="img/Automation.webp" alt="Automation">
                <h3>Smart Automation</h3>
                <p>Automate document workflows to save time and focus on what truly matters.</p>
            </div>
            <div class="feature">
                <img src="img/Marketing.webp" alt="Marketing Tool">
                <h3>Marketing Tools</h3>
                <p>Leverage documents as marketing assets to promote your services and engage clients.</p>
            </div>
            <div class="feature">
                <img src="img/Templates.webp" alt="Templates">
                <h3>Access Pre-Defined Templates</h3>
                <p>Use ready-made templates for contracts, proposals, and business documents to accelerate your work.</p>
            </div>
        </div>
    </section>

</body>
</html>
