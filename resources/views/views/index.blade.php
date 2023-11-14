<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eden Kite - Overview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/main.css') }}">
</head>
<body>
    <!-- Hero Section -->
    <div id="hero">
        <div class="hero-container">
            <img src="{{ asset('img/background.jpg') }}" alt="">
            <div class="hero-wrap">
                <div>
                    <a href="/logout" class="logout-btn" type="button">Log-out</a>
                    <div class="hero-nav">
                        <li class="nav-list"><a href="overview.html" data-after="Overview" style="color: rgb(255, 226, 99);">Overview</a></li>
                        <li class="nav-list"><a href="/todo" data-after="To-Do">To-Do</a></li>
                    </div>
                </div>
                <div class="hero-content">
                    <div class="hero-content-wrap">
                        <div class="hero-title"><a href="home.html"><h1>Eden Kite</h1></a></div>
                        <div class="hero-info">
                            <p><span>Info: </span>A company founded by the <span>Raijin Sect</span>, in order to provide jobs for countless people in need. The objective is to light the dying spark of jobless people, giving them the hope to make themselves better. <span>Eden Kite</span> introduced a <a class="info-todo" href="todo.html"><span>To-Do</span></a> Website Application for freelancers to maintain their consistency, and to become more progressive by calculating their task time and efficiency</p>
                        </div>
                        <div class="hero-link"><a href="home.html">Let's get started!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro Section -->
    <div id="intro">
        <div class="intro-container">
            <div class="intro-wrapper">
                <p class="intro-par"><span>Eden Kite</span> animi in aliquid omnis assumenda doloremque tempore, dignissimos ad neque, dicta consequatur soluta eius deleniti harum hic maxime esse voluptate quisquam? Veritatis reiciendis, officiis animi tenetur ut quo amet consequatur fuga at molestias tempore! Iusto, fugit eveniet? Deserunt labore provident et, illum maiores ipsa quibusdam rerum eos fugiat tenetur veniam, itaque, consectetur accusantium temporibus similique voluptas unde esse nobis! Facilis doloribus tempora reiciendis odio minima voluptate temporibus sint culpa in quos?</p>
                <p class="intro-par"><span>Eden Kite</span> corporis, quisquam repellendus animi consequatur ipsam possimus beatae aut amet debitis nam, officia itaque ea voluptatum repellat expedita ex quae alias veniam laboriosam illum iste. Ut explicabo temporibus eos commodi quaerat maiores quos, doloremque adipisci numquam, nesciunt qui laborum totam neque, voluptate eaque rem! Velit in neque, cum dolorem atque sequi!</p>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div id="footer">
        <div class="footer-container">
            <div class="footer-wrapper">
                <p class="footer-content">©2023 Eden Kite. All rights reserved.</p>
                <p class="footer-content">KodeGo Capstone.To-Do Web App</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
