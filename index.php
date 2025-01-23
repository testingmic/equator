<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon - Equator Commodities</title>
    <!-- heatmap.com snippet -->
    <script>
    (function() {      
        var _heatmap_paq = window._heatmap_paq || [];
        var heatUrl = window.heatUrl = "https://dashboard.heatmap.com/";
        function heatLoader(url, item) {
        if(typeof handleSinglePagedWebsite !== 'undefined' && item == 'prep') return true;
        var s = document.createElement("script"); s.type = "text/javascript"; 
        s.src = url; s.async = false; s.defer = true; document.head.appendChild(s);
        }
        heatLoader(heatUrl+"preprocessor.min.js?sid=2785", "prep");
        setTimeout(function() {
        if(typeof _heatmap_paq !== "object" || _heatmap_paq.length == 0) {     
            _heatmap_paq.push(["setTrackerUrl", heatUrl+"heatmap.php"]);
            heatLoader(heatUrl+"heatmap-light.min.js?sid=2785", "heat");
        }
        }, 1000);
    })();
    </script>
    <!-- End heatmap.com snippet Code -->
    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 20vh;
        }
        .container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            width: 90%;
            margin-top: -5vh;
            max-width: 800px;
        }
        h1 {
            color: #2c3e50;
            font-size: 2.5rem;
        }
        h1.title {
            font-size: 3rem;
            border-bottom: solid 1px #000;
            color: #3498db;
            font-family: 'Courier New', Courier, monospace;
        }
        p {
            line-height: 1.6;
            font-size: 1.1rem;
        }
        .contact-info {
            margin-top: 2rem;
        }
        .contact-info p {
            margin: 0.5rem 0;
        }
        a {
            color: #3498db;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .loader-container {
            margin-top: 2rem;
            max-width: 100%;
            text-align: center;
        }
        .loader {
            position: relative;
            width: 100%;
            height: 30px;
            background-color: #e0e0e0;
            border-radius: 15px;
            overflow: hidden;
        }
        .loader-bar {
            position: absolute;
            height: 100%;
            width: 80%; /* 80% progress */
            background-color: #4caf50;
            transition: width 0.5s ease-in-out;
        }
        .loader-text {
            margin-top: 10px;
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">EQUATOR COMMODITIES</h1>
        <h1>Website Under Construction</h1>
        <p>We're working hard to bring you an amazing website. Stay tuned!</p>
        <div class="contact-info">
            <!-- <p><strong>GPS Address:</strong> GA-247-7927</p> -->
            <p><strong>Email:</strong> <a href="mailto:info@equatorcommoditiesgh.com">info@equatorcommoditiesgh.com</a></p>
        </div>
        <div class="loader-container">
            <div class="loader">
                <div class="loader-bar"></div>
            </div>
            <div class="loader-text">Loading... 80%</div>
        </div>
    </div>
</body>
</html>
